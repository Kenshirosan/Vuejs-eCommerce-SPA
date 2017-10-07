import VueRouter from 'vue-router'

let routes = [
    {
        path: '/',
        component: require('./views/Home')
    },
    {
        path: '/about',
        component: require('./views/About')
    },
    {
        path: '/contact',
        component: require('./views/Contact')
    },
    {
        path: '/shop',
        component: require('./views/Shop')
    },
    {
        path: '/product/:slug',
        component: require('./views/Product')
    }
];

export default new VueRouter({
    routes,

    linkActiveClass: 'is-active'
});