// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/email-notification/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class EmailNotificationV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:notify:mixin:email-notification:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      /*
       * A set of list ids that this email notification should be sent to.
       * e.g. "sports-fans", "foodies" or "chud".
       */
      Fb.create('lists', T.StringType.create())
        .asASet()
        .format(Format.SLUG)
        .build(),
      /*
       * Visual layout for the email. e.g. "breaking-snooze", "exclusive-video".
       */
      Fb.create('template', T.StringType.create())
        .format(Format.SLUG)
        .build(),
    ];
  }
}
