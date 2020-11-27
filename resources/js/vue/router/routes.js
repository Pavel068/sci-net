import News from "../pages/News";
import Login from "../pages/Login";
import Logout from "../pages/Logout";
import Register from "../pages/Register";
import MyTeams from "../pages/Team/MyTeams";
import FindTeam from "../pages/Team/FindTeam";
import MyPublications from "../pages/Publications/MyPublications";
import AddPublication from "../pages/Publications/AddPublication";
import FavoritesPublications from "../pages/Publications/FavoritesPublications";
import MyProjects from "../pages/Projects/MyProjects";
import Projects from "../pages/Projects/Projects";

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
        path: '/logout',
        name: 'Logout',
        component: Logout
    },
    {
        path: '/news',
        name: 'News',
        component: News,
        meta: {
            auth: true
        }
    },
    {
        path: '/team/my',
        name: 'MyTeams',
        component: MyTeams,
        meta: {
            auth: true
        }
    },
    {
        path: '/team/find',
        name: 'FindTeam',
        component: FindTeam,
        meta: {
            auth: true
        }
    },
    {
        path: '/publications/my',
        name: 'MyPublications',
        component: MyPublications,
        meta: {
            auth: true
        }
    },
    {
        path: '/publications/add',
        name: 'AddPublication',
        component: AddPublication,
        meta: {
            auth: true
        }
    },
    {
        path: '/publications/favorites',
        name: 'FavoritesPublications',
        component: FavoritesPublications,
        meta: {
            auth: true
        }
    },
    {
        path: '/projects/my',
        name: 'MyProjects',
        component: MyProjects,
        meta: {
            auth: true
        }
    },
    {
        path: '/projects/all',
        name: 'Projects',
        component: Projects,
        meta: {
            auth: true
        }
    },
];

export default routes;
