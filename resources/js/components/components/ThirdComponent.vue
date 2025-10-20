<template>
  <div class="video-section">
   
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
            <div class="image-container">
                <img
                  class="img-fluid rounded-5 shadow-lg border-light border border-5"
                  src="/images/art.png"
                  alt="Artwork"
                />
                <div class="overlay-text text-start "><h5 class="mb-0 ms-2">THINKING HAND ANOTOMY</h5><p class="ms-2 text-light">Created Using ADOBE ILLUSTRATOR.</p></div>
              </div>
            </div>

         
            <div
              class="col-lg-4 text-white p-4 card border-0 shadow text-light shadow rounded-5 "
              data-aos="fade-right"
              data-aos-duration="900"
            >

            <div class="text-center d-flex align-items-center justify-content-start border rounded-5 mb-3">
               <img class="img-fluid rounded-start-5 me-3" width="60px" height="60px" style="object-fit: cover;" src="/images/333 (2).jpg" alt="" />
                 
              <h4 class="text-start text-light mb-0" 
                 >
                <b>ABOUT ME</b>
              </h4>

            </div>

           

              <p class="text-light mt-2 text-center">
                I am a Digital Artist who spends time working on Arts & Designs.
                Graduated with a Bachelor's Degree in Information Technology Major
                in Programming, but still passionate about Arts & Design.
                Currently working as a Freelance Graphic Designer to gain more
                experience and knowledge. As an artist, I dedicate more time to
                designing websites, digital pubmats, and illustrations.
              </p>

             
              <div class="row  my-2" >
              <div class="d-flex gap-2 justify-content-lg-center justify-content-center">
                <a href="https://web.telegram.org/k/#@Atanny" class="display-6 text-white icon">
                  <i class="fa-brands fa-telegram"></i>
                </a>
                <a href="https://www.linkedin.com/in/jonathan-mariano-40667824a/" class="display-6 text-white icon">
                  <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="https://www.facebook.com/jonathan.mariano.7140" class="display-6 text-white icon">
                  <i class="fa-brands fa-square-facebook"></i>
                </a>
                <a href="https://www.instagram.com/atan.ny/" class="display-6 text-white icon">
                  <i class="fa-brands fa-square-instagram"></i>
                </a>
                <a href="https://m.me/jonathan.mariano.7140?hash=AbbL2FfuQZRU571p&source=qr_link_share" class="icon display-6 text-white">
                  <i class="fa-brands fa-facebook-messenger"></i>
                </a>
                <a href="mailto:atanatan190@gmail.com" class="display-6 text-white icon">
                  <i class="fa-solid fa-envelope"></i>
                </a>
              </div>
            </div>
             <a
                class="btn btn-light rounded-5 mt-3 icon shadow-sm fw-bold"
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
  .image-container {
    position: relative;
    display: inline-block;
    overflow: hidden;
    border-radius: 20px;
  }

  .image-container img {
    transition: transform 0.4s ease;
    display: block;
  }

  .image-container:hover img {
    transform: scale(1.05);
    filter: brightness(70%);
  }

  .overlay-text {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
    color: #fff;
    text-align: center;
    opacity: 0;
    transition: opacity 0.4s ease;
    padding: 10px;
  }

  .image-container:hover .overlay-text {
    opacity: 1;
  }
</style>
