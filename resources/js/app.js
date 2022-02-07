/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('dashboard-component', require('./components/Dashboard/DashboardComponent.vue').default);
Vue.component('user-component', require('./components/Users/UserComponent.vue').default);
Vue.component('student-component', require('./components/Student/StudentComponent.vue').default);
Vue.component('classe-component', require('./components/Classe/ClasseComponent.vue').default);
Vue.component('course-component', require('./components/Course/CouseComponent.vue').default);
Vue.component('schedule-component', require('./components/Schedule/ScheduleComponent.vue').default);
Vue.component('teacher-component', require('./components/Teacher/TeacherComponent.vue').default);
Vue.component('tlstudent-component', require('./components/Student/ToolsComponennt.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
