<template>
  <div class="container mb-5" style="margin-top:2vh;">
    <!-- Header Row -->
    <div class="d-flex justify-content-between align-items-center">
      <div class="row">
        <div class="col-sm-12 col-lg-6 fw-bolder">
          <h1><b>GRAPHIC DESIGNS</b></h1>
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
       { id: 1, number: "1", name: "Digital Artwork 1", image: "../storage/gallery/Poster/art (1).JPG" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 2, number: "2", name: "Digital Artwork 2", image: "../storage/gallery/Poster/art (1).jpeg",  description: "A sleek product landing page layout built for performance and style." },
  { id: 3, number: "3", name: "Digital Artwork 3", image: "../storage/gallery/Poster/art (64).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 4, number: "4", name: "Digital Artwork 4", image: "../storage/gallery/Poster/art (41).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 5, number: "5", name: "Digital Artwork 5", image: "../storage/gallery/Poster/art (1).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 6, number: "6", name: "Digital Artwork 6", image: "../storage/gallery/Poster/art (2).jpeg",  description: "A sleek product landing page layout built for performance and style." },
  { id: 7, number: "7", name: "Digital Artwork 7", image: "../storage/gallery/Poster/art (2).jpg" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 8, number: "8", name: "Digital Artwork 8", image: "../storage/gallery/Poster/art (2).png",  description: "A sleek product landing page layout built for performance and style." },
  { id: 9, number: "9", name: "Digital Artwork 9", image: "../storage/gallery/Poster/art (3).jpg" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 10, number: "10", name: "Digital Artwork 10", image: "../storage/gallery/Poster/art (3).png",  description: "A sleek product landing page layout built for performance and style." },
  { id: 11, number: "11", name: "Digital Artwork 11", image: "../storage/gallery/Poster/art (4).jpg",  description: "A sleek product landing page layout built for performance and style." },
  { id: 12, number: "12", name: "Digital Artwork 12", image: "../storage/gallery/Poster/art (24).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 13, number: "13", name: "Digital Artwork 13", image: "../storage/gallery/Poster/art (4).png",  description: "A sleek product landing page layout built for performance and style." },
  { id: 14, number: "14", name: "Digital Artwork 14", image: "../storage/gallery/Poster/art (23).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 15, number: "15", name: "Digital Artwork 15", image: "../storage/gallery/Poster/art (5).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 16, number: "16", name: "Digital Artwork 16", image: "../storage/gallery/Poster/art (10).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 17, number: "17", name: "Digital Artwork 17", image: "../storage/gallery/Poster/art (6).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 18, number: "18", name: "Digital Artwork 18", image: "../storage/gallery/Poster/art (7).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 19, number: "19", name: "Digital Artwork 19", image: "../storage/gallery/Poster/art (8).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 20, number: "20", name: "Digital Artwork 20", image: "../storage/gallery/Poster/art (17).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 21, number: "21", name: "Digital Artwork 21", image: "../storage/gallery/Poster/art (9).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 22, number: "22", name: "Digital Artwork 22", image: "../storage/gallery/Poster/art (11).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 23, number: "23", name: "Digital Artwork 23", image: "../storage/gallery/Poster/art (12).png",  description: "A sleek product landing page layout built for performance and style." },
  { id: 24, number: "24", name: "Digital Artwork 24", image: "../storage/gallery/Poster/art (13).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 25, number: "25", name: "Digital Artwork 25", image: "../storage/gallery/Poster/art (14).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 26, number: "26", name: "Digital Artwork 26", image: "../storage/gallery/Poster/art (15).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 27, number: "27", name: "Digital Artwork 27", image: "../storage/gallery/Poster/art (16).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 28, number: "28", name: "Digital Artwork 28", image: "../storage/gallery/Poster/art (18).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 29, number: "29", name: "Digital Artwork 29", image: "../storage/gallery/Poster/art (19).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 30, number: "30", name: "Digital Artwork 30", image: "../storage/gallery/Poster/art (20).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 31, number: "31", name: "Digital Artwork 31", image: "../storage/gallery/Poster/art (21).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 32, number: "32", name: "Digital Artwork 32", image: "../storage/gallery/Poster/art (22).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 33, number: "33", name: "Digital Artwork 33", image: "../storage/gallery/Poster/art (25).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 34, number: "34", name: "Digital Artwork 34", image: "../storage/gallery/Poster/art (26).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 35, number: "35", name: "Digital Artwork 35", image: "../storage/gallery/Poster/art (27).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 36, number: "36", name: "Digital Artwork 36", image: "../storage/gallery/Poster/art (28).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 37, number: "37", name: "Digital Artwork 37", image: "../storage/gallery/Poster/art (29).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 38, number: "38", name: "Digital Artwork 38", image: "../storage/gallery/Poster/art (30).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 39, number: "39", name: "Digital Artwork 39", image: "../storage/gallery/Poster/art (31).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 40, number: "40", name: "Digital Artwork 40", image: "../storage/gallery/Poster/art (32).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 41, number: "41", name: "Digital Artwork 41", image: "../storage/gallery/Poster/art (33).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 42, number: "42", name: "Digital Artwork 42", image: "../storage/gallery/Poster/art (34).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 43, number: "43", name: "Digital Artwork 43", image: "../storage/gallery/Poster/art (35).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 44, number: "44", name: "Digital Artwork 44", image: "../storage/gallery/Poster/art (36).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 45, number: "45", name: "Digital Artwork 45", image: "../storage/gallery/Poster/art (37).png" ,  description: "A sleek product landing page layout built for performance and style.",  description: "A sleek product landing page layout built for performance and style."},
  { id: 46, number: "46", name: "Digital Artwork 46", image: "../storage/gallery/Poster/art (38).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 47, number: "47", name: "Digital Artwork 47", image: "../storage/gallery/Poster/art (39).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 48, number: "48", name: "Digital Artwork 48", image: "../storage/gallery/Poster/art (40).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 49, number: "49", name: "Digital Artwork 49", image: "../storage/gallery/Poster/art (42).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 50, number: "50", name: "Digital Artwork 50", image: "../storage/gallery/Poster/art (43).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 51, number: "51", name: "Digital Artwork 51", image: "../storage/gallery/Poster/art (44).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 52, number: "52", name: "Digital Artwork 52", image: "../storage/gallery/Poster/art (45).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 53, number: "53", name: "Digital Artwork 53", image: "../storage/gallery/Poster/art (46).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 54, number: "54", name: "Digital Artwork 54", image: "../storage/gallery/Poster/art (47).png" ,  description: "A sleek product landing page layout built for performance and style.",  description: "A sleek product landing page layout built for performance and style."},
  { id: 55, number: "55", name: "Digital Artwork 55", image: "../storage/gallery/Poster/art (48).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 56, number: "56", name: "Digital Artwork 56", image: "../storage/gallery/Poster/art (49).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 57, number: "57", name: "Digital Artwork 57", image: "../storage/gallery/Poster/art (50).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 58, number: "58", name: "Digital Artwork 58", image: "../storage/gallery/Poster/art (51).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 59, number: "59", name: "Digital Artwork 59", image: "../storage/gallery/Poster/art (52).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 60, number: "60", name: "Digital Artwork 60", image: "../storage/gallery/Poster/art (53).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 61, number: "61", name: "Digital Artwork 61", image: "../storage/gallery/Poster/art (54).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 62, number: "62", name: "Digital Artwork 62", image: "../storage/gallery/Poster/art (55).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 63, number: "63", name: "Digital Artwork 63", image: "../storage/gallery/Poster/art (56).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 64, number: "64", name: "Digital Artwork 64", image: "../storage/gallery/Poster/art (57).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 65, number: "65", name: "Digital Artwork 65", image: "../storage/gallery/Poster/art (58).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 66, number: "66", name: "Digital Artwork 66", image: "../storage/gallery/Poster/art (59).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 67, number: "67", name: "Digital Artwork 67", image: "../storage/gallery/Poster/art (60).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 68, number: "68", name: "Digital Artwork 68", image: "../storage/gallery/Poster/art (61).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 69, number: "69", name: "Digital Artwork 69", image: "../storage/gallery/Poster/art (62).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 70, number: "71", name: "Digital Artwork 71", image: "../storage/gallery/Poster/art (65).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 71, number: "72", name: "Digital Artwork 72", image: "../storage/gallery/Poster/art (66).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 72, number: "74", name: "Digital Artwork 74", image: "../storage/gallery/Poster/art (68).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 73, number: "75", name: "Digital Artwork 75", image: "../storage/gallery/Poster/art (69).png" ,  description: "A sleek product landing page layout built for performance and style."},
  { id: 74, number: "76", name: "Digital Artwork 76", image: "../storage/gallery/Poster/art (70).png" ,  description: "A sleek product landing page layout built for performance and style."}
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
