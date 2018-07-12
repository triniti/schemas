import test from 'tape';
import RedirectId from '@triniti/schemas/triniti/sys/RedirectId';

test('RedirectId tests[empty character will throw an error]', (t) => {
  t.throws(function () {
    const url = '';
    RedirectId.fromUri(url);
  });

  t.end();
});

test('RedirectId tests[partial urls]', (t) => {
  const url = '/unicode/fake/partial/url';
  const id = RedirectId.fromUri(url);
  const decodedUrl = RedirectId.toUri(id.toString());

  t.true(id instanceof RedirectId);
  t.same(url, decodedUrl, 'same value after decode');

  t.end();
});

test('RedirectId tests[contains unicode characters]', (t) => {
  let url = 'https://test.com/unicode/characters/✓ à la mode';
  let id = RedirectId.fromUri(url);
  let decodedUrl = RedirectId.toUri(id.toString());

  t.true(id instanceof RedirectId);
  t.same(url, decodedUrl, 'same value after decode');

  url = '台北/Táiběi';
  id = RedirectId.fromUri(url);
  decodedUrl = RedirectId.toUri(id.toString());

  t.true(id instanceof RedirectId);
  t.same(url, decodedUrl, 'same value after decode');

  t.end();
});


test('RedirectId tests[complete url]', (t) => {
  const url = 'http://test.com/test/url/here';
  const id = RedirectId.fromUri(url);
  const decodedUrl = RedirectId.toUri(id.toString());

  t.true(id instanceof RedirectId);
  t.same(url, decodedUrl, 'same value after decode');

  t.end();
});

test('RedirectId tests[non url]', (t) => {
  const url = 'test';
  const id = RedirectId.fromUri(url);
  const decodedUrl = RedirectId.toUri(id.toString());

  t.true(id instanceof RedirectId);
  t.same(url, decodedUrl, 'same value after decode');

  t.end();
});

test('RedirectId tests[on different letter case]', (t) => {
  const url = 'https://test.com/AaBcdC123fg23GRr/';
  const id = RedirectId.fromUri(url);
  const decodedUrl = RedirectId.toUri(id.toString());

  t.true(id instanceof RedirectId);
  t.same(url, decodedUrl, 'same value after decode');

  t.end();
});


test('RedirectId tests[special chars]', (t) => {
  const url = '&&&&&*******//////^^^^^^^^';
  const id = RedirectId.fromUri(url);
  const decodedUrl = RedirectId.toUri(id.toString());

  t.true(id instanceof RedirectId);
  t.same(url, decodedUrl, 'same value after decode');

  t.end();
});

