<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .color-red {
            color: red;
        }

        .is-loading {
            background: lightgray;
        }
    </style>
</head>
<body>

<div id="root">
    <p :class="colorName">{{test}}</p>

    <button :title="title" :class="{'is-loading':isLoading}" @click="processing()">Click Me!!</button>
    <button :disabled="isDisabled" @click="toggleDisabled()">Disabled Attribute Binding</button>
</div>


<script type="text/javascript" src="../Vue/vue.js"></script>
<script type="text/javascript">
    let data = {
        test: 'Test Data',
        title: 'This is title from vue.',
        colorName: 'color-red',
        isLoading: false,
        isDisabled: false
    };
    let app = new Vue({
        el: '#root',
        data: data,
        methods: {
            processing()
            {
                let that = this;
                this.isLoading = true;
                setTimeout(function () {
                    that.isLoading = false;
                }, 2000)
            },

            toggleDisabled(){
                this.isDisabled = !this.isDisabled;
            }
        }
    });

</script>
</body>
</html>