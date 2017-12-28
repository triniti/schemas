// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-marked-as-draft/1-0-0.json#
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';

export default class PollMarkedAsDraftV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:apollo:mixin:poll-marked-as-draft:1-0-0');
  }
}
