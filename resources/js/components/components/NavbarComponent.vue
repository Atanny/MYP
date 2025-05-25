<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">
        <div class="container-fluid">

            
           
           <img class="navbar-brand shadow-lg bg-white mt-0  px-3 rounded border-1 border-secondary" width="50px" src="/images/logo.png">

           <h6 class="fw-bolder mt-1"><b>JONATHAN MARIANO</b></h6>
          
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-center mx-auto ">
                    
                    

                   
                </ul>

               <div class="m-1 mt-3 mt-md-0 mt-lg-0">
                <button class="btn btn-success container d-inline-block rounded-pill text-white" style="background-color: #7EA122;" @click="scrollToContact">
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
    scrollToContact() {
      const el = document.getElementById("contact-section");
      if (el) {
        el.scrollIntoView({ behavior: "smooth" });
      }
    }
  }
}
</script>
