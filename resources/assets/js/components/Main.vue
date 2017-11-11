<template>
    <div class="col-sm-12">
        <form id="user" class="form-horizontal">
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-1 control-label">学号</label>
                    <div class="col-sm-4">
                        <input v-model="" class="form-control" placeholder="把你的 9 位数字学号输进来"/>
                    </div>
                    <label for="inputEmail3" class="col-sm-1 control-label">密码</label>
                    <div class="col-sm-4">
                        <input type="password" v-model="password" class="form-control" placeholder="来来来，咱们输入密码">
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-default"> {{ login }} </button>
                    </div>
            </div>
        </form>
    </div>
</template>

<script>
    import axios from 'axios'
    window.Vue = require('vue');
    export default {
        data () {
            return {
                login : '登录',
            }
        }
    }
    new Vue({
        el: '#user',
        data:{stunumber,password},
        mothods:
            axios.post('/login',
                data)
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                })
    })
</script>

<style>
    body {
        background-color: rgba(245, 248, 250, 0);
    }
</style>