new Vue({
    el: '#root',
    data: {
        num: 1
    },
    methods: {
        add(){
            this.num++;
        },
        onEnterKeyUp(){
            console.log('You typed your name..');
        },
        onShiftEnterKeyUp(){
            console.log('You typed you age');
        }
    }
});