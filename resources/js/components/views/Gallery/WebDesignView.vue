<template>
    <div class="container mb-5" style="margin-top:2vh;">
      <!-- Header Row -->
      <div class="d-flex justify-content-between align-items-center">
        <div class="row">
          <div class="col-sm-12 col-lg-6 fw-bolder">
            <h1><b>WEB DESIGNS</b></h1>
          </div>
  
          <div class="col-sm-12 col-lg-auto">
                    <div class="d-flex flex-wrap">
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
  
      <div class="row">
        <div
            class="col-md-3 mt-5 h-auto"
            v-for="artwork in paginatedArtworks"
            :key="artwork.id"
            v-if="paginatedArtworks.length > 0"
          >
          <div class="d-flex">
            <h6 class="fw-bolder outline-text2" data-aos="fade-right" data-aos-duration="1500">{{ artwork.number }}</h6>
            <h6 class="ms-2 fw-bolder" data-aos="fade-right" data-aos-duration="1000">
              <b>{{ artwork.name }}</b>
            </h6>
          </div>
  
          <img
            class="rounded-0 shadow-lg border-0"
            :src="`/storage/${artwork.image}`"
            style="object-fit: cover; height: 250px; width: 100%;"
            data-aos="fade-right"
            data-aos-duration="900"
          />
        </div>
        <div v-else>
            <div  class="text-center mt-5 card p-3  bg-light-shadow-sm">
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
        pageSize: 8,
      };
    },
  
    computed: {
      animationArtworks() {
        return this.artworks.filter((artwork) =>
          artwork.tags.includes("WEB DESIGN")
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
    },
  
    created() {
      this.artworkFetch();
    },
  };
  </script>
  