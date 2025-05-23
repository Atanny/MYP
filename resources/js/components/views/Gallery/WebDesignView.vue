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
            <router-link to="/" class="me-1 mt-1">
              <button class="btn btn-primary rounded-0">
                <i class="fa fa-home"></i> Return Home
              </button>
            </router-link>
            <router-link to="/animation" class="me-1 mt-1" active-class="active-link">
              <div class="btn btn-danger">ANIMATION</div>
            </router-link>
            <router-link to="/illustrator" class="me-1 mt-1" active-class="active-link">
              <div class="btn btn-danger">ILLUSTRATION</div>
            </router-link>
            <router-link to="/digital-arts" class="me-1 mt-1" active-class="active-link">
              <div class="btn btn-danger">DIGITAL ARTS</div>
            </router-link>
            <router-link to="/graphic-design" class="me-1 mt-1" active-class="active-link">
              <div class="btn btn-danger">GRAPHIC DESIGNS</div>
            </router-link>
            <router-link to="/web-design" class="me-1 mt-1" active-class="active-link">
              <div class="btn btn-danger">WEB DESIGNS</div>
            </router-link>
            <router-link to="/website" active-class="active-link">
              <div class="btn btn-danger mt-1">WEBSITES</div>
            </router-link>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div
        class="col-md-3 mt-4 h-auto"
        v-for="artwork in paginatedArtworks"
        :key="artwork.id"
        v-if="paginatedArtworks.length > 0"
      >
        <!-- Card with image, title, description, and View button -->
        <div
          class="card h-100 shadow-sm border-0 rounded-0"
          data-aos="fade-right"
          data-aos-duration="900"
        >
          <img
            class="card-img-top rounded-0"
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
              class="btn btn-sm btn-danger mt-2"
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
    <div class="text-center mt-4">
      <button
        class="btn btn-danger me-2"
        :disabled="currentPage === 1"
        @click="currentPage--"
      >
        Previous
      </button>
      <span class="mx-2">Page {{ currentPage }} of {{ totalPages }}</span>
      <button
        class="btn btn-danger ms-2"
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
          number: "1",
          name: "Design 1",
          image: "../storage/gallery/weddes/art (1).png",
          tags: ["WEB DESIGN"],
          link: "https://www.figma.com/proto/KG0sGFhseCbCT9AZHFqwLd/new-version-thread?page-id=0%3A1&node-id=51-630&starting-point-node-id=51%3A630&scaling=scale-down-width&content-scaling=fixed&t=RcZBuJ0MsA0r5xaR-1",
          description:
            "A modern UI design featuring clean lines and bold red accents.",
        },
        {
          id: 2,
          number: "2",
          name: "Design 2",
          image: "../storage/gallery/weddes/art (2).png",
          tags: ["WEB DESIGN"],
          link: "https://www.figma.com/proto/ARHu89EZEUAts2KU9v48Qd/winslet?page-id=0%3A1&node-id=1-3&starting-point-node-id=1%3A3&t=gHYr1oJNp1Tfie47-1",
          description: "A sleek product landing page layout built for performance and style.",
        },
        {
          id: 3,
          number: "3",
          name: "Design 3",
          image: "../storage/gallery/weddes/art (3).png",
          tags: ["WEB DESIGN"],
          link: "https://www.figma.com/proto/uraHMKJBGUlzXWTqTAVREh/OWL?page-id=2303%3A2321&node-id=3116-51369&viewport=919%2C619%2C0.06&t=Ec5rtpHc3s814bhz-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=3116%3A51369",
          description:
            "An e-commerce concept built with minimalist structure and strong UX.",
        },
        // Add more artworks if needed
      ],
      currentPage: 1,
      pageSize: 8,
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
