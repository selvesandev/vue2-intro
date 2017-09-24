<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<div id="root">
    <input type="text" v-model="message">
    <p>Message from the Vue is : {{message}}</p>

    <hr>
    <h4>List</h4>
    <ul>
        <li v-for="list in listItems" v-text="list"></li>
    </ul>

    <input type="text" id="text">
    <button id="addItem">Add</button>


</div>

<script type="text/javascript" src="https://unpkg.com/vue@2.4.2"></script>

<script>
    let data = {
        message: 'Hello World',
        listItems: ['Weak', 'Strong', 'Pacience', 'Intelligent']
    };

    var app = new Vue({
        el: '#root',
        data: data,

        mounted(){
            //Mounted Function is triggered when everything is loaded in the vue instance
            //once everything is ready to go
            //event is triggered
            //data has been bound
            alert('ready...');

            /**
             * Event for Vue Js.. THE LONG WAY.
             */
            document.querySelector('#addItem').addEventListener('click', () => {
                var value = document.querySelector('#text').value;
                app.listItems.push(value);
                document.querySelector('#text').value = '';
            });
        }
    });


</script>

</body>
</html>