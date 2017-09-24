<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Custom Directives</title>
</head>
<body>

<div id="app">
    <p>Directives are a way for us to tell vue js to do something, to exibit a certain behaviour for us. eg:
        v-if,v-on,v-model,v-for etc.
        <br> we add them in html element like attributes
        <br>
        We want a behaviour that does not exists in vue js we can make that.
    </p>

    <hr>
    <h3>Random Color Directive.</h3>
    <hr>
    <div v-theme:green="'wide'">
        <h1 v-rainbow>Hey</h1>
        <h1 v-rainbow>This</h1>
        <h1 v-rainbow>Is</h1>
        <h1 v-rainbow>Rainbow</h1>
        <h1 v-rainbow>Effect</h1>
    </div>
</div>

<script type="text/javascript" src="../Vue/vue.js"></script>
<script>
    //Custom Directives.
    Vue.directive('rainbow', {
        //As the component have a lifecycle hook so do directive.
        bind(el, binding, vnode){
            //executes as soon as the directive is bound to the html.
            //el is the element
            //binding is the value assigend to the directive attribute
            el.style.color = "#" + Math.random().toString().slice(2, 8);
        }
    });

    Vue.directive('theme', {
        bind(el, binding, vnode){
            if (binding.value == 'wide') {
                el.style.maxWidth = "1200px";
            }
            if (binding.arg == 'green') {
                el.style.backgroundColor = binding.arg;
            }
        }
    });

    new Vue({
        el: '#app',
        data: {}
    })
</script>
</body>
</html>