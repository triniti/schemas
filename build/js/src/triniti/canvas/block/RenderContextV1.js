// @link http://schemas.triniti.io/json-schema/triniti/canvas/block/render-context/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Message from '@gdbots/pbj/Message';
import MessageRef from '@gdbots/pbj/MessageRef';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class RenderContextV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:triniti:canvas:block:render-context:1-0-0', RenderContextV1,
      [
        /*
         * The message (e.g. article) containing the blocks that are
         * being rendered. This is used by some block renderers when
         * it needs data from the container or to generate urls.
         */
        Fb.create('container', T.MessageType.create())
          .build(),
        /*
         * The platform the blocks are being rendered into, e.g.
         * web, amp, apple-news, facebook-instant-articles.
         */
        Fb.create('platform', T.StringType.create())
          .format(Format.SLUG)
          .withDefault("web")
          .build(),
        Fb.create('device_view', T.StringType.create())
          .format(Format.SLUG)
          .build(),
        /*
         * Refers to the location on the screen or application that
         * the blocks are being rendered into, e.g. "article-detail",
         * "blogroll", "modal", "jumbotron". Renderers can use this
         * to customize the output.
         */
        Fb.create('section', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        /*
         * A map to store config variables that can be used when
         * rendering blocks, e.g. ad_zone, sponsor.
         */
        Fb.create('config', T.StringType.create())
          .asAMap()
          .build(),
        /*
         * A map to store flags (booleans) that can be used when
         * rendering blocks. These are different from "config"
         * as they will always be booleans, e.g. disable_autoplay,
         * allowfullscreen, dnt (do not track).
         */
        Fb.create('flags', T.BooleanType.create())
          .asAMap()
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

MessageResolver.register('triniti:canvas:block:render-context', RenderContextV1);
Object.freeze(RenderContextV1);
Object.freeze(RenderContextV1.prototype);
