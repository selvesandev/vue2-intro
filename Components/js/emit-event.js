Vue.component('model', {
    template: `
    <div>
        <h1>This is a model</h1>
        <p>Believe it or not. this is a model that communicates with the root element by emitting a custom event 'close'</p>
                <button @click="$emit('close')">Close</button>
    </div>
`
});

let app = new Vue({
    el: '#root',
    data: {
        showModel: false
    },
    methods: {
        showModelAction(){
            this.showModel = true;
        }
    }
});
