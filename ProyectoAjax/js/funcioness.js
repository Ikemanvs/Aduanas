addEventListener('load',inicializar,false);

function inicializar(){
	var inicio= document.getElementById('login');
	inicio.addEventListener('click',inicioS,false);
}
function inicioS(e){
	e.preventDefault();
	 var c = event.srcElement.id;
    if(c == "login"){
        
         cargarUser();
  
    }
}

function datos(){
	var data="";
	var dato1=document.getElementById("user").value;
	var dato2=document.getElementById("pass").value;
	data = "v1=" + encodeURIComponent(dato1) + "&v2=" + encodeURIComponent(dato2);
	alert(data);
	return data;
}

var conexion;

function cargarUser(){
	conexion=new XMLHttpRequest();
	conexion.onreadystatechange=proceso;
	conexion.open('POST','php/inicio.php',true);
	conexion.setRequestHeader("content-Type", "application/x-www-form-urlencoded");
	conexion.send(datos());
}


function proceso(){
	var valor=document.getElementById('mensaje');
	if(conexion.readyState==4){
		valor.innerHTML=conexion.responseText;	
		document.getElementById('mensaje').style.display="block";
		document.getElementById('principal').style.display="none";
		boton();
		iniciarMenu();
	}else{
		valor.innerHTML="Cargando...";
	}
}

function boton(){
	var s= document.getElementById('botonS');
	s.addEventListener('click',iniciarB,false);
}
function iniciarB(b){
	b.preventDefault();
	var men =document.getElementById('infoGeneral');
	men.innerHTML=" ";
	document.getElementById('mensaje').style.display="none";
	document.getElementById('principal').style.display="block";
	
}

//menu principal para admin


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
	var menu= document.getElementById('infoGeneral');
	if(conexion2.readyState==4){
		menu.innerHTML= conexion2.responseText;
inicializarEventoAg();		
	}else{
		menu.innerHTML='Cargando...';
		
	}
	
}

//menu numero 2 para los usuarios normales

addEventListener('mousemove',iniciarMenu2,false);
function iniciarMenu2(){
	for(var i=1; i<=4;i++){
		var da=document.getElementById('enlac'+i);
		da.addEventListener('click',iniciarM2,false);
	}
	var bo= document.getElementById('botonS');
	bo.addEventListener('click',iniciarB,false);
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
	var menu= document.getElementById('mensaje2');
	if(conexion3.readyState==4){
		menu.innerHTML= conexion3.responseText;
		var borrar=document.getElementById('mensaje3');
		borrar.innerHTML=' ';
		inicializarEventoAg();
	}else{
		menu.innerHTML='Cargando...';
	}
	
}


//Parte Joshua shida
addEventListener('mousedown',inicializarEventoJ,false);
function inicializarEventoJ(){
    //Acá, se recupera información del formulario y se inicializa el evento Submit (inicializarEvento)
    var i = document.getElementById("btn1");  //Se crea una variable donde se obtiene el ID del elemento a modificar.        
    i.addEventListener('click', presionarEnlace, false);
	//Se añade una función. NOTA: se cambia "submit" por click
}

function presionarEnlace(e){
    //Acá, se configura lo que ocurre cuando se presiona el botón
    e.preventDefault();  //Previene la ejecución normal del elemento
    var selecc = event.srcElement.id; //NUEVO: Obtiene el ID del botón seleccionado
    enviarJ();
}

var conexionj;

function enviarJ(){
    //Función que envía toda la onda esa
    conexionj = new XMLHttpRequest(); //Va a controlar la comunicación asíncrona entre el servidor y el cliente
    conexionj.onreadystatechange = procesarJ; //Va a controlar los estados de cambio del de arriba (5 estados)
    conexionj.open('POST',"php/guardar.php", true); //Abre la conexión al archivo que se va a recargar
    conexionj.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); //Para mandar el contenido correctamnte
    conexionj.send(obtenerDatosJ());
}

