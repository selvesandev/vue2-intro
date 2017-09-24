<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Modifiers</title>
</head>
<body>

<div id="root">
    {{num}}
    <button @click.once="add()">Only Once</button>
    <a @click.prevent="add()" href="http://google.com">Prevent Default</a>

    <h4>https://vuejs.org/v2/guide/events.html#Event-Modifiers</h4>

    <hr>
    <h2>Key Modifiers Vue</h2>
    <input type="text" @keyup.enter="onEnterKeyUp" placeholder="Enter after typing">
    <input type="text" @keyup.alt.enter="onShiftEnterKeyUp" placeholder="Alt Enter after typing">

</div>

<script type="text/javascript" src="../Vue/vue.js"></script>
<script type="text/javascript" src="js/modifiers.js"></script>
</body>
</html>