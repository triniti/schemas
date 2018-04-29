// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/suggest-hashtags-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class SuggestHashtagsRequestV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:taxonomy:mixin:suggest-hashtags-request:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('prefix', T.StringType.create())
        .build(),
      /*
       * The number of results to return.
       */
      Fb.create('count', T.TinyIntType.create())
        .withDefault(25)
        .build(),
    ];
  }
}
