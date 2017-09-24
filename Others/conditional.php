<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Modifiers</title>
</head>
<body>

<div id="root">
    <p v-if="error">Error</p>
    <p v-else-if="success">Success</p>
    <p v-else="!error && !success">Unknown</p>

    <ul>
        <li v-for="(ninja,key) in ninjas">{{++key}} {{ninja}}</li>
    </ul>
</div>

<script type="text/javascript" src="../Vue/vue.js"></script>
<script type="text/javascript" src="js/conditional.js"></script>
</body>
</html>