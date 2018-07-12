import { Base64 } from 'js-base64';

import Identifier from '@gdbots/pbj/well-known/Identifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import RedirectV1Mixin from './mixin/redirect/RedirectV1Mixin';

/** @type {SchemaQName} */
let qname;


const urlsafeB64Encode = input => Base64.encode(input)
  .replace(/\+/g, '-')
  .replace(/\//g, '_')
  .replace(/=+$/, '');

/* eslint-disable no-mixed-operators */
/* eslint-disable no-useless-escape */
const urlsafeB64Decode = input => Base64.decode(
  input + Array(5 - input.length % 4).join('=')
    .replace(/\-/g, '+')
    .replace(/\_/g, '/'));

/**
 * A redirect id is a friendly identifier.
 *
 */
export default class RedirectId extends Identifier {
  constructor(value) {
    super(value);
    Object.freeze(this);
  }

  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    if (!qname) {
      qname = RedirectV1Mixin.findOne().getQName();
    }

    return new NodeRef(qname, this.value);
  }

  static fromUri(str) {
    return super.fromString(urlsafeB64Encode(str));
  }

  static toUri(str) {
    return urlsafeB64Decode(str);
  }
}
