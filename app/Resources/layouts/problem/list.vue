<template>
  <div id="problem-list">
    <div class="dimmable">
      <div class="ui dimmer" :class="{ active: !ready }">
        <div class="ui loader"></div>
      </div>
      <table class="ui celled table">
        <thead>
          <tr>
            <th>#</th>
            <th>标题</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="problem in problems">
            <td>{{ problem.id }}</td>
            <td><a :href="'/problem/' + problem.id">{{ problem.title }}</a></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="3">
              <div class="ui icon input">
                <input type="text" placeholder="搜点什么..." v-model="keyword">
                <i class="search link icon" @click="getProblems(1)"></i>
              </div>
              <div class="ui right floated">
                <pagination :page="page" :totalPages="pages" :callback="getProblems"></pagination>
              </div>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</template>

<script>
  import axios from 'axios'
  import pagination from 'components/pagination.vue'

  export default {
    data () {
      return {
        problems: [],
        pages: 0,
        page: 1,
        keyword: '',
        ready: false
      }
    },
    mounted () {
      this.$nextTick(function () {
        this.getProblems(1)
      })
    },
    methods: {
      async getProblems (page) {
        this.page = page
        this.ready = false
        const result = await axios.get('/api/problem/list', {
          params: {
            keyword: this.keyword,
            page: this.page
          }
        })
        this.pages = result.data.totalPages
        this.problems = result.data.result
        this.ready = true
      }
    },
    components: { pagination }
  }
</script>
