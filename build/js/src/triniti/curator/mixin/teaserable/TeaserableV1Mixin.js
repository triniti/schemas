// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/teaserable/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class TeaserableV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:curator:mixin:teaserable:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * Determines the sequence that this teaserable node will be rendered
       * in lists, search results, etc. It DOES NOT control visibility or
       * publishing. A date was used over an integer (e.g. seq_no) for
       * blog-like, reverse chronological, clarity in sorting.
       */
      Fb.create('order_date', T.DateTimeType.create())
        .build(),
    ];
  }
}
