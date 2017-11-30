// @link http://schemas.triniti.io/json-schema/triniti/videos/mixin/get-video-history-response/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class GetVideoHistoryResponseV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:videos:mixin:get-video-history-response:1-0-0');
  }
}
