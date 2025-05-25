<template>
  
  <div class="container mb-5" style="margin-top:2vh;">
     
    <div class="d-flex justify-content-between align-items-center">
      <div class="row">
        <div class="col-sm-12 col-lg-6 fw-bolder">
          <h1><b>ANIMATION</b></h1>
        </div>

    <div class="col-sm-12 col-lg-auto mt-3  d-inline-block">
 

          <div class="d-flex flex-wrap justify-content-start justify-content-lg-start mb-3">
            <router-link to="/" class="">
              <button class="btn btn-success rounded-pill d-inline-block"><i class="fa fa-home"></i> Return Home</button>
            </router-link>
            <button class="btn btn-success  d-lg-none d-inline-block  ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navButtons" aria-expanded="false" aria-controls="navButtons">
            <i class="fa fa-bars"></i>
            </button>
            
          </div>
          



  <!-- Collapsible container for the buttons -->
          <div class="collapse d-lg-flex flex-wrap" id="navButtons">
          
            <router-link to="/animation" class="" active-class="active-link">
              <button class="btn btn-success me-1 mt-2">ANIMATION</button>
            </router-link>
            <router-link to="/illustrator" class="" active-class="active-link">
              <button class="btn btn-success me-1 mt-2">ILLUSTRATION</button>
            </router-link>
            <router-link to="/digital-arts" class="" active-class="active-link">
              <button class="btn btn-success me-1 mt-2">DIGITAL ARTS</button>
            </router-link>
            <router-link to="/graphic-design" class="" active-class="active-link">
              <button class="btn btn-success me-1 mt-2">GRAPHIC DESIGNS</button>
            </router-link>
            <router-link to="/web-design" class="" active-class="active-link">
              <button class="btn btn-success me-1 mt-2 ">WEB DESIGNS</button>
            </router-link>
            <router-link to="/website" active-class="active-link">
              <button class="btn btn-success me-1 mt-2 ">WEBSITES</button>
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
    <div class="card rounded h-100 d-flex flex-column shadow-lg" style="height: 100%;"   data-aos="fade-right"
          data-aos-duration="900">
      <!-- Fixed height for media -->
      <div class="position-relative rounded" style="height: 250px;">
        <video
          class="rounded  border-0 w-100 h-100 img-top"
          :src="artwork.videoSrc"
          style="object-fit: cover;"
          loop
          muted
        
          :ref="'video_' + artwork.id"
        ></video>

        <!-- Play Button -->
        <button
          class="btn btn-success me-1 mt-2 position-absolute top-50 start-50 translate-middle shadow"
          @click="togglePlay(artwork.id)"
        >
          <i class="fa-solid fa-play"></i>
        </button>

        <!-- Fullscreen Button -->
        <button
          class="btn btn-success me-1 mt-2 position-absolute top-0 end-0 m-2"
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
      <button class="btn btn-success me-1 mt-2 me-2" :disabled="currentPage === 1" @click="currentPage--">Previous</button>
      <span class="mx-2">Page {{ currentPage }} of {{ totalPages }}</span>
      <button class="btn btn-success me-1 mt-2 ms-2" :disabled="currentPage === totalPages" @click="currentPage++">Next</button>
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
          number: "1",  // Fixed number (without leading zeros)
          name: "WALK CYCLE TRIANGLE",
          videoSrc: "./images/gallery/Animation/1 (1).mp4", // Replace with actual video path
          description: "School project freelance.",
        },
        {
          id: 2,
          number: "2",  // Fixed number (without leading zeros)
          name: "WALK CYCLE ASSASIN",
          videoSrc: "./images/gallery/Animation/1 (2).mp4", // Replace with actual video path
          description: "School project freelance.",
        },
        {
          id: 3,
          number: "3",  // Fixed number (without leading zeros)
          name: "CAT",
          videoSrc: "./images/gallery/Animation/1 (3).mp4", // Replace with actual video path
          description: "This is my activity for the 2nd quarter.",
        },
        {
          id: 4,
          number: "4",  // Fixed number (without leading zeros)
          name: "RAINING IN MANILA LYRICS",
          videoSrc: "./images/gallery/Animation/1 (4).mp4",
          description: "This is inspired by the song Raining in Manila.",
        },
        {
          id: 5,
          number: "5",  // Fixed number (without leading zeros)
          name: "MORPHING ANIMATION",
          videoSrc: "./images/gallery/Animation/1 (5).mp4", // Replace with actual video path
          description: "This school activity help me to understand the morphing animation.",
        },
        {
          id: 6,
          number: "6",  // Fixed number (without leading zeros)
          name: "WALK CYCLE EGG",
          videoSrc: "./images/gallery/Animation/1 (6).mp4", // Replace with actual video path
          description: "School project freelance.",
        },
        {
          id: 7,
          number: "7",  // Fixed number (without leading zeros)
          name: "SOYA",
          videoSrc: "./images/gallery/Animation/1 (7).mp4", // Replace with actual video path
          description: "The SOYA is a youth fellowship, this animation is for introducing the SOYA itself.",
        },
        {
          id: 8,
          number: "8",  // Fixed number (without leading zeros)
          name: "WALK CYCLE ALIEN",
          videoSrc: "./images/gallery/Animation/1 (8).mp4", // Replace with actual video path
          description: "School project freelance.",
        },
        {
          id: 9,
          number: "9",  // Fixed number (without leading zeros)
          name: "ESTRANGHERO",
          videoSrc: "./images/gallery/Animation/1 (9).mp4", // Replace with actual video path
          description: "This animation was created using adobe animate.",
        },
        {
          id: 10,
          number: "10",  // Fixed number (without leading zeros)
          name: "FAN AND BLINKING ANIMATION",
          videoSrc: "./images/gallery/Animation/1 (10).mp4", // Replace with actual video path
          description: "I created this due to my curiosity about how to animate a fan and blinking.",
        },
        {
          id: 11,
          number: "11",  // Fixed number (without leading zeros)
          name: "BUSKING",
          videoSrc: "./images/gallery/Animation/1 (1).3gp", // Replace with actual video path
          description: "This is my first animation that i created using krita.",
        },
        {
          id: 12,
          number: "12",  // Fixed number (without leading zeros)
          name: "RAIN ANIMATION",
          videoSrc: "./images/gallery/Animation/1 (1).MOV", // Replace with actual video path
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
