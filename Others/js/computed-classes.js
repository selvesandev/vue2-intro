new Vue({
    el: '#root',
    data: {
        available: false,
        nearby: true
    },
    methods: {},
    computed: {
        compClasses(){
            return {
                available: this.available,
                nearby: this.nearby
            }
        }
    }
});