**VUE JS 2**

------------------------------------------------------------

Installation

1. Pull in through NPM.
2. Reference from CDN. (https://unpkg.com/vue@2.4.2)

        Intro > index.php

---------------------------------------------------------------

**VUE JS DEV TOOLS**

--------------------------------------------------------

**_Setting Up a PROJECT VUE CLI_**

handfull of commands to run.

    npm install -g vue-cli (install vue cli)
    vue init webpack-simple my-app (install a vue js start up hello world project)
    
***

**SCOPED CSS**

writing component based style in component i.e. the styles written will only
work for the component

    <style scoped>
        h1{
            color:red; //will get applied only in this component.
        }
    </style>   


**PROPS**
***
Used to pass the value to a component from root components.

    export default{
        props:{
            ninjas:{
                type:String
            }
        }
    }
    
**LIFE CYCLE HOOKS** 
***
_beforecreate()_ : fired before any components or vue instance is created.

After this the Vue observes the Data and Initializes any Events that are registered.
 
_created()_ : this is the lifecycle hooks that fires after the component has been created.
we can access the data's and events here.


Now the Vue js compiles the template and make them ready to mount the DOM. 

_beforeMount()_ : this is the another lifecycle hook that we can access before the DOM is mounted to the html. 
If we have to do any task before the Dom is implemented we can do it here.

_mounted()_ : After the template has been implemented the mounted lifecycle hook is executed. We
can call the dom here.

_beforeUpdate() update()_ : is any content has been updated in the dom then these hooks takes place.
beforeUpdate() before the dom is updated and update() is after the dom is updated we can access the updated content here.


***
**LOCAL FILTERS AND DIRECTIVES**
    
    Vue.componen('test',{
        filters:{
            'to-uppercase':function(){
                //return something here..
            },
            toUppercase(){
                //return something here..
            }
        },
        directives:{
            'rainbow':{
                bind(el,binding,vnode){
                    do something here.
                }
            }
        }
        
    })

***

**FIREBASE**
***
Firebase lets you stores JSON Data(No-sql). firebase.google.com >> go to
console and create a project.

Go to the Database Section in the right navigation and go to the rules tab and set up the read and write rules.

//https://firebase.google.com/docs/ >> Firebase Documentation
