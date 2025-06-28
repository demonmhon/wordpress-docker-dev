import scss from 'rollup-plugin-scss'
import terser from '@rollup/plugin-terser';
import postcss from 'postcss';
import autoprefixer from 'autoprefixer';

export default {
  input: './src/js/index.js',
  output: {
    file: './wp-content-theme/assets/script.min.js',
    format: 'iife',
    sourcemap: true
  },
  plugins: [
    scss({
      fileName: 'style.min.css',
      outputStyle: 'compressed',
      processor: () => postcss([autoprefixer()]),
      watch: ['./src/scss']
    }),
    terser()
  ]
};