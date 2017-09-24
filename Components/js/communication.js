Vue.component('coupon', {
    template: `
        <input placeholder="Enter your coupon code" @blur="onCouponApplied">
`,
    methods: {
        onCouponApplied(){
            // alert('applied');
            this.$emit('applied', {status: true, msg: 'coupon was applied'});
            //'"applied" here is used by the '
        }
    }
});


Vue.component('my-button', {
    template: `<button @click="onClickBtn">Click Me</button>`,
    methods: {
        onClickBtn(){
            let value = confirm('Click to interact');
            this.$emit('show-message', {value: value});
        }
    }
});

let app = new Vue({
    el: '#root',
    data: {
        success: null
    },
    methods: {
        onCouponApplied(data){
            alert('It was applied. and this is the root elements method');
            console.log(data);
        },
        showMessage(data){
            this.success = data.value;
        }
    }
});
