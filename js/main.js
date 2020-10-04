(function() {
    "use strict";

    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM y js cargados!');

        //Se debe indicar el id del div donde se debe cargar el mapa
        //luego en set view y lmarker se indican las coordenadas del lugar que se requiere apuntar
        //luego de la coma despues de las coordenadas del setview se indica el nivel de zoom en este caso 16
        var map = L.map('mapa').setView([-34.172466, -70.741155], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        //Para cambiar el texto del popup se debe cambiar el texto dentro del bindpopup
        L.marker([-34.172466, -70.741155]).addTo(map)
            .bindPopup('STGO Web Camp <br> en Rancagua')
            .openPopup()
            .bindTooltip('-34.172466, -70.741155')
            .openTooltip();

        //Campos usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //Campos paquetes
        var pase_dia = document.getElementById('pase_dia');
        var pase_completo = document.getElementById('pase_completo');
        var pase_dos_dias = document.getElementById('pase_dos_dias');

        //Botones
        var calcular = document.getElementById('calcular');

        //div
        var errorDiv = document.getElementById('error');
        var lista_productos = document.getElementById('lista_productos');
        var suma_total = document.getElementById('suma_total');
        var btnRegistro = document.getElementById('btnRegistro');

        //extras
        var etiquetas = document.getElementById('etiquetas');
        var camisa_evento = document.getElementById('camisa_evento');

        //para recibir un evento se utiliza el metodo addEventListener el cual recibe como parametros
        //el evento que tiene que "escuchar" y que la accion que tiene que realizar al recibir el evento
        //en este caso queremos que escuche cuando el usuario haga click en calcular 
        //cuando el usuario haga click en calcular queremos que se ejecute calcularMontos
        //la funcion de calcularMontos que hemos creado recibe de forma automatica el evento como parametro
        //esto ya que se encuentra dentro de un evento por lo que no es necesario poner entre parentesis al final
        calcular.addEventListener('click', calcularMontos);

        pase_dia.addEventListener('blur', mostrarDias);
        pase_dos_dias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        nombre.addEventListener('blur', validarCampo);
        apellido.addEventListener('blur', validarCampo);
        email.addEventListener('blur', validarCampo);

        function validarCampo() {
            if (this.value == '') {
                errorDiv.style.display = 'block';
                errorDiv.style.color = 'red';
                errorDiv.innerHTML = "*Este campo es obligatorio";
                this.focus();
            } else {
                errorDiv.style.display = 'none';
            }
        }

        function calcularMontos(event) {
            event.preventDefault();
            if (regalo.value === '') {
                alert("Debes elegir un regalo");
                regalo.focus();
            } else {
                //Se utiliza parse con decimales y se asigna el valor si el valor es nulo entonces se asigna 0
                var paseDia = parseInt(pase_dia.value, 10) || 0,
                    paseDosDias = parseInt(pase_dos_dias.value, 10) || 0,
                    paseCompleto = parseInt(pase_completo.value, 10) || 0,
                    cantCamisas = parseInt(camisa_evento.value, 10) || 0,
                    cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

                console.log(`Boletos por 1 día: ${paseDia}`);
                console.log(`Boletos por 2 día: ${paseDosDias}`);
                console.log(`Boletos por pase completo: ${paseCompleto}`);
                console.log(`Cantidad de camisas deseadas: ${cantCamisas}`);
                console.log(`Cantidad de etiquetas deseadas: ${cantEtiquetas}`);

                var totalPagar = (paseDia * 30) +
                    (paseDosDias * 45) +
                    (paseCompleto * 50) +
                    ((cantCamisas * 10) * 0.93) +
                    (cantEtiquetas * 2);
                console.log(totalPagar);

                var listadoProductos = [];
                if (paseDia > 0) {
                    listadoProductos.push(paseDia + ' - Pase por día (Viernes)');
                };
                if (paseDosDias > 0) {
                    listadoProductos.push(paseDosDias + ' - Pase por 2 días (Viernes y Sábado)');
                };
                if (paseCompleto > 0) {
                    listadoProductos.push(paseCompleto + ' - Pase por día (Viernes, Sábado y Domingo)');
                };
                if (cantCamisas > 0) {
                    listadoProductos.push(cantCamisas + ' - Camisa del evento');
                };
                if (cantEtiquetas > 0) {
                    listadoProductos.push(cantEtiquetas + ' - Paquete de etiquetas');
                };

                lista_productos.style.display = "block";
                lista_productos.innerHTML = '';
                for (var i = 0; i < listadoProductos.length; i++) {
                    lista_productos.innerHTML += listadoProductos[i] + '</br>';
                }

                suma_total.innerHTML = '';
                suma_total.innerHTML = `\$${totalPagar.toFixed(2)}`;

            }
        } //Function Calcular Montos

        function mostrarDias() {
            var pasesDia = parseInt(pase_dia.value, 10) || 0,
                pasesDosDias = parseInt(pase_dos_dias.value, 10) || 0,
                pasesCompletos = parseInt(pase_completo.value, 10) || 0;

            var diasElegidos = [];
            if (pasesDia > 0) {
                diasElegidos.push('viernes');
            }
            if (pasesDosDias > 0) {
                diasElegidos.push('viernes', 'sabado');
            }
            if (pasesCompletos > 0) {
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }

            for (var i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = 'block';
            }
        }

    }); //DOM Content Loaded
})(); //IIFE

$(function() {


    //Lettering titulo
    $('.nombre-sitio').lettering();

    $('.nombre-sitio span').on('mouseenter', function() {
        $(this).css('top', '-15px');
    })
    $('.nombre-sitio span').on('mouseleave', function() {
        $(this).css('top', '0');
    })

    $('p.slogan').on('mouseenter', function() {
        let windowWidth = $(window).width();
        if (windowWidth < 768) {
            $(this).css({
                'font-size': '28px',
                'text-shadow': '0 0 50px black'
            });
        } else {
            $(this).css({
                'font-size': '3vw',
                'text-shadow': '0 0 50px black'
            });
        }

    });

    $('.slogan').on('mouseleave', function() {
        let windowWidth = $(window).width();
        if (windowWidth < 768) {
            $(this).css({
                'font-size': '24px',
                'text-shadow': 'none'
            });
        } else {
            $(this).css({
                'font-size': '2vw',
                'text-shadow': 'none'
            });
        }

    });

    //Menu movil responsive
    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle(); //es un switch entre slide down y slide up
    });


    //menu barra fijo
    var windowHeight = $(window).height();
    console.log(windowHeight);

    var barraHeight = $('.barra').innerHeight();
    console.log(barraHeight);

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        console.log(scroll);
        if (scroll > windowHeight) {
            console.log('Ya pasaste la altura de la ventana');
            $('.barra').addClass('fixed');
            $('body').css({ 'margin-top': barraHeight + 'px' });
        } else {
            console.log('Aún no pasas la altura de la ventana');
            $('.barra').removeClass('fixed');
            $('body').css({ 'margin-top': '0px' });
        }
    })

    //Programa de conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('seleccionado');

    $('.menu-programa a').on('click', function() {

        $('.menu-programa a').removeClass('seleccionado');

        $(this).addClass('seleccionado');

        $('.ocultar').hide();

        var enlace = $(this).attr('href');

        $(enlace).fadeIn(1000);

        return false;
    });

    //Animación números
    $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 1200);
    $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 }, 2000);
    $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 }, 1000);
    $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9 }, 1800);

    //Cuenta regresiva de números 
    $('.cuenta-regresiva').countdown('2020/12/09 10:00', function(event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });



});