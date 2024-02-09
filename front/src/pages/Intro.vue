<template>
<q-page class="q-pa-xs">
  <div class="row">
    <div class="col-12 col-md-3"></div>
    <div class="col-12 col-md-6">
      <q-carousel
        animated
        v-model="slide"
        infinite
      >
        <q-carousel-slide :name="1">
          <q-video
            class="absolute-full"
            src="https://www.youtube.com/embed/zNg41nLSRP8"
          />
        </q-carousel-slide>

        <q-carousel-slide :name="2">
<!--          <iframe width="100%" height="500" src="https://www.youtube.com/embed/Ya84cY45snQ" title="SALUTACION 243 AÑOS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                    <q-video
            class="absolute-full"
            src="https://www.youtube.com/embed/Ya84cY45snQ"
          />
        </q-carousel-slide>

        <q-carousel-slide :name="3">
<!--          <iframe width="100%" height="500" src="https://www.youtube.com/embed/CJ91HWZwHw4" title="SALUTACION 243 AÑOS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                    <q-video
            class="absolute-full"
            src="https://www.youtube.com/embed/CJ91HWZwHw4"
          />
        </q-carousel-slide>
        <q-carousel-slide :name="4">

<!--          <iframe width="100%" height="500" src="https://www.youtube.com/embed/_5v9reQzSHM" title="SALUTACION 243 AÑOS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                    <q-video
            class="absolute-full"
            src="https://www.youtube.com/embed/_5v9reQzSHM"
          />
        </q-carousel-slide>
        <q-carousel-slide :name="5">
<!--          <iframe width="100%" height="500" src="https://www.youtube.com/embed/0NSVqNSz1rc" title="SALUTACION 243 AÑOS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                    <q-video
            class="absolute-full"
            src="https://www.youtube.com/embed/0NSVqNSz1rc"
          />
        </q-carousel-slide>
      </q-carousel>

      <div class="row justify-center">
        <q-btn-toggle
          glossy
          v-model="slide"
          :options="[
          { label: '1', value: 1 },
          { label: '2', value: 2 },
          { label: '3', value: 3 },
          { label: '4', value: 4 },
          { label: '5', value: 5 }
          ]"
        />
    </div>
    <div class="col-12 col-md-3"></div>
  </div>
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
