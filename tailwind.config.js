/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        oswald: ['"Oswald"', "oswald"], //heading
        poppins: ["Poppins"],           //content
        // Add more custom font families as needed
      },
      screens: {
        sm: {'min': '320px',  'max': '479px'},  //mobile size
        md: {'min': '480px',  'max': '969px' }, //Tablet Size
        lg: {'min': '970px',  'max': '1199px'}, //Laptop size
        xl: {'min': '1200px', 'max': '1399px'}, //Laptop size
        x2l:{'min': '1400px', 'max': '1599px'}, //pc
        x3l:{'min': '1600px', 'max': '1749px'}, //pc
        x4l:{'min': '1750px', 'max': '1920px'}, //pc
      }, 
      colors: {
        'primary_blue'    :  '#22A9E0',
        'heading_color'   :  '#160038',
        'explain_content' :  '#5E5E70',
        'low_priority'    :  '#939393',
        'style_color1'    :  '#F79256',
        'style_color2'    :  '#6254E7',
        'style_color3'    :  '#35C475'
      },
      fontSize: {
        xs: "0.75rem",
        sm: "0.875rem",
        base: "1rem",
        lg: "1.125rem",
        xl: "1.25rem",
        "2xl": "1.5rem",
        "3xl": "1.875rem",
        "4xl": "2.25rem",
        "5xl": "3rem",
        "6xl": "4rem",
      },
      animation: {
        flash: 'flash 11.6s infinite',
      },
      keyframes:{
        flash: {
            "0%, 50%, 100%": {
                opacity: "1"
            },
            "25%, 75%": {
                opacity: "0"
            },
        }
      }
    },
  },
  plugins: [],
}