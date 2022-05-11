module.exports = {
  content: ["./**/*.{php,html,js}", "./*.php", "./templates/blocks/*.php"],
  theme: {
    fontFamily: {
      opensan: "Open Sans",
      roboto: "Roboto",
    },
    extend: {
      colors: {
        "off-white": "#F2F2F2",
        "light-gray": "#DDDDDD",
        "cool-gray": "#a0aec0",
        red: "#fe4918",
        navy: "#17263d",
      },
      width: {
        "1/6": "16.666667%",
      },
    },
  },
  plugins: [],
};
