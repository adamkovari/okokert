module.exports = {
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['ui-sans-serif', 'system-ui'],
        'serif': ['Georgia'],
        'mono': ['ui-monospace', 'SFMono-Regular'],
        'display': ['Oswald'],
        'body': ['"Open Sans"'],
      }
    },
    screens: {
      'x2xl': {'max': '1535px'},
      // => @media (max-width: 1535px) { ... }

      'xxl': {'max': '1279px'},
      // => @media (max-width: 1279px) { ... }

      'xlg': {'max': '1023px'},
      // => @media (max-width: 1023px) { ... }

      'xmd': {'max': '767px'},
      // => @media (max-width: 767px) { ... }

      'xsm': {'max': '639px'},
      // => @media (max-width: 639px) { ... }
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
