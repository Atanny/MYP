<template>
  <div v-if="selectedImage" class="border-0 rounded fullscreen-overlay" @click="selectedImage = null">
  <img :src="selectedImage" class="border-0 rounded fullscreen-img" @click.stop />


  <button class="nav-btn left-btn" @click.stop="previousImage">‹</button>


  <button class="nav-btn right-btn" @click.stop="nextImage">›</button>


  <button class="close-btn" @click="selectedImage = null">×</button>
</div>

  <div class="scale-wrapper ">
    <!-- Header Row -->
    <div class="d-flex justify-content-between align-items-center ">
      <div class="row">


            <div class="col-sm-12 col-lg-12 fw-bolder mt-5 d-flex align-items-center justify-content-start">
              <div class="d-flex flex-wrap justify-content-start me-2 mb-5">
              <router-link to="/">
                <button class="btn btn-success rounded-pill d-none d-lg-block">
                  <i class="fa-solid fa-home"></i>
                </button>
              </router-link>
              
            </div>

            <div>
               <h1 class="fw-bolder mb-0"><b>DIGITAL ARTS</b></h1>
               <h6 class="text-muted">Used Application for Drawing: <br> <b class="mt-3 badge bg-dark">ADOBE ILLUSTRATOR</b> <b class="badge bg-dark">KRITA</b></h6>
            </div>
            </div>
            
            
          

       
          
<div class="col-sm-12 col-lg-auto mt-3  d-inline-block">
             <router-link to="/">
                <button class="btn btn-success rounded-pill d-inline-block d-lg-none me-2">
                  <i class="fa-solid fa-home"></i>
                </button>
              </router-link>
            <button class="btn btn-success d-lg-none " type="button" data-bs-toggle="collapse" data-bs-target="#navButtons" aria-expanded="false" aria-controls="navButtons">
                <i class="fa fa-bars"></i> See More Description
            </button>
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
               <router-link to="/photography" active-class="active-link">
                <button class="btn btn-success me-1 mt-2">PHOTOGRAPHY</button>
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
          class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4"
          v-for="(artwork, index) in paginatedArtworks"
          :key="artwork.id"
          v-if="paginatedArtworks.length > 0"
          data-aos="fade-up"
          :data-aos-delay="index * 100"
          data-aos-duration="800"
        >
        <!-- Card with image, title, and description -->
        <div class=" h-100 shadow-lg border-0 rounded " >
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

   
  </div>
</template>

<script>
export default {
  data() {
    return {
      selectedImage: null,
        currentImageIndex: 0,
     artworks: [
        { id: 1, number: "1", name: "WEDNESDAY ADAMS", image: "../images/gallery/Artworks/art (1).jpg", description: "I drew this black and white picture of a girl who looks serious. I wanted to show some emotion and drama." },
        { id: 2, number: "2", name: "I LIKE THE VIEW", image: "../images/gallery/Artworks/art (1).png", description: "I made this colorful drawing of a happy girl holding a tablet. I wanted it to feel light and creative." },
        { id: 3, number: "3", name: "KIM X LATO-LATO", image: "../images/gallery/Artworks/art (2).png", description: "I drew these three cartoon people wearing glasses. It’s a fun design called 'KIM x LATO-LATO'." },
        { id: 4, number: "4", name: "LUFFY", image: "../images/gallery/Artworks/art (2).jpg", description: "This is a funny drawing I made of a wide-eyed anime-style character with a straw hat. It has an intense look." },
        { id: 5, number: "5", name: "RED BLADE SAMURAI", image: "../images/gallery/Artworks/art (3).jpg", description: "I created this red-themed action scene with a girl holding a sword. It’s inspired by anime fights." },
        { id: 6, number: "6", name: "ME", image: "../images/gallery/Artworks/art (3).png", description: "Here’s a simple and friendly drawing I made of a smiling person with glasses." },
        { id: 7, number: "7", name: "GOOD MORNING, SIR!", image: "../images/gallery/Artworks/art (4).jpg", description: "I drew a hotel worker saying 'Good Morning, Sir.' I wanted it to show kindness and good service." },
        { id: 8, number: "8", name: "CHILL GREEN VIBES", image: "../images/gallery/Artworks/art (5).jpg", description: "This is a cartoon I made of a person in a green outfit. It gives off a chill, cool vibe." },
        { id: 9, number: "9", name: "CONFIDENT STYLE", image: "../images/gallery/Artworks/art (5).png", description: "I made this stylish drawing of a confident woman with short hair. I like how strong and bold it looks." },
        { id: 10, number: "10", name: "GTA FAN ART", image: "../images/gallery/Artworks/art (6).jpg", description: "This is my fan art of a GTA: San Andreas character. I added palm trees to show the city feel." },
        { id: 11, number: "11", name: "MAGIC STAFF", image: "../images/gallery/Artworks/art (6).png", description: "I drew a fantasy character holding a glowing staff. It feels magical and strong." },
        { id: 12, number: "12", name: "SCHOOL LIFE WITH MASK", image: "../images/gallery/Artworks/art (7).jpg", description: "This is a student wearing a mask and holding books. I wanted to show school life during the pandemic." },
        { id: 13, number: "13", name: "BASSIST", image: "../images/gallery/Artworks/art (7).png", description: "I created this simple but cool drawing of a person with a bass on his back, standing in front of a big circle." },
        { id: 14, number: "14", name: "MILITARY BUDDIES", image: "../images/gallery/Artworks/art (8).jpg", description: "I made this funny cartoon of two military-style characters next to a schedule board." },
        { id: 15, number: "15", name: "RIDE", image: "../images/gallery/Artworks/art (9).jpg", description: "I drew someone riding a motorcycle fast through the outdoors. It’s full of action and fun." },
        { id: 16, number: "16", name: "LADY IN RED", image: "../images/gallery/Artworks/bagooo.jpg", description: "I made this peaceful drawing of a woman in a red dress standing in nature. It’s calm and quiet." },
        { id: 17, number: "17", name: "SUNRISE", image: "../images/gallery/Artworks/hi.jpg", description: "Inspired by the sunrise by Ben&Ben." }
      ],

      currentPage: 1,
      pageSize: 100,
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
