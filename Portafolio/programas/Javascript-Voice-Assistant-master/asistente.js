

if (annyang) {

    //Variable para almacenar las voces de nuestro sistema.
    var voices;
charset='utf-8';
    //Inicializamos utter.
    var utter = new SpeechSynthesisUtterance();
    utter.rate = 1;
    utter.pitch = 0.5;
    utter.lang = 'es-LA';
    

    //Cargamos las voces que tenemos en nuestro sistema y las mostarmos en un arreglo por consola.
    window.speechSynthesis.onvoiceschanged = function () {
        voices = window.speechSynthesis.getVoices();
        console.log(voices);
    };

    //Definimos los comandos a utilizar.
    var commands = {
        'que es omega': function () {
            utter.text = 'Hola usuario, yo soy omega tu asistente virtual, yo te ayudare con abrir programas como word, power point y excel,  tambien puedo abrir paginas web como spotify, youtube y gmail, si quieres abrir alguna de estas solo di abre word o una pagina web';
            //Setea la voz que queremos usar en base a nuestra lista.
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
        },
        'omega': function () {
            utter.text = 'que puedo hacer por ti';
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
        },
        'como estas': function () {
            bienvenida=['Muy bien!, que puedo hacer por ti',
            'Muy bien, en que puedo ayudarte',
            'Excelente, necesitas algo?',
            'funcionando al 100%, que necesitas'];
            utter.text = bienvenida[Math.floor(Math.random() * bienvenida.length)];
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
        },
        'hola': function () {
            saludos=['Hola, cual es tu nombre?','hola, como te llamas?'];
            utter.text =saludos[Math.floor(Math.random() * saludos.length)] ;
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
            //Guarda el nombre que le decimos por voz.
            annyang.addCallback('result', function (phrases) {
                //Imprime el nombre por consola.
                console.log("Nombre: ", phrases[0]);
                //Para el evento result.
                annyang.removeCallback('result');
                //Nos dice hola + el nombre que le digamos por voz.
                utter.text = 'Hola, ' + phrases[0] + ' Que puedo hacer por ti';
                window.speechSynthesis.speak(utter);
            });
        },
        'musica': function () {
            musica=['hola, que quieres escuchar?','que quieres escuchar hoy',
            'Que escucharemos el dia de hoy'];
            utter.text =musica[Math.floor(Math.random() * musica.length)] ;
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
            //Guarda el nombre que le decimos por voz.
            annyang.addCallback('result', function (phrases) {
                //Imprime el nombre por consola.
                console.log("buscando ", phrases[0]);
                //Para el evento result.
                annyang.removeCallback('result');
                //Nos dice hola + el nombre que le digamos por voz.
                var a="https://open.spotify.com/search/"+ phrases[0];
                utter.text = 'busqueda completa ' ;
                window.speechSynthesis.speak(utter);
                window.open(a);
            });
            
           
        },        
        'spotify': function () {
            utter.text = 'abriendo spotify';
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
            window.open("https://open.spotify.com/");
        },
        'mis canciones': function () {
            utter.text = 'abriendo tu colección de canciones';
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
            
            window.open("https://open.spotify.com/collection/tracks");
            
        },
        'gmail': function () {
            utter.text = 'abriendo gmail';
            utter.voice = voices[20];
            window.speechSynthesis.speak(utter);
            
            window.open("https://mail.google.com/mail/u/0/#inbox");
            
        },
        'nuevo': function () {
            utter.text = 'abriendo gmail';
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
            
            window.open("https://mail.google.com/mail/u/0/#inbox?compose=new");
            
        },
        'documento': function () {
            utter.text = 'abriendo word';
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
           window.open("https://www.office.com/launch/word?auth=2");
           
            
        },
        'power point': function () {
            utter.text = 'abriendo power point';
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
           window.open("https://www.office.com/launch/powerpoint?auth=2");
           
            
        },
        'excel': function () {
            utter.text = 'abriendo excel';
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
           window.open("https://www.office.com/launch/excel?auth=2");
           
            
        },
        'gracias': function () {
            utter.text = 'De nada';
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
         
           
            
        },
        'youtube': function () {
            utter.text = 'abriendo youtube';
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
            
            window.open("https://www.youtube.com/");
            
        },
        'busca en youtube': function () {
            musica=['hola, que quieres ver','que quieres escuchar hoy',
            'Que veremos el día de hoy'];
            utter.text =musica[Math.floor(Math.random() * musica.length)] ;
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
            //Guarda el nombre que le decimos por voz.
            annyang.addCallback('result', function (phrases) {
                //Imprime el nombre por consola.
                console.log("buscando ", phrases[0]);
                //Para el evento result.
                annyang.removeCallback('result');
                //Nos dice hola + el nombre que le digamos por voz.
                var a="https://www.youtube.com/results?search_query="+ phrases[0];
                utter.text = 'busqueda completa ' ;
                window.speechSynthesis.speak(utter);
                window.open(a);
            });
        },
        'busca en google': function () {
            musica=['hola, que necesitas?','que quieres buscar hoy',
            'Que puedo buscar por ti?'];
            utter.text =musica[Math.floor(Math.random() * musica.length)] ;
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
            //Guarda el nombre que le decimos por voz.
            annyang.addCallback('result', function (phrases) {
                //Imprime el nombre por consola.
                console.log("buscando ", phrases[0]);
                //Para el evento result.
                annyang.removeCallback('result');
                //Nos dice hola + el nombre que le digamos por voz.
                var a="https://www.google.com/search?q="+ phrases[0];
                utter.text = 'busqueda completa ' ;
                window.speechSynthesis.speak(utter);
                window.open(a);
            });
        },
        'musica indie': function () {
            utter.text = 'abriendo distrito indie';
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
            
            window.open("https://open.spotify.com/playlist/37i9dQZF1DX68kWwWBDPYS");
            
        },
        'que hora es': function () {
            var hoy= new Date();
            var fecha =hoy.getDate()+ '_'+(hoy.getMonth+1)+'_'+ hoy.getFullYear();
            var horas= hoy.getHours() + ':'+ hoy.getMinutes()+':'+ hoy.getSeconds();
            var fechayhora= horas;
             utter.text = 'Son las  ' + horas;
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
            
        },
        'alarma': function () {
            var hoy= new Date();
            var fecha =hoy.getDate()+ '_'+(hoy.getMonth+1)+'_'+ hoy.getFullYear();
            var horas= hoy.getHours() + ':'+ hoy.getMinutes()+':'+ hoy.getSeconds();
            var fechayhora= horas;
             utter.text = 'Son las  ' + horas;
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
            annyang.addCallback('result', function (phrases) {
                //Imprime el nombre por consola.
                console.log("buscandoalarma puesta a las ", phrases[0]);
                //Nos dice hola + el nombre que le digamos por voz.
                if (horas==phrases[0]){
                    play("safe-and-sound.mp3");


                }
            });
            
        },
        'que dia es hoy': function () {
            var hoy= new Date();
            var fecha =hoy.getDate()+ '/'+hoy.getMonth()+'/'+ hoy.getFullYear();
            var horas= hoy.getHours() + ':'+ hoy.getMinutes()+':'+ hoy.getSeconds();
            var fechayhora= horas;
             utter.text = 'la fecha es' + fecha;
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
            
        },
        //Array que devuelve aleatoriamente un elemento del array, en este caso un chiste.
        'cuentame un chiste': function () {
            chistes = ['Por qué las focas del circo miran siempre hacia arriba?   Porque es donde están los focos.',
                'Estas obsesionado con la comida!   No se a que te refieres croquetamente.',
                'Por que estás hablando con esas zapatillas?   Porque pone "converse"',
                'Buenos dias, me gustaria alquilar "Batman Forever".   No es posible, tiene que devolverla tomorrow.',
                '¿Sabes que mi hermano anda en bicicleta desde los cuatro años ¡Pues ya debe de estar lejísimos!'
            ];
            utter.text = chistes[Math.floor(Math.random() * chistes.length)]
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
        },
        'poema': function () {
            chistes = ['No hay que ir para atrás ni para darse impulso (Lao Tsé)',
                'No hay caminos para la paz; la paz es el camino (Mahatma Gandhi)',
                'Haz el amor y no la guerra (John Lennon)',
                'Las guerras seguirán mientras el color de la piel siga siendo más importante que el de los ojos (Bob Marley)',
                'Aprende a vivir y sabrás morir bien (Confucio)',
                'Cada día sabemos más y entendemos menos (Albert Einstein)',
                'La medida del amor es amar sin medida (San Agustín)'];
            utter.text = chistes[Math.floor(Math.random() * chistes.length)]
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
        },

        'cuentame algo': function () {
            chistes = [
                'Buenos dias, me gustaria alquilar "Batman Forever".   No es posible, tiene que devolverla tomorrow.',
                '¿Sabes que mi hermano anda en bicicleta desde los cuatro años ¡Pues ya debe de estar lejísimos!'
            ];
            utter.text = chistes[Math.floor(Math.random() * chistes.length)]
            utter.voice = voices[1];
            window.speechSynthesis.speak(utter);
        }
    }; 

    //Esto nos sirve para ver que escucha el programa en tiempo real.
    /*
    annyang.addCallback('result', function(phrases) {
      console.log("I think the user said: ", phrases[0]);
      console.log("But then again, it could be any of the following: ", phrases);
       });
       */


    //Sumamos todos los comandos a annyang.
    annyang.addCommands(commands);

    //Annyang comienza a escuchar.
    annyang.start({ autoRestart: false, continuous: true });
}