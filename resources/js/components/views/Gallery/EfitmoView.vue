<template>
   <div v-if="selectedImage" class="border-0 rounded fullscreen-overlay" @click="selectedImage = null">
  <img :src="selectedImage" class="border-0 rounded fullscreen-img" @click.stop />


  <button class="nav-btn left-btn" @click.stop="previousImage">‹</button>


  <button class="nav-btn right-btn" @click.stop="nextImage">›</button>


  <button class="close-btn" @click="selectedImage = null">×</button>
</div>

  <div class="scale-wrapper ">
    <!-- Header Row -->
    <div class="d-flex justify-content-between align-items-center">
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
               <h1 class="fw-bolder mb-0"><b>EFITMO CAPSTONE PROJECT - STUDENT INTERFACE</b></h1>
               <h6 class="text-muted">Used Application for Developing: <br> <b class="mt-3 badge bg-dark">FIGMA</b> <b class="badge bg-dark">PHP</b> <b class="badge bg-dark">LARAVEL NATIVE</b> <b class="badge bg-dark">HTML</b> <b class="badge bg-dark">CSS</b> <b class="badge bg-dark">JAVASCRIPT</b> <b class="badge bg-dark">MYSQL</b></h6>
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
           <router-link to="/website" active-class="active-link">
              <button class="btn btn-success me-1 mt-2 "> <i class="fa-solid fa-arrow-left"></i> WEBSITES</button>
            </router-link>
            <router-link to="/website/student" class="" active-class="active-link">
              <button class="btn btn-success me-1 mt-2">STUDENT INTERFACE</button>
            </router-link>
            <router-link to="/website/admin" class="" active-class="active-link">
              <button class="btn btn-success me-1 mt-2">SUPER ADMIN INTERFACE</button>
            </router-link>
            
           
          </div>
      </div>

      </div>
    </div>


    <!-- Design Thumbnails -->
          <div class="row">
     <div
          class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4"
          v-for="(Design, index) in paginatedDesigns"
          :key="Design.id"
          v-if="paginatedDesigns.length > 0"
          data-aos="fade-up"
          :data-aos-delay="index * 100"
          data-aos-duration="800"
        >
        <!-- Card with image, title, and description -->
        <div class="card h-100 shadow-lg border-0 rounded " >
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
    
  </div>
</template>

