import Enum from '@gdbots/common/Enum';

export default class AssetMimeTypes extends Enum {
}

AssetMimeTypes.configure({
  AUDIO: 'audio',
  DOCUMENT: 'document',
  IMAGE: 'image',
  TEXT: 'text',
  UNKNOWN: 'unknown',
  VIDEO: 'video',
}, 'triniti:dam:asset-mime-types');