function obtenerDatosJ(id){
    var datos = "";
    //var idA = id;
    var n1 = document.getElementById('nombreImp').value;
    var n2 = document.getElementById('nombreCola').value;
    var n3 = document.getElementById('fechInicio').value;
	var n4 = document.getElementById('fechFinal').value;
    var n5 = document.getElementById('nombreEmpre').value;
	var n6 = document.getElementById('costoImport').value;
	var n7 = document.getElementById('diasProceso').value;
	var n8 = document.getElementById('nombreAgencia').value;
	var n9 = document.getElementById('montoTransf').value;
	var n10 = document.getElementById('dirAlmacen').value;
	var n11 = document.getElementById('nombreAgente').value;
	var n12 = document.getElementById('nombreAduan').value;
	var n13 = document.getElementById('verific').value;
	var n14 = document.getElementById('fechaCarg').value;
	var n15 = document.getElementById('fechaSalida').value;
	var n16 = document.getElementById('nomTranspor').value;
	var n17 = document.getElementById('tipoTranspor').value;
	var n18 = document.getElementById('costoTranspor').value;
	var n19 = document.getElementById('tiempoImport').value;
	var n20 = document.getElementById('inicio').value;
	var n21 = document.getElementById('cierre').value;
	var n22 = document.getElementById('fechEntrega').value;
	var n23 = document.getElementById('nomRecibio').value;
	
    datos = "va1="+encodeURIComponent(n1)+"&va2="+encodeURIComponent(n2)+"&va3="+encodeURIComponent(n3)+"&va4="+encodeURIComponent(n4)+"&va5="+encodeURIComponent(n5)+"&va6="+encodeURIComponent(n6)+"&va7="+encodeURIComponent(n7)+"&va8="+encodeURIComponent(n8)+"&va9="+encodeURIComponent(n9)+"&va10="+encodeURIComponent(n10)+"&va11="+encodeURIComponent(n11)+"&va12="+encodeURIComponent(n12)+"&va13="+encodeURIComponent(n13)+"&va14="+encodeURIComponent(n14)+"&va15="+encodeURIComponent(n15)+"&va16="+encodeURIComponent(n16)+"&va17="+encodeURIComponent(n17)+"&va18="+encodeURIComponent(n18)+"&va19="+encodeURIComponent(n19)+"&va20="+encodeURIComponent(n20)+"&va21="+encodeURIComponent(n21)+"&va22="+encodeURIComponent(n22)+"&va23="+encodeURIComponent(n23);
    return datos;
	alert(datos);
}

function procesarJ(){
    var menu = document.getElementById("tabla");
	if(conexionj.readyState == 4){	
        menu.innerHTML = conexionj.responseText;
		filas();
		eliminar();   
	}else{
		menu.innerHTML = 'Cargando...';
	}
}

//-------------------Para el formulario editar--------------------//

function filas(){
var index = document.getElementById("tb").rows.length;
	for (var r = 0; r <= index; r++){
		//alert (r);
		var idEnlace = document.getElementById('btnEdit'+r);
		if(idEnlace){
			idEnlace.addEventListener('click', enlaceEditar, false);	
		}
	}
}

function enlaceEditar(o){
	o.preventDefault();
	var url1 = o.target.getAttribute('href');
	envia2(url1);
}

var conexi;

function envia2(url1){
	conexi = new XMLHttpRequest();
	conexi.onreadystatechange = procesaEvento2;
	conexi.open("GET",url1,true);
	conexi.send();
}

function procesaEvento2(){
	var detalle = document.getElementById("muestra");
	if(conexi.readyState==4){
		detalle.innerHTML = conexi.responseText;
		abreFormu();
	}else{
		detalle.innerHTML = "Espera";
	}
}

//----------------------Para ejecutar el update-------------//

function abreFormu(){
	var infoEdit = document.getElementById("formEditar");
	infoEdit.addEventListener('submit', presionaEditar,false);
}
function presionaEditar(e){
	e.preventDefault();
	var url2 = "php/editar.php";
	cargaFormu(url2);
}

var conexio;

