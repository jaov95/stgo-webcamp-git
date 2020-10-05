<?php 
    try {
        require_once('includes/funciones/db_connection.php');
        $sql = "SELECT * FROM `invitado`";
        $resultado =  $conn->query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
?>

<section class="invitados seccion contenedor">
            <h2>Nuestros invitados</h2>
            <ul class="lista-invitados clearfix">
                <?php while($invitado = $resultado->fetch_assoc()){?>
                <li>
                    <div class="invitado">
                        <a class="contenido-invitado" href="#invitado<?php echo $invitado['id_invitado']; ?>">
                            <img src="img/<?php echo $invitado['url_imagen_invitado'];?>" alt="Imagen invitado">
                            <p><?php echo $invitado['nombre_invitado'] . " " . $invitado['apellido_invitado']; ?></p>
                        </a>
                    </div>
                </li>
                <div class="info-invitado ocultar">
                    <div class="contenido-invitado" id="invitado<?php echo $invitado['id_invitado']; ?>">
                        <h2><?php echo $invitado['nombre_invitado'] . " " . $invitado['apellido_invitado']; ?></h2>
                        <img src="img/<?php echo $invitado['url_imagen_invitado'];?>" alt="Imagen invitado">
                        <p>
                            <?php echo $invitado['descripcion_invitado']; ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </ul>
    <?php $conn->close(); ?>
</section>