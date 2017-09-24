Vue.component('tabs', {
    template: `
<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">  
    <li role="presentation" v-for="tab in tabs" :class="{'active':tab.isActive}"><a @click="selectTab(tab)" :href="tab.href" aria-controls="home" role="tab" data-toggle="tab">{{tab.name}}</a></li>
    <!--<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>-->
    <!--<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>-->
  </ul>

  <!-- Tab panes -->
  <div class="tab-content"> 
    <!--Slot means take anything in between the tabs and just slot it in-->
    <slot></slot>
  </div>
</div>
`,
    data(){
        return {
            tabs: []
        }
    },
    mounted(){
        console.log(this.$children);
    },
    created(){
        this.tabs = this.$children;
    },
    methods: {
        selectTab(selectedTab){
            this.tabs.forEach(tab => {
                // we are not going to muted the property because that is immutable one time thing.
                // tab.selected = (tab.name = selectedTab.name);

                tab.isActive = (tab.name == selectedTab.name)
            });

        }
    }


});

Vue.component('tab', {
    template: `<div v-show="isActive"><slot></slot></div>`,
    // props:['name']
    props: {
        name: {
            require: true
        },
        selected: {
            default: false
        }
    },

    data(){
        return {
            isActive: false
        }
    },
    mounted(){
        // console.log(this.selected);
        this.isActive = this.selected;
    },
    computed: {
        href()
        {
            return '#' + this.name.toLowerCase().replace(/ /g, '-');
        }
    }
});

Vue.component('cool', {
    template: `
    <div>
    <hr>
    <h4>Hey this is really cool</h4>
    <p>Tutorial covers a lot of informations</p>
</div>
`
});

let app = new Vue({
    el: '#root'
});
