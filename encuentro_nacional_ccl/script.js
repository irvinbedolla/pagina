const 
 	$btnMesa1 = document.querySelector("#btnMesa1"),
	$btnMesa2 = document.querySelector("#btnMesa2"),
	$btnMesa3 = document.querySelector("#btnMesa3"),
    $btnMesa4 = document.querySelector("#btnMesa4"),
    $btnMesa5 = document.querySelector("#btnMesa5"),
    $btnMesaJ1 = document.querySelector("#btnMesaJ1"),
	$btnMesaJ2 = document.querySelector("#btnMesaJ2"),
    $btnMesaJ3 = document.querySelector("#btnMesaJ3"),
   $btnMesaJ4 = document.querySelector("#btnMesaJ4");
   /*$btnSimple = document.querySelector("#btnSimple"),
    $btnBotonPersonalizado = document.querySelector("#btnBotonPersonalizado"),
    $btnTituloYTexto = document.querySelector("#btnTituloYTexto"),
  $btnHtmlPersonalizado = document.querySelector("#btnHtmlPersonalizado"),
    $btnConfirm = document.querySelector("#btnConfirm"),
    $btnInput = document.querySelector("#btnInput");
    
/*$btnSimple.addEventListener("click", () => {
    Swal.fire("Mesa 5 \n Experiencias prácticas, estadísticas y resultados de los Centros de Conciliación Laboral \n\n\nSede:  Colegio Primitivo y Nacional de San Nicolás de Hidalgo “Aula Mater” \nHora: 17:30-19:00 hrs.")
        .then(() => {
            // Aquí la alerta se ha cerrado
            console.log("Alerta cerrada");
        });
});

$btnBotonPersonalizado.addEventListener("click", () => {
    Swal.fire({
        title: "Venta realizada",
        confirmButtonText: "Aceptar",
    });
});


$btnTituloYTexto.addEventListener("click", () => {
    Swal.fire({
        title: "Venta realizada",
        text: "La venta fue guardada con el id 123456",
        confirmButtonText: "Aceptar",
    });
});


$btnHtmlPersonalizado.addEventListener("click", () => {
    Swal.fire({
        html: `<h1 style="color:#6A0F49">Mesa 1</h1>
    <p><h3>Criterios relevantes en la etapa prejudicial y normatividad</h3></strong></p>
    <br>
 <h4 style="color:#6A0F49"><b>Sede:</b> Teatro Mariano Matamoros
				   <br>
		           <b>Hora:</b> 10:00-11:00 hrs.</h4>
    <a href="#">Imprimir ticket</a>
    `,
    });
});

$btnConfirm.addEventListener("click", () => {

    Swal
        .fire({
            title: "Venta #123465",
            text: "¿Eliminar?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: "Sí, eliminar",
            cancelButtonText: "Cancelar",
        })
        .then(resultado => {
            if (resultado.value) {
                // Hicieron click en "Sí"
                console.log("*se elimina la venta*");
            } else {
                // Dijeron que no
                console.log("*NO se elimina la venta*");
            }
        });
});


$btnInput.addEventListener("click", () => {
    Swal
        .fire({
            title: "Tu nombre",
            input: "text",
            showCancelButton: true,
            confirmButtonText: "Guardar",
            cancelButtonText: "Cancelar",
            inputValidator: nombre => {
                // Si el valor es válido, debes regresar undefined. Si no, una cadena
                if (!nombre) {
                    return "Por favor escribe tu nombre";
                } else {
                    return undefined;
                }
            }
        })
        .then(resultado => {
            if (resultado.value) {
                let nombre = resultado.value;
                console.log("Hola, " + nombre);
            }
        });
});*/

