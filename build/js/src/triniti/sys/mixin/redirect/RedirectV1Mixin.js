// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/redirect/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import RedirectId from '@triniti/schemas/triniti/sys/RedirectId';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class RedirectV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:sys:mixin:redirect:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('_id', T.IdentifierType.create())
        .required()
        .classProto(RedirectId)
        .overridable(true)
        .build(),
      /*
       * The URL (absolute or relative on the current domain) that the incoming URI
       * should be redirected to.
       */
      Fb.create('redirect_to', T.StringType.create())
        .build(),
      /*
       * When permanent, the HTTP status code should be a 301 and 302 otherwise.
       */
      Fb.create('is_permanent', T.BooleanType.create())
        .build(),
      /*
       * Vanity URLs are used for on-air or promotional purposes and are generally
       * off the root and very short, e.g. /tour or /christmas
       */
      Fb.create('is_vanity', T.BooleanType.create())
        .build(),
    ];
  }
}