function cargaFormu(url2){
	conexio = new XMLHttpRequest;
	conexio.open("POST",url2,true);
	conexio.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	conexio.send(datosEditados());
	conexio.onreadystatechange=eventoEdicion;
}

function datosEditados(){
	var data2="";
	var v0 = document.getElementById("id1").value;
	var v1 = document.getElementById('nombreImp').value;
    var v2 = document.getElementById('nombreCola').value;
    var v3 = document.getElementById('fechInicio').value;
	var v4 = document.getElementById('fechFinal').value;
    var v5 = document.getElementById('nombreEmpre').value;
	var v6 = document.getElementById('costoImport').value;
	var v7 = document.getElementById('diasProceso').value;
	var v8 = document.getElementById('nombreAgencia').value;
	var v9 = document.getElementById('montoTransf').value;
	var v10 = document.getElementById('dirAlmacen').value;
	var v11 = document.getElementById('nombreAgente').value;
	var v12 = document.getElementById('nombreAduan').value;
	var v13 = document.getElementById('verific').value;
	var v14 = document.getElementById('fechaCarg').value;
	var v15 = document.getElementById('fechaSalida').value;
	var v16 = document.getElementById('nomTranspor').value;
	var v17 = document.getElementById('tipoTranspor').value;
	var v18 = document.getElementById('costoTranspor').value;
	var v19 = document.getElementById('tiempoImport').value;
	var v20 = document.getElementById('inicio').value;
	var v21 = document.getElementById('cierre').value;
	var v22 = document.getElementById('fechEntrega').value;
	var v23 = document.getElementById('nomRecibio').value;
	data2="va0="+encodeURIComponent(v0)+"&va1="+encodeURIComponent(v1)+"&va2="+encodeURIComponent(v2)+"&va3="+encodeURIComponent(v3)+"&va4="+encodeURIComponent(v4)+"&va5="+encodeURIComponent(v5)+"&va6="+encodeURIComponent(v6)+"&va7="+encodeURIComponent(v7)+"&va8="+encodeURIComponent(v8)+"&va9="+encodeURIComponent(v9)+"&va10="+encodeURIComponent(v10)+"&va11="+encodeURIComponent(v11)+"&va12="+encodeURIComponent(v12)+"&va13="+encodeURIComponent(v13)+"&va14="+encodeURIComponent(v14)+"&va15="+encodeURIComponent(v15)+"&va16="+encodeURIComponent(v16)+"&va17="+encodeURIComponent(v17)+"&va18="+encodeURIComponent(v18)+"&va19="+encodeURIComponent(v19)+"&va20="+encodeURIComponent(v20)+"&va21="+encodeURIComponent(v21)+"&va22="+encodeURIComponent(v22)+"&va23="+encodeURIComponent(v23);
	return data2;	
}

function eventoEdicion(){
	var indi = document.getElementById("infoGeneral");
	if(conexio.readyState == 4){
		indi.innerHTML = conexio.responseText;
		inicializarEventoJ();
		filas();
		eliminar();
	}else{
		indi.innerHTML = "Espere por favor";
	}
}

//---------------------Eliminar---------------//

function eliminar(){
	var index = document.getElementById('tb').rows.length;
	for(var w = 0; w <=index; w++){
		var idEnlace = document.getElementById("btnDelete"+w);
		if(idEnlace){
			idEnlace.addEventListener('click',presionaEliminar,false);
		}
	}
}

function presionaEliminar(e){
	e.preventDefault();
	var url3 = e.target.getAttribute('href');
	enviaElim(url3);
}

var cones;

function enviaElim(url3){
	cones = new XMLHttpRequest();
	cones.onreadystatechange = elimiAlu;
	cones.open("POST",url3,true);
	cones.send();
}

function elimiAlu(){
	var detalle = document.getElementById("infoGeneral");
	if(cones.readyState == 4){
		detalle.innerHTML = cones.responseText;
		inicializarEventoJ();
		filas();
		eliminar();
	}else{
		detalle.innerHTML = "Espere";
	}
}



