<div class="container2">
<div class="btn-new">
        <a href="/actividad/new" class="a-new">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" width="35" height="35"
                stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor">
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                <path d="M9 12h6"></path>
                <path d="M12 9v6"></path>
            </svg>
            <span>Crear Actividad</span>
        </a>
    </div>
    <div class="data-container">
        <?php
        if (isset($actividades) && is_array($actividades)) {
            foreach ($actividades as $key => $value) {
                echo "<div class='record'>
                <span>$value->id - $value->nombre - $value->descripcion  </span>
                    <div class='buttons'>
                        <div class='buttons'>
                                    <a href='/actividad/view/$value->id'>consultar</a>
                                    <a href='/actividad/edit/$value->id'>editar</a>
                                    <a href='/actividad/delete/$value->id'>eliminar</a>
                                </div>
                    </div>
                </div>";
            }
        }
        ?>
    </div>
</div>