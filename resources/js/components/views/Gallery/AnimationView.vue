<template>
 
  
    <div class="container mb-5" style="margin-top:20vh;">
    
      <div class="d-flex justify-content-between align-items-center">
        <div class="row">
            <div class="col-sm-12 col-lg-6 fw-bolder"> 
            <h1 ><b>ANIMATION</b></h1>
            </div>
    
            <div class="col-sm-12 col-lg-auto">
                    <div class="d-flex flex-wrap">
                        <router-link to="/illustrator" class="me-1 mt-1">
                        <button class="btn btn-danger">ILLUSTRATION ``</button>
                        </router-link>
                        <router-link to="/digital-arts" class="me-1 mt-1">
                        <button class="btn btn-danger">DIGITAL ARTS</button>
                        </router-link>
                        <router-link to="/graphic-design" class="me-1 mt-1">
                        <button class="btn btn-danger">GRAPHIC DESIGNS</button>
                        </router-link>
                        <router-link to="/web-design" class="me-1 mt-1">
                        <button class="btn btn-danger">WEB DESIGNS</button>
                        </router-link>
                        <router-link to="/website ">
                        <button class="btn btn-danger mt-1">WEBSITES</button>
                        </router-link>
                    </div>
            </div>

      </div>
    </div>
      <div class="row">
        <div class="col-md-3 mt-5 h-auto" v-for="artwork in paginatedArtworks" :key="artwork.id">
          <div class="d-flex">
            <h6 class="fw-bolder outline-text2" data-aos="fade-right" data-aos-duration="1500">{{ artwork.number }}</h6>
            <h6 class="ms-2 fw-bolder" data-aos="fade-right" data-aos-duration="1000"><b>{{ artwork.name }}</b></h6>
          </div>
  
          <div class="position-relative" style="height: 250px;">
                <video
                    class="rounded-0 shadow-lg border-0 w-100 h-100"
                    :src="`/storage/${artwork.image}`"
                    style="object-fit: cover;"
                    loop
                    muted
                    data-aos="fade-right"
                    data-aos-duration="900"
                    :ref="'video_' + artwork.id"
                ></video>
                <button
                    class="btn bt-danger position-absolute top-50 start-50 translate-middle shadow"
                    @click="togglePlay(artwork.id)"
                >
                <i class="fa-solid fa-play"></i>
                </button>
                </div>
            </div>
      </div>
  
      <!-- Pagination Controls -->
      <div class="text-center mt-4">
        <button class="btn btn-danger  me-2" :disabled="currentPage === 1" @click="currentPage--">Previous</button>
        <span class="mx-2">Page {{ currentPage }} of {{ totalPages }}</span>
        <button class="btn btn-danger  ms-2" :disabled="currentPage === totalPages" @click="currentPage++">Next</button>
      </div>
    </div>
  </template>
 <script>
 export default {
   data() {
     return {
       artworks: [],
       loading: false,
       error: 'error',
       currentPage: 1,
       pageSize: 8, // how many artworks to show per page
     };
   },
 
   computed: {
     animationArtworks() {
       return this.artworks.filter((artwork) =>
         artwork.tags.includes("ANIMATION")
       );
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
     async artworkFetch() {
       this.loading = true;
       try {
         const response = await axios.get("/home/Artworks");
         this.artworks = response.data;
       } catch {
         this.error = "Failed";
       } finally {
         this.loading = false;
       }
     },
 
     togglePlay(id) {
       const video = this.$refs['video_' + id];
       if (video && video[0]) {
         if (video[0].paused) {
           video[0].play();
         } else {
           video[0].pause();
         }
       }
     },
   },
 
   created() {
     this.artworkFetch();
   },
 };
 </script>
 