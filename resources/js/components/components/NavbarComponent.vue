<template>
    <nav class="container p-4 fixed-top">
       
        <div class="p-3 navbar navbar-expand-lg navbar-light bg-light shadow rounded-5 justify-content-between bg-opacity-50">

           <img class="navbar-brand rounded border-1 border-secondary" width="70px" src="/images/logo.png">

          <a 
            href="https://mail.google.com/mail/?view=cm&to=atanatan190@email.com&su=I WANT TO CONNECT&body=Please write your message here."
              target="_blank"
              class="btn btn-black rounded-5 d-inline-block ms-1">
            <i class="fa-solid fa-envelope"></i>  Email Me 
          </a>

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
