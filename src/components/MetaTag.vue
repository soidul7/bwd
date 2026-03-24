<template>
    <head>
        <!-- <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>{{title}}</title>
        <meta name="description" content="{{description}}">
        <meta name="keywords" content="HTML, CSS, JavaScript, Vue 3,Node" />
        <meta name="author" content="Mike Boggus">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <meta v-if="title == 'Than You | Big Wave Development LLC'" name="robots" content="noindex,nofollow">
    </head>

</template>
<script>

import { defineComponent } from 'vue';
export default defineComponent({
    name: 'MetaTag',
    props:['title', 'description'],
    created(){
        //console.log("title: ", this.title);
        //console.log("description: ", this.description);
    }
    
});

</script>
<style scoped>
</style>
