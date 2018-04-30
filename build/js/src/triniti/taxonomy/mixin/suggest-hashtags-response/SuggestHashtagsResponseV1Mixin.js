// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/suggest-hashtags-response/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class SuggestHashtagsResponseV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:taxonomy:mixin:suggest-hashtags-response:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * How long in milliseconds it took to run the query.
       */
      Fb.create('time_taken', T.MediumIntType.create())
        .build(),
      Fb.create('hashtags', T.StringType.create())
        .asAList()
        .format(Format.HASHTAG)
        .build(),
    ];
  }
}
