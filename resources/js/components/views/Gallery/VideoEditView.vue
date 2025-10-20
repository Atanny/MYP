<template>
  <div class="scale-wrapper">
    <div class="w-100 px-lg-0 py-lg-0">
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
              <h1 class="fw-bolder mb-0" style="color: #ff8b00;"><b>VIDEOS</b></h1>
              <h6 class="text-muted">Used Application for Illustrating: <br> <b class="mt-3 badge bg-dark">CAPCUT</b> <b class="badge bg-dark">PREMIER PRO</b></h6>
         
            </div>
          </div>
        </div>
      </div>
<div class="col-sm-12 col-lg-auto mt-3 d-inline-block">
             <router-link to="/">
                <button class="btn btn-success rounded-pill d-inline-block d-lg-none me-2">
                  <i class="fa-solid fa-home"></i>
                </button>
              </router-link>
            <button class="btn btn-success d-lg-none rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#navButtons" aria-expanded="false" aria-controls="navButtons">
                <i class="fa fa-bars"></i> See More Description
            </button>
            <!-- Collapsible container -->
            <div class="collapse d-lg-flex flex-wrap" id="navButtons">
              <router-link to="/animation" active-class="active-link">
                <button class="btn btn-success rounded-5 me-1 mt-2">ANIMATION</button>
              </router-link>
              <router-link to="/illustrator" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">ILLUSTRATION</button>
              </router-link>
              <router-link to="/digital-arts" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">DIGITAL ARTS</button>
              </router-link>
              <router-link to="/graphic-design" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">GRAPHIC DESIGNS</button>
              </router-link>
               <router-link to="/photography" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">PHOTOGRAPHY</button>
              </router-link>
              <router-link to="/web-design" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">WEB DESIGNS</button>
              </router-link>
              <router-link to="/website" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">WEBSITES</button>
              </router-link>
               <router-link to="/videos" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">VIDEOS</button>
              </router-link>
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
          <div class="h-100 shadow d-flex flex-column rounded-5">
            <div class="position-relative video-container rounded-5" style="height: 250px;">
              <video
                class="card-animation w-100 h-100 border-0 rounded-5"
                :src="artwork.videoSrc"
                style="object-fit: cover;"
                loop
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
          </div>
        </div>

        <div v-else>
          <div class="text-center mt-5 card p-3 bg-light shadow-sm">
            <p class="text-muted mt-3">No artworks available yet.</p>
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
      artworks: [
        {
          id: 1,
          name: "WALK CYCLE TRIANGLE",
          videoSrc: "./images/gallery/video/ADS 1.mp4",
          description: "School project freelance.",
        },
         {
          id: 2,
          name: "WALK CYCLE TRIANGLE",
          videoSrc: "./images/gallery/video/ADS 2.mp4",
          description: "School project freelance.",
        },
         {
          id: 3,
          name: "WALK CYCLE TRIANGLE",
          videoSrc: "./images/gallery/video/ADS 3.mp4",
          description: "School project freelance.",
        },
      ],
      currentPage: 1,
      pageSize: 1000,
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
      const video = this.$refs['video_' + id][0];
      if (video.paused) {
        video.play();
      } else {
        video.pause();
      }
    },

    toggleFullscreen(id) {
      const video = this.$refs['video_' + id][0];
      const container = video.closest('.video-container');

      // Add a class when fullscreen is active
      const onFullscreenChange = () => {
        if (document.fullscreenElement === container) {
          container.classList.add('fullscreen-video');
          video.style.objectFit = 'contain';
          video.style.height = '100%';
          video.style.width = '100%';
        } else {
          container.classList.remove('fullscreen-video');
          video.style.objectFit = 'cover';
          video.style.height = '100%';
          video.style.width = '100%';
        }
      };

      document.removeEventListener('fullscreenchange', onFullscreenChange);
      document.addEventListener('fullscreenchange', onFullscreenChange);

      // Trigger fullscreen
      if (container.requestFullscreen) {
        container.requestFullscreen();
      } else if (container.mozRequestFullScreen) {
        container.mozRequestFullScreen();
      } else if (container.webkitRequestFullscreen) {
        container.webkitRequestFullscreen();
      } else if (container.msRequestFullscreen) {
        container.msRequestFullscreen();
      }
    },
  },
};
</script>
<style>
.scale-wrapper {
  padding: 0 10vw;
  margin-top: 10vh;
  max-width: 100vw;
  box-sizing: border-box;
  margin-bottom: 20vh;
}

/* Default container for videos */
.video-container {
  height: 250px;
  overflow: hidden;
}

/* When in fullscreen */
.fullscreen-video {
  height: 100%;
  width: 100%;
  background-color: black;
}

.fullscreen-video video {
  object-fit: contain !important;
  background-color: black;
}

</style>
