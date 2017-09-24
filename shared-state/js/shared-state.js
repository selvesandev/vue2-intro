let sourceState = {
    user: {
        name: 'James'
    }
};

new Vue({
    el: '#one',
    data: {
        user: sourceState,
        foo: 'bar'
    },
    methods: {}
});


new Vue({
    el: '#two',
    data: {
        user: sourceState,
        x: 'y'
    },
    methods: {}
});