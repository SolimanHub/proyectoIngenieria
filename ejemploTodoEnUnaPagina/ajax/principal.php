<?php
    echo '<!--Contenido Del Inventario-->

        <div class="col-lg-9 well" style="border: black 1px solid;">
            <!--Barra De Menu-->
            <ul class="menu">
                <li><img src="../img/maletin.png" style="height: 40px"></li>
                <li><input type="text" placeholder="Busqueda"></li>
                <li><a href=""><span class="glyphicon glyphicon-th"></span> Modo Simplificado</a></li>
                <li><a href="">Promos</a></li>
                <li><a href="">Contactos</a></li>
            </ul>
            <!--Fin De Barra De Menu-->

            <div class="portada">
                <div class="text">
                    <h1 style="color: rgb(0,0,0);">Laboratorio Clinico Emanuel</h1>
                    <!--Carrusel-->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img class="first-slide" src="../img/promo1.jpg" alt="First slide">
                                    <div class="container">
                                    <div class="carousel-caption">
                                    
                                    </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="second-slide" src="../img/promo2.jpg" alt="Second slide">
                                    <div class="container">
                                    <div class="carousel-caption">
                                    </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="third-slide" src="../img/promo3.jpg" alt="Third slide">
                                    <div class="container">
                                    <div class="carousel-caption">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                    <!--Fin Carrusel-->	

                </div>				
            </div>
        </div>';
?>