Vue.component('message', {
    props: ['title', 'body'],
    data(){
        return {
            isVisible: true
        }
    },
    template: `
    <div>
    <article v-show="isVisible">
    <div class="header">
        {{title}} <button type="button" class="close" @click="hideArticle()">X</button>
</div>
<div class="body">
    {{body}}
</div>
</article>
</div>
`,
    methods: {
        hideArticle(){
            this.isVisible = false;
        }
    }
});

let app = new Vue({
    el: '#root',
    data: {
        test: 'success'
    }
});