import Dashboard from "../views/Dashboard";
import ProductCreate from "../views/product/Create";
import Index from "../views/Index";

export default  [
    { path: '/', component: Dashboard },
    { path: '/product/create', component: ProductCreate },
    { path: '/:resourceName', component: Index, props: true},

]
