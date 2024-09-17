<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moto Rider</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <header>
    <nav>
            <div class="menu">
                <ul class="menu-principal">
                    <li>
                        <img src="../image/menu.png"  alt="simbolo menu hamburguesa">
                        <span>Menú</span>
                        <?php
                        $menu=array();
                        $menu['Inicio']="../pages/home.php";
                        $menu['Motos']="../pages/motos.php";
                        $menu['Servicio Tecnico']="../pages/servicio_tecnico.php";
                        $menu['Contacto']="../pages/contacto.php";
                        print "<ul class=submenu>";
                            foreach($menu as $key => $value){
                                print "<li><a href=$value target=_self>$key</a></li>";
                            }
                        print "</ul>"
                        ?>
                    </li>
                </ul>
            </div>
            <div class="logoprincipal">
                <a href="../index.php" target="_self"><img src="../image/logo_moto_ride.png" alt="Logo de moto rider"></a>
            </div>

            <div class="redessociales">
                <?php
                $blank="_blank";
                $redes=array("https://www.facebook.com/?locale=es_LA","https://x.com/?lang=es","https://www.instagram.com/");
                $imagenes=array("../image/facebook.png","../image/twitter.png","../image/instagram.png");
                for($i=0;$i<3;$i++){
                    print "<a href=$redes[$i] target=$blank><img src=$imagenes[$i]></a>";
                }
                
                ?>
            
            </div>
            
            <div>
            <div class="whatsapp">
                <div class="whatsapp_logo">
                 <a href="https://wa.me/5491163729279?text=Hola%20queria%20saber%informacion%20del%20modelo:" target="_blank">
                  <img src="../image/logo_whatsApp.png" alt="logo de whatsapp moto rider">
                 </a>
                </div> 
                 <div class="escribenos">Contactanos</div>
            </div>
            
            </div> 
        </nav>
    </header>