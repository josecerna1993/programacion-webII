<?php
include_once("../components/header.php");

?>

<main>
    <section>
        <div class="fieldset">
<?php

$nombre;
$apellido;
$dni;
$cel;
$cod_area;
$asunto;
$marca;
$consulta;
$div_dni;
$div_cel;



if(isset($_POST['dni']) and isset($_POST['cel']))
{
    $dni=$_POST['dni'];
    $cel=$_POST['cel'];
    $div_dni=strlen(strval($dni));
    $div_cel=strlen(strval($cel));
    
    if($div_dni==8 and $div_cel>=6)
    {
        print "<div>";
        
        if(isset($_POST['nombre']))
        {
            $nombre=$_POST['nombre'];
        }
        if(isset($_POST['apellido']))
        {
            $apellido=$_POST['apellido'];
        }
        if(isset($_POST['cod']))
        {
            $cod_area=$_POST['cod'];
        }
        if(isset($_POST['asunto']))
        {
            $asunto=$_POST['asunto'];
        }
        if(isset($_POST['marca']))
        {
            $marca=$_POST['marca'];
        }
        if(isset($_POST['consulta']))
        {
            $consulta=$_POST['consulta'];
        }
        /*var_dump($_FILES);*/
        $img=time().".png";
        $temporal=$_FILES['archivo']['tmp_name'];
        move_uploaded_file($temporal,"../archivos/$img");
        print"<p> Hola $nombre $apellido tu consulta fue cargado con exito</p>";
        print"<p> Te dejamos el resumen de los datos cargados</p>";
        print"<p> Nombre: $nombre $apellido</p>";
        print"<p> D.N.I: $dni </p>";
        print"<p> Celular: $cod_area - $cel </p>";
        print"<p> Asunto y Marca: $asunto - $marca </p>";
        print"<div class=consulta> Consulta: $consulta </div>";
        print"<div class=archivo_img><img src=../archivos/$img></div>";
        print "</div>";
    }
    
    else{
        header("Location:contacto.php?pass=no");
    }

}    

?>
        </div>
    </section>

</main>


<?php
include_once("../components/footer.php");

?>