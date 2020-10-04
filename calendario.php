<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Calendario de eventos</h2>

    <?php 
        try {
            require_once('includes/funciones/db_connection.php');
            $sql = "SELECT A.`id_evento`, A.`nombre_evento`, A.`fecha_evento`, A.`hora_evento`, B.`tipo_categoria`, B.`icono_categoria`, C.`nombre_invitado`, C.`apellido_invitado` ";
            $sql .= " FROM `evento` AS A";
            $sql .= " INNER JOIN `categoria_evento` AS B";
            $sql .= " ON A.`id_categoria`=B.`id_categoria` ";
            $sql .= " INNER JOIN `invitado` AS C";
            $sql .= " ON A.`id_invitado`=C.`id_invitado` "; 
            $sql .= " ORDER BY A.`fecha_evento`, A.`hora_evento` ASC";
            $resultado =  $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    ?>

    <div class="calendario clearfix">
        <?php 
            $calendario = array();
            while($eventos = $resultado->fetch_assoc()){

                $fecha = $eventos['fecha_evento'];

                $evento = array(
                    'titulo' => $eventos['nombre_evento'],
                    'fecha' => $eventos['fecha_evento'],
                    'hora' => $eventos['hora_evento'],
                    'categoria' => $eventos['tipo_categoria'],
                    'icono' => 'fa' . " " . $eventos['icono_categoria'],
                    'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
                );
            
                $calendario[$fecha][] = $evento;
            } ?>
        
        <?php foreach($calendario as $dia => $lista_eventos){ ?>
            <div class="dia">
                <h3>
                <i class="fa fa-calendar"></i>
                <?php 
                //UNIX
                setlocale(LC_TIME, 'es_ES.UTF-8');
                //WINDOWS
                setlocale(LC_TIME, 'spanish.utf-8');

                echo strftime("[%d/%m/%Y] %A, %d de %B del %Y",strtotime($dia));
                ?>
                </h3>
                <?php foreach ($lista_eventos as $evento) {?>
                    <div class="info-evento">

                        <p class="titulo"><?php echo $evento['titulo']; ?></p>
                        <p class="hora">
                            <i class="fa fa-clock" aria-hidden="true"></i>
                            <?php echo strftime("%d/%m/%Y",strtotime($evento['fecha'])) . " a las " . $evento['hora'] . "hrs."; ?>
                        </p>
                        <p>
                            <i class="<?php echo $evento['icono']; ?>" aria-hidden="true"></i>
                            <?php echo $evento['categoria'];?>
                        </p>
                        <p>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <?php echo $evento['invitado'];?>
                        </p>
                    </div><!--info-evento-->
            
                    <?php } //cierre for each evento?>
            </div><!--.dia-->
        <?php } //cierre for each calendario ?>
    </div><!--.calendario-->
    <?php $conn->close(); ?>
</section>


<?php include_once 'includes/templates/site-footer.php'; ?>