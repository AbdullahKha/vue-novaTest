Nova.booting((Vue, router, store) => {
  Vue.component('index-CheckboxField', require('./components/IndexField'))
  Vue.component('detail-CheckboxField', require('./components/DetailField'))
  Vue.component('form-CheckboxField', require('./components/FormField'))
})
