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
       * keys are list slugs, e.g. "newsletter-subscribers".
       * used to lookup the sendgrid list Ids needed when posting to their API.
       */
      Fb.create('lists', T.IntType.create())
        .asAMap()
        .build(),
      /*
       * Visual layout for the email. e.g. "breaking-news", "exclusive-video".
       */
      Fb.create('template', T.StringType.create())
        .format(Format.SLUG)
        .build(),
      Fb.create('sender', T.IntType.create())
        .build(),
      /*
       * also called as unsubscribe list ID, sendgrid specifically calls this list as suppression list
       */
      Fb.create('suppression_group_id', T.IntType.create())
        .build(),
    ];
  }
}
