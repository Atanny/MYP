<template>
  <div class="mb-5">
    <marquee
      class="bg-dark text-white p-2 transform2 mt-5 container-fluid"
      behavior="scroll"
      direction="right"
      scrollamount="20"
      scrolldelay="1"
    >
      <h1 class="fw-bolder outline-text3 text-center">
        <b>FOR WEB DESIGN & WEB DEVELOPMENT</b>
      </h1>
    </marquee>

    <div class=" justify-content-center">
      <div class="card rounded-0 mt-5 bg-light border-0 shadow-lg ">
        <div class="card-body  ">
          <div class="row align-items-center justify-content-center gap-3">
            <!-- Software List -->
            <div
              class="col-5 col-lg-2 text shadow-lg rounded p-2  "
              v-for="software2 in softwares2"
              :key="software2.id"
            >
              <div class="d-flex align-items-center">
                <h1
                  class="fw-bolder mt-3"
                  data-aos="fade-right"
                  data-aos-duration="1000"
                >
                  {{ software2.id }}
                </h1>
                <h1
                  class="ms-3 mt-3"
                  data-aos="fade-right"
                  data-aos-duration="500"
                >
                  <!-- Use Iconify component to display real icons -->
                  <iconify-icon :icon="software2.iconClass" width="40" height="40"></iconify-icon>
                </h1>
              </div>
               <hr class="rounded" style="border: 0.5px solid gray; width: 100%;">
              <h5 class="mb-0 fw-bold text3 " data-aos="fade-right">{{ software2.name }}</h5>
              <p class="small" data-aos="fade-right" data-aos-duration="500">{{ software2.proficiency }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// Import Iconify component for use
import { Icon } from '@iconify/vue';

export default {
  components: {
    'iconify-icon': Icon
  },
  data() {
    return {
      // Static software list with icons and proficiency levels
      softwares2: [
        {
          id: 1,
          name: "VS Code",
          iconClass: "logos:visual-studio-code", // Official VS Code logo
          proficiency: "Proficient"
        },
        {
          id: 2,
          name: "Sublime Text",
          iconClass: "skill-icons:sublime-light", // Official Sublime Text logo
          proficiency: "Proficient"
        },
        {
          id: 3,
          name: "Bootstrap",
          iconClass: "logos:bootstrap", // Official Bootstrap logo
          proficiency: "Proficient"
        },
       
        {
          id: 4,
          name: "GitHub",
          iconClass: "devicon:github", // Official Git logo
          proficiency: "Basic"
        },
        {
          id: 5,
          name: "PHP",
          iconClass: "logos:php", // Official PHP logo
          proficiency: "Basic"
        },
        {
          id: 6,
          name: "Vue.js",
          iconClass: "logos:vue", // Official Vue.js logo
          proficiency: "Basic"
        },
        {
          id: 7,
          name: "Laravel",
          iconClass: "logos:laravel", // Official Laravel logo
          proficiency: "Proficient"
        },
        {
          id: 8,
          name: "HTML",
          iconClass: "logos:html-5", // Official HTML5 logo
          proficiency: "Proficient"
        },
        {
          id: 9,
          name: "CSS",
          iconClass: "logos:css-3", // Official CSS3 logo
          proficiency: "Proficient"
        },
        {
          id: 10,
          name: "JavaScript",
          iconClass: "logos:javascript", // Official JavaScript logo
          proficiency: "Beginner"
        }
      ]
    };
  }
};
</script>

<style scoped>
/* Add any custom styles here */
</style>
