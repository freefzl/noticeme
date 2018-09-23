import VueRouter from 'vue-router'

let routes =[
    {
        path :'/',
        component:require('./components/home/Home')
    },
    {
        path :'/member',
        component:require('./components/member/Member')
    }
];

export default new VueRouter({
    mode:'history',
    routes
})