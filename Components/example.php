<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            padding: 30px 100px;
            font-family: "Trebuchet MS";
        }

        .header {
            padding: 15px;
            background: #666;
            color: white;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }
        .body{
            border: 1px solid #9c9c9c;
            padding: 20px 15px;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
            border-top: none;
            margin-bottom: 50px;
        }
        .close{
            float: right;
        }
    </style>
</head>
<body>

<div id="root">
    <p>{{test}}</p>
    <message title="Hey This is really very cool."
             body="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium at atque, cumque dolor dolore, enim est eum harum labore magnam molestias optio porro quae qui quod recusandae soluta ut voluptatibus?"></message>

    <message title="Component Generated" body="Component Made easy with vue js"></message>

</div>

<script type="text/javascript" src="../Vue/vue.js"></script>
<script type="text/javascript" src="js/example.js"></script>

</body>
</html>