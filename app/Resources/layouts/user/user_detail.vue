<template>
  <div id="fun">
    <p>hello, {{ username }}</p>
    <input type="text" v-model="username">
  </div>
</template>

<script>
  export default {
    data () {
      return {
        username: _globals.user.username
      }
    }
  }
</script>
