<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">
        <div class="container-fluid">

            
           
           <img class="navbar-brand shadow-lg bg-white mt-0  px-3 rounded border-1 border-secondary" width="50px" src="/images/logo.png">

        
          
                          <!-- Navbar Toggler -->
                <button
                  class="navbar-toggler"
                  type="button"
                  @click="toggleNavbar"
                  aria-controls="navbarNav"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>


                <!-- Collapsible Navbar -->
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav text-center mx-auto">
                    <!-- Add your <li><a>...</a></li> items here -->
                  </ul>

                  <div class="m-1 mt-3 mt-md-0 mt-lg-0">
                  <button class="btn btn-success container d-inline-block rounded-pill text-white"
                    style="background-color: #7EA122;" @click="goToContact">
                    Contact Me!
                  </button>

                  </div>




            </div>
        </div>
    </nav>
</template>
<script>
export default {
 methods: {
  toggleNavbar() {
    const nav = document.getElementById('navbarNav');
    if (!nav) return;

    const bsCollapse = bootstrap.Collapse.getInstance(nav) || new bootstrap.Collapse(nav, { toggle: false });
    
    if (nav.classList.contains('show')) {
      bsCollapse.hide();
    } else {
      bsCollapse.show();
    }
  },
  goToContact() {
    if (this.$route.path !== '/') {
      this.$router.push('/').then(() => {
        this.$nextTick(() => {
          this.scrollToContact();
          this.collapseNavbar(); // Collapse after scrolling
        });
      });
    } else {
      this.scrollToContact();
      this.collapseNavbar(); // Collapse if already on home
    }
  },
  scrollToContact() {
    const el = document.getElementById("contact-section");
    if (el) {
      el.scrollIntoView({ behavior: "smooth" });
    }
  },
  collapseNavbar() {
    const nav = document.getElementById('navbarNav');
    if (nav && nav.classList.contains('show')) {
      const bsCollapse = bootstrap.Collapse.getInstance(nav) || new bootstrap.Collapse(nav, { toggle: false });
      bsCollapse.hide();
    }
  }
}

}


</script>
