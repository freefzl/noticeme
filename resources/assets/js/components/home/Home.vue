<template>
    <div>
        <el-row>
            <el-col :span="24"><div class="index_img">
                <div class="active">
                    <h1 class="index_img_h1">持续关注你需要的</h1>
                    <h1 class="index_img_h2">网络信息</h1>
                    <h3 class="index_h3">你所需的数据发生变更时，通知你！</h3>
                </div>
                <div class="index_btn">
                    <el-button type="danger" round>免费注册</el-button>
                </div>

            </div></el-col>
        </el-row>
    </div>
</template>

<script>

</script>

<style>
    .index_img{
        background: #008de1;
        height: 600px;
    }
    .index_img_h1{
        font-size: 70px;
        color: #ffffff;
        margin: 0 auto;
        text-align: center;
        padding-top: 1em;
    }
    .index_img_h2{
        font-size: 70px;
        color: #ffffff;
        text-align: center;
        margin-top: 20px;
    }
    .index_h3{
        font-size: 26px;
        color: #ffffff;
        text-align: center;
        margin-top: 20px;
    }

    .index_btn{
        font-size: 70px;
        color: #ffffff;
        text-align: center;
        margin-top: 20px;

    }

    .index_btn a{
        text-decoration:none;
        color: #ffffff;
        background: #008de1;
        cursor: pointer;
    }



</style>
