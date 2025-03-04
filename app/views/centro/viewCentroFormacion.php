<div class="data-container">

    <?php
    if (isset($centros) && is_array($centros)) {
        foreach ($centros as $key => $value) {
            echo "<div class='record'>
                        <span>$value->id - $value->nombre </span>
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