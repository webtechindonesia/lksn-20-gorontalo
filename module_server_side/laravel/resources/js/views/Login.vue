<template>
  <div>
      <div class="card">
        <div class="card-header">
          Login
        </div>
        <div class="card-body">
          <form @submit.prevent="handleSubmit">
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" class="form-control" v-model="username" placeholder="Username ..">
            </div>

            <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="form-control" v-model="password" placeholder="Password ..">
            </div>
            
            <button class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      username: '',
      password: ''
    }
  },
  
  methods: {
    async handleSubmit() {
      const response = await axios.post('/api/auth/login', {
        username: this.username,
        password: this.password
      });
      localStorage.setItem('token', response.data.token);
      this.$router.push('/')
    }
  }
}
</script>

<style>

</style>