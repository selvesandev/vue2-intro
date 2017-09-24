<template>
    <div id="app">
        <message>Hello World</message>
        <message>Hello Everyone</message>
        <hr>
        <p>The Hot Module Replacement. When content changed in the html html changes in the browser but the data remains the same as in the latest state</p>
        <counter></counter>
    </div>
</template>

<script>
    import Message from './components/Message.vue';
    import Counter from './components/Counter.vue';
    export default {
        name: 'app',
        components: {Message, Counter},
        data () {
            return {}
        }
    }
</script>

<style>

</style>
