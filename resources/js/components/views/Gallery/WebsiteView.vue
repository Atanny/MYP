<template>
  <div class="container mb-5" style="margin-top:2vh;">
    <!-- Header Row -->
    <div class="d-flex justify-content-between align-items-center">
      <div class="row">
        <div class="col-sm-12 col-lg-6 fw-bolder">
          <h1><b>WEBSITES</b></h1>
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


    <!-- Artwork Cards -->
    <div class="row">
      <div
        class="col-md-3 mt-4"
        v-for="artwork in paginatedArtworks"
        :key="artwork.id"
        v-if="paginatedArtworks.length > 0"
      >
        <div class="card h-100 shadow-lg rounded"   data-aos="fade-right"
            data-aos-duration="900">
          <img
            :src="artwork.image"
            class="card-img-top rounded-0"
            alt="artwork image"
            style="object-fit: cover; height: 250px; width: 100%;"
          
          />
          <div class="card-body d-flex flex-column">
            <h6 class="fw-bold mb-1">{{ artwork.number }} - {{ artwork.name }}</h6>
            <p class="card-text text-muted small flex-grow-1">{{ artwork.description }}</p>
            <a
              :href="artwork.link"
              target="_blank"
              rel="noopener noreferrer"
              class="btn btn-sm btn-success mt-2"
            >
              View
            </a>
          </div>
        </div>
      </div>

      <div v-else>
        <div class="text-center mt-5 card p-3 bg-light shadow-sm border-0">
          <p class="text-muted mt-3">No artworks available yet.</p>
        </div>
      </div>
    </div>

    <!-- Pagination Controls -->
    <div class="text-center mt-4">
      <button
        class="btn btn-success me-2"
        :disabled="currentPage === 1"
        @click="currentPage--"
      >
        Previous
      </button>
      <span class="mx-2">Page {{ currentPage }} of {{ totalPages }}</span>
      <button
        class="btn btn-success ms-2"
        :disabled="currentPage === totalPages"
        @click="currentPage++"
      >
        Next
      </button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      artworks: [
        {
          id: 1,
          number: "001",
          name: "Design 1",
          image: "../images/gallery/weddes/art (5).png",
          tags: ["WEB DESIGN"],
          link: "https://atanny.onrender.com/#/",
          description: "A sleek, responsive portfolio site showcasing minimal design.",
        },
        {
          id: 2,
          number: "002",
          name: "Design 2",
          image: "../images/gallery/weddes/art (6).png",
          tags: ["WEB DESIGN"],
          link: "https://avocadoweb.onrender.com/?fbclid=IwZXh0bgNhZW0CMTEAAR6wyqEI96YD2ky7MgpFjOORMWcIerRw96WeRVg9xVdVABxrLg3JZWt532PKDw_aem_uY9SNLmPdVZqWTeCXdVfRA",
          description:
            "Modern web layout featuring animated elements and vibrant colors.",
        },
        {
          id: 3,
          number: "003",
          name: "EFITMO: Online Ordering System",
          image: "../images/gallery/weddes/art (4).png",
          tags: ["WEB DESIGN"],
          link: "https://www.figma.com/proto/uraHMKJBGUlzXWTqTAVREh/OWL?page-id=2303%3A2321&node-id=3116-51369&viewport=919%2C619%2C0.06&t=Ec5rtpHc3s814bhz-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=3116%3A51369",
          description: "An intuitive online food ordering prototype designed for efficiency.",
        },
        // Add more artworks here as needed
      ],
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
};
</script>