<script>
export default {
  data() {
    return {
      selectedImage: null,
        currentImageIndex: 0,
      Designs: [
 
  { id: 1, number: "1", name: "LOGIN", image: "../images/EFITMO/STUDENT/Login and Signup/1.png", description: "lOGIN has multiple role, Super Admin, Admin, and Student" },
  { id: 2, number: "", name: "", image: "../images/EFITMO/STUDENT/Login and Signup/2.png", description: "I used SweetAlert for component that will enhance the design of the modal." },
  { id: 3, number: "", name: "", image: "../images/EFITMO/STUDENT/Login and Signup/3.png", description: "" },
  { id: 4, number: "2", name: "SIGNUP", image: "../images/EFITMO/STUDENT/Login and Signup/4.png", description: "" },
  { id: 5, number: "", name: "", image: "../images/EFITMO/STUDENT/Login and Signup/6.png", description: "" },
  { id: 6, number: "", name: "", image: "../images/EFITMO/STUDENT/Login and Signup/8.png", description: "" },
  { id: 7, number: "", name: "", image: "../images/EFITMO/STUDENT/Login and Signup/7.png", description: "" },
  { id: 8, number: "", name: "", image: "../images/EFITMO/STUDENT/Login and Signup/9.png", description: "" },
  { id: 9, number: "", name: "", image: "../images/EFITMO/STUDENT/Login and Signup/10.png", description: "" },
  { id: 10, number: "", name: "", image: "../images/EFITMO/STUDENT/Login and Signup/12.png", description: "" },
  { id: 11, number: "", name: "", image: "../images/EFITMO/STUDENT/Login and Signup/11.png", description: "" },
  { id: 12, number: "", name: "", image: "../images/EFITMO/STUDENT/Login and Signup/13.png", description: "" },
  //dashboard
{ id: 13, number: "3", name: "DASHBOARD", image: "../images/EFITMO/STUDENT/Dashboard/1.png", description: "" },
{ id: 14, number: "4", name: "BODY MEASURE ", image: "../images/EFITMO/STUDENT/Dashboard/2.png", description: "" },
{ id: 15, number: "", name: "", image: "../images/EFITMO/STUDENT/Dashboard/3.png", description: "" },
{ id: 16, number: "", name: "", image: "../images/EFITMO/STUDENT/Dashboard/4.png", description: "" },
{ id: 17, number: "", name: "", image: "../images/EFITMO/STUDENT/Dashboard/5.png", description: "" },
{ id: 18, number: "", name: "", image: "../images/EFITMO/STUDENT/Dashboard/6.png", description: "" },
{ id: 19, number: "", name: "", image: "../images/EFITMO/STUDENT/Dashboard/7.jpg", description: "" },
{ id: 20, number: "5", name: "VIRTUAL TRY-ON", image: "../images/EFITMO/STUDENT/Dashboard/10.png", description: "" },
{ id: 21, number: "", name: "", image: "../images/EFITMO/STUDENT/Dashboard/11.png", description: "" },

//STORE
{ id: 22, number: "6", name: "STORE PAGE", image: "../images/EFITMO/STUDENT/Store/1.png", description: "" },
{ id: 23, number: "", name: "", image: "../images/EFITMO/STUDENT/Store/2.png", description: "" },
{ id: 24, number: "", name: "", image: "../images/EFITMO/STUDENT/Store/3.png", description: "" },
{ id: 25, number: "", name: "", image: "../images/EFITMO/STUDENT/Store/4.png", description: "" },
{ id: 26, number: "", name: "", image: "../images/EFITMO/STUDENT/Store/5.png", description: "" },
{ id: 27, number: "", name: "", image: "../images/EFITMO/STUDENT/Store/6.png", description: "" },
{ id: 28, number: "", name: "", image: "../images/EFITMO/STUDENT/Store/7.png", description: "" },

//myorder
{ id: 29, number: "7", name: "MY ORDER PAGE", image: "../images/EFITMO/STUDENT/MyOrder/1.png", description: "" },
{ id: 30, number: "8", name: "WALK-IN PAYMENT", image: "../images/EFITMO/STUDENT/MyOrder/2.png", description: "" },
{ id: 31, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/3.png", description: "" },
{ id: 32, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/4.png", description: "" },
{ id: 33, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/5.png", description: "" },
{ id: 34, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/8.png", description: "" },
{ id: 35, number: "9", name: "GCASH PAYMENT", image: "../images/EFITMO/STUDENT/MyOrder/9.png", description: "" },
{ id: 36, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/10.png", description: "" },
{ id: 37, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/11.png", description: "" },
{ id: 38, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/12.png", description: "" },
{ id: 39, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/13.png", description: "" },
{ id: 40, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/14.png", description: "" },
{ id: 41, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/15.png", description: "" },
{ id: 42, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/15.1.png", description: "" },
{ id: 43, number: "10", name: "ACCEPTED STATUS", image: "../images/EFITMO/STUDENT/MyOrder/16.png", description: "" },
{ id: 44, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/17.png", description: "" },
{ id: 45, number: "11", name: "CLAIMING STATUS", image: "../images/EFITMO/STUDENT/MyOrder/18.png", description: "" },
{ id: 46, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/19.png", description: "" },
{ id: 47, number: "12", name: "CUSTOMER SERVICE CHAT", image: "../images/EFITMO/STUDENT/MyOrder/21.png", description: "" },
{ id: 48, number: "13", name: "COMPLETED STATUS", image: "../images/EFITMO/STUDENT/MyOrder/22.png", description: "" },
{ id: 49, number: "14", name: "FEEDBACK", image: "../images/EFITMO/STUDENT/MyOrder/23.png", description: "" },
{ id: 50, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/24.png", description: "" },
{ id: 51, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/25.png", description: "" },
{ id: 52, number: "", name: "", image: "../images/EFITMO/STUDENT/MyOrder/26.png", description: "" },

//howtoOrder page
{ id: 54, number: "15", name: "HOW TO USE PAGE", image: "../images/EFITMO/STUDENT/HowtoOrder/1.png", description: "" },

//myprofile
{ id: 55, number: "16", name: "MY PROFILE", image: "../images/EFITMO/STUDENT/MyProfile/0.png", description: "" },
{ id: 56, number: "", name: "", image: "../images/EFITMO/STUDENT/MyProfile/1.png", description: "" },
{ id: 57, number: "", name: "", image: "../images/EFITMO/STUDENT/MyProfile/2.png", description: "" },

//admin
{ id: 58, number: "59", name: "MINI DIVISION", image: "../images/gallery/Poster/art (53).png", description: "" },
{ id: 59, number: "60", name: "CONGRATS POSTER 2", image: "../images/gallery/Poster/art (54).png", description: "" },
{ id: 60, number: "61", name: "KALAWENYOUTH", image: "../images/gallery/Poster/art (55).png", description: "" },
{ id: 61, number: "62", name: "KALAWENYOUTH 2", image: "../images/gallery/Poster/art (56).png", description: "" },
{ id: 62, number: "63", name: "KALAWENYOUTH 3", image: "../images/gallery/Poster/art (57).png", description: "" },
{ id: 63, number: "64", name: "BORDER 10", image: "../images/gallery/Poster/art (58).png", description: "" },
{ id: 64, number: "65", name: "1ST YEAR ACT", image: "../images/gallery/Poster/art (59).png", description: "" },
{ id: 65, number: "66", name: "1ST YEAR ACT", image: "../images/gallery/Poster/art (60).png", description: "" },
{ id: 66, number: "67", name: "BORDER 11", image: "../images/gallery/Poster/art (61).png", description: "" },
{ id: 67, number: "68", name: "TRANSNENE GREEN", image: "../images/gallery/Poster/art (62).png", description: "" },
{ id: 68, number: "70", name: "WOMENS VOLLEYBALL", image: "../images/gallery/Poster/art (65).png", description: "" },
{ id: 69, number: "72", name: "WOMENS VOLLEYBALL 2", image: "../images/gallery/Poster/art (67).png", description: "" },
{ id: 70, number: "73", name: "MEAL MISSION", image: "../images/gallery/Poster/art (68).png", description: "" },
{ id: 71, number: "74", name: "DART CLASH", image: "../images/gallery/Poster/art (69).png", description: "" },
{ id: 72, number: "75", name: "KABATAAN LIMITLESS", image: "../images/gallery/Poster/art (70).png", description: "" },
{ id: 73, number: "76", name: "BIDA NG PASKO", image: "../images/gallery/Poster/final.png", description: "" },
{ id: 74, number: "77", name: "TESI 1", image: "../images/gallery/Poster/1.png", description: "" },
{ id: 75, number: "78", name: "TESI 2", image: "../images/gallery/Poster/2.png", description: "" },
{ id: 76, number: "79", name: "TESI 3", image: "../images/gallery/Poster/3.png", description: "" },
{ id: 77, number: "80", name: "PORTFOLIO", image: "../images/gallery/Poster/4.png", description: "" },
{ id: 77, number: "80", name: "PORTFOLIO", image: "../images/gallery/Poster/old portfolio pdf (1).png", description: "" },
{ id: 78, number: "81", name: "PORTFOLIO 2", image: "../images/gallery/Poster/old portfolio pdf (2).png", description: "" },
{ id: 79, number: "82", name: "PORTFOLIO 3", image: "../images/gallery/Poster/old portfolio pdf (3).png", description: "" },
{ id: 80, number: "83", name: "PORTFOLIO 4", image: "../images/gallery/Poster/old portfolio pdf (4).png", description: "" },
{ id: 89, number: "92", name: "PORTFOLIO 5", image: "../images/gallery/Poster/old portfolio pdf (13).png", description: "" },
{ id: 90, number: "93", name: "RUTH's RESUME", image: "../images/gallery/Poster/RUTT.png", description: "" },

       ],
      currentPage: 1,
      pageSize: 100,
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
    const index = this.paginatedDesigns.findIndex(d => d.image === imagePath);
    if (index !== -1) {
      this.selectedImage = imagePath;
      this.currentImageIndex = index;
    }
  },
  nextImage() {
    if (this.currentImageIndex < this.paginatedDesigns.length - 1) {
      this.currentImageIndex++;
      this.selectedImage = this.paginatedDesigns[this.currentImageIndex].image;
    }
  },
  previousImage() {
    if (this.currentImageIndex > 0) {
      this.currentImageIndex--;
      this.selectedImage = this.paginatedDesigns[this.currentImageIndex].image;
    }
  },
}
};
</script>

<style>
.fullscreen-overlay {
  position: fixed;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.9);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999 !important;
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