//Parte de salas aduanas jejeje




//<<-- esto es para Aduanas Salas



//--->> Esto es para agentes aduanales
function inicializarEventoAg(){
    //Acá, se recupera información del formulario y se inicializa el evento Submit (inicializarEvento)
    var i = document.getElementById("btnAgente");  //Se crea una variable donde se obtiene el ID del elemento a modificar.        
    i.addEventListener('click', presionarEnlaceAg, false); //Se añade una función. NOTA: se cambia "submit" por click
}

function presionarEnlaceAg(p){
    //Acá, se configura lo que ocurre cuando se presiona el botón
    p.preventDefault();  //Previene la ejecución normal del elemento
    var selecc = event.srcElement.id; //NUEVO: Obtiene el ID del botón seleccionado
    enviarAg();
}

var conexionAg;

function enviarAg(){
    //Función que envía toda la onda esa
    conexionAg = new XMLHttpRequest(); //Va a controlar la comunicación asíncrona entre el servidor y el cliente
    conexionAg.onreadystatechange = procesarAg; //Va a controlar los estados de cambio del de arriba (5 estados)
    conexionAg.open('POST',"php/guardarAg.php", true); //Abre la conexión al archivo que se va a recargar
    conexionAg.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); //Para mandar el contenido correctamnte
    conexionAg.send(obtenerDatosAg());
}

function obtenerDatosAg(id){
    var dtos = "";
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var matricula = document.getElementById('matricula').value;
    var grupo = document.getElementById('grupo').value;
    dtos = "nombre="+encodeURIComponent(nombre)+"&apellido="+encodeURIComponent(apellido)+"&matricula="+encodeURIComponent(matricula)+"&grupo="+encodeURIComponent(grupo);
    return dtos;
}

function procesarAg(){
    var menu = document.getElementById("tabla2");
	if(conexionAg.readyState == 4){	
        menu.innerHTML = conexionAg.responseText;
		filasAg();
		eliminarAg();   
	}else{
		menu.innerHTML = 'Cargando...';
	}
}

//-------------------Para el formulario editar--------------------//

function filasAg(){
var index = document.getElementById("tb").rows.length;
	for (var r = 0; r <= index; r++){
		//alert (r);
		var idEnlaceAg = document.getElementById('btnAg'+r);
		if(idEnlaceAg){
			idEnlaceAg.addEventListener('click', enlaceEditarAg, false);	
		}
	}
}

function enlaceEditarAg(l){
	l.preventDefault();
	var urlAg = l.target.getAttribute('href');
	envia2Ag(urlAg);
}

var conexiAg;

function envia2Ag(urlAg){
	conexiAg = new XMLHttpRequest();
	conexiAg.onreadystatechange = procesaEvento2Ag;
	conexiAg.open("GET",urlAg,true);
	conexiAg.send();
}

function procesaEvento2Ag(){
	var detalle = document.getElementById("muestra");
	if(conexiAg.readyState==4){
		detalle.innerHTML = conexiAg.responseText;
		abreFormuAg();
	}else{
		detalle.innerHTML = "Espera";
	}
}

//----------------------Para ejecutar el update-------------//

function abreFormuAg(){
	var infoEditAg = document.getElementById("formuEditarAg");
	infoEditAg.addEventListener('submit', presionaEditarAg,false);
}
function presionaEditarAg(e){
	e.preventDefault();
	var url2ag = "php/editarAg.php";
	cargaFormuAg(url2ag);
}

var conexioAg;

function cargaFormuAg(url2ag){
	conexioAg = new XMLHttpRequest();
	conexioAg.open("POST",url2ag,true);
	conexioAg.setRequestHeader("content-Type", "application/x-www-form-urlencoded");
	conexioAg.send(datosEditadosAg());
	conexioAg.onreadystatechange=eventoEdicionAg;
}

