<template>
  
  <div class="container mb-5" style="margin-top:2vh;">
     
    <div class="d-flex justify-content-between align-items-center">
      <div class="row">
        <div class="col-sm-12 col-lg-6 fw-bolder">
          <h1><b>ANIMATION</b></h1>
        </div>

        <div class="col-sm-12 col-lg-auto">
          <div class="d-flex flex-wrap">
            <router-link to="/" class="me-1 mt-1">
          <button class="btn btn-primary rounded-0"><i class="fa fa-home"></i> Return Home</button>
           </router-link>
            <router-link to="/animation" class="me-1 mt-1" active-class="active-link">
              <button class="btn btn-danger">ANIMATION</button>
            </router-link>
            <router-link to="/illustrator" class="me-1 mt-1" active-class="active-link">
              <button class="btn btn-danger">ILLUSTRATION</button>
            </router-link>
            <router-link to="/digital-arts" class="me-1 mt-1" active-class="active-link">
              <button class="btn btn-danger">DIGITAL ARTS</button>
            </router-link>
            <router-link to="/graphic-design" class="me-1 mt-1" active-class="active-link">
              <button class="btn btn-danger">GRAPHIC DESIGNS</button>
            </router-link>
            <router-link to="/web-design" class="me-1 mt-1" active-class="active-link">
              <button class="btn btn-danger">WEB DESIGNS</button>
            </router-link>
            <router-link to="/website" active-class="active-link">
              <button class="btn btn-danger mt-1">WEBSITES</button>
            </router-link>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
  <!-- Display Artworks -->
  <div
    class="col-md-3 mt-5"
    v-for="artwork in paginatedArtworks"
    :key="artwork.id"
    v-if="paginatedArtworks.length > 0"
  >
    <div class="card rounded-0 h-100 d-flex flex-column" style="height: 100%;">
      <!-- Fixed height for media -->
      <div class="position-relative rounded-0" style="height: 250px;">
        <video
          class="rounded-0 shadow-sm border-0 w-100 h-100 img-top"
          :src="artwork.videoSrc"
          style="object-fit: cover;"
          loop
          muted
          data-aos="fade-right"
          data-aos-duration="900"
          :ref="'video_' + artwork.id"
        ></video>

        <!-- Play Button -->
        <button
          class="btn btn-danger position-absolute top-50 start-50 translate-middle shadow"
          @click="togglePlay(artwork.id)"
        >
          <i class="fa-solid fa-play"></i>
        </button>

        <!-- Fullscreen Button -->
        <button
          class="btn btn-danger position-absolute top-0 end-0 m-2"
          @click="toggleFullscreen(artwork.id)"
        >
          <i class="fa-solid fa-expand"></i>
        </button>
      </div>

      <!-- Card Body -->
      <div class="card-body d-flex flex-column " style="min-height: 50px;">
        <h6 class="fw-bold mb-1">{{ artwork.number }} - {{ artwork.name }}</h6>
        <p class="card-text text-muted small">{{ artwork.description }}</p>
      </div>
    </div>
  </div>

  <div v-else>
    <div class="text-center mt-5 card p-3 bg-light shadow-sm">
      <p class="text-muted mt-3">No artworks available yet.</p>
    </div>
  </div>
