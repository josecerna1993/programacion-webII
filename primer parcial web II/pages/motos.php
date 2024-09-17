<?php
include_once("../components/header.php");
?>

<main>
    
        <section>
            <div class="titulo_modelo">
                <br>
                <p>Elegí tu </p>
            </div>
            <div class=modelos>
            <?php
            
                $class2="nombre_contenido";
                $modelos=array("cubs","scooter","calle","enduro","naked");
                $modelos_href=array("../modelos/cubs.html","../modelos/scooter.html","../modelos/calle.html","../modelos/enduro.html","../modelos/naked.html");
                $modelos_src=array("../image/cubs.png","../image/scooter.webp","../image/calle.jpg","../image/enduro.webp","../image/naked.jpg");
                $modelos_alt=array("moto cubs moto rider","moto scooter moto rider","moto calle moto rider","moto enduro moto rider","moto naked moto rider");

                
                for($i=0;$i<5;$i++){
                    print "<div>";
                    print "<a href=$modelos_href[$i] alt=$self>
                    <img src= $modelos_src[$i] alt=$modelos_alt[$i]>";
                    print "<div class=$class2>$modelos[$i]</div></a>";
                    print "</div>";
                    
                }
                
            ?>    
            </div>
             
            </section>
    </main>
<?php
include_once("../components/footer.php");
?>    