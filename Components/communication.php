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
    <h1>Components Communication Event Emitter</h1>
    <hr>

    <coupon @applied="onCouponApplied"></coupon>
    <br>
    <br>
    <my-button @show-message="showMessage"></my-button>

    <p v-if="success">You clicked Ok</p>
    <p v-if="success===false">You clicked Cancel</p>
</div>


<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="../Vue/vue.js"></script>
<script type="text/javascript" src="js/communication.js"></script>

</body>
</html>