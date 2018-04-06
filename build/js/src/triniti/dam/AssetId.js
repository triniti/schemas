import AssertionFailed from '@gdbots/pbj/exceptions/AssertionFailed';
import Identifier from '@gdbots/pbj/well-known/Identifier';
import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import ArchiveAssetV1Mixin from './mixin/archive-asset/ArchiveAssetV1Mixin';
import AudioAssetV1Mixin from './mixin/audio-asset/AudioAssetV1Mixin';
import CodeAssetV1Mixin from './mixin/code-asset/CodeAssetV1Mixin';
import DocumentAssetV1Mixin from './mixin/document-asset/DocumentAssetV1Mixin';
import ImageAssetV1Mixin from './mixin/image-asset/ImageAssetV1Mixin';
import VideoAssetV1Mixin from './mixin/video-asset/VideoAssetV1Mixin';
import UnknownAssetV1Mixin from './mixin/unknown-asset/UnknownAssetV1Mixin';

/**
 * Regular expression pattern for matching a valid AssetId string.
 * @type {RegExp}
 */
export const VALID_PATTERN = /^([a-z0-9]{1,12})_([a-z0-9]{1,10})_([0-9]{8})_([a-f0-9]{32})$/;

/**
 * An asset id is a composite id that contains enough data to easily
 * generate asset paths, urls and distribute assets in storage.
 *
 * AssetId Format:
 *  type_ext_yyyymmdd_uuid
 *
 * Formats:
 *  TYPE: [a-z0-9]{1,12}    generally one of: image, video, document, audio, unknown
 *  DATE: [0-9]{8}          YYYYMMDD, e.g. 20151201
 *  EXT:  [a-z0-9]{1,10}    jpg, gif, mp4, pdf
 *  UUID: [a-z0-9]{32}      v4 or v5 uuid is recommended - no dashes
 *
 * Examples:
 *  image_jpg_20151201_27ca03c7b490460992a78692aca42b10
 *  video_mp4_20151201_27ca03c7b490460992a78692aca42b10
 *  document_pdf_20151201_27ca03c7b490460992a78692aca42b10
 *
 */
export default class AssetId extends Identifier {
  /**
   * @param {string} type
   * @param {string} ext
   * @param {string} date
   * @param {string} uuid
   */
  constructor(type, ext, date, uuid) {
    const value = `${type}_${ext}_${date}_${uuid}`;
    super(value);

    this.type = type;
    this.ext = ext;
    this.date = date;
    this.uuid = uuid;

    if (!VALID_PATTERN.test(this.value)) {
      throw new AssertionFailed(
        `AssetId [${this.value}] is invalid. It must match the pattern [${VALID_PATTERN}].`,
      );
    }

    Object.freeze(this);
  }

  /**
   * @param {string} value
   *
   * @returns {AssetId}
   */
  static fromString(value) {
    return new AssetId(...value.split('_'));
  }

  /**
   * @param {string}          type - The primary type for this asset. e.g. image, video, audio.
   * @param {string}          ext  - Extension of the asset.  jpg, gif, mp4, txt, pdf
   * @param {?Date}           date
   * @param {?UuidIdentifier} uuid - Uuid for the asset, if not supplied a v4 uuid will be created.
   *
   * @returns {AssetId}
   */
  static create(type, ext, date = null, uuid = null) {
    const isoDate = (date || new Date()).toISOString().replace(/-/g, '').substr(0, 8);
    const uuidStr = `${uuid || UuidIdentifier.generate()}`.replace(/-/g, '').toLowerCase();
    return new AssetId(type, ext, isoDate, `${uuidStr}`);
  }

  /**
   * @returns {string}
   */
  getType() {
    return this.type;
  }

  /**
   * @returns {string}
   */
  getExt() {
    return this.ext;
  }

  /**
   * @param {boolean} asObject - Return the date as a Date object instead of Ymd string.
   *
   * @returns {Date|string}
   */
  getDate(asObject = false) {
    if (asObject) {
      const y = Number(this.date.substr(0, 4));
      const m = Number(this.date.substr(4, 2));
      const d = Number(this.date.substr(6, 2));
      return new Date(Date.UTC(y, m - 1, d));
    }

    return this.date;
  }

  /**
   * @param {boolean} asObject - Returns the uuid as a UuidIdentifier instead of formatted uuid string (all lowercase, no dashes)
   *
   * @returns {Identifier|UuidIdentifier|string}
   */
  getUuid(asObject = false) {
    if (asObject) {
      return UuidIdentifier.fromString(this.uuid.replace(/^(\w{8})(\w{4})(\w{4})(\w{4})(\w{12})$/, '$1-$2-$3-$4-$5'));
    }

    return this.uuid;
  }

  /**
   * Returns a path to this asset for the given version/quality.  The version and quality are completely arbitrary
   * and up to the consumer of this class.  Typically your "version" would indicate thumbnail size or format of
   * video, etc. and the quality would clarify it further.
   *
   * For example, for the asset id 'image_jpg_20151201_27ca03c7b490460992a78692aca42b10'
   *  assetId.toFilePath('250x', 'n')
   * would return:
   *  'image/27/250x/2015/12/01/27ca03c7b490460992a78692aca42b10_n.jpg'
   *
   * @param {?string} version - An identifier for the version, e.g. "o" for original or "250x" for a thumbnail size.
   * @param {?string} quality - If applicable, a quality setting like "n" for normal or "high", "low", etc.
   *
   * @returns {string}
   */
  toFilePath(version = null, quality = null) {
    const p = [this.type, this.uuid.substr(0, 2)];

    if (version) {
      p.push(version);
    }

    p.push(this.date.substr(0, 4));
    p.push(this.date.substr(4, 2));
    p.push(this.date.substr(6, 2));
    p.push(this.uuid);

    if (quality) {
      return `${p.join('/')}_${quality}.${this.ext}`;
    }

    return `${p.join('/')}.${this.ext}`;
  }

  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    switch (this.type) {
      case 'archive':
        return new NodeRef(ArchiveAssetV1Mixin.findOne().getQName(), this.value);

      case 'audio':
        return new NodeRef(AudioAssetV1Mixin.findOne().getQName(), this.value);

      case 'code':
        return new NodeRef(CodeAssetV1Mixin.findOne().getQName(), this.value);

      case 'document':
        return new NodeRef(DocumentAssetV1Mixin.findOne().getQName(), this.value);

      case 'image':
        return new NodeRef(ImageAssetV1Mixin.findOne().getQName(), this.value);

      case 'video':
        return new NodeRef(VideoAssetV1Mixin.findOne().getQName(), this.value);

      default:
        return new NodeRef(UnknownAssetV1Mixin.findOne().getQName(), this.value);
    }
  }
}
