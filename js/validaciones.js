$(function() {
    $( document ).tooltip();
});
var availableTagsDep = [
        "RECTORIA",
        "SECRETARIA GENERAL",
        "ARCHIVO Y CORRESPONDENCIA",
        "PLANEACION Y DESARROLLO",
        "OFICINA JURIDICA",
        "CONTROL INTERNO",
        "CONTROL DISCIPLINARIO INTERNO",
        "UNIDAD DE TELEVISION",
        "EMISORA UNIVERSITARIA",
        "VICERRECTORIA ADMINISTRATIVA",
        "COMPRAS Y CONTRATACION",
        "REVISORIA DE CUENTAS",
        "FONDO DE SEGURIDAD SOCIAL EN SALUD",
        "DIVISION DE RECURSOS HUMANOS",
        "SECCION DE CONTABILIDAD",
        "SECCION DE TESORERIA",
        "SECCION DE PRESUPUESTO",
        "ALMACEN Y SUMINISTROS",
        "SERVICIOS GENERALES Y MANTENIMIENTO",
        "CENTRO DE INFORMATICA",
        "VICERRECTORIA ACADEMICA",
        "VICERRECTORIA INVESTIGACIONES, POSTGRADOS  Y RELACIONES INTERNACIONALES VIPRI",
        "CENTRO DE ESTUDIOS EN SALUD CESUN",
        "ESCUELA DE AUXILIARES (HOSPITAL SAN PEDRO)",
        "CENTRO DE INVESTIGACIONES Y ESTUDIOS LATINOAMERICANOS CEILAT",
        "OFICINA DE REGISTRO ACADEMICO",
        "SECCION DE LABORATORIOS Y EQUIPOS",
        "CENTRO DE PUBLICACIONES CEPUN",
        "SECCION DE BIBLIOTECA Y DOCUMENTACION",
        "AULA DE INFORMATICA",
        "GRANJA DE BOTANA",
        "GRANJA DE CHIMANGUAL",
        "GRANJA MARAGRICOLA - TUMACO",
        "GRANJA REMOLINO",
        "FACULTAD DE CIENCIAS DE LA SALUD",
        "DEPARTAMENTO DE PROMOCION DE LA SALUD",
        "DEPARTAMENTO DE MEDICINA",
        "FACULTAD DE EDUCACION",
        "DEPARTAMENTO DE ESTUDIOS PEDAGOGICOS",
        "FACULTAD DE DERECHO",
        "CONSULTORIOS JURIDICOS",
        "FACULTAD DE CIENCIAS ECONOMICAS Y ADMINISTRATIVAS",
        "CENTRO DE ESTUDIOS REGIONALES Y EMPRESARIALES CEDRE",
        "DEPARTAMENTO DE ECONOMIA",
        "DEPARTAMENTO DE ADMINISTRACION DE EMPRESAS",
        "DEPARTAMENTO DE COMERCIO INTERNACIONAL Y MERCADEO",
        "FACULTAD DE CIENCIAS HUMANAS",
        "DEPARTAMENTO DE FORMACION HUMANISTICA",
        "CURSOS PREUNIVERSITARIOS",
        "CENTRO DE IDIOMAS",
        "CENTRO DE RECURSOS DE IDIOMAS",
        "DEPARTAMENTO DE FILOSOFIA",
        "DEPARTAMENTO DE LINGÜÍSTICA E IDIOMAS",
        "DEPARTAMENTO DE SOCIALES",
        "DEPARTAMENTO DE PSICOLOGIA",
        "DEPARTAMENTO DE SOCIOLOGIA",
        "DEPARTAMENTO DE GEOGRAFIA",
        "FACULTAD DE CIENCIAS NATURALES Y MATEMATICAS",
        "DEPARTAMENTO DE MATEMATICAS",
        "DEPARTAMENTO DE FISICA",
        "DEPARTAMENTO DE QUIMICA",
        "DEPARTAMENTO DE BIOLOGIA",
        "FACULTAD DE ARTES",
        "DEPARTAMENTO DE ARTES VISUALES",
        "DEPARTAMENTO DE DISEÑO",
        "DEPARTAMENTO DE MUSICA",
        "DEPARTAMENTO DE ARQUITECTURA",
        "FACULTAD DE CIENCIAS AGRICOLAS",
        "DEPARTAMENTO DE PRODUCCION Y SANIDAD VEGETAL",
        "DEPARTAMENTO DE RECURSOS NATURALES Y SISTEMAS AGROFORESTALES",
        "FACULTAD DE CIENCIAS PECUARIAS",
        "DEPARTAMENTO DE PRODUCCION Y PROCESAMIENTO ANIMAL",
        "DEPARTAMENTO DE SALUD ANIMAL",
        "CLINICA VETERINARIA",
        "DEPARTAMENTO DE RECURSOS HIDROBIOLOGICOS",
        "FACULTAD DE INGENIERIA",
        "DEPARTAMENTO DE INGENIERIA CIVIL",
        "DEPARTAMENTO DE SISTEMAS",
        "DEPARTAMENTO DE ELECTRONICA",
        "FACULTAD DE INGENIERIA AGROINDUSTRIAL",
        "SISTEMA DE BIENESTAR UNIVERSITARIO",
        "UNIDAD DE SALUD ESTUDIANTIL TOROBAJO",
        "ARCHIVO HISTORICO",
        "CENTRO DE ESTUDIOS E INVESTIGACIONES SOCIO-JURIDICAS CIESJU",
        "UNIVERSIDAD DE NARIÑO VIRTUAL",
        "PIFIL",
        "CENTRO DE INVESTIGACIONES Y ESTUDIOS DE POSTGRADO EN CIENCIAS AGRARIAS",
        "PROGRAMA DE MEJORAMIENTO GENETICO",
        "EXTENSION TUMACO",
        "EXTENSION IPIALES",
        "EXTENSION TUQUERRES",
        "EXTENSION SAMANIEGO",
        "ETENSION LA UNION",
        "FONDO DE CONSTRUCCIONES",
        "OFICINA DE CONVENIOS",
        "LICEO DE LA UNIVERSIDAD DE NARIÑO",
        "IADAP",
        "MAESTRIA EN EDUCACION",
        "MAESTRIA EN DOCENCIA UNIVERSITARIA",
        "POSTGRADOS DE EDUCACION",
        "POSTGRADOS DE ARTES",
        "POSTGRADOS DE ETNOLITERATURA",
        "POSTGRADOS FACEA",
        "SALUD OCUPACIONAL",
        "TEATRO IMPERIAL"
    ];    
            function tipoSol(){                 
                if(location.hash=="#/registro") document.getElementById('selecSoli').value="Registro de un nuevo equipo a la red";
                else if(location.hash=="#/permisos") document.getElementById('selecSoli').value="Permisos especiales de navegacion  o solicitud de IP publica";
                else if(location.hash=="#/puntoRed") document.getElementById('selecSoli').value="Instalacion de un punto de red";
                else if(location.hash=="#/videoConf") document.getElementById('selecSoli').value="Solicitud de una videoconferencia o videollamada";
                else if(location.hash=="#/") document.getElementById('selecSoli').value="";                                                
            }
                
            function mostrarP(){                     			
                var pag=document.getElementById('selecSoli').value;                
                if(pag=='Registro de un nuevo equipo a la red') location.href="#registro";                
                else if(pag=='Permisos especiales de navegacion  o solicitud de IP publica') location.href="#permisos";                
                else if(pag=='Instalacion de un punto de red') location.href="#puntoRed";                
				else if(pag=='Solicitud de una videoconferencia o videollamada') location.href="#videoConf";                
            //    else location.href="#";                
            }             
            function compTab(){
                if(tipoD.value=="Tableta"){                    
                    conC.disabled=true;                    
                    conI.checked=true;
                }
                else{
                    conC.disabled=false;                    
                    conC.checked=true;
                }
            }
            function mostDep(nombDep){           
                codDep=document.getElementById('depen').value;                
                codDep=codDep-10001;
                nombDep.value=availableTagsDep[codDep];
            }            

            $(document).ready(function(){
                $(".button-collapse").sideNav();    
                $('select').material_select();
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15 // Creates a dropdown of 15 years to control year
                  });
                $('textarea#observ').characterCounter();                

            })
            function ayudaDep(){                
              var $toastContent = $('<a style="color:red"; target="_blank" href="../docs/dependencias.pdf">Click para mirar los codigos de Dependencias</a>');
              Materialize.toast($toastContent, 3000,'rounded');
            } 
            function ayudaMAC(){                
              var $toastContent = $('<a style="color:red"; target="_blank" href="../docs/manualMAC.pdf">Click para mirar como obtener mac</a>');
              Materialize.toast($toastContent, 3000,'rounded');
            } 
            function ayudaIP(){                
              var $toastContent = $('<a style="color:red"; target="_blank" href="..//docs/manualIP.pdf">Click para mirar como obtener ip</a>');
              Materialize.toast($toastContent, 3000,'rounded');
            }                 
                          