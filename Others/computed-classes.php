<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Modifiers</title>
</head>
<body>

<div id="root">
    <button @click="nearby=!nearby">Toggle Nearby</button>
    <button @click="available=!available">Toggle Available</button>
    <div :class="compClasses">
        <h1>Computed Classes Check out the classes of the div.</h1>
    </div>
</div>

<script type="text/javascript" src="../Vue/vue.js"></script>
<script type="text/javascript" src="js/computed-classes.js"></script>
</body>
</html>