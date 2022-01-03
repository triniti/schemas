// @link http://schemas.triniti.io/json-schema/triniti/common/render-context/1-0-1.json#
import Fb from '@gdbots/pbj/FieldBuilder.js';
import Format from '@gdbots/pbj/enums/Format.js';
import Message from '@gdbots/pbj/Message.js';
import MessageRef from '@gdbots/pbj/well-known/MessageRef.js';
import Schema from '@gdbots/pbj/Schema.js';
import T from '@gdbots/pbj/types/index.js';

export default class RenderContextV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        Fb.create('cache_enabled', T.BooleanType.create())
          .withDefault(true)
          .build(),
        /*
         * Number of seconds the rendered output can be cached, if
         * the cache_enabled field is true. Zero means cache indefinitely.
         */
        Fb.create('cache_expiry', T.MediumIntType.create())
          .withDefault(300)
          .build(),
        /*
         * A message (e.g. article) where the rendering is taking place.
         * This is used by some renderers when it needs data from the
         * container or to generate urls.
         */
        Fb.create('container', T.MessageType.create())
          .build(),
        /*
         * The platform the rendering is happening in, e.g.
         * web, amp, apple-news, facebook-instant-articles.
         */
        Fb.create('platform', T.StringType.create())
          .format(Format.SLUG)
          .withDefault("web")
          .build(),
        Fb.create('device_view', T.StringType.create())
          .format(Format.SLUG)
          .build(),
        Fb.create('viewer_country', T.StringType.create())
          .pattern('^[A-Z]{2}$')
          .build(),
        /*
         * The promotion_slot the rendering is happening in, e.g.
         * desktop-home-sidebar or smartphone-global-html-head.
         */
        Fb.create('promotion_slot', T.StringType.create())
          .format(Format.SLUG)
          .build(),
        /*
         * Refers to the location on the screen or application that
         * the rendering is happening in, e.g. "article-detail",
         * "blogroll", "modal", "jumbotron". Renderers can use this
         * to customize the output.
         */
        Fb.create('section', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        /*
         * The format to be used for rendering, e.g. "html" or "json".
         */
        Fb.create('format', T.StringType.create())
          .format(Format.SLUG)
          .build(),
        Fb.create('booleans', T.BooleanType.create())
          .asAMap()
          .build(),
        Fb.create('floats', T.FloatType.create())
          .asAMap()
          .build(),
        Fb.create('ints', T.IntType.create())
          .asAMap()
          .build(),
        Fb.create('strings', T.StringType.create())
          .asAMap()
          .build(),
        Fb.create('trinaries', T.TrinaryType.create())
          .asAMap()
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

const M = RenderContextV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:triniti:common::render-context:1-0-1';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'triniti:common::render-context';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'triniti:common::render-context:v1';
M.prototype.MIXINS = M.MIXINS = [];

Object.freeze(M);
Object.freeze(M.prototype);
