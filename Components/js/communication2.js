window.Event = new Vue();

Vue.component('coupon', {
    template: `<input @blur="emitEvent()">`,
    methods: {
        emitEvent(){
            Event.$emit('dispatch');
        }
    }
});

Vue.component('awesome', {
    template: `<h1>{{text}}</h1>`,
    data(){
        return {
            text: 'Event not emitted Yet'
        }
    },
    methods: {},
    created(){
        Event.$on('dispatch', () => {
            this.text = 'Event emitted from coupon'
        })
    }
});

let app = new Vue({
    el: '#root',
});