function datosEditadosAg(){
	var datas="";
	var vag1 = document.getElementById("id1").value;
	var vag2 = document.getElementById("nombre1").value;
	var vag3 = document.getElementById("apellido1").value;
	var vag4 = document.getElementById("grado1").value;
	var vag5 = document.getElementById("grupo1").value;
	datas="var1="+encodeURIComponent(vag1)+"&var2="+encodeURIComponent(vag2)+"&var3="+encodeURIComponent(vag3)+"&var4="+encodeURIComponent(vag4)+"&var5="+encodeURIComponent(vag5);
	alert(datas);
	return datas;	
}

function eventoEdicionAg(){
	var indi = document.getElementById("infoGeneral");
	if(conexioAg.readyState == 4){
		indi.innerHTML = conexioAg.responseText;
		inicializarEventoAg();
		filasAg();
		eliminarAg();
	}else{
		indi.innerHTML = "Espere por favor";
	}
}

//---------------------Eliminar---------------//

function eliminarAg(){
	var index = document.getElementById('tb').rows.length;
	for(var w = 0; w <=index; w++){
		var idEnlace = document.getElementById("btnDeleteAg"+w);
		if(idEnlace){
			idEnlace.addEventListener('click',presionaEliminarAg,false);
		}
	}
}

function presionaEliminarAg(e){
	e.preventDefault();
	var url3Ag = e.target.getAttribute('href');
	enviaElimAg(url3Ag);
}

var conesAg;

function enviaElimAg(url3Ag){
	conesAg = new XMLHttpRequest();
	conesAg.onreadystatechange = elimiAluAg;
	conesAg.open("POST",url3Ag,true);
	conesAg.send();
}

function elimiAluAg(){
	var detalle = document.getElementById("infoGeneral");
	if(conesAg.readyState == 4){
		detalle.innerHTML = conesAg.responseText;
		inicializarEventoAg();
		filasAg();
		eliminarAg();
	}else{
		detalle.innerHTML = "Espere";
	}
}


//parte para aduanas mandar
addEventListener('mouseup',inicializarEventoAd,false);

function inicializarEventoAd(){
    //Acá, se recupera información del formulario y se inicializa el evento Submit (inicializarEvento)
    var m = document.getElementById("btnAd");  //Se crea una variable donde se obtiene el ID del elemento a modificar.        
    m.addEventListener('click', presionarEnlaceAd, false); //Se añade una función. NOTA: se cambia "submit" por click
}

function presionarEnlaceAd(y){
    //Acá, se configura lo que ocurre cuando se presiona el botón
    y.preventDefault();  //Previene la ejecución normal del elemento
    var selecc = event.srcElement.id; //NUEVO: Obtiene el ID del botón seleccionado
    enviarAd();
}

var conexionAd;

function enviarAd(){
    //Función que envía toda la onda esa
    conexionAd= new XMLHttpRequest(); //Va a controlar la comunicación asíncrona entre el servidor y el cliente
    conexionAd.onreadystatechange = procesarAd; //Va a controlar los estados de cambio del de arriba (5 estados)
    conexionAd.open('POST',"php/guardar_aduanas.php", true); //Abre la conexión al archivo que se va a recargar
    conexionAd.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); //Para mandar el contenido correctamnte
    conexionAd.send(obtenerDatosAd());
}

function obtenerDatosAd(id){
    var data2 = "";
    var nombre = document.getElementById('nombre').value;
    var direccion = document.getElementById('direccion').value;
    var estado = document.getElementById('estado').value;
    var ciudad = document.getElementById('ciudad').value;
	var pais = document.getElementById('pais').value;
    var telefono = document.getElementById('telefono').value;
    var correo = document.getElementById('correo').value;
    data2 = "vad1="+encodeURIComponent(nombre)+"&vad2="+encodeURIComponent(direccion)+"&vad3="+encodeURIComponent(estado)+"&vad4="+encodeURIComponent(ciudad)+"&vad5="+encodeURIComponent(pais)+"&vad6="+encodeURIComponent(telefono)+"&vad7="+encodeURIComponent(correo);
    return data2;
}

