Vue.component('modal', {
    template: `
      <div>
          <header>
          <slot name="header"></slot>
</header>
          <section>
          <slot name="section"></slot>
</section>
          <footer>
          <slot name="footer"></slot>
</footer>
      </div>
`
});
let app = new Vue({
    el: '#root'
});