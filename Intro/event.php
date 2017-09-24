<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div id="root">
    <ul>
        <li v-for="subject in subjects" v-text="subject"></li>
    </ul>
    <input v-model="newName" type="text">
    <button v-on:click="addName()">Click</button>
</div>

<script type="text/javascript" src="../Vue/vue.js"></script>
<script>
    let data = {
        subjects: [
            'Maths',
            'Science'
        ],
        newName: ''
    };
    let app = new Vue({
        el: '#root',
        data: data,
        methods: {
            addName(){
                if (this.newName != '') {
                    this.subjects.push(this.newName);
                    this.newName = '';
                }
            }
        },
        mounted(){
        }
    });
</script>

</body>
</html>