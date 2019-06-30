import Vue from 'vue'
const components = [
  'Upload.vue',
]

components.forEach( (name, index) =>{
  let key = 'Vue' + name.replace('.vue', '')
  let path =  require(`./${name}`).default
  // register component ->
  Vue.component(key, path)
})