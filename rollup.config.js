import scss from 'rollup-plugin-scss'
import { terser } from 'rollup-plugin-terser';

export default {
  input: './theme-src/js/index.js',
  output: {
    file: './theme/assets/script.min.js',
    format: 'iife',
  },
  plugins: [
    scss({ fileName: 'style.min.css', outputStyle: 'compressed' }),
    terser()
  ]
};