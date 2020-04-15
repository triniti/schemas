// @link http://schemas.triniti.io/json-schema/triniti/curator/slot/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Message from '@gdbots/pbj/Message';
import MessageRef from '@gdbots/pbj/MessageRef';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import Schema from '@gdbots/pbj/Schema';
import SlotRendering from '@triniti/schemas/triniti/curator/enums/SlotRendering';
import T from '@gdbots/pbj/types';

export default class SlotV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:curator::slot:1-0-0', SlotV1,
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
        Fb.create('widget_ref', T.IdentifierType.create())
          .classProto(NodeRef)
          .build(),
        Fb.create('rendering', T.StringEnumType.create())
          .withDefault(SlotRendering.LAZY)
          .classProto(SlotRendering)
          .build(),
      ],
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

MessageResolver.register('triniti:curator::slot', SlotV1);
Object.freeze(SlotV1);
Object.freeze(SlotV1.prototype);