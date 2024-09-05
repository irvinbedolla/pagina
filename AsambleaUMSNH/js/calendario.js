//Arrays de datos:
meses=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","Septiembre","octubre","noviembre","diciembre"];
lasemana=["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"]
diassemana=["lun","mar","mié","jue","vie","sáb","dom"];
//Tras cargarse la página ...
window.onload = function() {
//fecha actual
hoy=new Date(); //objeto fecha actual
diasemhoy=hoy.getDay(); //dia semana actual
diahoy=hoy.getDate(); //dia mes actual
meshoy=hoy.getMonth(); //mes actual
annohoy=hoy.getFullYear(); //año actual
// Elementos del DOM: en cabecera de calendario 
tit=document.getElementById("titulos"); //cabecera del calendario
ant=document.getElementById("anterior"); //mes anterior
pos=document.getElementById("posterior"); //mes posterior
// Elementos del DOM en primera fila
f0=document.getElementById("fila0");
//Pie de calendario
pie=document.getElementById("fechaactual");
//pie.innerHTML+=lasemana[diasemhoy]+", "+diahoy+" de "+meses[meshoy]+" de "+annohoy;
	
	
//formulario: datos iniciales:
document.buscar.buscaanno.value=annohoy;
// Definir elementos iniciales:
mescal = meshoy; //mes principal
annocal = annohoy //año principal
//iniciar calendario:
cabecera() 
primeralinea()
escribirdias()
}
//FUNCIONES de creación del calendario:
//cabecera del calendario
function cabecera() {
         tit.innerHTML=meses[mescal]+" de "+annocal;
         mesant=mescal-1; //mes anterior
         mespos=mescal+1; //mes posterior
         if (mesant<0) {mesant=11;}
         if (mespos>11) {mespos=0;}
         ant.innerHTML=meses[mesant]
         pos.innerHTML=meses[mespos]
         } 
//primera línea de tabla: días de la semana.
function primeralinea() {
         for (i=0;i<7;i++) {
             celda0=f0.getElementsByTagName("th")[i];
             celda0.innerHTML=diassemana[i]
             }
         }
