import Vue from 'vue'

import ProblemList from 'layouts/problem/list.vue'

export default function () {
  window.problemList = new Vue({
    el: '#problem-list',
    render: h => h(ProblemList)
  })
}
