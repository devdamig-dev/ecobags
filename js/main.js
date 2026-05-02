const toggle=document.querySelector('.menu-toggle');
const nav=document.querySelector('.nav');
if(toggle&&nav){toggle.addEventListener('click',()=>{nav.style.display=nav.style.display==='flex'?'none':'flex';nav.style.flexDirection='column';});}
const header=document.getElementById('header');
window.addEventListener('scroll',()=>{if(window.scrollY>12){header.style.background='rgba(244,247,247,.9)';}});
