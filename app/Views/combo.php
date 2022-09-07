
    <STyle>
        .CONTAINERHOLA {
            border: 2px red solid;

        }

        .panel-header {
            border: 2px greenyellow solid;

        }

        .page-inner {
            border: 2px greenyellow solid;

        }
    </STyle>

    <div class="container CONTAINERHOLA">

        <h2>Llenar un select a partir de otro select con jquery y php</h2>

        <label>SELECT 1 (Continentes)</label>
        <div class="form-group">
        <select id="lista1" name="lista1">
            <option value="0">Selecciona una opcion</option>
            <?php foreach ($categoria as $categorias) : ?>
                <option value="<?= $categorias['ID_CATEGORIA']; ?>"><?= $categorias['NOMBRE_CATEGORIA']; ?></option>
            <?php endforeach; ?>
        </select>
        </div>
        <br>
    
        <div id="select2lista"></div>
        </div>
    </div>




