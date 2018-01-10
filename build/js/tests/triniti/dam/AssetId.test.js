import test from 'tape';
import AssertionFailed from '@gdbots/pbj/exceptions/AssertionFailed';
import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import AssetId from '@triniti/schemas/triniti/dam/AssetId';

test('AssetId tests', (t) => {
  const id = AssetId.fromString('image_jpg_20151201_cb9c3c8c5c88453b960933a59ede6505');
  t.true(id instanceof AssetId);
  t.true(id.equals(AssetId.fromString(`${id}`)));
  t.same(id.getType(), 'image');
  t.same(id.getExt(), 'jpg');
  t.same(id.getDate(), '20151201');
  t.same(id.getDate(true), new Date(Date.UTC(2015, 11, 1)));
  t.same(id.getUuid(), 'cb9c3c8c5c88453b960933a59ede6505');
  t.true(id.getUuid(true).equals(UuidIdentifier.fromString('cb9c3c8c-5c88-453b-9609-33a59ede6505')));
  t.same(id.toFilePath(), 'image/cb/2015/12/01/cb9c3c8c5c88453b960933a59ede6505.jpg');
  t.same(id.toFilePath('o'), 'image/cb/o/2015/12/01/cb9c3c8c5c88453b960933a59ede6505.jpg');

  try {
    id.test = 1;
    t.fail('id instance is mutable');
  } catch (e) {
    t.pass('id instance is immutable');
  }

  t.end();
});


test('AssetId create tests', (t) => {
  const date = new Date(Date.UTC(2015, 11, 1));
  const uuid = UuidIdentifier.fromString('cb9c3c8c-5c88-453b-9609-33a59ede6505');
  const id = AssetId.create('image', 'jpg', date, uuid);
  t.true(id instanceof AssetId);
  t.true(id.equals(AssetId.fromString(`${id}`)));
  t.same(id.getType(), 'image');
  t.same(id.getExt(), 'jpg');
  t.same(id.getDate(), '20151201');
  t.same(id.getDate(true), new Date(Date.UTC(2015, 11, 1)));
  t.same(id.getUuid(), 'cb9c3c8c5c88453b960933a59ede6505');
  t.true(id.getUuid(true).equals(UuidIdentifier.fromString('cb9c3c8c-5c88-453b-9609-33a59ede6505')));
  t.same(id.toFilePath(), 'image/cb/2015/12/01/cb9c3c8c5c88453b960933a59ede6505.jpg');
  t.same(id.toFilePath('250x', 'n'), 'image/cb/250x/2015/12/01/cb9c3c8c5c88453b960933a59ede6505_n.jpg');

  t.end();
});


test('AssetId generate tests', (t) => {
  const date = new Date();
  const id = AssetId.create('image', 'jpg');
  const uuid = id.getUuid(true).toString().replace(/-/g, '');
  t.true(id instanceof AssetId);
  t.true(id.equals(AssetId.fromString(`${id}`)));
  t.same(id.getType(), 'image');
  t.same(id.getExt(), 'jpg');
  t.same(id.getDate(), date.toISOString().replace(/-/g, '').substr(0, 8));
  t.true(id.getUuid(true) instanceof UuidIdentifier);
  t.same(
      id.toFilePath(),
      `image/${uuid.toString().substr(0, 2)}/${date.toISOString().replace(/-/g, '/').substr(0, 10)}/${uuid}.jpg`
  );

  t.end();
});


test('AssetId invalid tests', (t) => {
  const invalid = [
    'test::what',
    'superlongtype_reallylongextension_invaliduuid',
    'image_jpg_invaliduuid',
    '__cb9c3c8c-5c88-453b-9609-33a59ede6505',
    '__cb9c3c8c5c88453b960933a59ede6505',
    'john@doe.com',
    '#hashtag',
    'http://www.what.com/',
    'test.value:2015/01/01/test:what',
    'cool~topic',
    'some:thin!@##$%$%&^^&**()-=+',
    'some:test%20',
  ];

  invalid.forEach((v) => {
    try {
      AssetId.fromString(v);
      t.fail(`AssetId created with invalid value [${v}]`);
    } catch (e) {
      t.true(e instanceof AssertionFailed, 'Exception MUST be an instanceOf AssertionFailed');
      t.pass(e.message);
    }
  });

  t.end();
});
