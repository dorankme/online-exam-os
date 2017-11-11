<template>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">{{ brand }}</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="right" href="/register">{{ register }}</a></li>
                <li><a class="right" href="/login">{{ login }}</a></li>
                <li><a class="right" href="/reset">{{ reset }}</a></li>
                <li><a class="right" href="/register">{{ score }}</a></li>
                <li><a class="right" href="/register">{{ exam }}</a></li>
                <li><a class="right" href="/logoff">{{ logoff }}</a></li>
            </ul>
        </div>
        <div class="container">
            <img  class="img-responsive" src="../../image/as.jpg" alt="">
        </div>
        <div class="clearfix" style="margin-bottom: 10px;"></div>
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">当前位置</li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>
    </nav>
</template>

<script>
    export default {
        data () {
            return {
                brand : '考试中心',
                register : '考生注册',
                login : '考生登录',
                reset : '修改密码',
                score : '成绩查询',
                exam : '进入考场',
                logoff : '退出登陆',
            }
        }
    }
</script>

<style>
    .breadcrumb{
        background-color: rgba(245, 248, 250, 0);
    }
</style>
