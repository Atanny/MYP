<template>
    <div class="" style="margin-top: 75px;">
        <header-component class="mt-5"></header-component>
       
        <second-component class=""></second-component>
         <seven-component class=""></seven-component>
        <third-component class=""></third-component>
        <four-component class=""></four-component>
        <fourone-component class=""></fourone-component>
        <five-component class=""></five-component>
        <six-component class=""></six-component>
    </div>
   
</template>

<style>
body{
    overflow-x: hidden;
}

.active-link .btn-success {
  background-color: #19191a !important;
  color: white !important;
  border-style: solid;
  border-color: #19191a;
  border-radius: 0%;
}
.btn-success {
    position: relative; /* Needed for ::before absolute positioning */
    border-style: solid;
    border-color: #19191a;
    border-radius: 0%;
    overflow: hidden;
    background-color: transparent;
    z-index: 1;
    color: #19191a; /* Initially text color matches border */
    transition: color 0.3s ease;
}

.btn-success:disabled {
    border-style: solid;
    border-color: #19191a;
    border-radius: 0%;
    overflow: hidden;
    background-color: transparent;
    color: #19191a;
    z-index: 1;
}

.btn-success::before {
    content: '';
    border-style: solid;
    border-color: #19191a;
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background-color: #19191a;
    transition: left 0.10s ease;
    z-index: -1;
}

.btn-success:hover::before {
    border-style: solid;
    border-color: #19191a;
    left: 0;
}

.btn-success:hover {
    color: white;
    border-style: solid;
    border-color: #19191a;
    background-color: #19191a;
}


.btn-black {
    border-style: solid;
    background-color: #19191a;
    border-radius: 0%;
    overflow: hidden;
    z-index: 1;
    color: white; 
    transition: transform 0.3s ease; /* ✅ FIXED */
}

.btn-black:hover {
    transform: scale(1.05); /* ✅ Will now animate */
    color: white;
     background-color: #19191a;
}



.btn-white {
    border-style: solid;
    background-color: white;
    border-radius: 0%;
    overflow: hidden;
    z-index: 1;
    color: black; 
    transition: transform 0.3s ease; /* ✅ FIXED */
}

.btn-white:hover {
    transform: scale(1.05); /* ✅ Will now animate */
    color: black;
     background-color: white;
}



/* ADD THIS: Active state styling for router-link or buttons */

.btn-success.active,
.btn-success.router-link-exact-active {
    color: white !important;
    background-color: #19191a !important;
    border-color: #19191a !important;
}

.btn-success.active::before,
.btn-success.router-link-exact-active::before {
    left: 0 !important;
}



.frontFont{
    font-size: 70%;
}

.feature-card {
    background-color: rgba(255, 255, 255, 0.121);
    backdrop-filter: blur(100px);
    transition: transform 0.2s;
    position: relative;
    z-index: 1;
}

.BackgroundImage {
    background-color: #14213D;
    /* background-color: linear-gradient(135deg, #A4C639 25%, rgba(253, 100, 100, 100) 50%, #A4C639 75%); */
    box-shadow: inset 0px 5px 15px rgba(0, 0, 0, 0.3);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.textdark{
    color: #384b0a;
}

.outline-text { 
    font-weight: bold;
    color: white;
   
    text-align: start;
}

.outline-text2 { 
    font-weight: bold;
    color:white;
   
    text-align: start;
}

.outline-text3 { 
    font-weight: bold;
    color: white;
   
    text-align: start;
}

.text3{
    color: #19191a;
}
.text4{
    color: #19191a;
}

.border-warning1
{
    border-style: solid;
    border-color: #19191a;
    border-width: 2px;
}

.transform{
    position: relative;
    transform: rotate(2deg);
    width: auto; 

}

.transform2{
    position: relative;
    transform: rotate(-2deg);
    width: auto ; 

}

audio::-webkit-media-controls-play-button,
     audio::-webkit-media-controls-panel {
     background-color: white;
     color: #000;
     }

</style>