$btnMesa1.addEventListener("click", () => {
    Swal.fire({
        html: `<h1 style="color:#6A0F49"><b>Mesa 1</b></h1>
    <p><h3>Criterios relevantes en la etapa prejudicial y normatividad</h3></strong></p>
    <br>
 <h4 style="color:#6A0F49"><b>Sede:</b> Centro Cultural Universitario “Sala Ex rectores”
				   <br>
		           <b>Hora:</b> 16:00-17:30 hrs.</h4>
    <a href="Programa.html">Ver el Programa</a>
    `,
    });
});
$btnMesa2.addEventListener("click", () => {
    Swal.fire({
        html: `<h1 style="color:#6A0F49"><b>Mesa 2</b></h1>
    <p><h3>Experiencias y retos en capacitación y profesionalización del personal de los Centros de Conciliación Laboral</h3></strong></p>
    <br>
 <h4 style="color:#6A0F49"><b>Sede:</b> Colegio Primitivo y Nacional de San Nicolás de Hidalgo “Aula Mater”
				   <br>
		           <b>Hora:</b> 16:00-17:30 hrs.</h4>
    <a href="Programa.html">Ver el Programa</a>
    `,
    });
});
$btnMesa3.addEventListener("click", () => {
    Swal.fire({
        html: `<h1 style="color:#6A0F49"><b>Mesa 3</b></h1>
    <p><h3>Innovación y oportunidades en los sistemas tecnológicos dentro de los Centros de Conciliación Laboral (SIGNO y SINACOL)</h3></strong></p>
    <br>
 <h4 style="color:#6A0F49"><b>Sede:</b> Centro Cultural Universitario “Alfredo Zalce”
				   <br>
		           <b>Hora:</b> 16:00-17:30 hrs.</h4>
    <a href="Programa.html">Ver el Programa</a>
    `,
    });
});
$btnMesa4.addEventListener("click", () => {
    Swal.fire({
        html: `<h1 style="color:#6A0F49"><b>Mesa 4</b></h1>
    <p><h3>Comunicación, difusión, transparencia, archivo y protección de datos personales en la conciliación</h3></strong></p>
    <br>
 <h4 style="color:#6A0F49"><b>Sede:</b> Centro Cultural Universitario “Sala ex rectores”
				   <br>
		           <b>Hora:</b> 17:30-19:00 hrs.</h4>
    <a href="Programa.html">Ver el Programa</a>
    `,
    });
});
$btnMesa5.addEventListener("click", () => {
    Swal.fire({
        html: `<h1 style="color:#6A0F49"><b>Mesa 5</b></h1>
    <p><h3>Experiencias prácticas, estadísticas y resultados de los Centros de Conciliación Laboral</h3></strong></p>
    <br>
 <h4 style="color:#6A0F49"><b>Sede:</b> Colegio Primitivo y Nacional de San Nicolás de Hidalgo “Aula Mater”
				   <br>
		           <b>Hora:</b> 17:30-19:00 hrs.</h4>
    <a href="Programa.html">Ver el Programa</a>
    `,
    });
});
$btnMesaJ1.addEventListener("click", () => {
    Swal.fire({
        html: `<h1 style="color:#6A0F49"><b>Mesa 1</b></h1>
    <p><h3>El derecho procesal del trabajo a través de los órganos jurisdiccionales en materia laboral</h3></strong></p>
    <br>
 <h4 style="color:#6A0F49"><b>Sede:</b> Antiguo Palacio de Justicia
				   <br>
		           <b>Hora:</b> 16:00-16:50 hrs.</h4>
    <a href="Programa.html">Ver el Programa</a>
    `,
    });
});
$btnMesaJ2.addEventListener("click", () => {
    Swal.fire({
        html: `<h1 style="color:#6A0F49"><b>Mesa 2</b></h1>
    <p><h3>Criterios relevantes en los Tribunales Laborales </h3></strong></p>
    <br>
 <h4 style="color:#6A0F49"><b>Sede:</b> Antiguo Palacio de Justicia
				   <br>
		           <b>Hora:</b> 17:00-17:50 hrs.</h4>
    <a href="Programa.html">Ver el Programa</a>
    `,
    });
});
$btnMesaJ3.addEventListener("click", () => {
    Swal.fire({
        html: `<h1 style="color:#6A0F49"><b>Mesa 3</b></h1>
    <p><h3>Valoración de la prueba en la justicia laboral: Etapa judicial</h3></strong></p>
    <br>
 <h4 style="color:#6A0F49"><b>Sede:</b> Antiguo Palacio de Justicia
				   <br>
		           <b>Hora:</b> 18:00-18:50 hrs.</h4>
    <a href="Programa.html">Ver el Programa</a>
    `,
    });
});
$btnMesaJ4.addEventListener("click", () => {
    Swal.fire({
        html: `<h1 style="color:#6A0F49"><b>Mesa 4</b></h1>
    <p><h3>Conflictos colectivos y huelga: Procedimiento ante los Tribunales Laborales</h3></strong></p>
    <br>
 <h4 style="color:#6A0F49"><b>Sede:</b> Antiguo Palacio de Justicia
				   <br>
		           <b>Hora:</b> 17:30-19:00 hrs.</h4>
    <a href="Programa.html">Ver el Programa</a>
    `,
    });
});