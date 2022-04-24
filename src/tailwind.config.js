module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    stats: {
        children: true,
    },
    theme: {
        extend: {
            colors: {
                indigo: '#242E2F',
            }
        }
    },
    plugins: [],
  }