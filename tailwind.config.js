module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    boxShadow: {
        default: '0 1px 7px 0 rgba(36, 37, 38, 0.08)', 
        md: '0 4px 6px 0 rgba(0, 0, 0, 0.12), 0 2px 4px 0 rgba(0, 0, 0, 0.08)',
        lg: '0 15px 30px 0 rgba(0, 0, 0, 0.1), 0 5px 15px 0 rgba(0, 0, 0, 0.08)',
        inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
        outline: '0 0 0 3px rgba(52, 144, 220, 0.5)',
        none: 'none',
      },
    colors: {
        greydarkest:'#fff',
        red:'#ff0000',
        black:'#000',
        greylight:"#DEDEDE",
        blue:"#1747b0"
      },
    extend: {
      fontFamily:{
        sans:['Open Sans']
      },
      lineHeight: {
      none: 1,
      tight: 1.25,
      normal: 1.5,
      loose: '40px'
    }
    },
  },
  variants: {},
  plugins: [],
}
