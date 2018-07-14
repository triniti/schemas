import test from 'tape';
import RedirectId from '@triniti/schemas/triniti/sys/RedirectId';


test('RedirectId tests[empty character will throw an error]', (t) => {
  t.throws(() => RedirectId.fromUri(''));
  t.end();
});


test('RedirectId tests', (t) => {
  const urls = [
    { output: 'cG9zdC9yZWluZGV4LyMvJCQlIQ', input: 'post/reindex/#/$$%!' },
    { output: 'L3VuaWNvZGUvZmFrZS9wYXJ0aWFsL3VybA', input: '/unicode/fake/partial/url' },
    { output: 'RVJUIUAjJCVeLw', input: 'ERT!@#$%^/' },
    { output: 'aHR0cHM6Ly90ZXN0LmNvbS9BYUJjZEMxMjNmZzIzR1JyLw', input: 'https://test.com/AaBcdC123fg23GRr/' },
    { output: 'aHR0cHM6Ly90ZXN0LmNvbS9hYmNkZWZnaHl1b2kvaGtmaGRmZHM', input: 'https://test.com/abcdefghyuoi/hkfhdfds' },
    { output: 'JiYmJiYqKioqKioqLy8vLy8vXl5eXl5eXl4', input: '&&&&&*******//////^^^^^^^^' },
    { output: 'L3BhZ2UvMS8yLw', input: '/page/1/2/' },
    { output: 'cG9zdC8xMjMvIT1hQmNkRWZHPw', input: 'post/123/!=aBcdEfG?' },
  ];

  urls.forEach((url) => {
    const id = RedirectId.fromUri(url.input);
    t.true(id instanceof RedirectId);
    t.same(url.output, id.toString(), 'same value');
  });

  t.end();
});
