<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Modifiers</title>
</head>
<body>

<div id="app">
    <component :is="component"></component>
</div>

<script type="text/javascript" src="../Vue/vue.js"></script>
<script>
    Vue.component('my-com-one', {
        template: `<h1>Test Component One</h1>`
    });

    Vue.component('my-com-two', {
        template: `<h1>Test Component Two</h1>`
    });
    new Vue({
        el: '#app',
        data: {
            component:'my-com-two'
        }
    })
</script>
</body>
</html>