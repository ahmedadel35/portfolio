module.exports = {
    content: [
        'layouts/**/*.vue',
        'components/**/*.vue',
        'pages/**/*.vue',
        'plugins/**/*.js',
        'plugins/**/*.ts',
        'lost_classes.html',
    ],
    safelist: ['body', 'html', 'nuxt-progress'],
    css: ['static/css/bootstrap.min.css'],
    output: 'static/css/app.css',
    // css: ['static/css/fontawesome.min.css'],
    // output: 'static/css/fontawesome.css',
}
