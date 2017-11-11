<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>exam</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div id="header"></div>
    </div>
    <div class="clearfix" style="margin-bottom: 540px;"></div>
    <div class="row">
        <div id="main"></div>
    </div>
    <div class="clearfix" style="margin-bottom: 100px;"></div>
    <div class="row">
        <div id="footer"></div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>