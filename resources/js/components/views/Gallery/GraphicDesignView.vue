<template>
  <div class="container mb-5" style="margin-top:2vh;">
    <!-- Header Row -->
    <div class="d-flex justify-content-between align-items-center">
      <div class="row">
        <div class="col-sm-12 col-lg-6 fw-bolder">
          <h1><b>GRAPHIC DESIGNS</b></h1>
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


    <!-- Design Thumbnails -->
          <div class="row">
      <div
        class="col-md-3 mt-4 h-auto"
        v-for="Design in paginatedDesigns"
        :key="Design.id"
        v-if="paginatedDesigns.length > 0"
      >
        <!-- Card with image, title, and description -->
        <div class="card h-100 shadow-lg border-0 rounded "  data-aos="fade-right"
              data-aos-duration="900">
          <a
            :href="Design.link"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img  @click="viewFullScreen(Design.image)"
              class="card-img-top "
              :src="Design.image"
              style="object-fit: cover; height: 250px; width: 100%;"
             
            />
          </a>
          <div class="card-body">
            <h6 class="fw-bold mb-1">{{ Design.number }} - {{ Design.name }}</h6>
            <p class="card-text text-muted small">{{ Design.description }}</p>
          </div>
        </div>
      </div>

      <div v-else>
        <div class="text-center mt-5 card p-3 bg-light shadow-sm">
          <p class="text-muted mt-3">No Designs available yet.</p>
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
      Designs: [
 
  { id: 1, number: "1", name: "POSTER", image: "../images/gallery/Poster/art (1).jpeg", description: "A simple design made using Photoshop." },
  { id: 2, number: "2", name: "2ND WORN-OUT", image: "../images/gallery/Poster/art (64).png", description: "A basic Design edited with Photoshop." },
  { id: 3, number: "3", name: "2ND WORN-OUT 2", image: "../images/gallery/Poster/art (41).png", description: "No Description." },
  { id: 4, number: "4", name: "2ND WORN-OUT 3", image: "../images/gallery/Poster/art (1).png", description: "A Photoshop design created with care." },
  { id: 5, number: "5", name: "MANIPULATION", image: "../images/gallery/Poster/art (2).jpeg", description: "A simple piece improved in Photoshop." },
  { id: 6, number: "6", name: "POSTER PORJECT 1ST YEAR", image: "../images/gallery/Poster/art (2).jpg", description: "An Design touched up with Photoshop." },
  { id: 7, number: "7", name: "TRANSNENE", image: "../images/gallery/Poster/art (2).png", description: "Created using Photoshop with some care." },
  { id: 8, number: "8", name: "2ND YEAR ACTIVITY", image: "../images/gallery/Poster/art (3).jpg", description: "A neat Photoshop edit on this Design." },
  { id: 9, number: "9", name: "BASKETBALL LEAGUE", image: "../images/gallery/Poster/art (3).png", description: "Made better with some Photoshop work." },
  { id: 10, number: "10", name: "CHURCH INIVATION", image: "../images/gallery/Poster/art (4).jpg", description: "A clean design done in Photoshop." },
  { id: 11, number: "11", name: "KILINIKKALAWAAN", image: "../images/gallery/Poster/art (24).png", description: "A Photoshop edit to improve the look." },
  { id: 12, number: "12", name: "KILINIKKALAWAAN 2", image: "../images/gallery/Poster/art (4).png", description: "A basic Design created in Photoshop." },
  { id: 13, number: "13", name: "KILINIKKALAWAAN 3", image: "../images/gallery/Poster/art (23).png", description: "Made a little nicer with Photoshop." },
  { id: 14, number: "14", name: "CONGRATULATIONS POSTER SQUARE ", image: "../images/gallery/Poster/art (5).png", description: "Edited in Photoshop for a smoother look." },
  { id: 15, number: "15", name: "CONGRATULATIONS POSTER PORTRAIT", image: "../images/gallery/Poster/art (10).png", description: "A simple Photoshop layered design." },
  { id: 16, number: "16", name: "LOLA AMOUR", image: "../images/gallery/Poster/art (6).png", description: "No Description." },
  { id: 17, number: "17", name: "OWN THE STAGE", image: "../images/gallery/Poster/art (7).png", description: "No Description." },
  { id: 18, number: "18", name: "CHURCH POSTER", image: "../images/gallery/Poster/art (8).png", description: "A simple design with Photoshop help." },
  { id: 19, number: "19", name: "MENS BASKETBALL", image: "../images/gallery/Poster/art (17).png", description: "Smoothed out with Photoshop." },
  { id: 20, number: "20", name: "MENS BASKETBALL 2", image: "../images/gallery/Poster/art (9).png", description: "An Design with Photoshop corrections." },
  { id: 21, number: "21", name: "BASKETBALL LEAGUE", image: "../images/gallery/Poster/art (11).png", description: "Basic edits done using Photoshop." },
  { id: 22, number: "22", name: "SOYA LOGO", image: "../images/gallery/Poster/art (12).png", description: "Made better with illustrator tools." },
  { id: 23, number: "23", name: "SOYA LOGO", image: "../images/gallery/Poster/art (13).png", description: "Second Version of the Logo." },
  { id: 24, number: "24", name: "YOUTH AWARDS NIGHT", image: "../images/gallery/Poster/art (14).png", description: "Clean design with Photoshop help." },
  { id: 25, number: "25", name: "CHURCH ANNIVERSARY", image: "../images/gallery/Poster/art (15).png", description: "A Photoshop touch-up to improve it." },
  { id: 26, number: "26", name: "BORDER 1", image: "../images/gallery/Poster/art (16).png", description: "Light Photoshop work on this Design." },
  { id: 27, number: "27", name: "BORDER 2", image: "../images/gallery/Poster/art (18).png", description: "Photoshop used to add some details." },
  { id: 28, number: "28", name: "DISTRBUTION PUBMATS", image: "../images/gallery/Poster/art (19).png", description: "A simple Photoshop edit for clarity." },
  { id: 29, number: "29", name: "BORDER 3", image: "../images/gallery/Poster/art (20).png", description: "Layers combined with Photoshop." },
  { id: 30, number: "30", name: "OPENING PARADE", image: "../images/gallery/Poster/art (21).png", description: "Basic color corrections with Photoshop." },
  { id: 31, number: "31", name: "IWAS DROGA", image: "../images/gallery/Poster/art (22).png", description: "Made smoother using Photoshop." },
  { id: 32, number: "32", name: "UNITY IN DIVERSITY", image: "../images/gallery/Poster/art (25).png", description: "No Description." },
  { id: 33, number: "33", name: "BORDER 4", image: "../images/gallery/Poster/art (26).png", description: "Simple Photoshop layers added." },
  { id: 34, number: "34", name: "BORDER 5", image: "../images/gallery/Poster/art (27).png", description: "Photoshop was used for some small fixes." },
  { id: 35, number: "35", name: "BORDER 6", image: "../images/gallery/Poster/art (28).png", description: "A light Photoshop touch for better look." },
  { id: 36, number: "36", name: "SCHOOL ACT", image: "../images/gallery/Poster/art (29).png", description: "Simple Photoshop work on this art." },
  { id: 37, number: "37", name: "PS MANIPULATION COMMISSION", image: "../images/gallery/Poster/art (30).png", description: "No Description." },
  { id: 38, number: "38", name: "HIV AIDS", image: "../images/gallery/Poster/art (31).png", description: "A basic Photoshop edit to add some depth." },
  { id: 39, number: "39", name: "BORDER 7", image: "../images/gallery/Poster/art (32).png", description: "Made clearer using Photoshop tools." },
  { id: 40, number: "40", name: "1ST YEAR ACT", image: "../images/gallery/Poster/art (33).png", description: "Simple Photoshop color fixes." },
  { id: 41, number: "42", name: "MAID SAMA", image: "../images/gallery/Poster/art (35).png", description: "No Description." },
  { id: 42, number: "43", name: "BORDER 8", image: "../images/gallery/Poster/art (36).png", description: "Made a bit better with Photoshop." },
  { id: 43, number: "44", name: "ALIGHT SOLUTIONS BRANDING", image: "../images/gallery/Poster/art (37).png", description: "Light Photoshop work for smoother look." },
  { id: 44, number: "45", name: "MURAL PAINTING CONTEST 1", image: "../images/gallery/Poster/art (38).png", description: "Photoshop used to improve this design." },
  { id: 45, number: "46", name: "MURAL PAINTING CONTEST 2", image: "../images/gallery/Poster/art (39).png", description: "Description" },
  { id: 46, number: "47", name: "PMN NIGHT", image: "../images/gallery/Poster/art (40).png", description: "Simple edits done using Photoshop." },
  { id: 47, number: "48", name: "ALIGHT SOLUTIONS BRANDING 2", image: "../images/gallery/Poster/art (42).png", description: "No Description." },
  { id: 48, number: "49", name: "ALIGHT SOLUTIONS BRANDING 3", image: "../images/gallery/Poster/art (43).png", description: "Basic Photoshop color fixes." },
  { id: 49, number: "50", name: "KICK-OFF PARADE", image: "../images/gallery/Poster/art (44).png", description: "A Photoshop edit to improve textures." },
  { id: 50, number: "51", name: "MENS BASKETBALL POSTER", image: "../images/gallery/Poster/art (45).png", description: "Simple Photoshop layers used here." },
  { id: 51, number: "52", name: "TEENAGE PREGANANCY", image: "../images/gallery/Poster/art (46).png", description: "Photoshop improved lighting and color." },
  { id: 52, number: "53", name: "PRIDE MONTH", image: "../images/gallery/Poster/art (47).png", description: "Light Photoshop editing for balance." },
  { id: 53, number: "54", name: "RUTH PHOTO MANIPULATION", image: "../images/gallery/Poster/art (48).png", description: "Photoshop used to sharpen details." },
  { id: 54, number: "55", name: "RUTH PHOTO MANIPULATION 2", image: "../images/gallery/Poster/art (49).png", description: "A Photoshop polish for better look." },
  { id: 55, number: "56", name: "PRIDE COUNCIL", image: "../images/gallery/Poster/art (50).png", description: "Photoshop effects to make it nicer." },
  { id: 56, number: "57", name: "SAGAYLAHAN", image: "../images/gallery/Poster/art (51).png", description: "A smooth Photoshop design here." },
  { id: 57, number: "58", name: "BORDER 9", image: "../images/gallery/Poster/art (52).png", description: "No Description." },
  { id: 58, number: "59", name: "MINI DIVISION", image: "../images/gallery/Poster/art (53).png", description: "Layers combined with Photoshop." },
  { id: 59, number: "60", name: "CONGRATS POSTER 2", image: "../images/gallery/Poster/art (54).png", description: "Photoshop used to adjust textures." },
  { id: 60, number: "61", name: "KALAWENYOUTH", image: "../images/gallery/Poster/art (55).png", description: "A clean Photoshop design with details." },
  { id: 61, number: "62", name: "KALAWENYOUTH 2", image: "../images/gallery/Poster/art (56).png", description: "Photoshop layers combined nicely." },
  { id: 62, number: "63", name: "KALAWENYOUTH 3", image: "../images/gallery/Poster/art (57).png", description: "No Description." },
  { id: 63, number: "64", name: "BORDER 10", image: "../images/gallery/Poster/art (58).png", description: "No Description." },
  { id: 64, number: "65", name: "1ST YEAR ACT", image: "../images/gallery/Poster/art (59).png", description: "Photoshop edits for clearer focus." },
  { id: 65, number: "66", name: "1ST YEAR ACT", image: "../images/gallery/Poster/art (60).png", description: "No Description." },
  { id: 66, number: "67", name: "BORDER 11", image: "../images/gallery/Poster/art (61).png", description: "No Description." },
  { id: 67, number: "68", name: "TRANSNENE GREEN", image: "../images/gallery/Poster/art (62).png", description: "Layers combined in Photoshop for effect." },
   { id: 68, number: "70", name: "WOMENS VOLLEYBALL", image: "../images/gallery/Poster/art (65).png", description: "No Description." },
   { id: 69, number: "72", name: "WOMENS VOLLEYBALL 2", image: "../images/gallery/Poster/art (67).png", description: "No Description." },
  { id: 70, number: "73", name: "MEAL MISSION", image: "../images/gallery/Poster/art (68).png", description: "Clean and simple Photoshop work." },
  { id: 71, number: "74", name: "DART CLASH", image: "../images/gallery/Poster/art (69).png", description: "Photoshop added some depth and detail." },
  { id: 72, number: "75", name: "KABATAAN LIMITLESS", image: "../images/gallery/Poster/art (70).png", description: "No Description." },
      { id: 73, number: "76", name: "BIDA NG PASKO", image: "../images/gallery/Poster/final.png", description: "No Description." },
{ id: 74, number: "77", name: "TESI 1", image: "../images/gallery/Poster/1.png", description: "No Description." },
{ id: 75, number: "78", name: "TESI 2", image: "../images/gallery/Poster/2.png", description: "No Description." },
{ id: 76, number: "79", name: "TESI 3", image: "../images/gallery/Poster/3.png", description: "No Description." },
{ id: 77, number: "80", name: "PORTFOLIO", image: "../images/gallery/Poster/4.png", description: "No Description." },
{ id: 77, number: "80", name: "PORTFOLIO", image: "../images/gallery/Poster/old portfolio pdf (1).png", description: "No Description." },
      { id: 78, number: "81", name: "PORTFOLIO 2", image: "../images/gallery/Poster/old portfolio pdf (2).png", description: "No Description." },
      { id: 79, number: "82", name: "PORTFOLIO 3", image: "../images/gallery/Poster/old portfolio pdf (3).png", description: "No Description." },
      { id: 80, number: "83", name: "PORTFOLIO 4", image: "../images/gallery/Poster/old portfolio pdf (4).png", description: "No Description." },
     { id: 89, number: "92", name: "PORTFOLIO 5", image: "../images/gallery/Poster/old portfolio pdf (13).png", description: "No Description." },
     { id: 90, number: "93", name: "RUTH's RESUME", image: "../images/gallery/Poster/RUTT.png", description: "No Description." },
       ],
      currentPage: 1,
      pageSize: 8,
      selectedImage: null, // Fullscreen state
    };
  },
  computed: {
    totalPages() {
      return Math.ceil(this.Designs.length / this.pageSize);
    },
    paginatedDesigns() {
      const start = (this.currentPage - 1) * this.pageSize;
      const end = start + this.pageSize;
      return this.Designs.slice(start, end);
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
