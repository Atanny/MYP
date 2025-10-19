<template>
  <div class="video-section">
    <!-- Static Background -->
    <div class="bg-static"></div>

    <div class="content p-5 mt-5">
      <h1 class="fw-bolder text-light text-center mb-5"><b>MY ROLE AND EXPERIENCE</b></h1>
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
            <div class="card border-0 shadow rounded-5 h-100 text-center p-4">
              <!-- Icon Only -->
              <i :class="role.icon + ' display-4 mt-3 mb-3 text-light'"></i>

              <h5 class="mb-0 fw-bold">{{ role.title }}</h5>
              <p class="mb-3 text-light">{{ role.company }}</p>
              <p>{{ role.description }}</p>
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
              company: 'Transnational e-Business Solutions, Inc',
              icon: 'fa-solid fa-object-group ', // changed icon
              description: 'Assisted senior designers, supported the design process, and learned from mentors.',
              duration: 1600,
            },
            {
              title: 'GRAPHIC DESIGNER',
              company: 'Kalawaan SK',
              icon: 'fa-solid fa-object-group ', // changed icon
              description: 'Freelance designer for 6 months creating posters, announcements, and cards.',
              duration: 1600,
            },
            {
              title: 'UI/UX DESIGNER',
              company: 'Transnational e-Business Solutions, Inc',
              icon: 'fa-solid fa-pencil-ruler',
              description: 'Redesigned OWL Portal and Thread Outsourcing interface improving UX.',
              duration: 1200,
            },
            {
              title: 'IT SUPPORT',
              company: 'Alight Solutions',
              icon: 'fa-solid fa-headset',
              description: 'Gained knowledge in deployment processes and server debugging.',
              duration: 800,
            },
            {
              title: 'E-COMMERCE GRAPHIC DESIGN',
              company: 'Star Eye',
              icon: 'fa-solid fa-laptop-code',
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
