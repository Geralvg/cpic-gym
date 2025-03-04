
<div class="data-container">
    <form action="/programa/create" method="post">
        <div class="form-group">
            <label for="txtCodigo">Codigo</label>
            <input type="text" name="txtCodigo" id="txtCodigo">
        </div>
        <div class="form-group">
            <label for="txtNombre">Nombre</label>
            <input type="text" name="txtNombre" id="txtNombre">
        </div>
        <div class="form-group">
            <label for="txtCentro">Centro</label>
            <select name="txtCentro" class="w-full p-2 border rounded-l-lg">

            <option value="">Seleccione un centro</option>
                    <?php
                    foreach ($centroFormacion as $key => $value) {
                        echo "<option value='$value->id'>$value->nombre</option>";
                    }
                    ?>
                </select>
        </div>

        <div class="form-group">
            <button type="submit">Crear</button>
        </div>
    </form>
</div>