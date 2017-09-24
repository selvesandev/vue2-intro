new Vue({
    el: '#app',
    data: {
        skills: []
    },
    mounted(){
        axios.get('http://localhost:8000/skills').then(response => this.skills = response.data);
    }
});