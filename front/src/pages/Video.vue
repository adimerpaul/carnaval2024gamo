<template>
  <div class="q-pa-md q-gutter-sm">
    <q-carousel
      animated
      v-model="slide"
      infinite
    >
      <q-carousel-slide name="uno">
        <q-video
          class="absolute-full"
          src="https://www.youtube.com/embed/LdoHKYIfjvo"
        />
      </q-carousel-slide>

      <q-carousel-slide name="dos">
        <q-video
          class="absolute-full"
          src="https://www.youtube.com/embed/8ZTjMTWeHBo"
        />
      </q-carousel-slide>

      <q-carousel-slide name="tres">
        <q-video
          class="absolute-full"
          src="https://www.youtube.com/embed/a5WbOJaRQIc"
        />
      </q-carousel-slide>
    </q-carousel>

    <div class="row justify-center">
      <q-btn-toggle
        glossy
        v-model="slide"
        :options="[
          { label: 'Uno', value: 'uno' },
          { label: 'Dos', value: 'dos' },
          { label: 'Tres', value: 'tres' }
        ]"
      />
    </div>
  </div>
</template>

<script>
import { ref } from 'vue'

export default {
  setup () {
    return {
      slide: ref('dos')
    }
  },
  mounted() {
    this.$store.commit("login/nombre",'Videos de danzas');
  }
}
</script>
