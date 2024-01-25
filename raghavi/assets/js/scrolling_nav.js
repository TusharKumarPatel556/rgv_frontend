const headerItem=document.getElementById("Header");
window.addEventListener('scroll',()=>{

headerItem.style.cssText="background-color:rgba(255,255,255,0.95);z-index:11000;";

var scrolled=console.log(window.scrollY);
if(scrolled===0){
navItem.style.cssText=" background-color:rgb(255, 255, 255);"
logo.style.cssText="transform:scale(1)";
}


});