//rellenar celdas con los días
function escribirdias() {
         //Buscar dia de la semana del dia 1 del mes:
         primeromes=new Date(annocal,mescal,"1") //buscar primer día del mes
         prsem=primeromes.getDay() //buscar día de la semana del día 1
         prsem--; //adaptar al calendario español (empezar por lunes)
         if (prsem==-1) {prsem=6;}
         //buscar fecha para primera celda:
         diaprmes=primeromes.getDate() 
         prcelda=diaprmes-prsem; //restar días que sobran de la semana
         empezar=primeromes.setDate(prcelda) //empezar= tiempo UNIX 1ª celda
         diames=new Date() //convertir en fecha
         diames.setTime(empezar); //diames=fecha primera celda.
         //Recorrer las celdas para escribir el día:
         for (i=1;i<7;i++) { //localizar fila
             fila=document.getElementById("fila"+i);
             for (j=0;j<7;j++) {
                 midia=diames.getDate() 
                 mimes=diames.getMonth()
                 mianno=diames.getFullYear()
                 celda=fila.getElementsByTagName("td")[j];
                 celda.innerHTML=midia;
                 //Recuperar estado inicial al cambiar de mes:
                 celda.style.backgroundColor="#E42C78";
                 celda.style.color="#fff";
                 //domingos en rojo
                 if (j==6) { 
                    celda.style.color="#FFF212";
                    }
                 //dias restantes del mes en gris
                 if (mimes!=mescal) { 
                    celda.style.color="#a0babc";
                    }
                 //destacar la fecha actual
                 if (mimes==meshoy && midia==diahoy && mianno==annohoy ) { 
                    celda.style.backgroundColor="#f0b19e";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
                    }
				 
				 if (mimes ==4 && midia==15 && mianno==2020) { 
                  
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML= " ";
				  }
				 if (mimes==5 && midia==1 ) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					pie.innerHTML = "1ro de Julio.- Inicio del plazo para la promoción del Voto de los Mexicanos Residentes en el Extranjero (Difusión, Comunicación, Vinculación y Plataformas Digitales) (INE-IEM) . Del 1 julio de 2020 al 1 de agosto de 2021."
				 //"Hoy:"+lasemana[diasemhoy]+", "+diahoy+" de "+meses[meshoy]+" de "+annohoy;
                    }
				 //octubre
				  if (mimes ==6 && midia==15 && mianno==2020) { 
                  
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML= " ";
				  }
					 
				 if (mimes ==7 && midia==16 && midia==31) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML= "16 de Agosto.- Inicio del plazo para que el Consejo General del INE emita el acuerdo por el que se determina el voto electrónico y emisión de Lineamientos (INE). Plan integral del voto de las y los mexicanos residentes en el extranjero 2020-2021. Del 16 al 31 de mayo de 2020. 31 de Agosto.- Fin del plazo para que el Consejo General del INE emita el acuerdo por el que se determina el voto electrónico y emisión de Lineamientos (INE). Plan integral del voto de las y los mexicanos residentes en el extranjero 2020-2021. 16 de mayo al 31 de mayo de 2020.";
				  }
				
				  //Septiembre
				  if (mimes ==8 && midia==1 && mianno==2020) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML= "1ro de Septiembre.- Inicio del plazo para la conformación de la Lista Nominal de Electores Residentes en el Extranjero (subsanar, observaciones de partidos políticos e informe) (INE). Artículos 336 y 338 de la LGIPE. 1 de septiembre de 2020 al 15 de abril de 2021. ";
				  }
				 //octubre
				  if (mimes ==9 && midia==15 && mianno==2020) { 
                  
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML= " ";
				  }
				 //Noviembre
				 if (mimes ==10 && midia==30  && mianno==2020) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML= "30 de Noviembre.- Fin del plazo para que el OPL remita al INE la documentación y materiales electorales del Voto de los Mexicanos Residentes en el Extranjero Art. 13 de los Lineamientos para el voto postal ";
				 
				  }
				  //Diciembre
				 if (mimes ==11 && midia==18 && mianno==2020) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML= "• 1 de Diciembre.- Inicio del plazo para aprobación de la documentación y materiales electorales del Voto de los Mexicanos Residentes en el Extranjero (INE). Plan integral de trabajo del voto de las y los mexicanos residentes en el extranjero procesos electorales 2020-2021. 18 de diciembre de 2020 al 15 de enero de 2021."+"<br/><br/>"+"• 18 de Diciembre.- Fin del plazo para que el INE verifique la documentación y materiales electorales que sean remitidos por los OPL Art. 13 de los Lineamientos para el voto postal."+"<br/><br/>"+" • 31 de Diciembre.- Fin del plazo para que el OPL apruebe los documentos y materiales aprobados previamente por el INEArt. 14 de los Lineamientos para el voto postal y Art. 17, 21, 24 y 26 de los Lineamientos para el voto electrónico por internet";
				  }
				 if (mimes ==11 && midia==31 && mianno==2020) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML+= " ";
				  }
				 if (mimes ==11 && midia==1 && mianno==2020) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML+= " ";
				  }
				 if (mimes ==0 && midia==15 && mianno==2021) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML= "•	1 de Enero.- Inicio del plazo para determinar por parte del Consejo General del INE el Local Único de Escrutinio y Cómputo del VME (INE).Plan integral de trabajo del voto de las y los mexicanos residentes en el extranjero procesos electorales 2020-2021 1 al 31 de enero de 2021."+"<br/><br/>"+" • 15 de Enero.- Fin del plazo para aprobación de la documentación y materiales electorales del Voto de los Mexicanos Residentes en el Extranjero (INE). Plan integral de trabajo del voto de las y los mexicanos residentes en el extranjero procesos electorales 2020-2021. 1 de diciembre de 2020 al 15 de enero de 2021."+"<br/><br/>"+" • 31 de Enero.- Fin del plazo para determinar por parte del Consejo General del INE el Local Único de Escrutinio y Cómputo del VME (INE). Plan integral de trabajo del voto de las y los mexicanos residentes en el extranjero procesos electorales 2020-2021. 1 al 31 de enero de 2021.";
				  }
				  if (mimes ==0 && midia==1 && mianno==2021) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML+= " ";
				  }
				 if (mimes ==0 && midia==31 && mianno==2021) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML+= " ";
				  }
				 if (mimes ==1 && midia==12 && mianno==2021) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML= "•	12 de Febrero.- Fin del plazo para solicitar la credencial para votar desde el extranjero"+mimes+midia+mianno;
				  }
				  if (mimes ==2 && midia==12 && mianno==2021) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML= "\n •12 de Marzo.- Fecha límite para que la DERFE comunique a las(os) ciudadanas(os) las inconsistencias detectadas en su SIILNERE. Art. 37 de los lineamientos para la conformación de la LNERE"+"<br/>"+"•22 de Marzo.-Fecha límite para que la DERFE ponga a disposición de los Partidos Políticos, a través de sus representaciones acreditadas ante la CNV, la LNERE para Revisión. Art. 51 de los lineamientos para la conformación de la LNERE. "+"<br/>"+"•23 de Marzo.- Fin del plazo para que el Consejo General del INE designe a cinco personas que fungirán como custodias(os) /resguardantes de la Llave criptográfica, de entre personal del Instituto y de los OPL. Art. 46 de los Lineamientos para el voto electrónico por internet"+"<br/>"+"La fecha límite de notificación a las(os) ciudadanas(os) sobre la improcedencia de su SIILNERE Art. 48 de los lineamientos para la conformación de la LNERE Fin del plazo para que la JGE del INE emita el procedimiento para la integración y envío del PEP, previendo las medidas de seguridad que deberán implementarse en el lugar de la integración, como en su entrega al proveedor del servicio de mensajería.Art. 19 de los Lineamientos para el voto posta";
				  }
				  if (mimes ==0 && midia==22 && mianno==2021) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML+= " ";
				  }
				 if (mimes ==0 && midia==23 && mianno==2021) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML+= " ";
				}
			
				 if (mimes ==0 && midia==31 && mianno==2021) { 
                    celda.style.backgroundColor="#878485";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
					  pie.innerHTML+= " ";
				  }
				
                 //pasar al siguiente día
                 midia=midia+1;
                 diames.setDate(midia);
                 }
			
			  
             }
	
         }
