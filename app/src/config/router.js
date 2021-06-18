import { createWebHistory, createRouter } from "vue-router";
import Home from "../views/Home";
import Event from "../views/Event";
const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/:id',
        name: 'Event',
        component: Event
    },

]

const router = createRouter({
    history: createWebHistory(),
    routes
});


export default router
