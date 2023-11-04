//PAG. ADMIN MENU- EJECUTAR FUNCION CLICK

document.getElementById("btn_open").addEventListener("click",open_close_menu);


//DECLARAR VARIABLES ADMIN

var side_menu=document.getElementById("menu_side");
var btn_open=document.getElementById("btn_open");
var body=document.getElementById("b_ad");


//MOSTRAR Y OCULTAR MENU

function open_close_menu(){
    body.classList.toggle("b_move");
    side_menu.classList.toggle("menu__side_move");
}