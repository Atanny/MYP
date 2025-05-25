<template>
  <div class="background mt-5" id="contact-section">
    <div class="container">
      <div class="h-auto">
        <div class="card-body row">
          <div class="col-lg-6 d-flex justify-content-center align-items-center">

            <!-- Show form if not submitted -->
            <div v-if="!submitted">
              <form
                @submit.prevent="handleSubmit"
                class="card shadow-lg feature-card container my-4 rounded"
                data-aos="fade-right"
                data-aos-duration="2000"
              >
                <div class="card-body container">
                  <h1 class="card-title fw-bolder text-white"><b>LET'S TALK!</b></h1>
                  <hr
                    style="border: none; height: 3px; background-color: #ffff; margin: 20px 0; border-radius: 5px;"
                  />
                  <div class="d-flex justify-content-between gap-2">
                    <div class="form-group">
                      <label class="text-white mb-3" for="email">Email address:</label>
                      <input
                        type="email"
                        class="form-control d-inline-block"
                        id="email"
                        placeholder="Atanatan190@gmail.com"
                      />
                    </div>
                    <div class="form-group">
                      <label class="text-white mb-3" for="phone">Telephone No.</label>
                      <input
                        type="text"
                        class="form-control d-inline-block"
                        id="phone"
                        placeholder="+639"
                      />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="text-white my-3" for="name">Your Name:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="Enter your Name..."
                    />
                  </div>

                  <div class="form-group">
                    <label class="text-white my-3" for="message">Your Message:</label>
                    <textarea
                      rows="4"
                      class="form-control"
                      id="message"
                      placeholder="Enter your Message Here..."
                    ></textarea>
                  </div>

                  <button type="submit" class="btn btn-success my-4">Submit</button>
                </div>
              </form>
            </div>

            <!-- Show message after submit -->
            <div v-else class="text-center text-white p-5">
              <h2>Not available for a moment...</h2>
            </div>
          </div>

          <!-- Image section -->
          <img
            class="col-lg-6 img-fluid mb-5 mb-lg-0 mb-md-0 d-none d-sm-block d-lg-block p-5"
            src="/images/atanny (2).png"
            alt=""
            data-aos="fade-right"
            data-aos-duration="2000"
          />

          <img
            class="col-lg-6 img-fluid mt-5 mb-lg-0 mb-md-0 d-lg-none d-block"
            src="/images/atanny (2).png"
            alt=""
            data-aos="fade-right"
            data-aos-duration="2000"
          />
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
