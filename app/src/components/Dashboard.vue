<template>
  <div class="dashboard">
    <h1>{{ msg }}</h1>
    <p>
      This could be a dashboard.
    </p>
    <p>
      <router-link :to="{name: 'highscore'}">Go to highscore</router-link>
    </p>
  </div>
</template>

<script>
export default {
  name: 'Dashboard',
  data () {
    return {
      msg: 'Welcome to your moodle app with vue.js.'
    }
  }
}
</script>

<style scoped>
  h1, h2 {
    font-weight: normal;
  }

  ul {
    list-style-type: none;
    padding: 0;
  }

  li {
    display: inline-block;
    margin: 0 10px;
  }

  a {
    color: #42b983;
  }
</style>
