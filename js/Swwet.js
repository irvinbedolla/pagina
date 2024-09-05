// JavaScript Document
$("#Andres").click(function(){
	swal.fire("Ejemplo");
});

function alerta(){
 swal({
   title: "¡ERROR!",
   text: "Esto es un mensaje de error",
	html:'<h1>Revista Digital Elector Número 01</h1><h1><iframe src="subidas/fondo.png"  width="100%" height="680px" ></iframe></h1>',
   type: "error",
 });
}
     alerta()