<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<div id="root">
    <button @click="showModelAction()">Show</button>
    <model v-if="showModel" @close="showModel = false"></model>
</div>

<script type="text/javascript" src="../Vue/vue.js"></script>
<script type="text/javascript" src="js/emit-event.js"></script>

</body>
</html>