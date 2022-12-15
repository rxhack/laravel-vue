import {createRouter,createWebHistory} from 'vue-router';
import HelloWorld  from './components/helloWorld.vue';
import AnotherPage from './components/anotherPage.vue';

    const routes = [
    {
        path     : '/hello-world',
        component: HelloWorld,
        name     : "hello-world"
    },
    {
        path     : '/another-page',
        component: AnotherPage,
        name     : "another-page"
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
});