function procesarAd(){
    var menu = document.getElementById("tabla3");
	if(conexionAd.readyState == 4){	
        menu.innerHTML = conexionAd.responseText;
		   filasAd();
		eliminarAd(); 
	}else{
		menu.innerHTML = 'Cargando...';
	}
}

function filasAd(){
var index = document.getElementById("tb").rows.length;
	for (var r = 0; r <= index; r++){
		//alert (r);
		var idEnlaceAd = document.getElementById('btnAd'+r);
		if(idEnlaceAd){
			idEnlaceAd.addEventListener('click', enlaceEditarAd, false);	
		}
	}
}

function enlaceEditarAd(l){
	l.preventDefault();
	var urlAd = l.target.getAttribute('href');
	envia2Ad(urlAd);
}

var conexiAd;

function envia2Ad(urlAd){
	conexiAd = new XMLHttpRequest();
	conexiAd.onreadystatechange = procesaEvento2Ad;
	conexiAd.open("GET",urlAd,true);
	conexiAd.send();
}

function procesaEvento2Ad(){
	var detalle = document.getElementById("muestra");
	if(conexiAd.readyState==4){
		detalle.innerHTML = conexiAd.responseText;
		abreFormuAd();
	}else{
		detalle.innerHTML = "Espera";
	}
}

//tercera parte de aduanas man


function abreFormuAd(){
	var infoEditAd = document.getElementById("formEditarAd");
	infoEditAd.addEventListener('submit', presionaEditarAd,false);
}
function presionaEditarAd(h){
	h.preventDefault();
	var url2ad = "php/actAtu.php";
	cargaFormuAd(url2ad);
}

var conexioAd;

function cargaFormuAd(url2ad){
	conexioAd = new XMLHttpRequest();
	conexioAd.open("POST",url2ad,true);
	conexioAd.setRequestHeader("content-Type", "application/x-www-form-urlencoded");
	conexioAd.send(datosEditadosAd());
	conexioAd.onreadystatechange=eventoEdicionAd;
}

function datosEditadosAd(){
	var d="";
	var vadu1 = document.getElementById("idad").value;
	var vadu2 = document.getElementById("nombre").value;
	var vadu3 = document.getElementById("direccion").value;
	var vadu4 = document.getElementById("estado").value;
	var vadu5 = document.getElementById("ciudad").value;
	var vadu6 = document.getElementById("pais").value;
	var vadu7 = document.getElementById("telefono").value;
	var vadu8 = document.getElementById("correo").value;
	d="vad1="+encodeURIComponent(vadu1)+"&vad2="+encodeURIComponent(vadu2)+"&vad3="+encodeURIComponent(vadu3)+"&vad4="+encodeURIComponent(vadu4)+"&vad5="+encodeURIComponent(vadu5)+"&vad6="+encodeURIComponent(vadu6)+"&vad7="+encodeURIComponent(vadu7)+"&vad8="+encodeURIComponent(vadu8);
	alert(d);
	return d;	
}

function eventoEdicionAd(){
	var indi = document.getElementById("infoGeneral");
	if(conexioAd.readyState == 4){
		indi.innerHTML = conexioAd.responseText;
		inicializarEventoAd();
		filasAd();
		eliminarAd();
	}else{
		indi.innerHTML = "Espere por favor";
	}
}

//---------------------Eliminar---------------//

function eliminarAd(){
	var index = document.getElementById('tb').rows.length;
	for(var w = 0; w <=index; w++){
		var idEnlace = document.getElementById("btnDeleteAd"+w);
		if(idEnlace){
			idEnlace.addEventListener('click',presionaEliminarAd,false);
		}
	}
}

function presionaEliminarAd(e){
	e.preventDefault();
	var url3Ad = e.target.getAttribute('href');
	enviaElimAd(url3Ad);
}

var conesAd;

function enviaElimAd(url3Ad){
	conesAd = new XMLHttpRequest();
	conesAd.onreadystatechange = elimiAluAd;
	conesAd.open("POST",url3Ad,true);
	conesAd.send();
}

