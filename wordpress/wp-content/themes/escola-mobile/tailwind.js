module.exports = {
  prefix: '',
  important: false,
  separator: ':',
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      retina: {
        'min-resolution': '192dpi'
      }
    },
    colors: {
      transparent: 'transparent',

      danger: '#EE0004',

      black: '#000',
      white: '#fff',
      dark: '#2C2C2C',

      tag: {
        100: '#F5F5F1',
        200: '#DDD1CB'
      },

      pink: {
        100: '#EE4266',
        200: '#540D6E'
      },

      yellow: '#FFD200',

      orange: '#FF8600',

      background: '#F5F5F1',

      basebg: '#DDD1CB',

      green: {
        100: '#0EAD69'
      },

      blue: {
        100: '#2F72CD',
        200: '#193C6C',
        300: '#0EADAD',
        400: '#0B65DA'
      },

      purple: {
        100: '#A51AD8',
        200: '#540D6E'
      },

      gray: {
        100: '#f7fafc',
        200: '#edf2f7',
        300: '#e2e8f0',
        400: '#cbd5e0',
        500: '#a0aec0',
        600: '#718096',
        700: '#514F54',
        800: '#2d3748',
        900: '#1a202c'
      },
      primary: {
        100: '#0EAD69'
      },
      secondary: {
        100: '#193C6C'
      }
    },
    spacing: {
      screen: '100vh',
      screenw: '100vw',
      px: '1px',
      '45vh': '45vh',
      '20p': '20%',
      '80p': '80%',
      0: '0',
      2: '0.125rem',
      3: '0.188rem',
      4: '0.25rem',
      5: '0.313rem',
      6: '0.375rem',
      7: '0.438rem',
      8: '0.5rem',
      9: '0.563rem',
      10: '0.625rem',
      13: '13px',
      15: '0.938rem',
      16: '16px',
      20: '1.25rem',
      25: '25px',
      30: '1.875rem',
      32: '2rem',
      35: '35px',
      40: '40px',
      48: '3rem',
      60: '60px',
      64: '4rem',
      80: '5rem',
      96: '6rem',
      136: '136px',
      180: '180px',
      200: '200px',
      230: '230px',
      270: '270px',
      280: '280px',
      300: '300px',
      320: '320px',
      350: '350px',
      410: '410px',
      420: '420px',
      450: '450px',
      500: '550px',
      550: '550px',
      600: '600px',
      650: '650px',
      800: '800px'
    },
    backgroundColor: (theme) => theme('colors'),
    backgroundPosition: {
      bottom: 'bottom',
      center: 'center',
      left: 'left',
      'left-bottom': 'left bottom',
      'left-top': 'left top',
      right: 'right',
      'right-bottom': 'right bottom',
      'right-top': 'right top',
      top: 'top'
    },
    backgroundSize: {
      auto: 'auto',
      cover: 'cover',
      contain: 'contain'
    },
    borderColor: (theme) => ({
      ...theme('colors'),
      default: theme('colors.gray.300', 'currentColor')
    }),
    borderRadius: {
      none: '0',
      sm: '0.125rem',
      default: '0.25rem',
      lg: '0.8rem',
      base: '25px',
      full: '9999px',
      600: '600px',
      300: '300px',
      200: '200px',
      100: '100px'
    },
    borderWidth: {
      default: '1px',
      0: '0',
      2: '2px',
      3: '3px',
      4: '4px',
      5: '5px',
      8: '8px',
      10: '10px'
    },
    boxShadow: {
      default:
        '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
      md:
        '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
      lg:
        '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
      xl:
        '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
      '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
      inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
      outline: '0 0 0 3px rgba(66, 153, 225, 0.5)',
      none: 'none'
    },
    container: {},
    cursor: {
      auto: 'auto',
      default: 'default',
      pointer: 'pointer',
      wait: 'wait',
      text: 'text',
      move: 'move',
      'not-allowed': 'not-allowed'
    },
    fill: {
      current: 'currentColor'
    },
    flex: {
      1: '1 1 0%',
      auto: '1 1 auto',
      initial: '0 1 auto',
      none: 'none'
    },
    flexGrow: {
      0: '0',
      default: '1'
    },
    flexShrink: {
      0: '0',
      default: '1'
    },
    fontFamily: {
      sans: [
        'Open Sans',
        'sans-serif'
      ],
      serif: ['Georgia', 'Cambria', '"Times New Roman"', 'Times', 'serif'],
      mono: [
        'Menlo',
        'Monaco',
        'Consolas',
        '"Liberation Mono"',
        '"Courier New"',
        'monospace'
      ]
    },
    fontSize: {
      xs: '0.75rem',
      sm: '0.875rem', // 14 px
      base: '1rem',
      lg: '1.125rem',
      xl: '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.875rem',
      '4xl': '2rem',
      '4x2': '2.5rem', // 40px
      '4x3': '2.8rem', // 40px
      '5xl': '3.5rem',
      '6xl': '4rem',
      '7xl': '5rem',
      '8xl': '140px',
      erro: '150px'
    },
    fontWeight: {
      hairline: '100',
      thin: '200',
      light: '300',
      normal: '400',
      medium: '500',
      semibold: '600',
      bold: '700',
      extrabold: '800',
      black: '900'
    },
    height: (theme) => ({
      auto: 'auto',
      ...theme('spacing'),
      full: '100%',
      screen: '100vh'
    }),
    inset: {
      0: '0',
      auto: 'auto'
    },
    letterSpacing: {
      tighter: '-0.05em',
      tight: '-0.025em',
      normal: '0',
      wide: '0.025em',
      wider: '0.05em',
      widest: '0.1em'
    },
    lineHeight: {
      none: '1',
      tight: '1.25',
      snug: '1.375',
      normal: '1.5',
      relaxed: '1.625',
      loose: '2'
    },
    listStyleType: {
      none: 'none',
      disc: 'disc',
      decimal: 'decimal'
    },
    margin: (theme, { negative }) => ({
      auto: 'auto',
      ...theme('spacing'),
      ...negative(theme('spacing'))
    }),
    maxHeight: {
      sm: '410px',
      550: '550px',
      450: '450px',
      full: '100%',
      screen: '100vh'
    },
    maxWidth: {
      exs: '16rem',
      xs: '20rem',
      sm: '24rem',
      md: '28rem',
      lg: '30rem',
      xl: '36rem',
      '2xl': '42rem',
      '3xl': '48rem',
      '4xl': '56rem',
      '5xl': '64rem',
      '6xl': '72rem',
      '7xl': '86rem',
      270: '270px',
      450: '450px',
      full: '100%'
    },
    minHeight: {
      550: '550px',
      0: '0',
      full: '100%',
      screen: '100vh'
    },
    minWidth: {
      0: '0',
      15: '15px',
      136: '136px',
      180: '180px',
      200: '200px',
      270: '270px',
      280: '280px',
      300: '300px',
      320: '320px',
      400: '400px',
      420: '420px',
      450: '450px',
      550: '550px',
      650: '650px',
      700: '700px',
      full: '100%'
    },
    objectPosition: {
      bottom: 'bottom',
      center: 'center',
      left: 'left',
      'left-bottom': 'left bottom',
      'left-top': 'left top',
      right: 'right',
      'right-bottom': 'right bottom',
      'right-top': 'right top',
      top: 'top'
    },
    opacity: {
      0: '0',
      10: '0.1',
      25: '0.25',
      50: '0.5',
      75: '0.75',
      100: '1'
    },
    order: {
      first: '-9999',
      last: '9999',
      none: '0',
      1: '1',
      2: '2',
      3: '3',
      4: '4',
      5: '5',
      6: '6',
      7: '7',
      8: '8',
      9: '9',
      10: '10',
      11: '11',
      12: '12'
    },
    padding: (theme) => theme('spacing'),
    stroke: {
      current: 'currentColor'
    },
    textColor: (theme) => theme('colors'),
    width: (theme) => ({
      auto: 'auto',
      ...theme('spacing'),
      '1/2': '50%',
      '1/3': '33.33333%',
      '2/3': '66.66667%',
      '1/4': '25%',
      '2/4': '50%',
      '3/4': '75%',
      '1/5': '20%',
      '2/5': '40%',
      '3/5': '60%',
      '4/5': '80%',
      '1/6': '16.66667%',
      '2/6': '33.33333%',
      '3/6': '50%',
      '4/6': '66.66667%',
      '5/6': '83.33333%',
      '1/12': '8.33333%',
      '2/12': '16.66667%',
      '3/12': '25%',
      '4/12': '33.33333%',
      '5/12': '41.66667%',
      '6/12': '50%',
      '7/12': '58.33333%',
      '8/12': '66.66667%',
      '9/12': '75%',
      '10/12': '83.33333%',
      '11/12': '91.66667%',
      full: '100%',
      screen: '100vw'
    }),
    zIndex: {
      auto: 'auto',
      0: '0',
      10: '10',
      20: '20',
      30: '30',
      40: '40',
      50: '50'
    }
  },
  variants: {
    alignContent: ['responsive'],
    alignItems: ['responsive'],
    alignSelf: ['responsive'],
    appearance: ['responsive'],
    backgroundAttachment: ['responsive'],
    backgroundColor: ['responsive', 'hover', 'focus'],
    backgroundPosition: ['responsive'],
    backgroundRepeat: ['responsive'],
    backgroundSize: ['responsive'],
    borderCollapse: ['responsive'],
    borderColor: ['responsive', 'hover', 'focus'],
    borderRadius: ['responsive'],
    borderStyle: ['responsive'],
    borderWidth: ['responsive'],
    boxShadow: ['responsive', 'hover', 'focus'],
    cursor: ['responsive'],
    display: ['responsive'],
    fill: ['responsive'],
    flex: ['responsive'],
    flexDirection: ['responsive'],
    flexGrow: ['responsive'],
    flexShrink: ['responsive'],
    flexWrap: ['responsive'],
    float: ['responsive'],
    fontFamily: ['responsive'],
    fontSize: ['responsive'],
    fontSmoothing: ['responsive'],
    fontStyle: ['responsive'],
    fontWeight: ['responsive', 'hover', 'focus'],
    height: ['responsive'],
    inset: ['responsive'],
    justifyContent: ['responsive'],
    letterSpacing: ['responsive'],
    lineHeight: ['responsive'],
    listStylePosition: ['responsive'],
    listStyleType: ['responsive'],
    margin: ['responsive'],
    maxHeight: ['responsive'],
    maxWidth: ['responsive'],
    minHeight: ['responsive'],
    minWidth: ['responsive'],
    objectFit: ['responsive'],
    objectPosition: ['responsive'],
    opacity: ['responsive'],
    order: ['responsive'],
    outline: ['responsive', 'focus'],
    overflow: ['responsive'],
    padding: ['responsive'],
    pointerEvents: ['responsive'],
    position: ['responsive'],
    resize: ['responsive'],
    stroke: ['responsive'],
    tableLayout: ['responsive'],
    textAlign: ['responsive'],
    textColor: ['responsive', 'hover', 'focus'],
    textDecoration: ['responsive', 'hover', 'focus'],
    textTransform: ['responsive'],
    userSelect: ['responsive'],
    verticalAlign: ['responsive'],
    visibility: ['responsive'],
    whitespace: ['responsive'],
    width: ['responsive'],
    wordBreak: ['responsive'],
    zIndex: ['responsive']
  },
  corePlugins: {},
  plugins: []
}
