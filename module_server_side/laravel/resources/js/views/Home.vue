<template>
  <div>
      Yuk Pilih
      <h3 v-if="user">Halo</h3>

      <table class="table">
  <thead>
    <tr >
      <th scope="col">#</th>
      <th scope="col">choice</th>
      <th scope="col">user</th>
      <th scope="col">poll</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="vote in votes" :key="vote.id">
      <td> {{vote.user}} </td>
    </tr>
  </tbody>
</table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      user:null,
      polls: ''
    }
  },
  async created() {
    const response = await axios.get('user');
    this.user = response.data;
  },
  mounted() {
    this.getPolls();
  },
  methods: {
    async getPolls()  {
      let response = await axios.get('vote').then((response)=>  {
        this.polls = response.data.data
        console.log(response.data.data);
      })
    }
  }
}
</script>

<style>

</style>