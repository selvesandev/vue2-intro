<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Custom Directives</title>
</head>
<body>

<div id="app">
    <p>A Filter we can use to change the output of the data to browser. Filter do not change the data directly it only
        changes the view data.
        Vue js does not have default filter but we can make them easily.</p>
    <h1>Example.</h1>
    <hr>
    <p>{{test|uppercase}}</p>
    <hr>

    <input type="text" placeholder="Search.." v-model="search">
    <br>
    <ul>
        <li v-for="name in filterNames">{{name}}</li>
    </ul>
</div>

<script type="text/javascript" src="../Vue/vue.js"></script>
<script>
    Vue.filter('uppercase', function (value) {
        return value.toUpperCase();
    });
    Vue.filter('snippest', function (value) {

    });

    new Vue({
        el: '#app',
        data: {
            test: 'Filter is working',
            search: '',
            names: ['ram', 'raman', 'rama', 'ramesh', 'rakesh', 'ranjan', 'raani']
        },
        computed: {
            filterNames(){
                return this.names.filter((name) => {
                    return name.match(this.search);
                })
            }
        }
    })
</script>
</body>
</html>