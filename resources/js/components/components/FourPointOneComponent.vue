<template>

    
    <div  class="text-white p-2 mt-5" behavior="scroll" direction="right" scrollamount="20" scrolldelay="1">
      <h1 class="fw-bolder text-center text-dark">
        <b class="">SOFTWARES & KNOWLEDGES</b>
      </h1>
    </div>
      <div class="container">
            <div class="container">
                 <hr class="rounded" style="border: 0.5px solid gray; width: 100%;"></hr>
            </div>
        </div>
   <div class="d-flex container">
    <div class="">

        <div class="col-sm-12 col-lg-12 p-2 py-5    ">
          <h4 class="fw-bolder text-center text-dark"><b class="">DESIGN</b></h4>
          <p class="text-center">Sofwares that i use when Designing or Editing.</p>
        <div class="row mb-0 mt-0 p-4 p-lg-5 gap-3 justify-content-center">
          <div class="card col-5 col-lg-2 shadow-lg rounded-5 border-1 border-light" v-for="(software, index) in softwares" :key="software.id" data-aos="fade-up" :data-aos-delay="index * 200" data-aos-duration="800">  
            <div class="text-center">
               <h1 class=" mt-3"> <iconify-icon :icon="software.iconClass" width="40" height="40"></iconify-icon></h1>    
            </div>
            <div class="text-center">
              <h6 class="mb-0 ">{{ software.name }}</h6>
              <p class="small">{{ software.proficiency }}</p>
            </div>
          </div>
        </div>
      </div>
 <div class="container">
            <div class="container">
                 <hr class="rounded" style="border: 0.5px solid gray; width: 100%;"></hr>
            </div>
        </div>
      <div class="col-sm-12 col-lg-12 p-2 py-5 ">
          <h4 class="fw-bolder text-center text-dark"><b class="">DEVELOPMENT</b></h4>
          <p class="text-center">Sofwares that i use when developing.</p>
        <div class="row mb-0 mt-0 p-4 p-lg-5 gap-3 justify-content-center">
          <div class="card col-5 col-lg-2 shadow-lg rounded-5 border-1 border-light" v-for="(software2, index) in softwares2" :key="software2.id" data-aos="fade-up" :data-aos-delay="index * 200" data-aos-duration="800">  
            <div class="text-center">
               <h1 class=" mt-3"> <iconify-icon :icon="software2.iconClass" width="40" height="40"></iconify-icon></h1>    
            </div>
            <div class="text-center">
              <h6 class="mb-0 ">{{ software2.name }}</h6>
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
      softwares: [
        { id: 1, name: "Photoshop", iconClass: "logos:adobe-photoshop", proficiency: "Proficient" },
        { id: 2, name: "Illustrator", iconClass: "logos:adobe-illustrator", proficiency: "Proficient" },
        { id: 3, name: "Figma", iconClass: "logos:figma", proficiency: "Proficient" },
        { id: 4, name: "Canva", iconClass: "devicon:canva", proficiency: "Proficient" },
        { id: 5, name: "Premiere", iconClass: "logos:adobe-premiere", proficiency: "Basic" },
        { id: 6, name: "Animate CC", iconClass: "logos:adobe-animate", proficiency: "Basic" },
        { id: 7, name: "Adobe XD", iconClass: "logos:adobe-xd", proficiency: "Basic" },
        { id: 8, name: "Adobe Flash", iconClass: "file-icons:adobe-flash", proficiency: "Basic" },
        { id: 9, name: "Flipaclip", iconClass: "arcticons:flipaclip", proficiency: "Proficient" },
        { id: 10, name: "Capcut", iconClass: "hugeicons:capcut", proficiency: "Proficient" }
      ],
      softwares2: [
        { id: 1, name: "VS Code", iconClass: "logos:visual-studio-code", proficiency: "Proficient" },
        { id: 2, name: "Sublime Text", iconClass: "skill-icons:sublime-light", proficiency: "Proficient" },
        { id: 3, name: "Bootstrap", iconClass: "logos:bootstrap", proficiency: "Proficient" },
        { id: 4, name: "GitHub", iconClass: "devicon:github", proficiency: "Basic" },
        { id: 5, name: "PHP", iconClass: "logos:php", proficiency: "Basic" },
        { id: 6, name: "Vue.js", iconClass: "logos:vue", proficiency: "Basic" },
        { id: 7, name: "Laravel", iconClass: "logos:laravel", proficiency: "Proficient" },
        { id: 8, name: "HTML", iconClass: "logos:html-5", proficiency: "Proficient" },
        { id: 9, name: "CSS", iconClass: "logos:css-3", proficiency: "Proficient" },
        { id: 10, name: "JavaScript", iconClass: "logos:javascript", proficiency: "Basic" },
        { id: 11, name: "ChatGPT", iconClass: "logos:openai", proficiency: "Proficient" },
        { id: 12, name: "MySQL", iconClass: "logos:mysql-icon", proficiency: "Basic" }
      ]
    };
  }
};
</script>

