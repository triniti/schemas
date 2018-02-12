// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/category-created/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class CategoryCreatedV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:taxonomy:mixin:category-created:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('node', T.MessageType.create())
        .required()
        .anyOfCuries([
          'triniti:taxonomy:mixin:category',
        ])
        .build(),
    ];
  }
}
