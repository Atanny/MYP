<template>

    
        <div class="mb-5 ">
           
    
            <marquee class="bg-dark text-white p-2 transform2 mt-5 container-fluid" behavior="scroll" direction="lef" scrollamount="20" scrolldelay="1">
                <h1 class="fw-bolder outline-text3 text-center">
                    <b>
                        FOR WEB DESIGN & WEB DEVELOPMENT
                    
                    </b>
                </h1>
            </marquee>
    
    
            <div class="">
                <div class="card rounded-0 mt-5 bg-light border-0 shadow-lg p-5">
                    <div class="card-body ">
                        <div class="row">
    
                            <div v-if="loading2" v-for="n in placeholderCount2" :key="n" class="col-sm-6 col-lg-2">
                                <div class="">
                                <div class="card rounded-079 shadow-lg feature-card border-0" >
                                    <div class="card-body">
                                        <p>loading....</p>
                                    </div>
                                </div>
                            </div>
                            </div>
    
                            <div v-else-if="error">{{ error }}</div>
                         
                            
                            <div class="col-sm-6 col-lg-2"  v-for="software2 in softwares2"  :key="software2.id">
                                <div class="d-flex">
                                <h1 class="fw-bolder outline-text2" data-aos="fade-right" data-aos-duration="1000">0{{ software2.id }}</h1>
                                <h1 class="ms-3" data-aos="fade-right" data-aos-duration="500"><i :class="software2.icon"></i></h1>
                                </div>
                                <h6 class="mb-0 fw-bold text3" data-aos="fade-right">{{ software2.name }}</h6>
                                <p data-aos="fade-right" data-aos-duration="500">{{ software2.proficiency  }}</p>
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
          softwares2: [],
          loading2: false,
        };
      },
    
      computed: {
        placeholderCount2() {
          return this.softwares2.length;
        }
      },
    
      methods: {
        async fetchSoftaware2() {
          this.loading2 = true; 
          try {
            const response = await axios.get("/home/development"); 
            this.softwares2 = response.data;
          } catch (err) {
            this.error = "Failed to fetch items.";
          } finally {
            this.loading2 = false;
          }
        },
      },
    
      created() {
        this.fetchSoftaware2();
      },
    };
</script>
    