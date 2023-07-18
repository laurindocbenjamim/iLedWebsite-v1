
let menu = document.querySelector('#menu-btn1');
let navbar = document.querySelector('.header .navbar');
let headerLong = document.querySelector('.headerLong');

let i =0;
menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    headerLong.classList.toggle('active');
    i++;
    if(i==1){
        headerLong.style.display = "none";
    }else if(i == 2){
        i = 0;
        headerLong.style.display = "inline-block";
    }
}