</div>


    <div class="text-center mt-4">
      <button class="btn btn-danger me-2" :disabled="currentPage === 1" @click="currentPage--">Previous</button>
      <span class="mx-2">Page {{ currentPage }} of {{ totalPages }}</span>
      <button class="btn btn-danger ms-2" :disabled="currentPage === totalPages" @click="currentPage++">Next</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      // Mocked data for artworks (No backend required)
      artworks: [
        {
          id: 1,
          number: "001",  // Fixed number (without leading zeros)
          name: "WALK CYCLE TRIANGLE",
          videoSrc: "./storage/gallery/Animation/1 (1).mp4", // Replace with actual video path
          description: "School project freelance.",
        },
        {
          id: 2,
          number: "002",  // Fixed number (without leading zeros)
          name: "WALK CYCLE ASSASIN",
          videoSrc: "./storage/gallery/Animation/1 (2).mp4", // Replace with actual video path
          description: "School project freelance.",
        },
        {
          id: 3,
          number: "003",  // Fixed number (without leading zeros)
          name: "CAT",
          videoSrc: "./storage/gallery/Animation/1 (3).mp4", // Replace with actual video path
          description: "This is my activity for the 2nd quarter.",
        },
        {
          id: 4,
          number: "004",  // Fixed number (without leading zeros)
          name: "RAINING IN MANILA LYRICS",
          videoSrc: "./storage/gallery/Animation/1 (4).mp4",
          description: "This is inspired by the song Raining in Manila.",
        },
        {
          id: 5,
          number: "005",  // Fixed number (without leading zeros)
          name: "MORPHING ANIMATION",
          videoSrc: "./storage/gallery/Animation/1 (5).mp4", // Replace with actual video path
          description: "This school activity help me to understand the morphing animation.",
        },
        {
          id: 6,
          number: "006",  // Fixed number (without leading zeros)
          name: "WALK CYCLE EGG",
          videoSrc: "./storage/gallery/Animation/1 (6).mp4", // Replace with actual video path
          description: "School project freelance.",
        },
        {
          id: 7,
          number: "007",  // Fixed number (without leading zeros)
          name: "SOYA",
          videoSrc: "./storage/gallery/Animation/1 (7).mp4", // Replace with actual video path
          description: "The SOYA is a youth fellowship, this animation is for introducing the SOYA itself.",
        },
        {
          id: 8,
          number: "008",  // Fixed number (without leading zeros)
          name: "WALK CYCLE ALIEN",
          videoSrc: "./storage/gallery/Animation/1 (8).mp4", // Replace with actual video path
          description: "School project freelance.",
        },
        {
          id: 9,
          number: "009",  // Fixed number (without leading zeros)
          name: "ESTRANGHERO",
          videoSrc: "./storage/gallery/Animation/1 (9).mp4", // Replace with actual video path
          description: "This animation was created using adobe animate.",
        },
        {
          id: 10,
          number: "010",  // Fixed number (without leading zeros)
          name: "FAN AND BLINKING ANIMATION",
          videoSrc: "./storage/gallery/Animation/1 (10).mp4", // Replace with actual video path
          description: "I created this due to my curiosity about how to animate a fan and blinking.",
        },
        {
          id: 11,
          number: "011",  // Fixed number (without leading zeros)
          name: "BUSKING",
          videoSrc: "./storage/gallery/Animation/1 (1).3gp", // Replace with actual video path
          description: "This is my first animation that i created using krita.",
        },
        {
          id: 12,
          number: "012",  // Fixed number (without leading zeros)
          name: "RAIN ANIMATION",
          videoSrc: "./storage/gallery/Animation/1 (1).MOV", // Replace with actual video path
          description: "No Description.",
        },
        // Add more mock artworks as needed
      ],
      currentPage: 1,
      pageSize: 8,
    };
  },

  computed: {
    animationArtworks() {
      return this.artworks;
    },

    totalPages() {
      return Math.ceil(this.animationArtworks.length / this.pageSize);
    },

    paginatedArtworks() {
      const start = (this.currentPage - 1) * this.pageSize;
      const end = start + this.pageSize;
      return this.animationArtworks.slice(start, end);
    },
  },

  methods: {
    togglePlay(id) {
      const video = this.$refs['video_' + id];
      if (video && video[0]) {
        if (video[0].paused) {
          video[0].play();
        } else {
          video[0].pause();
        }
      }
    },

    toggleFullscreen(id) {
      const videoElement = this.$refs['video_' + id][0];
      const videoContainer = videoElement.closest('.position-relative');

      // Fullscreen API compatibility
      if (videoContainer.requestFullscreen) {
        videoContainer.requestFullscreen();
      } else if (videoContainer.mozRequestFullScreen) { // Firefox
        videoContainer.mozRequestFullScreen();
      } else if (videoContainer.webkitRequestFullscreen) { // Chrome, Safari, Opera
        videoContainer.webkitRequestFullscreen();
      } else if (videoContainer.msRequestFullscreen) { // IE/Edge
        videoContainer.msRequestFullscreen();
      }
    },
  },
};
</script>

<style scoped>
/* Add custom styles if needed */
</style>
