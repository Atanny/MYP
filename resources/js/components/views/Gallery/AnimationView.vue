<template>
  <div class="scale-wrapper ">
    <div class="w-100 px-3 py-4 px-lg-0 py-lg-0">
      <!-- Header Row -->
      <div class="d-flex justify-content-between align-items-center">
        <div class="row w-100">
          

            <div class="col-sm-12 col-lg-12 fw-bolder mt-5 d-flex align-items-center justify-content-start">
              <div class="d-flex flex-wrap justify-content-start me-2 mb-5">
              <router-link to="/">
                <button class="btn btn-success rounded-pill d-none d-lg-block">
                  <i class="fa-solid fa-home"></i>
                </button>
              </router-link>
              
            </div>

            <div>
               <h1 class="fw-bolder mb-0"><b>ANIMATION</b></h1>
               <h6 class="text-muted">Used Application for Animating: <br> <b class="mt-3 badge bg-dark">ADOBE ANIMATE CC</b> <b class="badge bg-dark">KRITA</b></h6>
            </div>
            </div>
        




          <div class="col-sm-12 col-lg-auto mt-3 d-inline-block">
             <router-link to="/">
                <button class="btn btn-success rounded-pill d-inline-block d-lg-none me-2">
                  <i class="fa-solid fa-home"></i>
                </button>
              </router-link>
            <button class="btn btn-success d-lg-none " type="button" data-bs-toggle="collapse" data-bs-target="#navButtons" aria-expanded="false" aria-controls="navButtons">
                <i class="fa fa-bars"></i> See More Description
            </button>
            <!-- Collapsible container -->
            <div class="collapse d-lg-flex flex-wrap" id="navButtons">
              <router-link to="/animation" active-class="active-link">
                <button class="btn btn-success me-1 mt-2">ANIMATION</button>
              </router-link>
              <router-link to="/illustrator" active-class="active-link">
                <button class="btn btn-success me-1 mt-2">ILLUSTRATION</button>
              </router-link>
              <router-link to="/digital-arts" active-class="active-link">
                <button class="btn btn-success me-1 mt-2">DIGITAL ARTS</button>
              </router-link>
              <router-link to="/graphic-design" active-class="active-link">
                <button class="btn btn-success me-1 mt-2">GRAPHIC DESIGNS</button>
              </router-link>
              <router-link to="/web-design" active-class="active-link">
                <button class="btn btn-success me-1 mt-2">WEB DESIGNS</button>
              </router-link>
              <router-link to="/website" active-class="active-link">
                <button class="btn btn-success me-1 mt-2">WEBSITES</button>
              </router-link>
            </div>
          </div>
        </div>
      </div>

      <!-- Artwork Grid -->
      <div class="row">
        <div
          class="col-12 col-sm-6 col-md-4 col-lg-3 mt-5"
          v-for="(artwork, index) in paginatedArtworks"
          :key="artwork.id"
          v-if="paginatedArtworks.length > 0"
          data-aos="fade-up"
          :data-aos-delay="index * 100"
          data-aos-duration="800"
        >
          <div class="card rounded h-100 shadow-lg d-flex flex-column">
            <div class="position-relative rounded" style="height: 250px;">
              <video
                class="rounded w-100 h-100 border-0"
                :src="artwork.videoSrc"
                style="object-fit: cover;"
                loop
                muted
                :ref="'video_' + artwork.id"
              ></video>

              <!-- Play -->
              <button
                class="btn btn-success shadow position-absolute top-50 start-50 translate-middle"
                @click="togglePlay(artwork.id)"
              >
                <i class="fa-solid fa-play"></i>
              </button>

              <!-- Fullscreen -->
              <button
                class="btn btn-success position-absolute top-0 end-0 m-2"
                @click="toggleFullscreen(artwork.id)"
              >
                <i class="fa-solid fa-expand"></i>
              </button>
            </div>

            <!-- Card Body -->
            <div class="card-body d-flex flex-column">
              <h6 class="fw-bold mb-1">{{ artwork.number }} - {{ artwork.name }}</h6>
              <p class="card-text text-muted small flex-grow-1">{{ artwork.description }}</p>
            </div>
          </div>
        </div>

        <div v-else>
          <div class="text-center mt-5 card p-3 bg-light shadow-sm">
            <p class="text-muted mt-3">No artworks available yet.</p>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <div class="text-center mt-4">
        <button
          class="btn btn-success me-2"
          :disabled="currentPage === 1"
          @click="currentPage--"
        >
          Previous
        </button>
        <span class="mx-2">Page {{ currentPage }} of {{ totalPages }}</span>
        <button
          class="btn btn-success ms-2"
          :disabled="currentPage === totalPages"
          @click="currentPage++"
        >
          Next
        </button>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    
    return {
      selectedImage: null,
        currentImageIndex: 0,
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
          videoSrc: "./images/gallery/Animation/1 (1).mov", // Replace with actual video path
          description: "No Description.",
        },
     
      ],
      currentPage: 1,
      pageSize: 16,
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

<style>
.scale-wrapper {
  transform: scale(0.85);
  transform-origin: top center;
  margin-top: 10vh;
  margin-bottom: 0 !important;
}


/* Remove scale on small screens (mobile-first) */
@media screen and (max-width: 576px) {
  .scale-wrapper {
    transform: none;
     transform-origin: top center;
      transform: scale(0.85);
  }
}


</style>
