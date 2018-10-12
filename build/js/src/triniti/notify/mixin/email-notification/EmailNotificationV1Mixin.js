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
       * Keys are list slugs, e.g. "newsletter-subscribers" and values are sendgrid list ids.
       * @link https://sendgrid.api-docs.io/v3.0/contacts-api-lists/create-a-list
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
      /*
       * Sendgrid sender id.
       */
      Fb.create('sender', T.IntType.create())
        .build(),
    ];
  }
}
