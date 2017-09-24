<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<div id="root">
    <h4>{{message.split('').reverse().join('')}} : not computed</h4>
    <h4>{{reversedText}} : computed</h4>

    <hr>
    <h4>Task Apps</h4>
    <hr>
    <button @click="defineTaskTypes('all')">All Tasks</button>
    <button @click="defineTaskTypes('completed')">Completed</button>
    <button @click="defineTaskTypes('incomplete')">Incomplete</button>

    <ul v-if="show=='all'">
        <li v-for="task in tasks" v-text="task.desc"></li>
    </ul>
    <ul v-if="show=='completed'">
        <li v-for="task in completedTasks" v-text="task.desc"></li>
    </ul>

    <ul  v-if="show=='incomplete'">
        <li v-for="task in incompleteTasks" v-text="task.desc"></li>
    </ul>
</div>

<script type="text/javascript" src="../Vue/vue.js"></script>
<script>
    let app = new Vue({
        el: '#root',
        data: {
            message: 'Computed Properties',
            tasks: [
                {'desc': 'Eat', completed: true},
                {'desc': 'Drink', completed: false},
                {'desc': 'Dance', completed: false},
                {'desc': 'Walk', completed: false},
                {'desc': 'Exercise', completed: true}
            ],
            show: 'all'
        },
        methods: {
            defineTaskTypes(taskType){
                this.show = taskType;
            }
        },
        computed: {
            reversedText(){
                return this.message.split('').reverse().join('');
            },
            completedTasks(){
                return this.tasks.filter(task => task.completed);
            },
            incompleteTasks(){
                return this.tasks.filter(task => !task.completed);
            }
        }
    });
</script>
</body>
</html>