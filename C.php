<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>


<body>




    <div class="container">

        <?php include("cabecera.inc"); ?>

        <div class="text-center border border-top-5  mb-4">

            <h1>Lenguaje de programación <span class="badge badge-secondary">JAVA</span></h1>

            <img src="./img/javaII.png" class="rounded my-4" alt="...">

            <section class="mr-4 ml-4">

                <p class="text-justify"> El desarrollo inicial de C se llevó a cabo en los Laboratorios Bell entre 1969 y 1973; según Dennis Ritchie, el periodo más creativo tuvo lugar en 1972. Se le dio el nombre "C" porque muchas de sus características fueron tomadas de un lenguaje anterior llamado "B".</p>

                <p class="text-justify">En 1973, el lenguaje C se había vuelto tan potente que la mayor parte del kernel Unix, originalmente escrito en el lenguaje ensamblador PDP-11/20, fue reescrita en C. Éste fue uno de los primeros núcleos de sistema operativo implementados en un lenguaje distinto al ensamblador. (Algunos casos anteriores son el sistema Multics, escrito en PL/I, y Master Control Program para el B5000 de Burroughs, escrito en ALGOL en 1961).

                <p class="text-justify">En 1978, Ritchie y Brian Kernighan publicaron la primera edición de El lenguaje de programación C, también conocido como La biblia de C. Este libro fue durante años la especificación informal del lenguaje. El lenguaje descrito en este libro recibe habitualmente el nombre de "el C de Kernighan y Ritchie" o simplemente C" (La segunda edición del libro cubre el estándar ANSI C, descrito más abajo).</p>

                <p class="text-justify">El C de Kernighan y Ritchie es el subconjunto más básico del lenguaje que un compilador debe de soportar. Durante muchos años, incluso tras la introducción del ANSI C, fue considerado "el mínimo común denominador" en el que los programadores debían programar cuando deseaban que sus programas fueran transportables, pues no todos los compiladores soportaban completamente ANSI, y el código razonablemente bien escrito en C es también código ANSI C válido..</p>

                <p class="text-justify">En las primeras versiones del lenguaje, la definición de funciones se hacía mediante un 'prototipo de función' (function prototype), el cual indicaba al compilador el tipo de retorno de la función. Aunque este método tiene una gran desventaja respecto al nuevo, debido a que no comprueba el número ni el tipo en la lista de argumentos; en otras palabras, es mucho más fácil cometer errores al hacer una llamada a una función con argumentos incorrectos.</p>


            </section>



            <div class="row mt-4 mb-4" style="justify-content: space-around">
                <div class="card" style="width: 30rem;">
                    <iframe width="480" height="260" src="https://www.youtube.com/embed/5O1srQNyJXo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    

                </div>
                <div class="card" style="width: 30rem;">
                    <iframe width="480" height="260" src="https://www.youtube.com/embed/int4u1p_Bj4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

            </div>
        </div>

        <div>

            <footer class="text-center">

                <?php include("footer.inc"); ?>

            </footer>

        </div>
    </div>

</body>

</html>