function elimiAluAd(){
	var detalle = document.getElementById("infoGeneral");
	if(conesAd.readyState == 4){
		detalle.innerHTML = conesAd.responseText;
		inicializarEventoAd();
		filasAd();
		eliminarAd();
	}else{
		detalle.innerHTML = "Espere";
	}
}



//Ultima parte wey jajaja

addEventListener('mouseover',inicializarEventoCo,false);
function inicializarEventoCo(){
    //Acá, se recupera información del formulario y se inicializa el evento Submit (inicializarEvento)
    var mo = document.getElementById("btnCo");  //Se crea una variable donde se obtiene el ID del elemento a modificar.        
    mo.addEventListener('click', presionarEnlaceCo, false); //Se añade una función. NOTA: se cambia "submit" por click
}

function presionarEnlaceCo(y){
    //Acá, se configura lo que ocurre cuando se presiona el botón
    y.preventDefault();  //Previene la ejecución normal del elemento
    var selecc = event.srcElement.id; //NUEVO: Obtiene el ID del botón seleccionado
    enviarCo();
}

var conexionCo;

function enviarCo(){
    //Función que envía toda la onda esa
    conexionCo= new XMLHttpRequest(); //Va a controlar la comunicación asíncrona entre el servidor y el cliente
    conexionCo.onreadystatechange = procesarCo; //Va a controlar los estados de cambio del de arriba (5 estados)
    conexionCo.open('POST',"php/usuarios.php", true); //Abre la conexión al archivo que se va a recargar
    conexionCo.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); //Para mandar el contenido correctamnte
    conexionCo.send(obtenerDatosCo());
}

function obtenerDatosCo(id){
    var data2 = "";
	var vco1 = document.getElementById("nombrecolaborador").value;
	var vco2 = document.getElementById("ApeMat").value;
	var vco3 = document.getElementById("ApePat").value;
	var vco4 = document.getElementById("FechaNac").value;
	var vco5 = document.getElementById("rfc").value;
	var vco6 = document.getElementById("Curp").value;
	var vco7 = document.getElementById("Direc").value;
	var vco8 = document.getElementById("Cel").value;
	var vco9 = document.getElementById("Tel").value;
	var vco10 = document.getElementById("Corre").value;
	var vco11 = document.getElementById("Departamento").value;
	var vco12 = document.getElementById("Puesto").value;
	var vco13 = document.getElementById("Pass").value;
	data2="vac1="+encodeURIComponent(vco1)+"&vac2="+encodeURIComponent(vco2)+"&vac3="+encodeURIComponent(vco3)+"&vac4="+encodeURIComponent(vco4)+"&vac5="+encodeURIComponent(vco5)+"&vac6="+encodeURIComponent(vco6)+"&vac7="+encodeURIComponent(vco7)+"&vac8="+encodeURIComponent(vco8)+"&vac9="+encodeURIComponent(vco9)+"&vac10="+encodeURIComponent(vco10)+"&vac11="+encodeURIComponent(vco11)+"&vac12="+encodeURIComponent(vco12)+"&vac13="+encodeURIComponent(vco13);
   return data2;
}

function procesarCo(){
    var menu = document.getElementById("tabla4");
	if(conexionCo.readyState == 4){	
        menu.innerHTML = conexionCo.responseText;
		  
		   filasCo();
		eliminarCo(); 
	}else{
		menu.innerHTML = 'Cargando...';
	}
}

function filasCo(){
var index = document.getElementById("tb").rows.length;
	for (var r = 0; r <= index; r++){
		//alert (r);
		var idEnlaceCo = document.getElementById('btnCo2'+r);
		if(idEnlaceCo){
			idEnlaceCo.addEventListener('click', enlaceEditarCo, false);	
		}
	}
}

function enlaceEditarCo(l){
	l.preventDefault();
	var urlCo = l.target.getAttribute('href');
	envia2Co(urlCo);
}

var conexiCo;

function envia2Co(urlCo){
	conexiCo = new XMLHttpRequest();
	conexiCo.onreadystatechange = procesaEvento2Co;
	conexiCo.open("GET",urlCo,true);
	conexiCo.send();
}

