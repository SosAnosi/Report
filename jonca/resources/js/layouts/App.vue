<template>
  <div>
    <button class="btn-param" ><router-link class="link" to="/home/param"><FontAwesomeIcon icon="gears"/></router-link> </button>
    <SidebarN></SidebarN>
  </div>
    
</template>
  <script>
import SidebarN from '../components/SidebarN.vue';
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
  export default {
    components: { 
      SidebarN,
      FontAwesomeIcon,
    },
};
  </script>
  <style>
  /* .btn-param{
    float: right;
    margin-top: -60px;
    margin-right: 10px;
     
} */
  </style>