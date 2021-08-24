<template>
    <div>
        <Header></Header>
        <router-view></router-view>
        <FlashMessage position="right top"></FlashMessage>
    </div>
</template>

<script>
    import {http, httpFile} from '../services/http_service';
    import Header from '../components/Header.vue';
    export default {
        components: {
            Header
        }, 
        methods: {
          connect: async function() {
            const response = await httpFile().post('/connect');
          }
        }
    }
</script>

<style>

body * {
  font-family: "Montserrat", sans-serif;
}

    .remove-repeater {
      margin-left: auto;
      display: block;
      border: none;
      background: red;
      color: #fff;
      font-size: 20px;
    }
</style>