// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/redirect/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
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
        .withDefault(() => RedirectId.generate())
        .classProto(RedirectId)
        .overridable(true)
        .build(),
      /*
       * Redirect URI field is a string in url format that represents the redirect uri.
       */
      Fb.create('redirect_uri', T.StringType.create())
        .format(Format.URL)
        .build(),
      /*
       * Request URI field is a string in url format that represents the request uri.
       */
      Fb.create('request_uri', T.StringType.create())
        .format(Format.URL)
        .build(),
    ];
  }
}
