/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}","./**/*.php"],
  theme: {
    colors: {
      transparent: 'transparent',
      sage: '607f80',
      brown: '463a2e',
      coral: 'ea9e7a',
      earthyGreen: '9a9b7a',
      mutedBlueGreen: '56757a',
      mutedGray: '7383a3',
      warmBeige: 'c9b59d'
    },
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography')
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