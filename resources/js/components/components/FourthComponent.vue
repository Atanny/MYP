<template>

<h1 class="fw-bolder text-dark my-5 container "><b>SOFTWARES</b></h1>


    <div class="mb-5 ">
        <marquee class="bg-dark text-white p-2 transform container-fluid " behavior="scroll" direction="right" scrollamount="20" scrolldelay="1">
            <h1 class="fw-bolder outline-text3 text-center">
                <b>
                    FOR GRAPHIC DESIGN & DIGITAL ARTS
                
                </b>
            </h1>
        </marquee>


        <div class="">
            <div class="card rounded-0 mt-5 bg-light border-0 shadow-lg p-5">
                <div class="card-body ">
                    <div class="row">

                        <div v-if="loading" v-for="n in placeholderCount" :key="n" class="col-sm-6 col-lg-2">
                            <div class="">
                            <div class="card rounded-079 shadow-lg feature-card border-0" >
                                <div class="card-body">
                                    <p>loading....</p>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div v-else-if="error">{{ error }}</div>
                     
                        
                        <div class="col-sm-6 col-lg-2"  v-for="software in softwares"  :key="software.id">
                            <div class="d-flex">
                            <h1 class="fw-bolder outline-text2" data-aos="fade-right" data-aos-duration="1000">0{{ software.id }}</h1>
                            <h1 class="ms-3" data-aos="fade-right" data-aos-duration="500"><i :class="software.icon"></i></h1>
                            </div>
                            <h6 class="mb-0 fw-bold text3" data-aos="fade-right">{{ software.name }}</h6>
                            <p data-aos="fade-right" data-aos-duration="500">{{ software.proficiency  }}</p>
                        </div>

                    
                    </div>
                </div>
            </div>

        </div>
    </div>
  
    
</template>
<script>
export default {
  data() {
    return {
      softwares: [],
      loading1: false,
      error: null,
    };
  },

  computed: {
    placeholderCount() {
      return this.softwares.length;
    },
  },

  methods: {
    async fetchItems() {
      this.loading1 = true;  // Use loading1 for the first API call
      try {
        const response = await axios.get("/home/data");
        this.softwares = response.data;
      } catch (err) {
        this.error = "Failed to fetch items.";
      } finally {
        this.loading1 = false;
      }
    },
  },

  created() {
    this.fetchItems();
  },
};
</script>
