<template>
  <div class="container p-lg-5">

    <h1 class="fw-bolder mt-3 text-dark mt-5 px-5 mb-4"><b>OUTPUT CATEGORIES</b></h1>
    <h2 class="fw-bolder mt-3 text-dark px-5"><b>GRAPHIC & DIGITAL DESIGN</b></h2>

    <div class="card-deck px-5">
      <div class="card mt-3 h-100 rounded shadow-lg border-0"
           data-aos="fade-up" data-aos-delay="100">
        <div class="card-body">
          <video class="img-fluid card-img-top rounded" 
                 src="/images/gallery/Animation/1 (4).mp4" 
                 style="height: 200px; object-fit: cover;" 
                 muted playsinline>
          </video>
          <div>
            <h5 class="card-title fw-bolder mt-3">ANIMATIONS</h5>
          </div>
        </div>
        <div class="card-footer bg-white border-0">
          <router-link to="/animation">
            <a class="btn btn-success mb-3 btn-sm">See More</a>
          </router-link>
        </div>
      </div>

      <div class="card mt-3 rounded shadow-lg border-0"
           data-aos="fade-up" data-aos-delay="200">
        <div class="card-body">
          <img class="img-fluid card-img-top rounded" 
               src="/images/gallery/Illustrator/art (1).jpg" 
               style="height: 200px; object-fit: cover;" alt="">
          <div>
            <h5 class="card-title fw-bolder mt-3">ILLUSTRATION</h5>
          </div>
        </div>
        <div class="card-footer bg-white border-0">
          <router-link to="/illustrator">
            <a class="btn btn-success mb-3 btn-sm">See More</a>
          </router-link>
        </div>
      </div>

      <div class="card mt-3 rounded shadow-lg border-0"
           data-aos="fade-up" data-aos-delay="300">
        <div class="card-body">
          <img class="img-fluid card-img-top rounded" 
               src="/images/gallery/Artworks/hi.jpg" 
               style="height: 200px; object-fit: cover;" alt="">
          <div>
            <h5 class="card-title fw-bolder mt-3">DIGITAL ARTS</h5>
          </div>
        </div>
        <div class="card-footer bg-white border-0">
          <router-link to="/digital-arts">
            <a class="btn btn-success btn-sm mb-3">See More</a>
          </router-link>
        </div>
      </div>

      <div class="card mt-3 rounded shadow-lg border-0"
           data-aos="fade-up" data-aos-delay="400">
        <div class="card-body">
          <img class="img-fluid card-img-top rounded" 
               src="/images/gallery/Poster/art (1).jpeg" 
               style="height: 200px; object-fit: cover;" alt="">
          <div>
            <h5 class="card-title fw-bolder mt-3">GRAPHIC DESIGN</h5>
          </div>
        </div>
        <div class="card-footer bg-white border-0">
          <router-link to="/graphic-design">
            <a class="btn btn-success mb-3 btn-sm">See More</a>
          </router-link>
        </div>
      </div>
    </div>

    <h2 class="px-5 fw-bolder mt-5 text-dark mb-0"><b>WEB DESIGNS & DEVELOPMENT</b></h2>
    <div class="row p-5">

      <div class="col-md-3">
        <div class="card rounded shadow-lg border-0 h-100"
             data-aos="fade-up" data-aos-delay="100">
          <div class="card-body d-flex flex-column">
            <img class="img-fluid card-img-top rounded" 
                 src="/images/websites/4.png" 
                 style="height: 200px; object-fit: cover;" alt="">
            <h5 class="card-title fw-bolder mt-3">WEB DESIGN</h5>
          </div>
          <div class="card-footer bg-white border-0">
            <router-link to="/web-design">
              <a class="btn btn-success mb-3 btn-sm">See More</a>
            </router-link>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card rounded shadow-lg border-0 h-100"
             data-aos="fade-up" data-aos-delay="200">
          <div class="card-body d-flex flex-column">
            <img class="img-fluid card-img-top rounded" 
                 src="/images/websites/6.png" 
                 style="height: 200px; object-fit: cover;" alt="">
            <h5 class="card-title fw-bolder mt-3">WEBSITES</h5>
          </div>
          <div class="card-footer bg-white border-0">
            <router-link to="/website">
              <a class="btn btn-success mb-3 btn-sm">See More</a>
            </router-link>
          </div>
        </div>
      </div>

    </div>

  </div>
</template>
