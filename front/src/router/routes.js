import Index from "pages/Index";
import Ruta from "pages/Ruta";
import Rutaadmin from "pages/Rutaadmin";
import Rubro from "pages/Rubro";
import Photo from "pages/Photo";
import Video from "pages/Video";
import Intro from "pages/Intro.vue";
const routes = [
  {
    path: "/",
    component: () => import("layouts/MainLayout.vue"),
    children: [
      { path: "", component: Intro},
      { path: "photos", component: Photo },
      { path: "rutagamoad", component: Rutaadmin },
      { path: "ruta", component: Ruta },
      { path: "video", component: Video },
      { path: "rubro/:id", component: Rubro },
    ],
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: "/:catchAll(.*)*",
    component: () => import("pages/Error404.vue"),
  },
];

export default routes;
