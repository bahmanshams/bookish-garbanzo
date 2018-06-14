require('./bootstrap');

window.Vue = require('vue');

Vue.component('message-component', require('./components/message.vue'));

const app = new Vue({
    el: '#app',

    data:{
        message:''
    },

    methods:{
        send() {
            if (this.message.length !== 0){
                console.log(this.message);
            }
        }
    }
});
