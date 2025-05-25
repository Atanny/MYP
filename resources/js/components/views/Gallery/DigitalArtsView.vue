<template>
  <div class="container mb-5" style="margin-top:2vh;">
    <!-- Header Row -->
    <div class="d-flex justify-content-between align-items-center">
      <div class="row">
        <div class="col-sm-12 col-lg-6 fw-bolder">
          <h1><b>DIGITAL ARTS</b></h1>
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
            <img @click="viewFullScreen(artwork.image)"
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
        { id: 1, number: "1", name: "WEDNESDAY ADAMS", image: "../images/gallery/Artworks/art (1).JPG", description: "I drew this black and white picture of a girl who looks serious. I wanted to show some emotion and drama." },
        { id: 2, number: "2", name: "I LIKE THE VIEW", image: "../images/gallery/Artworks/art (1).png", description: "I made this colorful drawing of a happy girl holding a tablet. I wanted it to feel light and creative." },
        { id: 3, number: "3", name: "KIM X LATO-LATO", image: "../images/gallery/Artworks/art (2).png", description: "I drew these three cartoon people wearing glasses. It’s a fun design called 'KIM x LATO-LATO'." },
        { id: 4, number: "4", name: "LUFFY", image: "../images/gallery/Artworks/art (2).JPG", description: "This is a funny drawing I made of a wide-eyed anime-style character with a straw hat. It has an intense look." },
        { id: 5, number: "5", name: "RED BLADE SAMURAI", image: "../images/gallery/Artworks/art (3).JPG", description: "I created this red-themed action scene with a girl holding a sword. It’s inspired by anime fights." },
        { id: 6, number: "6", name: "ME", image: "../images/gallery/Artworks/art (3).png", description: "Here’s a simple and friendly drawing I made of a smiling person with glasses." },
        { id: 7, number: "7", name: "GOOD MORNING, SIR!", image: "../images/gallery/Artworks/art (4).JPG", description: "I drew a hotel worker saying 'Good Morning, Sir.' I wanted it to show kindness and good service." },
        { id: 8, number: "8", name: "CHILL GREEN VIBES", image: "../images/gallery/Artworks/art (5).JPG", description: "This is a cartoon I made of a person in a green outfit. It gives off a chill, cool vibe." },
        { id: 9, number: "9", name: "CONFIDENT STYLE", image: "../images/gallery/Artworks/art (5).png", description: "I made this stylish drawing of a confident woman with short hair. I like how strong and bold it looks." },
        { id: 10, number: "10", name: "GTA FAN ART", image: "../images/gallery/Artworks/art (6).JPG", description: "This is my fan art of a GTA: San Andreas character. I added palm trees to show the city feel." },
        { id: 11, number: "11", name: "MAGIC STAFF", image: "../images/gallery/Artworks/art (6).png", description: "I drew a fantasy character holding a glowing staff. It feels magical and strong." },
        { id: 12, number: "12", name: "SCHOOL LIFE WITH MASK", image: "../images/gallery/Artworks/art (7).JPG", description: "This is a student wearing a mask and holding books. I wanted to show school life during the pandemic." },
        { id: 13, number: "13", name: "BASSIST", image: "../images/gallery/Artworks/art (7).png", description: "I created this simple but cool drawing of a person with a bass on his back, standing in front of a big circle." },
        { id: 14, number: "14", name: "MILITARY BUDDIES", image: "../images/gallery/Artworks/art (8).JPG", description: "I made this funny cartoon of two military-style characters next to a schedule board." },
        { id: 15, number: "15", name: "RIDE", image: "../images/gallery/Artworks/art (9).JPG", description: "I drew someone riding a motorcycle fast through the outdoors. It’s full of action and fun." },
        { id: 16, number: "16", name: "LADY IN RED", image: "../images/gallery/Artworks/bagooo.JPG", description: "I made this peaceful drawing of a woman in a red dress standing in nature. It’s calm and quiet." },
        { id: 17, number: "17", name: "SUNRISE", image: "../images/gallery/Artworks/hi.JPG", description: "Inspired by the sunrise by Ben&Ben." }
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
