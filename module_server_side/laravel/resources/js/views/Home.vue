<template>
  <div>
      Yuk Pilih
      <h3 v-if="user">Halo</h3>
  </div>
</template>

<script>
export default {
  data() {
    return {
      user:null
    }
  },
  async created() {
    const response = await axios.get('user');
    this.user = response.data;
  }
}
</script>

<style>

</style>