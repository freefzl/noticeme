<template>
    <div >
        <top-menu></top-menu>
        <transition name="fade" mode="out-in">
            <router-view></router-view>
        </transition>
        <my-footer></my-footer>
    </div>
</template>
<script>
    import TopMenu from './common/TopMenu'
    import Header from './common/Header'
    import MyFooter from './common/MyFooter'
    export default {
        components:{
            TopMenu,
            Header,
            MyFooter
        }
    }
</script>
<style>
    html{
        width: 99.9%;
    }
    body {
        margin: 0;
        padding: 0;
        font-family: 'Microsoft Yahei';
        font-size: 14px
    }
    img{ border:none}
    input{ border:none}
    .bg_w {
        background:#fff;
    }
    .bg_g{ background:#fafafa}
    input, button {
        font-family: 'Microsoft Yahei';
    }
    .ml30 {
        margin-left: 30px
    }
    .ml50 {
        margin-left: 50px
    }
    .ml15{ margin-left:15px}
    ul {
        margin: 0;
        padding: 0
    }
    li {
        list-style: none
    }
    .fl_l {
        float: left
    }
    h4 {
        font-size: 18px;
        color: #787474
    }
    h3 {
        font-size: 18px;
        color: #666;
        font-weight: normal;
    }
    .mt20 {
        margin-top: 20px
    }
    .pt20 {
        padding-top: 15px;
        padding-bottom: 15px
    }
    .mt50 {
        margin-top: 50px
    }
    .mt100 {
        margin-top: 100px
    }
    a {
        text-decoration: none
    }
    i {
        font-size: 21px;
        font-style: normal
    }
</style>


