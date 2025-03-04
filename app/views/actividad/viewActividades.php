<div class="data-container">

    <?php
    if (isset($actividades) && is_array($actividades)) {
        foreach ($actividades as $key => $value) {
            echo "<div class='record'>
                        <span>$value->id - $value->nombre - $value->descripcion </span>
                        <div class='buttons'>
                            <a href='/rol/view/$value->id' class='button'>Consultar</a>
                            <a href='/rol/edit/$value->id' class='button'>Editar</a>
                            <a href='/rol/delete/$value->id' class='button'>Eliminar</a>
                        </div>

                        </div>";

        }
    }
    ?>

</div>