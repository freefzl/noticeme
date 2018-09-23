<template>
    <div class="container">
        <el-row>
            <el-col :span="24"><div class="grid-content bg-purple-dark">
                <el-col :span="4" :offset="6"><div class="logo login">需通网</div></el-col>
                <el-col :span="4" :offset="6"><div>
                    <a href="" class="login">登 录 |</a>
                    <a href="" class="login">注 册</a>
                </div></el-col>
            </div></el-col>
        </el-row>
        <div class="line"></div>
    </div>
</template>

<script>
    export default {
        name: "TopMenu",
    }
</script>

<style scoped>


    .bg-purple-dark {
        background: #008de1;
    }

    .grid-content {
        border-radius: 4px;
        min-height: 100px;
        line-height: 100px;
    }
    .logo {
        margin-left: 10px;
        line-height: 100px;
        font-size: 20px;
    }
    .login{
        text-decoration:none;
        color: #ffffff;
    }

</style>