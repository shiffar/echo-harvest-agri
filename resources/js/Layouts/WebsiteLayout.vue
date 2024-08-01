<template>
  <div id="website-layout">
    <div class="custom-cursor">
      <div class="custom-cursor__cursor"></div>
      <div class="custom-cursor__cursor-two"></div>

      <div class="preloader" v-if="loading">
        <div class="preloader__image" style="background-image: url('/assets/images/loader.png');"></div>
      </div>

      <div class="page-wrapper" v-show="!loading">
        <Topbar />
        <Header />
        <main>
          <slot @loaded="handleLoaded"></slot>
          
        </main>
        <Footer />
      </div>
      <Mobilesidebar />

      <!-- back-to-top-start -->
      <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewbox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
      </a>
      <!-- back-to-top-end -->

      <Scripts />
    </div>
  </div>

</template>

<script>
import { ref, onMounted } from 'vue';
import Topbar from '../Components/Website/Topbar.vue';
import Header from '../Components/Website/Header.vue';
import Footer from '../Components/Website/Footer.vue';
import Mobilesidebar from '../Components/Website/Mobilesidebar.vue';
import { Link } from '@inertiajs/vue3';

export default {
  components: {
    Topbar,
    Header,
    Footer,
    Mobilesidebar,
    Link,
  },
  setup() {
    const loading = ref(true);

    const handleLoaded = () => {
      loading.value = false;
    };

    onMounted(() => {
      // Add a timeout as a fallback to hide the loader after a certain period
      setTimeout(() => {
        loading.value = false;
      }, 1000); // Adjust the timeout as necessary
    });

    return {
      loading,
      handleLoaded,
    };
  },
};
</script>