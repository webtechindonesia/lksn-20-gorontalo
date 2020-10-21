<template>
  <div>
      Yuk Pilih
      <h3 v-if="user">Halo {{user.username}} </h3>
  
    <div class="card"  v-for="poll in polls" :key="poll.id">
      <div class="card-body" >
        <div>
        <h3> {{poll.title}} </h3>
        <p> {{poll.description}} </p>
        </div>
        <form @submit.prevent="handleSubmit">

        <!-- <div class="form-check" >
        <input v-model="form.choice"  class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label v-for="choice in choices" :key="choice.id" :value="choice.id" class="form-check-label" for="defaultCheck1">
          {{choice.choice}}
        </label>
      </div> -->

                              <div class="form-group">
                              <label for="Category">Your Answer</label>
                              <select v-model="form.choice_id" id="category" class="form-control" placeholder="Input your category .." >
                                  <option v-for="choice in choices" :key="choice.id" :value="choice.id">
                                      {{choice.choice}}
                                  </option>
                              </select>
                            
                        </div>

                <div class="form-group">
                              <label for="Category">Your Role</label>
                              <select v-model="form.choice_id" id="category" class="form-control" placeholder="Input your category .." >
                                  <option v-for="choice in choices" :key="choice.id" :value="choice.id">
                                      {{choice.choice}}
                                  </option>
                              </select>
                            
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
      form: {
        choice_id: '',
        poll: '',
        user_id: ''
      },
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
   },
   async handleSubmit() {
     let response = await axios.post('/api/submitVote' , this.form)
     if(response.status == 200 ){
       console.log('success');
     }
   }
  }
}
</script>

<style>

</style>