function procesaEvento2Co(){
	var detalle = document.getElementById("muestra");
	if(conexiCo.readyState==4){
		detalle.innerHTML = conexiCo.responseText;
		abreFormuCo();
	}else{
		detalle.innerHTML = "Espera";
	}
}

//tercera parte de aduanas man


function abreFormuCo(){
	var infoEditCo = document.getElementById("formEditarCo");
	infoEditCo.addEventListener('submit', presionaEditarCo,false);
}
function presionaEditarCo(h){
	h.preventDefault();
	var url2Co = "php/EditarUser.php";
	cargaFormuCo(url2Co);
}

var conexioCo;

function cargaFormuCo(url2Co){
	conexioCo = new XMLHttpRequest();
	conexioCo.open("POST",url2Co,true);
	conexioCo.setRequestHeader("content-Type", "application/x-www-form-urlencoded");
	conexioCo.send(datosEditadosCo());
	conexioCo.onreadystatechange=eventoEdicionCo;
}

function datosEditadosCo(){
	var d="";
	var vco1 = document.getElementById("idad").value;
	var vco2 = document.getElementById("nombre").value;
	var vco3 = document.getElementById("apep").value;
	var vco4 = document.getElementById("apem").value;
	var vco5 = document.getElementById("fcn").value;
	var vco6 = document.getElementById("rfc").value;
	var vco7 = document.getElementById("curp").value;
	var vco8 = document.getElementById("direc").value;
	var vco9 = document.getElementById("cel").value;
	var vco10 = document.getElementById("tel").value;
	var vco11 = document.getElementById("correo").value;
	var vco12 = document.getElementById("depar").value;
	var vco13 = document.getElementById("pues").value;
	var vco14 = document.getElementById("pass").value;
	d="vac1="+encodeURIComponent(vco1)+"&vac2="+encodeURIComponent(vco2)+"&vac3="+encodeURIComponent(vco3)+"&vac4="+encodeURIComponent(vco4)+"&vac5="+encodeURIComponent(vco5)+"&vac6="+encodeURIComponent(vco6)+"&vac7="+encodeURIComponent(vco7)+"&vac8="+encodeURIComponent(vco8)+"&vac9="+encodeURIComponent(vco9)+"&vac10="+encodeURIComponent(vco10)+"&vac11="+encodeURIComponent(vco11)+"&vac12="+encodeURIComponent(vco12)+"&vac13="+encodeURIComponent(vco13)+"&vac14="+encodeURIComponent(vco14);
	alert(d);
	return d;	
}

function eventoEdicionCo(){
	var indi = document.getElementById("infoGeneral");
	if(conexioCo.readyState == 4){
		indi.innerHTML = conexioCo.responseText;
		inicializarEventoCo();
		filasCo();
		eliminarCo();
	}else{
		indi.innerHTML = "Espere por favor";
	}
}

//---------------------Eliminar---------------//

function eliminarCo(){
	var index = document.getElementById('tb').rows.length;
	for(var w = 0; w <=index; w++){
		var idEnlace = document.getElementById("btnDeleteCo"+w);
		if(idEnlace){
			idEnlace.addEventListener('click',presionaEliminarCo,false);
		}
	}
}

function presionaEliminarCo(e){
	e.preventDefault();
	var url3Co = e.target.getAttribute('href');
	enviaElimCo(url3Co);
}

var conesCo;

function enviaElimCo(url3Co){
	conesCo = new XMLHttpRequest();
	conesCo.onreadystatechange = elimiAluCo;
	conesCo.open("POST",url3Co,true);
	conesCo.send();
}

function elimiAluCo(){
	var detalle = document.getElementById("infoGeneral");
	if(conesCo.readyState == 4){
		detalle.innerHTML = conesCo.responseText;
		inicializarEventoCo();
		filasCo();
		eliminarCo();
	}else{
		detalle.innerHTML = "Espere";
	}
}




