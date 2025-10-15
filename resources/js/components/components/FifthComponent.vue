<template>
  <div class="video-section">
    <!-- 🖼️ Static Background instead of Video -->
    <div class="bg-static"></div>

    <!-- Foreground Content -->
    <div class="bg-dark">
      <div class="container p-5 pb-0 mb-0">
        <div class="p-3 p-lg-5 text-light text-center text-lg-start">
          <h1 class="display-6 fw-bolder text-center"><b>ART CATEGORIES</b></h1>
          <p class="text-light opacity-75 text-center">
            Explore the different categories of art I created.
          </p>
          <hr class="rounded-5" style="border: 0.5px solid gray; width: 100%;" />

          <div class="mt-5 d-flex justify-content-center align-items-center">
            <div class="row">
              <div
                v-for="(product) in products"
                :key="product.id"
                class="col-lg-3 col-md-4 col-sm-6 mb-4"
              >
                <router-link :to="product.route">
                  <div class="card shadow border-0 rounded-5 text-white h-100">
                    <img
                      class="img-fluid card-img-top rounded-top-5"
                      :src="product.image"
                      style="height: 200px; object-fit: cover;"
                      :alt="product.name"
                    />
                    <div
                      class="p-2 px-3 text-start d-flex justify-content-between align-items-center"
                    >
                      <h6 class="fw-bolder display-6 me-4">{{ product.id }}</h6>
                      <h6 class="mb-0">{{ product.name }}</h6>
                    </div>
                  </div>
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isMobile: false,
      products: [
        { id: 1, name: 'MOTION GRAPHICS', image: '/images/soya.jpg', route: '/animation' },
        { id: 2, name: 'ILLUSTRATOR', image: '/images/gallery/Illustrator/art (9).png', route: '/illustrator' },
        { id: 3, name: 'DIGITAL DRAWING', image: '/images/gallery/Artworks/hi.jpg', route: '/digital-arts'},
        { id: 4, name: 'GRAPHIC DESIGN', image: '/images/gallery/Poster/art (35).png' , route: '/graphic-design'},
        { id: 5, name: 'PHOTOGRAPHY', image: '/images/lowkey/1 (3).jpg' , route: '/photography'},
        { id: 6, name: 'UI/UX DESIGN', image: '/images/websites/4.png' , route: '/web-design'},
        { id: 7, name: 'WEB DEVELOPMNENT', image: '/images/websites/6.png' , route: '/website'},
        { id: 8, name: 'VIDEO EDITING', image: '/images/gallery/video/ADS 1.png' , route: '/videos'},
      ]
    };
  },
  mounted() {
    this.checkIsMobile();
    window.addEventListener("resize", this.checkIsMobile);
  },
  beforeUnmount() {
    window.removeEventListener("resize", this.checkIsMobile);
  },
  methods: {
    checkIsMobile() {
      this.isMobile = window.innerWidth <= 768;
    },
  },
};
</script>

<style scoped>
.video-section {
  position: relative;
  width: 100%;
  min-height: 50vh;
  overflow: hidden;
}

.bg-static {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('/images/bg-static.jpg'); 
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  z-index: -1;
  filter: brightness(50%);
}

.bg-dark {
  position: relative;
  z-index: 1;
  background-color: rgba(0, 0, 0, 0.1) !important;
}

.card {
  background: rgba(255, 255, 255, 0.1);
  color: #fff;
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  transition: transform 0.3s ease;
}

.card:hover {
  transform: scale(1.05);
  cursor: pointer;
}

.text-light {
  color: white !important;
}

a {
  text-decoration: none;
  color: inherit;
}
</style>
