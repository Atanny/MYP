<template>
  <div class="scale-wrapper">
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
               <h1 class="fw-bolder mb-0"><b>WEB DESIGNS</b></h1>
               <h6 class="text-muted">Used Application for Designing: <br> <b class="mt-3 badge bg-dark">FIGMA</b></h6>
            </div>
            </div>
            
            
          

         



   <div class="col-sm-12 col-lg-auto mt-3 d-inline-block">
             <router-link to="/">
                <button class="btn btn-success rounded-pill d-inline-block d-lg-none me-2">
                  <i class="fa-solid fa-home"></i>
                </button>
              </router-link>
            <button class="btn btn-success d-lg-none " type="button" data-bs-toggle="collapse" data-bs-target="#navButtons" aria-expanded="false" aria-controls="navButtons">
                <i class="fa fa-bars"></i> See More Description
            </button>
            <!-- Collapsible container -->
            <div class="collapse d-lg-flex flex-wrap" id="navButtons">
              <router-link to="/animation" active-class="active-link">
                <button class="btn btn-success rounded-5 me-1 mt-2">ANIMATION</button>
              </router-link>
              <router-link to="/illustrator" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">ILLUSTRATION</button>
              </router-link>
              <router-link to="/digital-arts" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">DIGITAL ARTS</button>
              </router-link>
              <router-link to="/graphic-design" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">GRAPHIC DESIGNS</button>
              </router-link>
               <router-link to="/photography" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">PHOTOGRAPHY</button>
              </router-link>
              <router-link to="/web-design" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">WEB DESIGNS</button>
              </router-link>
              <router-link to="/website" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">WEBSITES</button>
              </router-link>
               <router-link to="/videos" active-class="active-link">
                <button class="btn btn-success me-1 mt-2 rounded-5">VIDEOS</button>
              </router-link>
            </div>
          </div>
      </div>
    </div>

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
        <!-- Card with image, title, description, and View button -->
        <div
          class="card card-animation h-100 shadow border-0 rounded-5 "
         
        >
          <img
            class="card-img-top rounded-top-5"
            :src="artwork.image"
            style="object-fit: cover; height: 250px; width: 100%;"
          />
          <div class="card-body d-flex flex-column">
            <h6 class="fw-bold mb-1">{{ artwork.number }} - {{ artwork.name }}</h6>
            <p class="card-text text-muted small flex-grow-1">{{ artwork.description }}</p>
            <a
              :href="artwork.link"
              target="_blank"
              rel="noopener noreferrer"
              class="btn btn-sm btn-success mt-2 rounded-5"
            >
              View
            </a>
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
    <!-- <div class="text-center mt-4">
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
    </div> -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      
      artworks: [
        {
          id: 1,
          number: "1",
          name: "THREAD TESI",
          image: "../images/gallery/weddes/art (1).png",
          tags: ["WEB DESIGN"],
          link: "https://www.figma.com/proto/KG0sGFhseCbCT9AZHFqwLd/new-version-thread?page-id=0%3A1&node-id=51-630&starting-point-node-id=51%3A630&scaling=scale-down-width&content-scaling=fixed&t=RcZBuJ0MsA0r5xaR-1",
          description:
            "I contribute of redesigning of OWL Portal.",
        },
        {
          id: 2,
          number: "2",
          name: "WISTEC",
          image: "../images/gallery/weddes/art (2).png",
          tags: ["WEB DESIGN"],
          link: "https://www.figma.com/proto/ARHu89EZEUAts2KU9v48Qd/winslet?page-id=0%3A1&node-id=1-3&starting-point-node-id=1%3A3&t=gHYr1oJNp1Tfie47-1",
          description: "One of the freelance project I did.",
        },
        {
          id: 3,
          number: "3",
          name: "OWL OUTSOURCING PORTAL",
          image: "../images/gallery/weddes/art (3).png",
          tags: ["WEB DESIGN"],
          link: "https://www.figma.com/design/uraHMKJBGUlzXWTqTAVREh/OWL?node-id=2883-22707&t=R1goYolcmG6FYFBk-1",
          description:
            "One of my recent project i did in my TESI UI/UX journey.",
        },
         {
          id: 4,
          number: "4",
          name: "SAMPLE DESIGN",
          image: "../images/gallery/weddes/SDSDS.png",
          tags: ["WEB DESIGN"],
          link: "https://www.figma.com/design/6ivyICIq8ugY9Qg29NjqoA/traxiontech?node-id=0-1&t=A8AXN3cSltwB353j-1",
          description:
            "Trying to redesign the website of the company i applied for.",
        },
        // Add more artworks if needed
      ],
      currentPage: 1,
      pageSize: 1000,
    };
  },

  computed: {
    animationArtworks() {
      return this.artworks.filter((artwork) => artwork.tags.includes("WEB DESIGN"));
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
