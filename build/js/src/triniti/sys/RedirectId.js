import Base64 from 'base-64';
import utf8 from 'utf8';

import Identifier from '@gdbots/pbj/well-known/Identifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';
import RedirectV1Mixin from './mixin/redirect/RedirectV1Mixin';

/** @type {SchemaQName} */
let qname;

const urlsafeB64Encode = input => Base64.encode(utf8.encode(input))
  .replace(/\+/g, '-')
  .replace(/\//g, '_')
  .replace(/=+$/, '');

/* eslint-disable no-mixed-operators */
/* eslint-disable no-useless-escape */
const urlsafeB64Decode = input => utf8.decode(Base64.decode(
  input + Array(5 - input.length % 4).join('=')
    .replace(/\-/g, '+')
    .replace(/\_/g, '/')));

/**
 * A redirect id is a URL safe base64 encoded string.
 * The string is case sensitive.
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
    return RedirectId.fromString(urlsafeB64Encode(str));
  }

  toUri() {
    try {
      return urlsafeB64Decode(this.toString());
    } catch (e) {
      return this.toString();
    }
  }
}
