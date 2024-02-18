<!-- This is the path of the file where this code is located -->

<div class="container mt-5">
    <!-- This div contains the main container of the page -->

    <h2>Eliminar detalles de usuario</h2>
    <!-- This is a heading that indicates the purpose of the form -->

    <form action="../../controladores/controlador_eventos_competiciones.php" method="POST">
        <!-- This is a form that submits data to the specified PHP file using the POST method -->

        <div class="mb-3">
            <!-- This div contains a form group -->

            <label for="id_usuario" class="form-label">ID Usuario</label>
            <!-- This is a label for the input field -->

            <input type="number" class="form-control" id="id_usuario" name="id_usuario" required>
            <!-- This is an input field where the user can enter the ID of the user to be deleted -->

            <input type="hidden" name="accion" value="eliminar">
            <!-- This is a hidden input field that specifies the action to be performed by the PHP file -->

        </div>

        <button type="submit" class="btn btn-danger">Eliminar detalle de usuario</button>
        <!-- This is a submit button that triggers the form submission -->

    </form>
</div>