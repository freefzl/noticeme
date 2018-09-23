<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ces</title>
</head>

<body>
<div id="app">
    {{--<el-row class="grid-content bg-purple-dark">
        <el-col :span="24">
            <el-col :span="20">
                <div>
                    <div class="logo">Notice-me</div>
                </div>
            </el-col>

            <el-col :span="4" class="right"><div >

                    <el-button type="primary">成功按钮</el-button>
                    <el-button type="info">信息按钮</el-button>

            </div> </el-col>
        </el-col>
    </el-row>--}}


    <div class="line"></div>
        <app></app>
</div>
</body>

<script src="{{ mix('js/app.js') }}"></script>
</html>
