<template>
  <div class="video-section">
    <!-- 🖼️ Static Background instead of Video -->
    <div class="bg-static"></div>

    <!-- 🧾 Foreground Content -->
    <div class="content p-5 mt-5">
      <h1 class="fw-bolder text-light text-center mb-5"><b>MY ROLE AND EXPERIENCE</b></h1>
      <div class="container bg-transparent rounded-5 p-3 p-2">
        <div class="row g-4">

          <!-- Card 1 -->
          <div class="col-lg-6">
            <div class="card border-0 shadow rounded-5 p-3 h-100" data-aos="fade-right" data-aos-duration="1600">
              <div class="card-body">
                <div class="d-flex align-items-start mb-3">
                  <i class="fa-solid fa-object-group me-3 display-5"></i>
                  <div>
                    <h5 class="mb-0 fw-bold">GRAPHIC DESIGNER</h5>
                    <p class="mb-0 text-light">Transnational E-Business Solutions, Inc. (TESI)</p>
                  </div>
                </div>
                <p>
                  As interns at TESI, our role included assisting senior designers in completing tasks within deadlines. 
                  We supported the design process, contributed where possible, and learned from our mentors throughout the experience.
                </p>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-lg-6">
            <div class="card border-0 shadow rounded-5 p-3 h-100" data-aos="fade-right" data-aos-duration="1600">
              <div class="card-body">
                <div class="d-flex align-items-start mb-3">
                  <i class="fa-solid fa-object-group me-3 display-5"></i>
                  <div>
                    <h5 class="mb-0 fw-bold">GRAPHIC DESIGNER</h5>
                    <p class="mb-0 text-light">Kalawaan SK</p>
                  </div>
                </div>
                <p>
                  I worked as a freelance graphic designer for Kalawaan SK for nearly 6 months, creating posters, announcements, 
                  and congratulatory cards to support community initiatives.
                </p>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-lg-6">
            <div class="card border-0 shadow rounded-5 p-3 h-100" data-aos="fade-right" data-aos-duration="1200">
              <div class="card-body">
                <div class="d-flex align-items-start mb-3">
                  <i class="fa-solid fa-bars-progress me-3 display-5"></i>
                  <div>
                    <h5 class="mb-0 fw-bold">UI/UX DESIGNER</h5>
                    <p class="mb-0 text-light">Transnational E-Business Solutions, Inc. (TESI)</p>
                  </div>
                </div>
                <p>
                  As UI/UX interns at TESI, I contributed to redesigning the OWL Portal and worked on the Thread Outsourcing interface. 
                  Our team improved user experience while continuously learning through feedback and guidance.
                </p>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="col-lg-6">
            <div class="card border-0 shadow rounded-5 p-3 h-100" data-aos="fade-right" data-aos-duration="800">
              <div class="card-body">
                <div class="d-flex align-items-start mb-3">
                  <i class="fa-solid fa-ticket me-3 display-5"></i>
                  <div>
                    <h5 class="mb-0 fw-bold">IT SUPPORT</h5>
                    <p class="mb-0 text-light">Alight Solutions</p>
                  </div>
                </div>
                <p>
                  I interned at Alight Solutions, where we gained valuable knowledge about deployment processes 
                  and learned how server debugging supports system stability and efficiency.
                </p>
              </div>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="col-lg-6">
            <div class="card border-0 shadow rounded-5 p-3 h-100" data-aos="fade-right" data-aos-duration="800">
              <div class="card-body">
                <div class="d-flex align-items-start mb-3">
                  <i class="fa-solid fa-object-group me-3 display-5"></i>
                  <div>
                    <h5 class="mb-0 fw-bold">E-COMMERCE GRAPHIC DESIGN TRAINING</h5>
                    <p class="mb-0 text-light">Star Eye</p>
                  </div>
                </div>
                <p>
                  2 Weeks training, doing Product Photography, Crafting, Designing, and Cleaning Blemishes using tools. 
                </p>
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
  min-height: 100vh;
  overflow: hidden;
}

/* 🖼️ Static background image replacing the video */
.bg-static {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('/images/bg-static.jpg'); /* 🔁 Replace with your image */
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  z-index: -1;
  filter: brightness(50%);
}

.content {
  position: relative;
  z-index: 1;
}

.card {
  background: rgba(255, 255, 255, 0.1);
  color: #fff;
  backdrop-filter: blur(10px);
}

.card p,
.card h5,
.card i {
  color: white;
}
</style>
