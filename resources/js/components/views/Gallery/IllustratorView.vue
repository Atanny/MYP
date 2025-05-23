<template>
  <div class="container mb-5" style="margin-top:2vh;">
    <!-- Header Row -->
    <div class="d-flex justify-content-between align-items-center">
      <div class="row">
        <div class="col-sm-12 col-lg-6 fw-bolder">
          <h1><b>ILLUSTRATION</b></h1>
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

    <!-- Artwork Thumbnails -->
     <div class="row">
      <div
        class="col-md-3 mt-4 h-auto"
        v-for="artwork in paginatedArtworks"
        :key="artwork.id"
        v-if="paginatedArtworks.length > 0"
      >
        <!-- Card with image, title, and description -->
        <div class="card h-100 shadow-sm border-0 rounded-0 "  data-aos="fade-right"
              data-aos-duration="900">
          <a
            :href="artwork.link"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img  @click="viewFullScreen(artwork.image)"
              class="card-img-top rounded-0"
              :src="artwork.image"
              style="object-fit: cover; height: 250px; width: 100%;"
             
            />
          </a>
          <div class="card-body">
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
    <!-- Pagination Controls -->
    <div class="text-center mt-4">
      <button class="btn btn-danger me-2" :disabled="currentPage === 1" @click="currentPage--">Previous</button>
      <span class="mx-2">Page {{ currentPage }} of {{ totalPages }}</span>
      <button class="btn btn-danger ms-2" :disabled="currentPage === totalPages" @click="currentPage++">Next</button>
    </div>

    <!-- Fullscreen Image Modal -->
    <div v-if="selectedImage" class="fullscreen-overlay" @click="selectedImage = null">
      <img :src="selectedImage" class="fullscreen-img" @click.stop />
      <button class="close-btn" @click="selectedImage = null">×</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      artworks: [
        { id: 1, number: "1", name: "Digital Artwork 1", image: "../storage/gallery/Illustrator/art (1).JPG",  description: "A sleek product landing page layout built for performance and style."},
        { id: 5, number: "5", name: "Digital Artwork 5", image: "../storage/gallery/Illustrator/art (1).png",  description: "A sleek product landing page layout built for performance and style." },
        { id: 7, number: "7", name: "Digital Artwork 7", image: "../storage/gallery/Illustrator/art (2).jpg",  description: "A sleek product landing page layout built for performance and style." },
        { id: 8, number: "8", name: "Digital Artwork 8", image: "../storage/gallery/Illustrator/art (2).png",  description: "A sleek product landing page layout built for performance and style." },
        { id: 9, number: "9", name: "Digital Artwork 9", image: "../storage/gallery/Illustrator/art (3).jpg",  description: "A sleek product landing page layout built for performance and style." },
        { id: 10, number: "10", name: "Digital Artwork 10", image: "../storage/gallery/Illustrator/art (3).png",  description: "A sleek product landing page layout built for performance and style." },
        { id: 11, number: "11", name: "Digital Artwork 11", image: "../storage/gallery/Illustrator/art (4).jpg",  description: "A sleek product landing page layout built for performance and style." },
        { id: 13, number: "13", name: "Digital Artwork 13", image: "../storage/gallery/Illustrator/art (4).png",  description: "A sleek product landing page layout built for performance and style." },
        { id: 14, number: "14", name: "Digital Artwork 14", image: "../storage/gallery/Illustrator/art (5).jpg",  description: "A sleek product landing page layout built for performance and style." },
        { id: 15, number: "15", name: "Digital Artwork 15", image: "../storage/gallery/Illustrator/art (5).png",  description: "A sleek product landing page layout built for performance and style." },
        { id: 16, number: "16", name: "Digital Artwork 16", image: "../storage/gallery/Illustrator/art (6).jpg",  description: "A sleek product landing page layout built for performance and style." },
        { id: 17, number: "17", name: "Digital Artwork 17", image: "../storage/gallery/Illustrator/art (6).png",  description: "A sleek product landing page layout built for performance and style." },
        { id: 18, number: "18", name: "Digital Artwork 18", image: "../storage/gallery/Illustrator/art (7).jpg",  description: "A sleek product landing page layout built for performance and style." },
        { id: 19, number: "19", name: "Digital Artwork 19", image: "../storage/gallery/Illustrator/art (7).png",  description: "A sleek product landing page layout built for performance and style." },
        { id: 20, number: "20", name: "Digital Artwork 20", image: "../storage/gallery/Illustrator/art (8).jpg",  description: "A sleek product landing page layout built for performance and style." },
        { id: 21, number: "21", name: "Digital Artwork 21", image: "../storage/gallery/Illustrator/art (8).png",  description: "A sleek product landing page layout built for performance and style." },
        { id: 22, number: "22", name: "Digital Artwork 22", image: "../storage/gallery/Illustrator/art (9).jpg",  description: "A sleek product landing page layout built for performance and style." },
        { id: 23, number: "23", name: "Digital Artwork 23", image: "../storage/gallery/Illustrator/art (9).png",  description: "A sleek product landing page layout built for performance and style." },
        { id: 24, number: "24", name: "Digital Artwork 24", image: "../storage/gallery/Illustrator/art (10).jpg",  description: "A sleek product landing page layout built for performance and style." },
        { id: 25, number: "25", name: "Digital Artwork 25", image: "../storage/gallery/Illustrator/art (10).png",  description: "A sleek product landing page layout built for performance and style." },
        { id: 26, number: "26", name: "Digital Artwork 26", image: "../storage/gallery/Illustrator/art (11).jpg",  description: "A sleek product landing page layout built for performance and style." },
        { id: 27, number: "27", name: "Digital Artwork 27", image: "../storage/gallery/Illustrator/art (11).png",  description: "A sleek product landing page layout built for performance and style." },
        { id: 28, number: "28", name: "Digital Artwork 28", image: "../storage/gallery/Illustrator/art (12).jpg",  description: "A sleek product landing page layout built for performance and style." },
        { id: 29, number: "29", name: "Digital Artwork 29", image: "../storage/gallery/Illustrator/art (12).png",  description: "A sleek product landing page layout built for performance and style." },
        { id: 30, number: "30", name: "Digital Artwork 30", image: "../storage/gallery/Illustrator/art (13).jpg",  description: "A sleek product landing page layout built for performance and style." },
        { id: 31, number: "31", name: "Digital Artwork 31", image: "../storage/gallery/Illustrator/art (14).jpg",  description: "A sleek product landing page layout built for performance and style." },
      ],
      currentPage: 1,
      pageSize: 8,
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
      this.selectedImage = imagePath;
    },
  },
};
</script>

<style scoped>
.fullscreen-overlay {
  position: fixed;
  top: 0;
  left: 0;
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
