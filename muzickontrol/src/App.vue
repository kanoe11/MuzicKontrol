<template>
  <div id="app">
    <img src="./assets/logo.png">
    <router-view/>
    <NavBar></NavBar>
  </div>
</template>

<script>
import NavBar from './components/NavBar'
import Service from './components/Service'
export default {
  name: 'App',
  components: {
    'NavBar': NavBar,
    'Service': Service
  }
}
</script>
<style>
@import '../../libraries/bootstrap/css/bootstrap.min.css';

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
