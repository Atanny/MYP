<template>
  <div class="video-section">
    <!-- Static background instead of video -->
    <div class="bg-static"></div>

    <div class="">
      <div class="container my-5 p-5">
        <div class="rounded-5">
          <div class="row align-items-center">
          
            <div
              class="col-lg-8 mb-4 mb-lg-0"
              data-aos="fade-right"
              data-aos-duration="1500"
            >
              <div>
                <img
                  class="img-fluid rounded-5"
                  src="/images/art.png"
                  alt="Artwork"
                />
              </div>
            </div>

            <!-- About Me Section -->
            <div
              class="col-lg-4 text-dark p-4 card border-0 shadow text-light shadow rounded-5 "
              data-aos="fade-right"
              data-aos-duration="900"
            >
              <h1 class="fw-bolder text-light">
                <b>ABOUT ME</b>
              </h1>

              <p class="text-light mt-2">
                I am a Digital Artist who spends time working on Arts & Designs.
                Graduated with a Bachelor's Degree in Information Technology Major
                in Programming, but still passionate about Arts & Design.
                Currently working as a Freelance Graphic Designer to gain more
                experience and knowledge. As an artist, I dedicate more time to
                designing websites, digital pubmats, and illustrations.
              </p>

              <a
                class="btn btn-light rounded-5 mt-3 icon shadow-sm"
                href="/images/gallery/Poster/JonathanMarianoRESUME.png"
                download="JonathanMarianoRESUME.png"
              >
                <i class="fa-solid fa-download"></i> Download CV
              </a>
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

/* Static background image replacing the video */
.bg-static {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('./images/bg-static.jpg'); /* <-- replace with your desired image */
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  z-index: -1;
  filter: brightness(50%);
}

.bg-dark {
  position: relative;
  z-index: 1;
}

.bg-dark {
  background-color: rgba(0, 0, 0, 0.6) !important;
}

.card {
  background: rgba(255, 255, 255, 0.1);
  color: #fff;
  backdrop-filter: blur(10px);
}

.text-light {
  color: white !important;
}
</style>
