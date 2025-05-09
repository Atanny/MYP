<template>
    <form class="form-inline mt-5" @submit.prevent="StoreData()">
      <div class="form-group mx-sm-3 mb-2">
        <label for="number" class="text-dark">number</label>
        <input
          type="text"
          class="form-control"
          v-model="artwork.number"
          placeholder="asdasdsadsasa"
        />
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <label for="name" class="text-dark">Name</label>
        <input
          type="text"
          class="form-control"
          v-model="artwork.name"
          placeholder="Software Name"
        />
      </div>
  
      <div class="form-group mx-sm-3 mb-2">
        <label for="tag" class="text-dark">Tag</label>
        <input
          type="text"
          class="form-control"
          v-model="artwork.tags"
          placeholder="Software Name"
        />
      </div>
  
      <div class="form-group mx-sm-3 mb-2">
        <label for="image" class="text-dark">image</label>
        <input
          class="form-control"
          type="file"
          @change="handleFileUpload"
          placeholder="Software Name"
        />
      </div>
      <button type="submit" class="btn btn-primary mb-2 mx-sm-3">tag</button>
    </form>
  </template>
  
  <script>
  export default {
    data() {
      return {
        artwork: {
          number: '',
          name: '',
          image: null,
          video: null,
          tags: '',
        },
      };
    },
    methods: {
      handleFileUpload(event) {
        const file = event.target.files[0]; // Get the first file selected
        if (file) {
          this.artwork.image = file; // Store it in the artwork object
        }
      },
  
      StoreData() {
        const formData = new FormData();
        formData.append('number', this.artwork.number);
        formData.append('name', this.artwork.name);
        formData.append('tags', this.artwork.tags);
        if (this.artwork.image) {
          formData.append('image', this.artwork.image); // Append the image file
        }
  
        // Send the form data using axios
        axios
          .post('/admin/store/artworks', formData, {
            headers: {
              'Content-Type': 'multipart/form-data', // Specify the content type for file upload
            },
          })
          .then((response) => {
            console.log(response.data.message);
            alert('Artwork saved successfully!');
          })
          .catch((error) => {
            console.log(error.response.data.message);
            alert('Failed to save artwork');
          });
      },
    },
  };
  </script>
  