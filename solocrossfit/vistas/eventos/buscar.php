<!-- Inicio del contenedor -->
<div class="container mt-5">
    <!-- Título de la sección -->
    <h2>Buscar detalles de usuario</h2>
    <!-- Formulario para buscar detalles de usuario -->
    <form action="../../controladores/controlador_eventos_competiciones.php" method="POST">
        <!-- Campo para ingresar el ID del usuario -->
        <div class="mb-3">
            <label for="id_usuario" class="form-label">ID Usuario</label>
            <input type="number" class="form-control" id="id_usuario" name="id_usuario" required>
            <!-- Campo oculto para indicar la acción a realizar -->
            <input type="hidden" name="accion" value="buscar_detalle_usuario">
        </div>
        <!-- Botón para realizar la búsqueda -->
        <button type="submit" class="btn btn-primary">Buscar detalle de usuario</button>
    </form>
</div>
<!-- Fin del contenedor -->
