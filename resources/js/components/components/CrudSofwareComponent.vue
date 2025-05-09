<template>
    <form class="form-inline mt-5" @submit.prevent="SaveData()">
      <div class="form-group mx-sm-3 mb-2">
        <label for="icon" class="text-dark">Icon</label>
        <input
          type="text"
          class="form-control"
          id="icon"
          v-model="software.icon"
          placeholder="asdasdsadsasa"
        />
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <label for="name" class="text-dark">Name</label>
        <input
          type="text"
          class="form-control"
          id="name"
          v-model="software.name"
          placeholder="Software Name"
        />
      </div>

      <div class="form-group mx-sm-3 mb-2">
        <label for="name" class="text-dark">Name</label>
        <input
          type="text"
          class="form-control"
          id="name"
          v-model="software.proficiency"
          placeholder="Software Name"
        />
      </div>
      <button type="submit" class="btn btn-primary mb-2 mx-sm-3">Confirm Identity</button>
    </form>
  </template>
  
  <script>
  export default {
  data() {
    return {
      software: {
        icon: '',
        name: '',
        proficiency: '',
      },
    };
  },
  methods: {
    SaveData() {
        axios.post('/admin/store', this.software).then(
            response => {
                console.log(response);
            }
       
        ).catch(error => {
            console.log('error');
        })
    },
  },
};

  </script>
  