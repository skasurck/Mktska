
    /**
     * Array con las imagenes y enlaces que se iran mostrando en la web
     */
    var imagenes=new Array(
        ['img/header2.jpg'],
        ['img/header3.jpg'],
        ['img/headess.jpg'],
        ['img/marketing1.jpg']
    );

    /**
     * Funcion para cambiar la imagen
     */
    function rotarImagenes()
    {
        // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
        var index=Math.floor((Math.random()*imagenes.length));

        // cambiamos la imagen
       var objeto= document.getElementById("img-header");
       objeto.style.background="url("+imagenes[index]+");";
    }

    /**
     * Función que se ejecuta una vez cargada la página
     */
    function cargarhead()
    {
        // Cargamos una imagen aleatoria
        rotarImagenes();

        // Indicamos que cada 5 segundos cambie la imagen
        setInterval(rotarImagenes,1000);
    }


