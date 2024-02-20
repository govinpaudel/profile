const mobile_btn=document.querySelector('.mobile-nav-btn');
const nav_header=document.querySelector('.header');
const toggleNavbar=()=>{
    nav_header.classList.toggle('active');
}
mobile_btn.addEventListener('click',()=>toggleNavbar());