// @link http://schemas.triniti.io/json-schema/triniti/curator/slot/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder.js';
import Format from '@gdbots/pbj/enums/Format.js';
import Message from '@gdbots/pbj/Message.js';
import MessageRef from '@gdbots/pbj/well-known/MessageRef.js';
import Schema from '@gdbots/pbj/Schema.js';
import SlotRendering from '@triniti/schemas/triniti/curator/enums/SlotRendering.js';
import T from '@gdbots/pbj/types/index.js';

export default class SlotV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        /*
         * The name of the location where the widget should render,
         * e.g. "sidebar", "html-head" or "jumbotron-top".
         */
        Fb.create('name', T.StringType.create())
          .format(Format.SLUG)
          .build(),
        /*
         * A reference to the widget this slot will render.
         */
        Fb.create('widget_ref', T.NodeRefType.create())
          .build(),
        Fb.create('rendering', T.StringEnumType.create())
          .withDefault(SlotRendering.LAZY)
          .classProto(SlotRendering)
          .build(),
      ],
      this.MIXINS,
    );
  }

  /**
   * @param {?string} tag
   * @returns {MessageRef}
   */
  generateMessageRef(tag = null) {
    return new MessageRef(this.schema().getCurie(), this.generateEtag(), tag);
  }
  
  /**
   * @returns {Object}
   */
  getUriTemplateVars() {
    return {};
  }
}

const M = SlotV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:triniti:curator::slot:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'triniti:curator::slot';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'triniti:curator::slot:v1';
M.prototype.MIXINS = M.MIXINS = [];

Object.freeze(M);
Object.freeze(M.prototype);
