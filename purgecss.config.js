module.exports = {
    content: [
        'layouts/**/*.vue',
        'components/**/*.vue',
        'pages/**/*.vue',
        'plugins/**/*.js',
        'plugins/**/*.ts',
    ],
    css: ['static/css/bootstrap.min.css'],
    safelist: ['body', 'html', 'nuxt-progress'],
    output: 'static/css/app.css',
}
