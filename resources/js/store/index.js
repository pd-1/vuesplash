import Vue from 'vue'
import Vuex from 'vuex'

import auth from './auth'

Vue.use(Vuex)

const store = new Vue.Store({
  modules: {
    auth
  }
})

export default store