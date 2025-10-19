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
              <div class="d-flex flex-wrap justify-content-start me-2 mb-5 ">
              <router-link to="/">
                <button class="btn btn-success rounded-pill d-none d-lg-block">
                  <i class="fa-solid fa-home"></i>
                </button>
              </router-link>
              
            </div>

            <div>
               <h1 class="fw-bolder mb-0" style="color: #ff8b00;"><b>EFITMO CAPSTONE PROJECT - SUPER ADMIN/ADMIN INTERFACE</b></h1>
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
              <button class="btn btn-success rounded-5 me-1 mt-2 "> <i class="fa-solid fa-arrow-left"></i> WEBSITES</button>
               
            </router-link>
            <router-link to="/website/student" class="" active-class="active-link">
              <button class="btn btn-success rounded-5 me-1 mt-2">STUDENT INTERFACE</button>
            </router-link>
            <router-link to="/website/admin" class="" active-class="active-link">
              <button class="btn btn-success rounded-5 me-1 mt-2">SUPER ADMIN INTERFACE</button>
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
        <div class="card card-animation h-100 shadow border-0 rounded-5 "  data-aos="fade-up"
              data-aos-duration="900">
          <a
            :href="Design.link"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img  @click="viewFullScreen(Design.image)"
              class="card-img-top rounded-top-5"
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
    <!-- <div class="text-center mt-4">
      <button class="btn btn-success me-2" :disabled="currentPage === 1" @click="currentPage--">Previous</button>
      <span class="mx-2">Page {{ currentPage }} of {{ totalPages }}</span>
      <button class="btn btn-success ms-2" :disabled="currentPage === totalPages" @click="currentPage++">Next</button>
    </div> -->

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
 { id: 1, number: "1", name: "DASHBOARD", image: "../images/EFITMO/ADMIN/ADashboard/1.png", description: "" },

{ id: 2, number: "2", name: "MANAGE USERS", image: "../images/EFITMO/ADMIN/ManageUser/1.png", description: "" },
{ id: 3, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageUser/2.png", description: "" },
{ id: 4, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageUser/3.png", description: "" },
{ id: 5, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageUser/4.png", description: "" },

{ id: 6, number: "3", name: "MANAGE PRODUCTS", image: "../images/EFITMO/ADMIN/ManageProduct/1.png", description: "" },
{ id: 7, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageProduct/2.png", description: "" },
{ id: 8, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageProduct/3.png", description: "" },
{ id: 9, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageProduct/4.png", description: "" },
{ id: 10, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageProduct/5.png", description: "" },

{ id: 11, number: "4", name: "BILLINGS", image: "../images/EFITMO/ADMIN/ManageBillings/1.png", description: "" },
{ id: 12, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageBillings/2.png", description: "" },
{ id: 13, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageBillings/3.png", description: "" },
{ id: 14, number: "", name: " ", image: "../images/EFITMO/ADMIN/ManageBillings/4.png", description: "" },
{ id: 15, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageBillings/5.png", description: "" },
{ id: 16, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageBillings/5.1.png", description: "" },
{ id: 17, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageBillings/6.png", description: "" },
{ id: 18, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageBillings/7.png", description: "" },

{ id: 19, number: "5", name: "MANAGE ORDERS", image: "../images/EFITMO/ADMIN/ManageOrders/1.jpg", description: "" },
{ id: 20, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageOrders/2.png", description: "" },
{ id: 21, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageOrders/3.png", description: "" },
{ id: 22, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageOrders/4.png", description: "" },
{ id: 23, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageOrders/5.1.png", description: "" },
{ id: 24, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageOrders/5.png", description: "" },
{ id: 25, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageOrders/6.png", description: "" },
{ id: 26, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageOrders/7.png", description: "" },
{ id: 27, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageOrders/8.1.png", description: "" },
{ id: 28, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageOrders/8.png", description: "" },
{ id: 29, number: "", name: "", image: "../images/EFITMO/ADMIN/ManageOrders/9.png", description: "" },

{ id: 30, number: "6", name: "ALL MESSAGES", image: "../images/EFITMO/ADMIN/MEssages/1.png", description: "" },

{ id: 31, number: "7", name: "ALL PAYMENTS", image: "../images/EFITMO/ADMIN/Payments/1.png", description: "" },

{ id: 32, number: "8", name: "MANAGE ANNOUNCEMENTS", image: "../images/EFITMO/ADMIN/Announcements/1.png", description: "" },
{ id: 33, number: "", name: "", image: "../images/EFITMO/ADMIN/Announcements/2.png", description: "" },
{ id: 34, number: "", name: "", image: "../images/EFITMO/ADMIN/Announcements/3.png", description: "" },
{ id: 35, number: "", name: "", image: "../images/EFITMO/ADMIN/Announcements/4.png", description: "" },

{ id: 36, number: "9", name: "Archived Products", image: "../images/EFITMO/ADMIN/ArchivedProducts/1.png", description: "" },
{ id: 37, number: "", name: "", image: "../images/EFITMO/ADMIN/MyOrder/ArchivedProducts/2.png", description: "" },

{ id: 38, number: "10", name: "FEEDBACKS", image: "../images/EFITMO/ADMIN/Feedback/1.png", description: "" },
{ id: 39, number: "", name: "", image: "../images/EFITMO/ADMIN/Feedback/2.png", description: "" },



       ],
      currentPage: 1,
      pageSize: 1000,
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

.nav-btn {
  position: absolute;
  top: 50%;
  font-size: 3rem;
  color: white;
  background: none;
  border: none;
  cursor: pointer;
  z-index: 10000;
  transform: translateY(-50%);
}

.left-btn {
  left: 20px;
}

.right-btn {
  right: 20px;
}

</style>