//Ver mes anterior
function mesantes() {
         nuevomes=new Date() //nuevo objeto de fecha
         primeromes--; //Restamos un día al 1 del mes visualizado
         nuevomes.setTime(primeromes) //cambiamos fecha al mes anterior 
         mescal=nuevomes.getMonth() //cambiamos las variables que usarán las funciones
         annocal=nuevomes.getFullYear()
         cabecera() //llamada a funcion de cambio de cabecera
         escribirdias() //llamada a funcion de cambio de tabla.
         }
//ver mes posterior
function mesdespues() {
         nuevomes=new Date() //nuevo obejto fecha
         tiempounix=primeromes.getTime() //tiempo de primero mes visible
         tiempounix=tiempounix+(45*24*60*60*1000) //le añadimos 45 días 
         nuevomes.setTime(tiempounix) //fecha con mes posterior.
         mescal=nuevomes.getMonth() //cambiamos variables 
         annocal=nuevomes.getFullYear()
         cabecera() //escribir la cabecera 
         escribirdias() //escribir la tabla
         }
//volver al mes actual
function actualizar() {
         mescal=hoy.getMonth(); //cambiar a mes actual
         annocal=hoy.getFullYear(); //cambiar a año actual 
         cabecera() //escribir la cabecera
         escribirdias() //escribir la tabla
         }
//ir al mes buscado
function mifecha() {
         //Recoger dato del año en el formulario
         mianno=document.buscar.buscaanno.value; 
         //recoger dato del mes en el formulario
         listameses=document.buscar.buscames;
         opciones=listameses.options;
         num=listameses.selectedIndex
         mimes=opciones[num].value;
         //Comprobar si el año está bien escrito
         if (isNaN(mianno) || mianno<1) { 
            //año mal escrito: mensaje de error
            alert("El año no es válido:\n debe ser un número mayor que 0")
            }
         else { //año bien escrito: ver mes en calendario:
              mife=new Date(); //nueva fecha
              mife.setMonth(mimes); //añadir mes y año a nueva fecha
              mife.setFullYear(mianno);
              mescal=mife.getMonth(); //cambiar a mes y año indicados
              annocal=mife.getFullYear();
              cabecera() //escribir cabecera
              escribirdias() //escribir tabla
              }
         }// JavaScript Document