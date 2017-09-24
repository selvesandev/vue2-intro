new Vue({
    el: '#app',
    data: {
        name: '',
        desc: '',
        error: {}
    },
    methods: {
        onSubmit(){
            axios.post('/products', this.$data).then(response => {
                alert('success');
            }).catch(error => {
                this.error = error.data;
            });
        }
    }
});