<template>
  <div class="container p-5 pb-0 mb-0">
    <div class="p-3 p-lg-5">

  
      <h1 class="display-6 fw-bolder"><b>ART CATEGORIES</b></h1>
              <p class="text-muted">Explore the different categories of art I created.</p>
       <hr class="rounded" style="border: 0.5px solid gray; width: 100%;">

      <div class="mt-5 d-flex justify-content-center align-items-center">
        <div class="row">
          <div v-for="(product) in products" :key="product.id" class="col-lg-3 "> 
            <router-link :to="product.route" >
              <div class="card mb-4 border-1  rounded  text-white" style="background-color: #ff8333; border-color: #ff8333;">
                <img class="img-fluid card-img-top"  :src="product.image" style="height: 200px; object-fit: cover;" alt="">
              <div class=" p-1 px-4 text-start d-flex justify-content-between align-items-center">
                  <h6><b class="display-6 me-4 fw-bolder">{{product.id}}</b></h6>    
                  <h6 class="mb-0"> {{ product.name }}</h6>       
              </div>   
              </div> 
            </router-link>
          </div>    
        </div> 
      </div>

      <div>
        
      </div>
     
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      products: [
        { id: 1, name: 'MOTION GRAPHICS', image: '/images/soya.jpg', route: '/animation' },
        { id: 2, name: 'ILLUSTRATOR', image: '/images/gallery/Illustrator/art (9).png', route: '/illustrator' },
        { id: 3, name: 'DIGITAL DRAWING', image: '/images/gallery/Artworks/hi.jpg', route: '/digital-arts'},
        { id: 4, name: 'GRAPHIC DESIGN', image: '/images/gallery/Poster/art (35).png' , route: '/graphic-design'},
        { id: 5, name: 'PHOTOGRAPHY', image: '/images/lowkey/1 (3).jpg' , route: '/photography'},
        { id: 6, name: 'UI/UX DESIGN', image: '/images/websites/4.png' , route: '/web-design'},
        { id: 7, name: 'WEB DEVELOPMNENT', image: '/images/websites/6.png' , route: '/website'},
          { id: 8, name: 'VIDEO EDITING', image: '/images/gallery/video/ADS 1.png' , route: '/videos'},
       
      ]
    };
  },
  methods: {
  }
};
</script>

<style scoped>
.card {
  transition: transform 0.3s ease;
}
.card:hover {
  transform: scale(1.05);
  cursor: pointer;
}

a {
  text-decoration: none;
  color: inherit;
}
</style>