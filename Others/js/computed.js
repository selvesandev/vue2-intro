new Vue({
    el: '#root',
    data: {
        age: 20,
        a: 0,
        b: 0
    },
    methods: {},
    computed: {
        addToA(){
            console.log('Add to A');
            return this.a + this.age;
        },
        addToB(){
            console.log('Add to B');
            return this.b + this.age;
        }
    }
});