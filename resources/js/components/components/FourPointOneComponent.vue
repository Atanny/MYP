<template>
  <div class="">
    
    <marquee class="bg-dark text-white p-2 transform2 mt-5 container-fluid" behavior="scroll" direction="right" scrollamount="20" scrolldelay="1">
      <h1 class="fw-bolder outline-text3 text-center mt-1 mt-lg-0">
        <b>FOR WEB DEVELOPMENT CODING</b>
      </h1>
    </marquee>
    
    <div class="bg-light shadow-lg rounded-0 align-items-center justify-content-center">
      <div class="container p-5">
        <div class="row mb-0 mt-0 p-4 p-lg-5">
          <div class="card col-6 col-lg-2 shadow-lg rounded-0 border-1 border-light" v-for="(software2, index) in softwares2" :key="software2.id" data-aos="fade-up" :data-aos-delay="index * 200" data-aos-duration="800">  
            
              <div class="d-flex">
                  <h1 class="fw-bolder mt-3"> {{ software2.id }}</h1>
                  <h1 class="ms-3 mt-3"> <iconify-icon :icon="software2.iconClass" width="40" height="40"></iconify-icon></h1>
              </div>

            <hr class="rounded" style="border: 0.5px solid gray; width: 100%;">

              <div>
                <h5 class="mb-0 fw-bold text3">{{ software2.name }}</h5>
                  <p class="small">{{ software2.proficiency }}</p>
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

      softwares2: [
        
{
          id: 1,
          name: "VS Code",
          iconClass: "logos:visual-studio-code", 
          proficiency: "Proficient"
        },
        {
          id: 2,
          name: "Sublime Text",
          iconClass: "skill-icons:sublime-light",
          proficiency: "Proficient"
        },
        {
          id: 3,
          name: "Bootstrap",
          iconClass: "logos:bootstrap", 
          proficiency: "Proficient"
        },
       
        {
          id: 4,
          name: "GitHub",
          iconClass: "devicon:github", 
          proficiency: "Basic"
        },
        {
          id: 5,
          name: "PHP",
          iconClass: "logos:php", 
          proficiency: "Basic"
        },
        {
          id: 6,
          name: "Vue.js",
          iconClass: "logos:vue", 
          proficiency: "Basic"
        },
        {
          id: 7,
          name: "Laravel",
          iconClass: "logos:laravel", 
          proficiency: "Proficient"
        },
        {
          id: 8,
          name: "HTML",
          iconClass: "logos:html-5", 
          proficiency: "Proficient"
        },
        {
          id: 9,
          name: "CSS",
          iconClass: "logos:css-3",
          proficiency: "Proficient"
        },
        {
          id: 10,
          name: "JavaScript",
          iconClass: "logos:javascript", 
          proficiency: "Basic"
        },
        {
          id: 11,
          name: "ChatGPT",
          iconClass: "logos:openai", 
          proficiency: "Profecient"
        },

         {
          id: 12,
          name: "MySQL",
          iconClass: "logos:mysql-icon", 
          proficiency: "Basic"
        }
        
      ]
    };
  }
};
</script>

