<!-- Inicio del contenedor -->
<div class="container mt-5">
    <!-- Título -->
    <h2>Eliminar usuario</h2>
    <!-- Formulario para eliminar usuario -->
    <form action="../../controladores/usuario_controlador.php" method="POST" class="form">
        <!-- Campo para ingresar el nombre del usuario a eliminar -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del usuario a eliminar</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            <!-- Campo oculto para indicar la acción a realizar en el controlador -->
            <input type="hidden" id="accion" name="accion" value="eliminar_usuario">
        </div>
        <!-- Botón para enviar el formulario y eliminar el usuario -->
        <button type="submit" class="btn btn-danger">Eliminar usuario</button>
    </form>
</div>
<!-- Fin del contenedor -->
