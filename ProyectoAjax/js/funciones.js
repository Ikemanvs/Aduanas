addEventListener('load',inicializar,false);

function inicializar(){
	var inicio= document.getElementById('login');
	inicio.addEventListener('click',inicioS,false);
}
function inicioS(e){
	e.preventDefault();
	cargarUser();
}
var conexion;

function cargarUser(){
	conexion=new XMLHttpRequest();
	conexion.onreadystatechange=proceso;
	conexion.open('POST',"php/inicio.php",true);
	conexion.setRequestHeader("content-Type", "application/x-www-form-urlencoded");
	conexion.send(datos());
}

function datos(){
	var data="";
	var dato1=document.getElementById("user").value;
	var dato2=document.getElementById("pass").value;
	data = "v1=" + encodeURIComponent(dato1) + "&v2=" + encodeURIComponent(dato2);
	return data;
}

function proceso(){
	var valor=document.getElementById('tipo');
	if(conexion.readyState==4){
		valor.innerHTML=conexion.responseText;
		iniciarMenu();
		
	}else{
		valor.innerHTML="Cargando...";
	}
}

//menu numero 1
function iniciarMenu(){
	for(var i=1; i<=5;i++){
		var d=document.getElementById('enla'+i);
		d.addEventListener('click',iniciarM,false);
	} 
	var bo= document.getElementById('botonS');
	bo.addEventListener('click',iniciarB,false);
}
function iniciarM(e){
	e.preventDefault();
	var url =e.target.getAttribute('href');
	cargarM(url);
}

var conexion2;

function cargarM(url){
	conexion2=new XMLHttpRequest();
	conexion2.onreadystatechange=procesarM;
	conexion2.open('GET',url,true);
	conexion2.send();
}

function procesarM(){
	var menu= document.getElementById('form');
	if(conexion2.readyState==4){
		menu.innerHTML= conexion2.responseText;
	}else{
		menu.innerHTML='Cargando...';
		
	}
	
}
//boton para salir

function iniciarB(b){
	b.preventDefault();
	var urlb=b.target.getAttribute('value');
	cargarEvento(urlb);
}

var conexionboton;

function cargarEvento(urlb){
	conexionboton=new XMLHttpRequest();
	conexionboton.onreadystatechange=procesarboton;
	conexionboton.open('GET',urlb,true);
	conexionboton.send();
}

function procesarboton(){
	var form= document.getElementById('form');
	if(conexionboton.readyState==4){
		form.innerHTML= conexionboton.responseText;
	}else{
		form.innerHTML='Cargando...';
		
	}
}

//menu numero 2
addEventListener('mousedown',iniciarMenu2,false);
function iniciarMenu2(){
	for(var i=1; i<=4;i++){
		var da=document.getElementById('enlac'+i);
		da.addEventListener('click',iniciarM2,false);
	}
}
function iniciarM2(a){
	a.preventDefault();
	var url2 =a.target.getAttribute('href');
	cargarM2(url2);
}

var conexion3;

function cargarM2(url2){
	conexion3=new XMLHttpRequest();
	conexion3.onreadystatechange=procesarM2;
	conexion3.open('GET',url2,true);
	conexion3.send();
}

function procesarM2(){
	var menu= document.getElementById('form');
	if(conexion3.readyState==4){
		menu.innerHTML= conexion3.responseText;
	}else{
		menu.innerHTML='Cargando...';
	}
	
}














