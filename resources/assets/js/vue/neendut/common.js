Vue.component('modal', {
  template: '#show-sign-in',
  props: {
    show: {
      type: Boolean,
      required: true,
      twoWay: true
    }
  }
})
