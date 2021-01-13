<template>
    <div >
      {{canLogin}}<br>
      {{canRegister}}<br>
      {{laravelVersion}} <br>
      {{phpVersion}}
      {{nice1}}
      {{board}}

    <div v-for="(item, index) in board">
        {{index}}
        {{item.title}}
    </div>
    {{board}}
      
    
    </div>
</template>

<style scoped>
  
</style>

<script>
    export default {
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
            nice1: String,
            board: Array,
        }
    }
</script>
