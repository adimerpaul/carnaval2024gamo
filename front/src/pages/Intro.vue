<template>
<q-page class="q-pa-xs">
  <div class="row">
    <div class="col-12 col-md-3"></div>
    <div class="col-12 col-md-6">
      <q-video
        :ratio="16/9"
        src="https://www.youtube.com/embed/Cwl9ZpivQT8?rel=0"
      />
    </div>
    <div class="col-12 col-md-3"></div>
  </div>


</q-page>
</template>

<script>
export default {
  data(){
    return{
      slide: 1,
      fullscreen:false,
    }
  },
  mounted() {
    this.$store.commit("login/nombre",'Carnaval de Oruro');
  }
}
</script>

<style lang="sass" scoped>
.custom-caption
  text-align: center
  padding: 12px
  color: white
  background-color: rgba(0, 0, 0, .3)
</style>
