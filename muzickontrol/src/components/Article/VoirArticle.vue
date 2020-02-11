<template>
<div>
    {{$route.params.id}}
    <h2>{{article.titre}}</h2>
    <div>{{article.contenu}}</div>
</div>
</template>
<script>
export default {
    data() {
        return {
            article: JSON.parse('[{"id":"1","titre":"test","user_id":"0","contenu":"","type_article_id":"1"},{"id":"2","titre":"test","user_id":"0","contenu":"sdfsdfsdfsdf","type_article_id":"1"},{"id":"3","titre":"sqqsdqsd","user_id":"0","contenu":"qsdqsdqsdqsdsqdqsqsqssqsqsqsq","type_article_id":"2"},{"id":"4","titre":"test","user_id":"0","contenu":"x xxx","type_article_id":"1"}]')
        }
    }
}
</script>