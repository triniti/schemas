import test from 'tape';
import isPlainObject from 'lodash/isPlainObject';
import Message from '@gdbots/pbj/Message';
import MessageRef from '@gdbots/pbj/MessageRef';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import '@gdbots/schemas';

test('Can create all messages', (t) => {
  MessageResolver.all().forEach((classProto) => {
    const message = classProto.create();
    t.true(message instanceof Message, `Unable to create [${classProto.schema().getId()}].`);

    const ref = message.generateMessageRef('tag');
    t.true(ref instanceof MessageRef, `Failed to generateMessageRef for [${classProto.schema().getId()}].`);
    t.same(`${ref}`, `${message.generateMessageRef('tag')}`);

    t.true(isPlainObject(message.getUriTemplateVars()), `getUriTemplateVars from [${classProto.schema().getId()}] is not an object.`);
  });

  t.end();
});
