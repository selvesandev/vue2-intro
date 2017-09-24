<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabs</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container" id="root">
    <h1>Tabs</h1>
    <hr>

    <tabs>
        <tab name="About us" :selected="true">
            <h3>This is the about us section</h3>
        </tab>

        <tab name="Profile">
            <h3>User Profile Here</h3>
        </tab>

        <tab name="Contact Info">
            <h3>Kathmandu, Nepal</h3>
        </tab>

        <cool></cool>
    </tabs>

</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="../Vue/vue.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>

</body>
</html>