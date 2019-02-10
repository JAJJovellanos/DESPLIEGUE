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

        <?php include("cabecera.inc")?>



        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Última actualización: 01/07/2017</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>





        <div class="text-center border border-top-5">

            <h1>Lenguajes programación <span class="badge badge-secondary">Top 5</span></h1>

            <img src="./img/1228490_9cb9.jpg" class="rounded my-4" alt="...">


            <section class="mr-4 ml-4">

                <p class="text-justify text-indent:-2em"> Los 5 lenguajes de programación más populares de la actualidad son: Java, C, C++, Pyhton y C#. Así lo asegura el <a href="https://en.wikipedia.org/wiki/TIOBE_index" class="badge badge-info">Índice TIOBE</a> en su última actualización de junio 2017. La novedad es que el lenguaje de programación Kotlin salta a los 50 más populares. Probablemente te preguntes qué se supone que debas interpretar por lenguaje de programación "más popular". A continuación, te explicamos.</p>

                <p class="text-justify">El Índice TIOBEes un índice elaborado por una empresa de software holandesa que se especializa en la evaluación y seguimiento de la calidad de los programas informáticos. Actualmente, la Infoempresa revisa en tiempo real más de 300 millones de códigos de diversos programas informáticos por día actualizando mes a mes su índice.</p>

                <p class="text-justify">El Índice TIOBE se elabora a partir de diversas variables, como por ejemplo, el número de ingenieros cualificados en determinado lenguaje, las búsquedas que hacen los usuarios a través de los buscadores solicitando información de los distintos lenguajes de programación, la demanda de cursos o los lenguajes que están siendo más utilizados.</p>

                <p class="text-justify">El índice no dice cuál es el mejor o en qué lenguaje de programación se escribió la mayor cantidad de líneas de código. Más bien sirve para que un programador pueda determinar si sus conocimientos en un determinado lenguaje han quedado obsoletos, o si por el contrario sus conocimientos están vigentes.</p>

                <p class="text-justify">También puede ser de utilidad si tienes que tomar una decisión estratégica respecto a qué lenguaje debes utilizar para la construcción de determinado software. Los datos que veremos a continuación corresponden al mes de junio de 2017.</p>

            </section>
        </div>


        <ul class="list-unstyled my-4">

            <li class="media my-4 border border-5 my-4">
                <img src="./img/javaII.png" class="mr-3" alt="java">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">JAVA</h5>
                    Java es un lenguaje de programación de propósito general, concurrente, orientado a objetos, que fue diseñado específicamente para tener tan pocas dependencias de implementación como fuera posible. Su intención es... <a href="java.php">Leer más</a>
                </div>
            </li>
            <li class="media my-4 border border-5 my-4">
                <img src="./img/lenguaje-programacion-c.png" class="mr-3" alt="c">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">C</h5>
                    Al igual que B, es un lenguaje orientado a la implementación de Sistemas operativos, concretamente Unix. C es apreciado por la eficiencia del código que produce y es el lenguaje de programación más popular para... <a href="C.php">Leer más</a>
                </div>
            </li>
            <li class="media my-4 border border-5 my-4">
                <img src="./img/logo-c-plus-plus.png" class="mr-3" alt="C+">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">C++</h5>
                    C++ es un lenguaje de programación diseñado en 1979 por Bjarne Stroustrup. La intención de su creación fue extender al lenguaje de programación C mecanismos que permiten la manipulación de objetos. En ese sentido...<a href="#">Leer más</a>
                </div>
            </li>
        </ul>

        <footer class="text-center">

            <?php include("footer.inc"); ?>

        </footer>

    </div>


</body>

</html>
<link rel="stylesheet" href="">
