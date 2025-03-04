<div class="agregar">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round"
        stroke-linejoin="round" width="24" height="24" stroke-width="2">
        <path d="M9 12h6"></path>
        <path d="M12 9v6"></path>
        <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z"></path>
    </svg>
    <a href="/programa/new">Crear nuevo programa</a>
</div>
<div class="data-container">

    <?php
    if (isset($programas) && is_array($programas)) {
        foreach ($programas as $key => $value) {
            echo "<div class='record'>
                        <span>$value->id - $value->nombre - $value->codigo - $value->fkidCentroFormacion </span>
                        <div class='buttons'>
                            <a href='/programa/view/$value->id' class='button'>Consultar</a>
                            <a href='/programa/edit/$value->id' class='button'>Editar</a>
                            <a href='/programa/delete/$value->id' class='button'>Eliminar</a>
                        </div>

                        </div>";

        }
    }
    ?>

</div>