const env = process.env.BABEL_ENV || process.env.NODE_ENV || 'build';

const presets = [];
const plugins = [];

switch (env) {
  case 'cjs':
    presets.push([
      '@babel/preset-env',
      {
        targets: {
          node: 'current',
        },
        modules: 'commonjs',
        useBuiltIns: 'usage',
        corejs: 3,
      },
    ]);

    plugins.push([
      'babel-plugin-module-resolver',
      {
        root: ['./build/js/src'],
        alias: {
          '@wbeme/schemas': './build/js/src',
        },
      },
    ]);
    break;

  case 'build':
  default:
    presets.push([
      '@babel/preset-env',
      {
        targets: {
          node: 'current',
        },
        modules: false,
        useBuiltIns: 'usage',
        corejs: 3,
      },
    ]);

    plugins.push('lodash');
    plugins.push('./build/js/use-lodash-es');
    break;
}

module.exports = {
  presets,
  plugins,
};
