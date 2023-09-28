<template>
<div id="sidebar">
    <Slide>
        <nav class="nav">
            <ul>
                <li>
                    <router-link class="link" to="/home" >
                        <FontAwesomeIcon icon="house" class="font"/> 
                        <span>Report</span>
                    </router-link>
                </li>
                <span class="tete">R&C :</span>
                <li>
                    <router-link class="link" to="/home/rcdm" @click="carbattery = !carbattery" >
                        <FontAwesomeIcon :icon="icon" class="font"/> 
                        <span>Detail Mois</span>
                    </router-link>
                </li>
                <li>
                    <router-link class="link" to="/home/rcda" @click="carbattery = !carbattery">
                        <FontAwesomeIcon :icon="icon" class="font"/> 
                        <span>Detail Année</span>
                    </router-link>
                </li>
                <span class="tete">GLOBAL :</span>
                <li>
                    <router-link class="link" to="/home/gdm" @click="carbattery = !carbattery">
                        <FontAwesomeIcon :icon="icon" class="font"/>
                        <span>Detail Mois</span> 
                    </router-link>
                </li>
                <li>
                    <router-link class="link" to="/home/gda" @click="carbattery = !carbattery">
                        <FontAwesomeIcon :icon="icon" class="font"/> 
                       <span>Detail Année</span> 
                    </router-link>
                </li>
                <li>
                    <router-link class="link" to="/home/param">
                        <FontAwesomeIcon icon="gears" class="font"/> 
                       <span>Parametre</span> 
                    </router-link>
                </li>
            </ul>
        </nav>
    </Slide>
    <div class="container">
      <router-view />
    </div>
</div>
</template>
<script>
import { Slide } from 'vue-burger-menu';
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

export default {
    components: {
        Slide,
        FontAwesomeIcon
    },
    data(){
        return {
            icon: 'folder',
        }
    },
    
}
</script>
<style >
@import '/resources/css/style.css';
</style>
