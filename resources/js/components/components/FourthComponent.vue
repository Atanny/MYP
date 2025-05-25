<template>
  <div>
    <h1 class="fw-bolder text-dark my-5 container"><b>SOFTWARES</b></h1>

    <div class="mb-5">
      <marquee
        class="bg-dark text-white p-2 transform container-fluid"
        behavior="scroll"
        direction="right"
        scrollamount="20"
        scrolldelay="1"
      >
        <h1 class="fw-bolder outline-text3 text-center">
          <b>FOR GRAPHIC DESIGN & DIGITAL ARTS</b>
        </h1>
      </marquee>

      <div class=" justify-content-center ">
        <div class="card rounded mt-5  bg-light border-0 shadow-lg ">
          <div class="card-body">
            <div class="row align-items-center justify-content-center gap-3">
              <div
                class="col-5 col-lg-2 text shadow-lg rounded  "
                v-for="software in softwares"
                :key="software.id"
              >
                <div class="d-flex align-items-center ">
                  <h1 class="fw-bolder mt-3" data-aos="fade-right" data-aos-duration="1000">
                    {{ software.id }}
                  </h1>
                  <h1 class="ms-3 mt-3"data-aos="fade-right"data-aos-duration="500">

                    <iconify-icon :icon="software.iconClass" width="40" height="40" ></iconify-icon>
                  </h1>
                </div>
                   <hr class="rounded" style="border: 0.5px solid gray; width: 100%;">
                <h5
                  class="mb-0 fw-bold text3"
                  data-aos="fade-right"
                >
               

                  {{ software.name }}
                </h5>
                <p class="small" data-aos="fade-right" data-aos-duration="500">Proficient</p>
              </div>
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
      softwares: [
        {
          id: 1,
          name: "Photoshop",
          iconClass: "logos:adobe-photoshop", // Official Photoshop logo
        },
        {
          id: 2,
          name: "Illustrator",
          iconClass: "logos:adobe-illustrator", // Official Illustrator logo
        },
        {
          id: 3,
          name: "Figma",
          iconClass: "logos:figma", // Official Figma logo
        },
        {
          id: 4,
          name: "Canva",
          iconClass: "devicon:canva", // Official Canva logo
        },
        {
          id: 5,
          name: "Premiere Pro",
          iconClass: "logos:adobe-premiere", // Official Premiere Pro logo
        },
       
      ],
    };
  },
};
</script>
