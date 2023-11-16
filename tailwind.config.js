/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}","./**/*.php","./node_modules/flowbite/**/*.js"],
  theme: {
    colors: {
      transparent: 'transparent',
      sage: '#607f80',
      brown: '#463a2e',
      coral: '#ea9e7a',
      earthyGreen: '#9a9b7a',
      mutedBlueGreen: '#56757a',
      mutedGray: '#7383a3',
      warmBeige: '#c9b59d',
      beigeLight: '#f8ccb7',
      beigeMedium: '#f29c73',
      black: '#000',
      white: '#FFF',
      'cutty-sark': {
        '50': '#f4f7f7',
        '100': '#e2eaeb',
        '200': '#c9d7d8',
        '300': '#a3babd',
        '400': '#75969b',
        '500': '#56757a',
        '600': '#4d676d',
        '700': '#43565b',
        '800': '#3c4a4e',
        '900': '#354044',
        '950': '#21282b',
      }, 
      'taupe': {
        '50': '#f6f6f0',
        '100': '#e9e7d8',
        '200': '#d5d2b3',
        '300': '#bcb588',
        '400': '#a89d67',
        '500': '#998c59',
        '600': '#83724b',
        '700': '#6a593e',
        '800': '#5a4b39',
        '900': '#463a2e',
        '950': '#2d231b',
    },
    'lynch': {
      '50': '#f3f8fa',
      '100': '#eaf0f5',
      '200': '#d9e5ec',
      '300': '#c1d3e0',
      '400': '#a7bdd2',
      '500': '#91a6c3',
      '600': '#798db2',
      '700': '#7383a3',
      '800': '#55647e',
      '900': '#495466',
      '950': '#2a2f3c',
    },
    'rodeo-dust': {
      '50': '#f9f6f3',
      '100': '#f0ebe4',
      '200': '#e1d6c7',
      '300': '#c9b59d',
      '400': '#b89b7f',
      '500': '#a98366',
      '600': '#9c735a',
      '700': '#825e4c',
      '800': '#6a4d42',
      '900': '#574037',
      '950': '#2e211c',
  },
  'apricot': {
    '50': '#fdf4ef',
    '100': '#fae6da',
    '200': '#f3cab5',
    '300': '#ea9e7a',
    '400': '#e37954',
    '500': '#dc5833',
    '600': '#ce4228',
    '700': '#ab3123',
    '800': '#892a23',
    '900': '#6f251f',
    '950': '#3b100f',
  },
  'firefly': {
    '50': '#f5f8f7',
    '100': '#dee9e8',
    '200': '#bdd2d0',
    '300': '#94b4b2',
    '400': '#6d9493',
    '500': '#537979',
    '600': '#416060',
    '700': '#374d4e',
    '800': '#2f3f40',
    '900': '#2a3737',
    '950': '#1b2728',
    DEFAULT: '#1b2728'
},
  
    },
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('flowbite/plugin')
  ],
}

/*
Example scheme:
Primary: coral
Secondary: mutedBlueGreen
Tertiary: brown
Quaternary: mutedGray
Accent: warmBeige

Alternative:
Primary: mutedBoueGreen
Secondary: brown
Accent: earthyGreen (or coral)
*/