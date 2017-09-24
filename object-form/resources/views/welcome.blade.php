<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
<div class="flex-center position-ref full-height" id="app">

    <form action="" @submit.prevent="onSubmit()">
        <div>
            <label for="">Product Name</label><br>
            <input type="text" name="name" v-model="name">
        </div>

        <br>

        <div>
            <label for="">Details</label><br>
            <textarea name="desc" id="" cols="30" rows="10" v-model="desc"></textarea>
        </div>
        <br>
        <div>
            <input type="submit">
        </div>
    </form>

</div>

<script type="text/javascript" src="/js/vue.js"></script>
<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
