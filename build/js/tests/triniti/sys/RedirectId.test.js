import test from 'tape';
import RedirectId from '@triniti/schemas/triniti/sys/RedirectId';


test('RedirectId tests[empty character will throw an error]', (t) => {
  t.throws(() => RedirectId.fromUri(''));
  t.end();
});


test('RedirectId tests', (t) => {
  const urls = [
    'post/reindex/#/$$%!',
    '/unicode/fake/partial/url',
    'https://test.com/unicode/characters',
    '5/2/3',
    'http://test.com/test/url/here',
    'test',
    'https://test.com/ABCDERT!@#$%^/',
    'https://test.com/AaBcdC123fg23GRr/',
    'https://test.com/abcdefghyuoi/hkfhdfds',
    '&&&&&*******//////^^^^^^^^',
    '/page/1/2/', 'post/123/!=aBcdEfG?',
  ];

  urls.forEach((url) => {
    const id = RedirectId.fromUri(url);
    const decodedUrl = id.toUri();
    t.true(id instanceof RedirectId);
    t.same(url, decodedUrl, 'same value after decode');
  });

  t.end();
});
