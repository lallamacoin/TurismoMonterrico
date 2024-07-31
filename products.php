<!DOCTYPE html>
<?php include 'cabecera.php'; ?>

<?php 
        function mostrarderecha($titulouno, $titulodos, $rutaimagen, $textodescritivo) 
        {
            echo '
            <section class="page-section">
                    <div class="container">
                        <div class="product-item">
                            <div class="product-item-title d-flex">
                                <div class="bg-faded p-5 d-flex ms-auto rounded">
                                    <h2 class="section-heading mb-0">
                                        <span class="section-heading-upper">'.$titulouno.'</span>
                                        <span class="section-heading-lower">'.$titulodos.'</span>
                                    </h2>
                                </div>
                            </div>
                            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="'.$rutaimagen.'" alt="..." />
                            <div class="product-item-description d-flex me-auto">
                                <div class="bg-faded p-5 rounded"><p class="mb-0">'.$textodescritivo.'</p></div>
                            </div>
                        </div>
                    </div>
                </section>
            
            
            ';

        } 

        function mostrarizquierda($titulouno, $titulodos, $rutaimagen, $textodescritivo) 
        {
            echo '
            <section class="page-section">
                    <div class="container">
                        <div class="product-item">
                            <div class="product-item-title d-flex">
                                <div class="bg-faded p-5 d-flex me-auto rounded">
                                    <h2 class="section-heading mb-0">
                                        <span class="section-heading-upper">'.$titulouno.'</span>
                                        <span class="section-heading-lower">'.$titulodos.'</span>
                                    </h2>
                                </div>
                            </div>
                            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="'.$rutaimagen.'" alt="..." />
                            <div class="product-item-description d-flex ms-auto">
                                <div class="bg-faded p-5 rounded"><p class="mb-0">'.$textodescritivo.'</p></div>
                            </div>
                        </div>
                    </div>
                </section>
            
            
            ';

        }

?>
        <?php 
        mostrarderecha("Alojamiento", "Casonas Antiguas","assets/img/products-01.jpg","Casonas de principio del siglo XX, donde podrá experimentar lo que vivieron nuestros fundadores" );
        mostrarizquierda("turimo religioso","Fiestas Patronales","assets/img/products-02.jpg","La fiesta patronal mas grande de la provincia, donde lo antiguo se une a lo moderno, en un clima de fiesta inigualable" );
        mostrarderecha("Servicios", "Todas las Comodidades","assets/img/products-03.jpg","Holetes, cabañas, estaciones de servicios, tenemos todo para que su experiencia sea unica e inigualable" );
       ?>
        
<?php include 'pie.php'; ?>   

