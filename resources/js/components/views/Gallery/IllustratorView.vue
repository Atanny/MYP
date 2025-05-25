<template>
  <div class="container mb-5" style="margin-top:2vh;">
    <!-- Header Row -->
    <div class="d-flex justify-content-between align-items-center">
      <div class="row">
        <div class="col-sm-12 col-lg-6 fw-bolder">
          <h1><b>ILLUSTRATION</b></h1>
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

    <!-- Artwork Thumbnails -->
     <div class="row">
      <div
        class="col-md-3 mt-4 h-auto"
        v-for="artwork in paginatedArtworks"
        :key="artwork.id"
        v-if="paginatedArtworks.length > 0"
      >
        <!-- Card with image, title, and description -->
        <div class="card h-100 shadow-lg border-0 rounded "  data-aos="fade-right"
              data-aos-duration="900">
          <a
            :href="artwork.link"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img  @click="viewFullScreen(artwork.image)"
              class="card-img-top "
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
      <button class="btn btn-success me-2" :disabled="currentPage === 1" @click="currentPage--">Previous</button>
      <span class="mx-2">Page {{ currentPage }} of {{ totalPages }}</span>
      <button class="btn btn-success ms-2" :disabled="currentPage === totalPages" @click="currentPage++">Next</button>
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
        { id: 1, number: "1", name: "CONVINNIENCE STORE", image: "../images/gallery/Illustrator/art (1).JPG",  description: "Inspired by the song of Dilaw."},
        { id: 2, number: "2", name: "GELOU", image: "../images/gallery/Illustrator/art (1).png",  description: "Commission." },
        { id: 3, number: "3", name: "CHARACTER ILLUSTRATION", image: "../images/gallery/Illustrator/art (2).jpg",  description: "i drew this becuase of i want to learn how the proportion of the abs will work." },
        { id: 4, number: "4", name: "REFERENCING HAND", image: "../images/gallery/Illustrator/art (2).png",  description: "This is Actually me determine and analizing the proportion of hand." },
        { id: 5, number: "5", name: "KAPASIGAN", image: "../images/gallery/Illustrator/art (3).jpg",  description: "Inspired by Me and my Girlfriend, first data." },
        { id: 6, number: "6", name: "SCHOOL BUS", image: "../images/gallery/Illustrator/art (3).png",  description: "Illustration of a girl gossiping how the boy looking at her" },
        { id: 7, number: "7", name: "BURGER", image: "../images/gallery/Illustrator/art (4).jpg",  description: "No Description." },
        { id: 8, number: "8", name: "GELOU 2", image: "../images/gallery/Illustrator/art (4).png",  description: "Commission." },
        { id: 9, number: "9", name: "DRAWING ILLUSTRATION", image: "../images/gallery/Illustrator/art (5).jpg",  description: "Inspired from my first setup." },
        { id: 10, number: "10", name: "TERRACE", image: "../images/gallery/Illustrator/art (5).png",  description: "No Description." },
        { id: 11, number: "11", name: "JEEPNEY", image: "../images/gallery/Illustrator/art (6).png",  description: "THe Girl and the Boy Sleeping on a Jeepney together." },
        { id: 12, number: "12", name: "KRISTO LANG", image: "../images/gallery/Illustrator/art (7).jpg",  description: "Inspired by my profile picture." },
        { id: 13, number: "13", name: "DALAGANG PILIPINA", image: "../images/gallery/Illustrator/art (7).png",  description: "The girl who riding jeepney with Pilipinyana. This is inspired by the new policy of the boverment that every monday wear formal attire." },
        { id: 14, number: "14", name: "BAWAT PIYESA", image: "../images/gallery/Illustrator/art (8).jpg",  description: "Inspired by the song BAWAT PIYESA. (for music video)" },
        { id: 15, number: "15", name: "ESTRANGHERO", image: "../images/gallery/Illustrator/art (8).png",  description: "Inspired by the song ESTRANGHERO by Cup of Joe" },
        { id: 16, number: "16", name: "RAINING IN MANILA", image: "../images/gallery/Illustrator/art (9).jpg",  description: "Inspired by the song Raining in Manila by Lola Amore" },
        { id: 17, number: "17", name: "HEARTS CAN'T SEPERATE TWO MILES THAT IS REALLY CARE", image: "../images/gallery/Illustrator/art (9).png",  description: "A Love that no matter what they still see the precense." },
        { id: 18, number: "18", name: "COFFEE", image: "../images/gallery/Illustrator/art (10).jpg",  description: "No Description." },
        { id: 19, number: "19", name: "CLASSIC BIKE", image: "../images/gallery/Illustrator/art (10).png",  description: "Created in Adobe Illustrator." },
        { id: 20, number: "20", name: "TAGAYTAY", image: "../images/gallery/Illustrator/art (11).jpg",  description: "No Description." },
        { id: 21, number: "21", name: "TAGATAY 2", image: "../images/gallery/Illustrator/art (12).jpg",  description: "No Description." },
        { id: 22, number: "22", name: "SELF VECTOR", image: "../images/gallery/Illustrator/art (12).png",  description: "A self Vector of mine." },
        { id: 23, number: "23", name: "MIDNIGHT SKY", image: "../images/gallery/Illustrator/art (13).jpg",  description: "Created in Krita." },
        { id: 24, number: "24", name: "CAFE IN THE SKY", image: "../images/gallery/Illustrator/art (14).jpg",  description: "Created in Krita too." },
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
