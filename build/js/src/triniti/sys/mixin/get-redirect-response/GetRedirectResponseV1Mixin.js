// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/get-redirect-response/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class GetRedirectResponseV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:sys:mixin:get-redirect-response:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('node', T.MessageType.create())
        .anyOfCuries([
          'triniti:sys:mixin:redirect',
        ])
        .build(),
      /*
       * The URL (absolute or relative on the current domain) that the redirect
       * resolves to which takes into account vanity url associations.
       */
      Fb.create('resolves_to', T.StringType.create())
        .build(),
    ];
  }
}
