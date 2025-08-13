<template>
  <div v-if="selectedImage" class="border-0 rounded fullscreen-overlay" @click="selectedImage = null">
  <img :src="selectedImage" class="border-0 rounded fullscreen-img" @click.stop />

  <!-- Left Arrow -->
  <button class="nav-btn left-btn" @click.stop="previousImage">‹</button>

  <!-- Right Arrow -->
  <button class="nav-btn right-btn" @click.stop="nextImage">›</button>

  <!-- Close Button -->
  <button class="close-btn" @click="selectedImage = null">×</button>
</div>
  <div class="scale-wrapper ">
    <div class="w-100  px-lg-0 py-lg-0">
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
               <h1 class="fw-bolder mb-0"><b>PHOTOGRAPHY</b></h1>
               <h6 class="text-muted">Used Application for Illustrating: <br> <b class="mt-3 badge bg-dark">ADOBE LIGHTROOM</b> <b class="badge bg-dark">CULLING</b></h6>
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

            <div class="collapse d-lg-flex flex-wrap" id="navButtons">
              <router-link to="/animation" active-class="active-link">
                <button class="btn btn-success me-1 mt-2">ANIMATION</button>
              </router-link>
              <router-link to="/lowkey" active-class="active-link">
                <button class="btn btn-success me-1 mt-2">ILLUSTRATION</button>
              </router-link>
              <router-link to="/digital-arts" active-class="active-link">
                <button class="btn btn-success me-1 mt-2">DIGITAL ARTS</button>
              </router-link>
              <router-link to="/graphic-design" active-class="active-link">
                <button class="btn btn-success me-1 mt-2">GRAPHIC DESIGNS</button>
              </router-link>
                 <router-link to="/photography" active-class="active-link">
                <button class="btn btn-success me-1 mt-2">PHOTOGRAPHY</button>
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
          class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4"
          v-for="(artwork, index) in paginatedArtworks"
          :key="artwork.id"
          v-if="paginatedArtworks.length > 0"
          data-aos="fade-up"
          :data-aos-delay="index * 100"
          data-aos-duration="800"
        >
          <div class="card card-animation h-100 shadow border-0 rounded">
            <a
              :href="artwork.link"
              target="_blank"
              rel="noopener noreferrer"
              @click.prevent="viewFullScreen(artwork.image)"
            >
              <img
                class="card-img-top"
                :src="artwork.image"
                style="object-fit: cover; height: 250px; width: 100%;"
              />
            </a>
            <!-- <div class="card-body d-flex flex-column">
              <h6 class="fw-bold mb-1">{{ artwork.number }} - {{ artwork.name }}</h6>
              <p class="card-text text-muted small flex-grow-1">{{ artwork.description }}</p>
            </div> -->
          </div>
        </div>

        <div v-else>
          <div class="text-center mt-5 card p-3 bg-light shadow-sm">
            <p class="text-muted mt-3">No artworks available yet.</p>
          </div>
        </div>
      </div>

      <!-- Pagination Controls -->
      <!-- <div class="text-center mt-4">
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
      </div> -->

      <!-- Fullscreen Modal -->
     
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
        { id: 1, number: "1", name: "CONVINNIENCE STORE", image: "../images/lowkey/1.jpg",  description: "Inspired by the song of Dilaw."},
         { id: 2, number: "2", name: "CONVINNIENCE STORE", image: "../images/lowkey/1 (1).jpg",  description: "Inspired by the song of Dilaw."},
        { id: 3, number: "3", name: "SILENT NIGHT", image: "../images/lowkey/1 (2).jpg", description: "Inspired by the song of Dilaw."},
         { id: 3, number: "3", name: "SILENT NIGHT", image: "../images/lowkey/1 (3).jpg", description: "Inspired by the song of Dilaw."},
          { id: 3, number: "3", name: "SILENT NIGHT", image: "../images/lowkey/1 (4).jpg", description: "Inspired by the song of Dilaw."},
         { id: 3, number: "3", name: "SILENT NIGHT", image: "../images/lowkey/1 (5).jpg", description: "Inspired by the song of Dilaw."},
             { id: 3, number: "3", name: "SILENT NIGHT", image: "../images/lowkey/1 (6).jpg", description: "Inspired by the song of Dilaw."},
         { id: 3, number: "3", name: "SILENT NIGHT", image: "../images/lowkey/1 (7).jpg", description: "Inspired by the song of Dilaw."},
         { id: 3, number: "3", name: "SILENT NIGHT", image: "../images/lowkey/1 (8).jpg", description: "Inspired by the song of Dilaw."},
         { id: 3, number: "3", name: "SILENT NIGHT", image: "../images/lowkey/1 (9).jpg", description: "Inspired by the song of Dilaw."},
         { id: 3, number: "3", name: "SILENT NIGHT", image: "../images/lowkey/1 (10).jpg", description: "Inspired by the song of Dilaw."},
        
       ],
      currentPage: 1,
      pageSize: 1000,
      selectedImage: null, // Fullscreen state
    };
  },
  computed: {
    totalPages() {
      return Math.ceil(this.artworks.length / this.pageSize);
    },
    paginatedArtworks() {
      const start = (this.currentPage - 1) * this.pageSize;
      const end = start + this.pageSize;
      return this.artworks.slice(start, end);
    },
  },
   
methods: {
  viewFullScreen(imagePath) {
    const index = this.paginatedArtworks.findIndex(d => d.image === imagePath);
    if (index !== -1) {
      this.selectedImage = imagePath;
      this.currentImageIndex = index;
    }
  },
  nextImage() {
    if (this.currentImageIndex < this.paginatedArtworks.length - 1) {
      this.currentImageIndex++;
      this.selectedImage = this.paginatedArtworks[this.currentImageIndex].image;
    }
  },
  previousImage() {
    if (this.currentImageIndex > 0) {
      this.currentImageIndex--;
      this.selectedImage = this.paginatedArtworks[this.currentImageIndex].image;
    }
  },
}
};
</script>

<style scoped>
.fullscreen-overlay {
  position: fixed;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.95);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 2000;
}

.fullscreen-img {
  max-width: 90%;
  max-height: 90%;
}

.close-btn {
  position: absolute;
  top: 20px;
  right: 30px;
  font-size: 3rem;
  background: none;
  border: none;
  color: white;
  cursor: pointer;
}
</style>
