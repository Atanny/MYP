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

      <div>
        <div class="card rounded-0 mt-5 bg-light border-0 shadow-lg p-5">
          <div class="card-body">
            <div class="row">
              <div
                class="col-sm-6 col-lg-2 text"
                v-for="software in softwares"
                :key="software.id"
              >
                <div class="d-flex align-items-center">
                  <h1
                    class="fw-bolder outline-text2"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                  >
                    0{{ software.id }}
                  </h1>
                  <h1
                    class="ms-3"
                    data-aos="fade-right"
                    data-aos-duration="500"
                  >
                    <!-- Use Iconify component to display real icons -->
                    <iconify-icon :icon="software.iconClass" width="40" height="40"></iconify-icon>
                  </h1>
                </div>
                <h6
                  class="mb-0 fw-bold text3"
                  data-aos="fade-right"
                >
                  {{ software.name }}
                </h6>
                <p data-aos="fade-right" data-aos-duration="500">Proficient</p>
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
         {
          id: 5,
          name: "Premiere Pro",
          iconClass: "simple-icons:krita", // Official Premiere Pro logo
        },
      ],
    };
  },
};
</script>
