<template>
  <div class="video-section">
    <!-- Static Background -->
    <div class="bg-static"></div>

    <div class="content p-5 mt-5">
      <h1 class="fw-bolder text-light text-center "><b>MY ROLE & EXPERIENCE</b></h1>
      <p class="text-center mb-5 text-white">A summary of my professional journey and key contributions.</p>
      <div class="container bg-transparent rounded-5 p-3">
        <div class="row g-4">

          <!-- Card Template -->
          <div
            v-for="(role, index) in roles"
            :key="index"
            class="col-lg-4 col-md-6 col-sm-12"
            :data-aos="'fade-right'"
            :data-aos-duration="role.duration"
          >
            <div class="card border-0 shadow rounded-5 h-100 text-center p-5">
              <!-- Icon Only -->
              <i :class="role.icon + ' display-4 mt-3 mb-3 text-light'"></i>

              <h5 class="mb-0">{{ role.title }} </h5>
              <p class=" text-light border rounded-5 mt-2 p-1 fw-bold">{{ role.company }} - {{ role.year }}</p>
              <hr class="mb-1 mt-1" style="border: none; height: 2px; background-color: white; border-radius: 5px;"> 
              <p class="mt-2">{{ role.description }}</p>
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
      roles: [
            {
              title: 'GRAPHIC DESIGNER',
              company: 'Tesi',
              year: '3 months',
              icon: 'fa-solid fa-object-group ', // changed icon
              description: 'Assisted senior designers, supported the design process, and learned from mentors.',
              duration: 1600,
            },
            {
              title: 'GRAPHIC DESIGNER',
              company: 'Kalawaan SK',
              year: '6 months',
              icon: 'fa-solid fa-object-group ', // changed icon
              description: 'Freelance designer for 6 months creating posters, announcements, and cards.',
              duration: 1600,
            },
            {
              title: 'UI/UX DESIGNER',
              company: 'Tesi',
              year: '3 months',
              icon: 'fa-solid fa-toggle-on',
              description: 'Redesigned OWL Portal and Thread Outsourcing interface improving UX.',
              duration: 1200,
            },
            {
              title: 'IT SUPPORT',
              company: 'Alight Solutions',
              year: '2 months',
              icon: 'fa-solid fa-headset',
              description: 'Gained knowledge in deployment processes and server debugging.',
              duration: 800,
            },
            {
              title: 'E-COMMERCE GRAPHIC DESIGN',
              company: 'Star Eye',
              year: '2 weeks',
              icon: 'fa-solid fa-cart-shopping',
              description: '2 Weeks training: Product Photography, Crafting, Designing, Cleaning Blemishes.',
              duration: 800,
            },
          ],

    };
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
.card h5 {
  color: white;
}
</style>
