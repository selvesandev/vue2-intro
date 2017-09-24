<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Modifiers</title>
</head>
<body>

<div id="app">
    <input type="text" v-model.lazy="form.title">
    <br>
    <textarea name="" cols="30" rows="10" v-model.lazy="form.desc"></textarea>
    <br>
    <input type="checkbox" value="nep" v-model="form.languages">Nepali
    <input type="checkbox" value="eng" v-model="form.languages">English
    <input type="checkbox" value="chi" v-model="form.languages">Chinese

    <br>
    <select name="" v-model="form.author">
        <option v-for="author in selects" :value="author.name">{{author.name}}</option>
    </select>


    <hr>
    <p> Title : {{form.title}}</p>
    <p> Details : {{form.desc}}</p>
    <p>Languages : {{form.languages.join(',')}}</p>
    <p>Author: {{form.author}}</p>
</div>

<script type="text/javascript" src="../Vue/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.4"></script>

<script>

    new Vue({
        el: '#app',
        data: {
            form: {
                title: '',
                desc: '',
                languages: [],
                author: ''
            },
            selects: [
                {name: 'Selvesan'},
                {name: 'Vue Js'},
                {name: 'Captain America'},
            ]
        },
        methods: {
            post(){
            }
        }
    })
</script>
</body>
</html>