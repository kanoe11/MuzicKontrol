<template>
  <section id="article">
    <div class="container">
      <div class="col-lg-12 mx-auto text-center pb-5">
        <h2>Ajouter un article</h2>
      </div>
      <div class="row">
        <form role="form" method="POST">
          <div class="form-group">
            <label for="title">Titre</label>
            <input
              type="text"
              id="titre"
              name="titre"
              placeholder="Titre"
              required
              class="form-control"
            />
          </div>
          <div class="form-group">
            <select name="type_article">
                <option v-for="type in typeArticle" :key="type.id"  :value="type.id">{{type.title}}</option>
            </select>
          </div>
          <div class="form-group">
            <label for="cardNumber">Contenu</label>
            <div class="input-group">
              <textarea
                name="contenu"
                id="contenu"
                class="md-textarea form-control"
                rows="3"
                required
              ></textarea>
            </div>
          </div>
          <button
            id="add"
            name="enregister"
            class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"
          >Envoyez</button>
        </form>
      </div>
    </div>
  </section>
</template>
<script>
import axios from 'axios'
export default {
  data () {
    return {
      typeArticle: []
    }
  },
  mounted () {
    axios.get('https://jsonplaceholder.typicode.com/todos/').then(response => {
      this.typeArticle = [...response.data].slice(0.10)
    })
  }
}

</script>
