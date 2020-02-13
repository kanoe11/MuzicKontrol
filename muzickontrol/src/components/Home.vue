<template>
<div>
    <Slider></Slider>
    <Service></Service>
    <Contact></Contact>
</div>
</template>
<script>
import Service from './Service'
import Contact from './Contact'
import Slider from './Slider'
export default {
  name: 'Home',
  components: {
    'Service': Service,
    'Contact': Contact,
    'Slider': Slider,
  }
}
</script>
