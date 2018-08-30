// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/search-pages-response/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Mixin from '@gdbots/pbj/Mixin';
import SchemaId from '@gdbots/pbj/SchemaId';
import T from '@gdbots/pbj/types';

export default class SearchPagesResponseV1Mixin extends Mixin {
  /**
   * @returns {SchemaId}
   */
  getId() {
    return SchemaId.fromString('pbj:triniti:canvas:mixin:search-pages-response:1-0-0');
  }

  /**
   * @returns {Field[]}
   */
  getFields() {
    return [
      Fb.create('nodes', T.MessageType.create())
        .asAList()
        .anyOfCuries([
          'triniti:canvas:mixin:page',
        ])
        .build(),
    ];
  }
}