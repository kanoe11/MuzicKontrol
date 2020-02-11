<template>
<div>
    <router-link to="/article/ajout">Ajouter un article</router-link>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Titre</th>
            <th scope="col">Contenu</th>
            <th scope="col">Visible</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="article in articles" v-bind:key="article.id">
                <td> {{article.titre}} </td>
                <td> {{article.contenu}} </td>
                <td> {{article.visible}} </td>
                <td><router-link v-bind:to="'/article/voir/' + article.id">éditer </router-link> </td>
            </tr>
        </tbody>
    </table>
</div>
</template>
<script>
import axios from 'axios'
export default {
    data() {
        return {
            articles: JSON.parse('[{"id":"1","titre":"test","user_id":"0","contenu":"","type_article_id":"1"},{"id":"2","titre":"test","user_id":"0","contenu":"sdfsdfsdfsdf","type_article_id":"1"},{"id":"3","titre":"sqqsdqsd","user_id":"0","contenu":"qsdqsdqsdqsdsqdqsqsqssqsqsqsq","type_article_id":"2"},{"id":"4","titre":"test","user_id":"0","contenu":"x xxx","type_article_id":"1"}]')
        }
    }
    /*mounted() {
        const ax = axios.create({
            baseURL: 'http://localhost:8080/'
        })
        ax.get("articles.json").then(response => {
            this.articles = response;
            console.log(response);
        }); 
    }*/
}
</script>