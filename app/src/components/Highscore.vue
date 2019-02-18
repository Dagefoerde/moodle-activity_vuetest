<template>
  <div class="highscore">
    <h1>Top results</h1>
    <ul>
      <li v-for="item in entries" :key="item">
        {{item}}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'Highscore',
  data () {
    return {
      entries: [
        1, 2, 3, 4, 5, 6, 7, 8, 9, 10
      ]
    }
  }
}
</script>
