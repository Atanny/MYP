<template>
<div class="p-5">
<div class="comtainer p-5">
    <div class="row rounded shadow-lg p-5">
      <div class="d-flex align-items-center">

          <div class="col-lg-6">
            <h1 class="fw-bolder outline-text3 text-dark text-center mt-1 mt-lg-0">
                         <img class="img-fluid" src="/images/coffee.png" alt="" />
            </h1>
          </div>

          <div class="col-lg-6 row justify-content-center">
            
              <div class="col-lg-12">
                <h1 class="fw-bolder outline-text3 text-dark text-center mt-1 mt-lg-0">
                  <iconify-icon class="mb-3 me-3" icon="ph:coffee-fill" width="50" height="50"></iconify-icon>
                  <b>BUY ME A COFFEE</b>
                </h1>
              
              </div>
               <img class="col-lg-6  rounded-5 mt-1 border border-dark shadow d-flex justify-content-center" src="/images/donate.png" width="150" alt="" />
  

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
      
    };
  },
};
</script>

<style>


</style>