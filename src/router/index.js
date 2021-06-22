import { createRouter, createWebHistory } from 'vue-router'

import login from "../views/Login";
import schedule from "../views/Schedule"
import register from "../views/Register";
import home from "../views/Home";
import Dash from "@/views/Dash";
const routes = [
  {
    path: '/schedule',
    name: 'Schedule',
    component: schedule
  },
  {
    path: '/login',
    name: 'Login',
    component: login
  },
  {
    path: '/register',
    name: 'Register',
    component: register
  },

  {
    path: '/',
    name: 'Home',
    component: home
  },

  {
    path: '/dashboard',
    name: 'dash',
    component: Dash,
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
