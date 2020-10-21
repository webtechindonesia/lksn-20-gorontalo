<template>
  <div>
      Yuk Pilih
      <h3 v-if="user">Halo</h3>
  
    <div class="card"  v-for="poll in polls" :key="poll.id">
      <div class="card-body" >
        <div>
        <h3> {{poll.title}} </h3>
        <p> {{poll.description}} </p>
        </div>
        <form @submit.prevent="handleSubmit">

        <div class="form-check" v-for="choice in choices" :key="choice.id">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
          {{choice.choice}}
        </label>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
      </div>
    </div>

     
  </div>
</template>

<script>
export default {
  data() {
    return {
      user:null,
      polls: '',
      choices: ''
    }
  },
  async created() {
    const response = await axios.get('user');
    this.user = response.data;
  },
  mounted() {
    this.getPolls();
    this.getChoices();
;  },
  methods: {
    async getPolls()  {
      let response = await axios.get('/api/poll').then((response)=>  {
        this.polls = response.data.data
        console.log(response.data.data);
      })
    },
   async getChoices() {
     let response = await axios.get('/api/choice').then((response)=> {
       this.choices = response.data.data
       console.log(response.data.data);
     })
   }
  }
}
</script>

<style>

</style>