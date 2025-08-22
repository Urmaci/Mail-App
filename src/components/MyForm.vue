<template>
  <div class="form-content">
    <h2>İLETİŞİM</h2>
    <form @submit="formSubmit" method="post">
      <div class="group top">
        <input
          type="text"
          name="name"
          v-model="formData.name"
          placeholder="Ad"
        />
        <input
          type="text"
          name="lastName"
          v-model="formData.lastName"
          placeholder="Soyad"
        />
      </div>
      <div class="group bottom">
        <input
          type="email"
          v-model="formData.email"
          name="email"
          placeholder="Email"
        />
        <textarea
          name="message"
          v-model="formData.message"
          placeholder="Mesajınız..."
        ></textarea>
      </div>
      <button type="submit" name="send">Gönder</button>
    </form>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      formData: {
        name: "",
        lastName: "",
        email: "",
        message: "",
      },
    };
  },
  methods: {
    formSubmit(e) {
      e.preventDefault();
      const url = "http://localhost:8000/sendMail.php";

      axios({
        method: "POST",
        url: url,
        data: {
          name: this.formData.name,
          lastName: this.formData.lastName,
          email: this.formData.namemaile,
          message: this.formData.namemaile,
        },
      })
        .then((success) => console.log(success))
        .catch((error) => console.error(error));
    },
  },
};
</script>
