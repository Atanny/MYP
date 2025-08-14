<template>
    <h1 class="fw-bolder text-dark  container p-5"><b>SOFTWARES</b></h1>

    <div class="">
      
      <div class="bg-dark text-white p-2 transform container-fluid" behavior="scroll" direction="right" scrollamount="20" scrolldelay="1">
        <h1 class="fw-bolder outline-text3 text-center mt-1 mt-lg-0">
          <b>FOR GRAPHICS, ARTS, AND WEB DESIGN</b>
        </h1>
      </div>

    <div class=" bg-light shadow-lg  p-5 align-items-center justify-content-center">
      <div class="container p-4 p-lg-5">
        <div class="row mb-0 mt-0 p-0 p-lg-5">
          <div class="card col-6 col-lg-2 shadow-lg rounded-0 border-1 border-light" v-for="(software, index) in softwares" :key="software.id" data-aos="fade-up" :data-aos-delay="index * 200" data-aos-duration="800">  
            
              <div class="d-flex">
                  <h1 class="fw-bolder mt-3"> {{ software.id }}</h1>
                  <h1 class="ms-3 mt-3"> <iconify-icon :icon="software.iconClass" width="40" height="40"></iconify-icon></h1>
              </div>

            <hr class="rounded" style="border: 0.5px solid gray; width: 100%;">

              <div>
                <h5 class="mb-0 fw-bold text3">{{ software.name }}</h5>
                  <p class="small">{{ software.proficiency }}</p>
              </div>
              
          </div>
        </div>
      </div>
    </div>
  
    </div>
 
</template>

<script>

import { Icon } from '@iconify/vue';

export default {
  components: {
    'iconify-icon': Icon
  },
  data() {
    return {
      softwares: [
        {
          id: 1,
          name: "Photoshop",
          iconClass: "logos:adobe-photoshop",
            proficiency: "Proficient"
        },
        {
          id: 2,
          name: "Illustrator",
          iconClass: "logos:adobe-illustrator",
            proficiency: "Proficient"
        },
        {
          id: 3,
          name: "Figma",
          iconClass: "logos:figma",
            proficiency: "Proficient"
        },
        {
          id: 4,
          name: "Canva",
          iconClass: "devicon:canva",
            proficiency: "Proficient"
        },
        {
          id: 5,
          name: "Premiere Pro",
          iconClass: "logos:adobe-premiere",
            proficiency: "Proficient"
        },
        {
          id: 6,
          name: "Animate CC",
          iconClass: "logos:adobe-animate",
            proficiency: "Proficient"
        },

        {
          id: 7,
          name: "Adobe XD",
          iconClass: "logos:adobe-xd",
            proficiency: "Proficient"
        },

           {
          id: 8,
          name: "Adobe Flash",
          iconClass: "file-icons:adobe-flash",
            proficiency: "Proficient"
        },
          {
          id: 8,
          name: "Flipaclip",
          iconClass: "arcticons:flipaclip",
            proficiency: "Proficient"
        },

        
       
      ],
    };
  },
};
</script>
