<?php
include_once("../components/header.php");
?>

    <main>
        <section>
            <div class="inicio">
                <img src="../image/moto-rider.webp" alt="moto rider en montaña">
            </div>
            <div class="refran">
                <h1>Moto rider</h1><hr>
                <p>uniendo destinos sobre dos ruedas</p>
            </div>
        </section>
        <section>
            <div class="titulo_modelo">
                <p>Elegí tu </p>
            </div>
            <div class=modelos>
            <?php
            
                $class2="nombre_contenido";
                $modelos=array("cubs","scooter","calle","enduro","naked");
                $modelos_href=array("../pages/cubs.php","../pages/scooter.php","../pages/calle.php","../pages/enduro.php","../pages/naked.php");
                $modelos_src=array("../image/cubs.png","../image/scooter.webp","../image/calle.jpg","../image/enduro.webp","../image/naked.jpg");
                $modelos_alt=array("moto cubs moto rider","moto scooter moto rider","moto calle moto rider","moto enduro moto rider","moto naked moto rider");

                
                for($i=0;$i<5;$i++){
                    print "<div>";
                    print "<a href=$modelos_href[$i] alt=_self>
                    <img src= $modelos_src[$i] alt=$modelos_alt[$i]>";
                    print "<div class=$class2>$modelos[$i]</div></a>";
                    print "</div>";
                    
                }
                
            ?>    
            </div>
             
            </section>
        
        <section>
            <div class="titulo_ubicacion">
                <p>En donde nos </p>
            </div>
            <div class="contenido">
                <div class="subcontenido">
                  <a href="../pages/contacto.php" target="_black">
                    <img src="../image/ubicacion_moto_rider.jpeg" alt="ubicacion moto rider">
                  </a>
                <div class="nombre_subcontenido">sucursales</div>
                </div> 
            </div>
        </section>
       
    </main>
<?php
include_once("../components/footer.php");
?>    