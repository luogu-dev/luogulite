import Vue from 'vue'

import UserDetail from 'layouts/user/user_detail.vue'

export default function () {
  window.userDetail = new Vue({
    el: '#fun',
    render: h => h(UserDetail)
  })
}
