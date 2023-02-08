/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
  ],
  options: {
    safelist: [
      'bg-lime',
      'text-regio-leuven',
      'text-regio-haacht',
      'text-regio-diest',
      'text-regio-aarschot',
      'text-regio-tienen',
      'hover:bg-azuur',
      'hover:bg-petrol',
      'hover:bg-teal',
      'border-petrol',
      'border-lime', 
      'border-teal',
      'border-azuur',
    ],
  },
  theme: {
    extend: {
      screens: {
        'xs': {'max': '630px'},
      },
      fontFamily: {
        'roboto': ['Roboto', 'sans-serif'],
      },
      colors: {
        regio: {
          leuven: '#11526a',
          haacht: '#11526a',
          diest: '#8d134f',
          aarschot: '#8d134f',
          tienen: '#e6a810',
        },
        status: {
          oin: '#66AF3A',
          oib: '#e6a810',
          vol: '#e20e39',
        },
        grey: {
          xlight: '#cccccc',
          light: '#8d8d8d',
          DEFAULT: '#666666',
          aanbod: '#f2f2f2',
          dark: '#333333',
        },
        petrol: '#11526A',
        azuur: '#70B1C9',
        teal: '#02A697',
        kers: '#E20E39',
        lime: '#B3C923',
        aubergine: '#8D134F',
        framboos: '#CF2063',
        mango: '#E6A810',
        faq: '#e2eff4',
        munt:'#d5e4e1',
        muntdonker: '#b6d0cb'
      },
    },
  },
  plugins: [],
  variants: {
  },
}