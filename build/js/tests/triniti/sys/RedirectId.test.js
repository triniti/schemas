import test from 'tape';
import RedirectId from '@triniti/schemas/triniti/sys/RedirectId';

test('RedirectId tests[empty character will throw an error]', (t) => {
  t.throws(() => RedirectId.fromUri(''));
  t.end();
});


test('RedirectId tests', (t) => {
  const urls = [
    { input: 'post/reindex/#/$$%!', output: 'cG9zdC9yZWluZGV4LyMvJCQlIQ' },
    { input: '/unicode/fake/partial/url', output: 'L3VuaWNvZGUvZmFrZS9wYXJ0aWFsL3VybA' },
    { input: 'ERT!@#$%^/', output: 'RVJUIUAjJCVeLw' },
    { input: 'https://test.com/AaBcdC123fg23GRr/', output: 'aHR0cHM6Ly90ZXN0LmNvbS9BYUJjZEMxMjNmZzIzR1JyLw' },
    { input: 'https://test.com/abcdefghyuoi/hkfhdfds', output: 'aHR0cHM6Ly90ZXN0LmNvbS9hYmNkZWZnaHl1b2kvaGtmaGRmZHM' },
    { input: '&&&&&*******//////^^^^^^^^', output: 'JiYmJiYqKioqKioqLy8vLy8vXl5eXl5eXl4' },
    { input: '/page/1/2/', output: 'L3BhZ2UvMS8yLw' },
    { input: 'post/123/!=aBcdEfG?', output: 'cG9zdC8xMjMvIT1hQmNkRWZHPw' },
    { input: '/2010/04/08/rimsho', output: 'LzIwMTAvMDQvMDgvcmltc2hv' },
    { input: '2010/04/08/rimsho/', output: 'MjAxMC8wNC8wOC9yaW1zaG8v' },
    { input: '/2010/04/08/rim', output: 'LzIwMTAvMDQvMDgvcmlt' },
    { input: '/blanche/brown/', output: 'L2JsYW5jaGUvYnJvd24v' },
    { input: '/blanche/brown/eee', output: 'L2JsYW5jaGUvYnJvd24vZWVl' },
    { input: '/blanc', output: 'L2JsYW5j' },
    { input: '/manila/blue?bl=ye', output: 'L21hbmlsYS9ibHVlP2JsPXll' },
  ];


  urls.forEach((url) => {
    const id = RedirectId.fromUri(url.input);
    t.true(id instanceof RedirectId);
    t.same(url.output, id.toString(), 'same value');
    t.same(url.input, id.toUri(), 'same value');
  });

  t.end();
});
