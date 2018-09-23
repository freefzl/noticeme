<template>
    <div class="footer">
        <!--<el-row :gutter="20">
            <el-col :span="8"><div class="footer_left">
                <div>
                    <div>
                        <p>希望为有需求要关注某个网站的某些数据</p>
                        <p>信息变更的人提供帮助。Happy Hacking !</p>
                    </div>
                    <p>由  <span style="color: #e27575;font-size: 14px;">❤</span> <a href="https://github.com/freefzl">count</a>  设计和编码</p>
                </div>
            </div></el-col>
            <el-col :span="16"><div class="footer_right">
                <el-row type="flex" class="row-bg" justify="space-around">
                    <el-col :span="6"><div class="row-bg left">
                        <div>统计信息</div>
                        <div>
                            <ul>
                                <li>网站会员：100</li>
                            </ul>
                        </div>
                    </div></el-col>
                    <el-col :span="6"><div class="row-bg center">
                        <div>其他信息</div>
                        <div>
                            <ul>
                                <li>商务合作</li>
                                <li>联系站长</li>
                            </ul>
                        </div>
                    </div></el-col>
                    <el-col :span="6"><div class="row-bg right">

                    </div></el-col>
                </el-row>
            </div></el-col>
        </el-row>-->


        <el-row type="flex" class="row-bg" justify="space-around">
            <el-col :span="6"><div class="row-bg left">
                <div class="title">统计信息</div>
                <div>
                    <ul>
                        <li>网站会员：100</li>
                    </ul>
                </div>
            </div></el-col>
            <el-col :span="6"><div class="row-bg center">

                <div>
                    <div>
                        <p>希望为有需求要关注某个网站的某些数据信息变更的人提供帮助。</p>
                        <p> 需通网，通知你的需求。Happy Hacking !</p>
                    </div>
                    <p>由  <span style="color: #e27575;font-size: 14px;">❤</span> <a href="https://github.com/freefzl">count</a>  设计和编码</p>
                </div>
            </div></el-col>
            <el-col :span="6"><div class="row-bg right">
                <div class="title">其他信息</div>
                <div>
                    <ul>
                        <li><a href="">商务合作</a></li>
                        <li><a href="">联系站长</a></li>
                    </ul>
                </div>
            </div></el-col>
        </el-row>
    </div>
</template>

<script>
    export default {
        name: "footer"
    }
</script>

<style scoped>
    .footer{
        height: 200px;
        background: #ffffff;
    }

    .row-bg .left{
        padding-top: 70px;
        color: #777777;
        margin-left: 355px;
        /*text-align: center;*/
    }
    .row-bg .center{
        padding-top: 50px;
        color: #777777;
        text-align: center;
    }
    .row-bg .center li{
       line-height: 20px;
    }

    .row-bg .right{
        padding-top: 70px;
        color: #777777;
    }
    .row-bg .right a{
        margin-top: 20px;
        color: #777777;
    }

    .row-bg .right li{
        line-height: 20px;
    }

    .title{
        padding-bottom: 10px;
    }
</style>