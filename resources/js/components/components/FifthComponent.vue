<template>
<div class="container">
    <h1 class="fw-bolder text-dark mt-4"><b>OUTPUT CATEGORIES</b></h1>


    <h2 class="fw-bolder mt-4 outline-text"><b>GRAPHIC & DIGITAL DESIGN</b></h2>
    <div class="card-deck">
        <div class="card h1-00 mt-4 rounded-0 shadow-lg border-0"  data-aos="fade-right" data-aos-duration="1600">
            <div class="card-body">
                <video class="img-fluid card-img-top rounded-0" 
                    src="/storage/gallery/Animation/65.mp4" 
                    style="height: 50%; object-fit: cover;" 
                    alt=""
                    autoplay 
                    loop 
                    muted 
                    playsinline>
                </video>
                <div>
                    <h5 class="card-title fw-bolder mt-4">ANIMATIONS</h5>
                    <div class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio perspiciatis architecto, tempora aut, ut explicabo officiis non nobis laborum maxime porro libero consequatur quibusdam sequi!</div>
                </div>
                
            </div>
            <div class="card-footer bg-white border-0">
                <router-link to="/animation"><a class="btn btn-danger mb-3">
                    See More
                </a></router-link>
            </div>
        </div>

        <div class="card mt-4 rounded-0 shadow-lg border-0"  data-aos="fade-right" data-aos-duration="1000">
            <div class="card-body">
                <img class="img-fluid card-img-top rounded-0" src="/storage/gallery/Artworks/hi.jpg" style="height: 50%; object-fit: cover;" alt="">
                <div>
                    <h5 class="card-title fw-bolder mt-4">DIGITAL ARTS</h5>
                    <div class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio perspiciatis architecto, tempora aut, ut explicabo officiis non nobis laborum maxime porro libero consequatur quibusdam sequi!</div>
                </div>
                
            </div>

            <div class="card-footer bg-white border-0">
                <router-link to="/digital-arts"><a class="btn btn-danger mb-3">
                    See More
                </a></router-link>
            </div>
        </div>

        <div class="card mt-4 rounded-0 shadow-lg border-0"  data-aos="fade-left" data-aos-duration="1000">
            <div class="card-body">
                <img class="img-fluid card-img-top rounded-0" src="/storage/gallery/Illustrator/69.png" style="height: 50%; object-fit: cover;" alt="">
                <div>
                    <h5 class="card-title fw-bolder mt-4">ILLUSTRATION</h5>
                    <div class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio perspiciatis architecto, tempora aut, ut explicabo officiis non nobis laborum maxime porro libero consequatur quibusdam sequi!</div>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <router-link to="/illustrator"><a class="btn btn-danger mb-3">
                    See More
                </a></router-link>
            </div>
        </div>

        <div class="card mt-4 rounded-0 shadow-lg border-0"  data-aos="fade-left" data-aos-duration="1600">
            <div class="card-body">
                <img class="img-fluid card-img-top rounded-0" src="/storage/gallery/Poster/PARADE.png" style="height: 50%; object-fit: cover;" alt="">
                <div>
                    <h5 class="card-title fw-bolder mt-4">GRAPHIC DESIGN</h5>
                    <div class="card-text"></div>
                </div>
                
            </div>
            <div class="card-footer bg-white border-0">
                <router-link to="/graphic-design"><a class="btn btn-danger mb-3">
                    See More
                </a></router-link>
            </div>
        </div>
    </div>

    <h2 class="fw-bolder mt-5 outline-text"><b>WEB DESIGNS & DEVELOPMENT</b></h2>
    <div class="row">
    <div class="col-md-3 mt-4">
        <div class="card rounded-0 shadow-lg border-0 h-100" data-aos="fade-right" data-aos-duration="1600">
            <div class="card-body d-flex flex-column">
                <img class="img-fluid card-img-top rounded-0" src="/storage/websites/6.png" style="height: 200px; object-fit: cover;" alt="">
                <h5 class="card-title fw-bolder mt-4">WEBSITES</h5>
                <p>Websites i Built manually using the softwares indicated above.</p>
            </div>
            <div class="card-footer bg-white border-0 mt-auto">
                <a class="btn btn-danger mb-3">See More</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mt-4">
        <div class="card rounded-0 shadow-lg border-0 h-100" data-aos="fade-right" data-aos-duration="1000">
            <div class="card-body d-flex flex-column">
                <img class="img-fluid card-img-top rounded-0" src="/storage/websites/4.png" style="height: 200px; object-fit: cover;" alt="">
                <h5 class="card-title fw-bolder mt-4">WEB DESIGN</h5>
                <P>Web Design who i mostly design on purpose. this designs help mo acoomplish growth and purposes</P>
            </div>
            <div class="card-footer bg-white border-0 mt-auto">
                <a class="btn btn-danger mb-3" href="https://atanny.onrender.com/#/">See More</a>
            </div>
        </div>
    </div>
   
</div>


</div>
</template>