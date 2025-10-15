<template>
  <div class="mt-0" id="contact-section">


    <div class="container p-lg-5 ">
       <hr class="rounded" style="border: 0.5px solid gray; width: 100%;">
      <div class="h-auto">
        <div class="card-body row p-5">
          
          

          <div class="col-lg-6 img-fluid rounded">
             <img
              class="img-fluid rounded "
              src="/images/hi.jpg"
              alt=""
              data-aos="fade-right"
              data-aos-duration="2000"
            />
          </div>
          <div class="col-lg-6 d-flex justify-content-start justify-content-lg-center align-items-center mt-3 mt-lg-0">
            <div class="row">
              <div class="" data-aos="fade-right" data-aos-duration="1600">
                <div class="card-body">

                  <h1 class="display-6 fw-bolder outline-text3 text-start text-dark" data-aos="fade-right" data-aos-duration="1000">IIIIIIIIIIIIII <i class="fa-solid fa-envelope"></i></h1>
       
                  <h1 class="display-4 fw-bolder" style="color: #ff8333;"> 
                    <b>SEND ME EMAIL</b>
                  </h1>
                  <p class="text-dark">Want to talk about design? Let's talk!</p>
                  <div>
                    <a 
                      href="https://mail.google.com/mail/?view=cm&to=atanatan190@email.com&su=I WANT TO CONNECT&body=Please write your message here."
                      target="_blank"
                      class="btn btn-black d-inline-block">
                      Send Email
                    </a>

                  
                  </div>

                </div>
              </div>
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
      submitted: false
    };
  },
  methods: {
    handleSubmit() {
      this.submitted = true;

      // Automatically show the form again after 3 seconds
      setTimeout(() => {
        this.submitted = false;
      }, 3000);
    }
  }
};
</script>
