import News from "../pages/News";
import Login from "../pages/Login";
import Register from "../pages/Register";

const routes = [
    {
        path: '/login',
        name: 'Login',
        component: Login
    },
    {
        path: '/register',
        name: 'Register',
        component: Register
    },
    {
        path: '/news',
        name: 'News',
        component: News,
        meta: {
            auth: true
        }
    },
];

export default routes;
