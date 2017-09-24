<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Modifiers</title>
</head>
<body>

<div id="root">

    <button @click="a++">Add A</button>
    <button @click="b++">Add B</button>

    <p>A : {{a}}</p>
    <p>B : {{b}}</p>
    <p>Age : {{age}}</p>
    <br>
    <p>A to Age : {{addToA}}</p>
    <p>B to Age : {{addToB}}</p>

</div>

<script type="text/javascript" src="../Vue/vue.js"></script>
<script type="text/javascript" src="js/computed.js"></script>
</body>
</html>