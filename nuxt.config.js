export default {
    /*
     ** Nuxt rendering mode
     ** See https://nuxtjs.org/api/configuration-mode
     */
    mode: 'spa',
    /*
     ** Nuxt target
     ** See https://nuxtjs.org/api/configuration-target
     */
    target: 'static',

    generate: {
        fallback: true,
    },

    // router base for github pages
    // router: {
    //     base: '/<repository-name>/',
    // },
    /*
     ** Headers of the page
     ** See https://nuxtjs.org/api/configuration-head
     */
    head: {
        title: process.env.npm_package_name || '',
        titleTemplate: '%s - ' + process.env.npm_package_name || '',
        meta: [
            { charset: 'utf-8' },
            {
                name: 'viewport',
                content:
                    'width=device-width, initial-scale=1, shrink-to-fit=no',
            },
            {
                hid: 'ninjacode',
                name: 'description',
                content: 'ab3adel(ninjaCoder) portfolio and blog',
            },
            {
                name: 'keywords',
                content:
                    'abo3adel, laravel, laravel 8, php, php7, php8, typescript, ninjacoder, ninja coder, lumen, livewire, laravel livewire, ninjacoder portfolio, abo3adel portfolio, unit testing, eshop.rf.gd',
            },
            {
                name: 'title',
                content: 'ab3adel(ninjaCoder) portfolio and blog',
            },
            {
                name: 'author',
                content: 'ahmed adel, abo3adel@gmail.com',
            },
        ],
        link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }],
        link: [
            {
                rel: 'stylesheet',
                type: 'text/css',
                href: '/css/app.min.css',
            },
        ],
        link: [
            {
                rel: 'stylesheet',
                type: 'text/css',
                href: '/css/app-rtl.min.css',
            },
        ],
    },
    /*
     ** Global CSS
     */
    css: ['@/assets/css/app.scss'],
    /*
     ** Plugins to load before mounting the App
     ** https://nuxtjs.org/guide/plugins
     */
    plugins: [
        '~/plugins/notify.ts',
        '~/plugins/axios.js',
        '~/plugins/lazyload.ts',
    ],
    /*
     ** Auto import components
     ** See https://nuxtjs.org/api/configuration-components
     */
    components: true,
    /*
     ** Nuxt.js dev-modules
     */
    buildModules: ['@nuxt/typescript-build'],
    /*
     ** Nuxt.js modules
     */
    modules: [
        // Doc: https://axios.nuxtjs.org/usage
        '@nuxtjs/axios',
        'nuxt-i18n',
        '@nuxtjs/pwa',
        '@nuxtjs/auth-next',
        ['vue-scrollto/nuxt', { duration: 500 }],
        // '@dewib/xhr-cache',
        ['nuxt-cname-module', { baseUrl: 'https://abo3adel.github.io' }],
        '@nuxtjs/robots',
        '@nuxtjs/sitemap',
    ],

    /** robots */
    robots: {
        UserAgent: '*',
        Disallow: '/',
    },

    /**
     * loading until page is loaded
     */
    loadingIndicator: {
        name: 'cube-grid',
        color: '#3B8070',
        background: '#0c1423',
    },

    /**
     * customize loading bar
     */
    loading: {
        color: '#00ff7e',
        height: '5px',
        continuous: true,
    },

    /*
     ** Axios module configuration
     ** See https://axios.nuxtjs.org/options
     */
    axios: {
        baseURL: 'https://nx.test/server/public/api/',
        // proxy: true,
    },
    proxy: {
        '/laravel': {
            target: 'https://nx.test/server/public/api/',
            pathRewrite: { '^/laravel': '/' },
        },
    },

    meta: {
        author: 'Ahmed Adel, abo3adel35@gmail.com',
    },
    /*
     ** Build configuration
     ** See https://nuxtjs.org/api/configuration-build/
     */
    build: {},

    /**
     * Vue config
     */
    vue: {
        config: {
            productionTip: false,
            devtools: true,
        },
    },

    /**
     * I18n configuration
     * See https://i18n.nuxtjs.org/options-reference.html
     */
    i18n: {
        vueI18nLoader: true,
        locales: [
            { code: 'ar', iso: 'ar-EG', file: 'ar.js', name: 'العربية' },
            { code: 'en', iso: 'en-US', file: 'en.js', name: 'English' },
        ],
        lazy: true,
        langDir: 'lang/',
        defaultLocale: 'en',
        vueI18n: {
            fallbackLocale: 'en',
            // silentTranslationWarn: true,
        },
    },

    /**
     * auth config
     */
    auth: {
        strategies: {
            laravelJWT: {
                provider: 'laravel/jwt',
                url: 'https://nx.test/server/public',
                token: {
                    maxAge: 60 * 60, // same as ttl but in seconds
                },
                refreshToken: {
                    maxAge: 20160 * 60, // same as refresh_ttl but in seconds
                },
            },
        },
        localStorage: false,
    },

    /** sitemap */
    sitemap: {
        hostname: 'https://abo3adel.github.io',
        i18n: {
            locales: ['en', 'ar'],
            defaultLocale: 'en',
        },
        gzip: true,
        exclude: ['/admin/**', '/auth/**'],
    },
}
