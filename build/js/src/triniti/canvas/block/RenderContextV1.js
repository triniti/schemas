// @link http://schemas.triniti.io/json-schema/triniti/canvas/block/render-context/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Message from '@gdbots/pbj/Message';
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
      ],
    );
  }
}

MessageResolver.register('triniti:canvas:block:render-context', RenderContextV1);
Object.freeze(RenderContextV1);
Object.freeze(RenderContextV1.prototype);
