<template>
  <div>
      Yuk Pilih
      <h3 v-if="user">Halo</h3>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
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
      votes: ''
    }
  },
  async created() {
    const response = await axios.get('user');
    this.user = response.data;
  },
  mounted() {
    this.getNote();
  },
  methods: {
    async getNote()  {
      let response = await axios.get('/vote').then((response)=>  {
        this.notes = response.data.data
        console.log(response.data.data);
      })
    }
  }
}
</script>

<style>

</style>