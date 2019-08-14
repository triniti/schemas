// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/block/1-0-1.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class BlockV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:block:1-0-1');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('etag', T.StringType.create())
        .maxLength(100)
        .pattern('^[\\w\\.:-]+$')
        .build(),
      /*
       * In rendering environments that support HTML the css_class
       * can be appended to the dom elements' class attribute.
       */
      Fb.create('css_class', T.StringType.create())
        .pattern('^[\\w\\s-]+$')
        .build(),
      /*
       * Represents an update that occurred on the node this block
       * is attached to. DOES NOT indicate an update to the block itself.
       * eg an article with a twitter block with updated_date means that
       * the article was updated to include that twitter block.
       */
      Fb.create('updated_date', T.DateTimeType.create())
        .build(),
      /*
       * When true it means this block represents a portion of a document
       * whose content is only indirectly related to the document's main content.
       * Asides are frequently presented as sidebars or call-out boxes.
       */
      Fb.create('aside', T.BooleanType.create())
        .build(),
    ];
  }
}
