<?php
include_once("../components/header.php");

?>

<main>
      
    <section>
        
        <form action="datos.php" method="post" enctype="multipart/form-data">
          
            <div class="fieldset">
                <fieldset>
                    <legend>Dejanos tu consulta</legend>
                        <div>
                            <label for="nombre">Nombres</label>
                            <input id="nombre" type="text" name="nombre" placeholder="nombre" required>
                        </div>
                        <div>
                            <label for="apellido">Apellidos</label>
                            <input id="apellido" type="text" name="apellido" placeholder="apellidos" required>
                        </div>  
                        <div>
                            <label for="dni">Documento</label>
                            <input id="dni" type="number" name="dni" placeholder="Documento" required>
                        </div>  
                        <div>
                            <label for="cod">Codigo de area</label>
                            <input id="cod" type="number" name="cod" placeholder="codigo de area" required>
                        </div>
                        <div>
                            <label for="cel">Telefono</label>
                            <input id="cel" type="number" name="cel" placeholder="sin codigo de area" required>
                        </div>
                        <div>
                            <label for="asunto">Asunto</label>
                            <select id="asunto" name="asunto">
                                <option disabled selected>Seleccionar</option>
                                <option value="comprar_moto">Comprar una moto</option>
                                <option value="cotizar_seguro">Cotizar seguro</option>
                                <option value="servicio_tecnico">Servicio Tecnico</option>
                                <option value="repuestos">Repuestos</option>
                            </select>
                        </div>  
                        <div>
                            <label for="marca">Marca</label>
                            <select id="marca" name="marca">
                                <option disabled selected>Seleccionar</option>
                                <option value="honda">Honda</option>
                                <option value="yamaha">Yamaha</option>
                                <option value="bajaj">Bajaj</option>
                                <option value="ktm">KTM</option>
                            </select>
                        </div>  
                        <div class="textarea">
                            <label for="consulta">Escriba su consulta</label>
                            <textarea id="consulta" name="consulta" cols="15" rows="10" placeholder="Escribir consulta..."></textarea>
                        </div>
                
                       <div class="archivos">
                        <label for="archivo">Subir imagen</label>
                        <input id="archivo" type="file" name="archivo" accept="image.jpg">
                       </div>
                       <div class="enviar">
                        <input type="submit">
                       </div>
                       <?php
        if(isset($_GET['pass'])) 
        {
            print"<p id=no>Datos ingresados son incorrectos</p>";
        }
        ?>
                </fieldset>    
            </div>    
    </section>
    <section>
            <div class="titulo_sucursales">
                <p>Sucursales</p>
            </div>
            <div class="mapa">
                <div class="sucursal">
                    <div class="contener-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.6206280394276!2d-58.43313192447707!3d-34.58846465669236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb588eeb4bf7d%3A0x9e279345ef751673!2sHonduras%205051%2C%20C1414%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1718910998431!5m2!1ses-419!2sar"></iframe>
                            <div class="nombre_sucursal">Palermo</div>
                            <div class="nombre_sucursal">Honduras 5051</div>
                    </div>
                </div>
                <div class="sucursal">
                    <div class="contener-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.279640008837!2d-58.44899232447544!3d-34.622372958483204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca3bdc22efdb%3A0x6bc515afd4209dc2!2sAv.%20Rivadavia%205745%2C%20C1406GLA%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1718911415605!5m2!1ses-419!2sar"></iframe>
                        <div class="nombre_sucursal">Caballito</div>
                        <div class="nombre_sucursal">Rivadavia 5745</div>
                    </div>
                    
                </div>
                <div class="sucursal">
                    <div class="contener-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.6563182067484!2d-58.388756018107735!3d-34.612851188218755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccada1baed0e5%3A0xa10a2022d01cc504!2sAv.%20Belgrano%201245%2C%20C1093AAA%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1718911575321!5m2!1ses-419!2sar"></iframe>
                        <div class="nombre_sucursal">Microcentro</div>
                        <div class="nombre_sucursal">Rivadavia 5745</div>
                    </div>
                    
                </div>
        
            </div>
            
        </section>
        <section>
            <div class="casa_central">
                CASA CENTRAL: Av. Rivadavia 5745 CABA
            </div>
            <div class="cel">54 9 11-6372-9279</div>
            <div class="mail">info@motorider.com</div>
        </section>
</main>    

<?php
include_once("../components/footer.php");

?>