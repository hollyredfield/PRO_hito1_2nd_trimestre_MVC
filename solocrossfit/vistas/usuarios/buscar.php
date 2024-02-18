<!-- Crear un contenedor con una clase "container" y un margen superior de 5 unidades -->
<div class="container mt-5">
    <!-- Mostrar un encabezado de nivel 2 -->
    <h2>Buscar usuario</h2>
    <!-- Crear un formulario que envíe los datos a "controladores/usuario_controlador.php" utilizando el método POST y una clase "form" -->
    <form action="controladores/usuario_controlador.php" method="POST" class="form">
        <!-- Crear un contenedor con una clase "mb-3" -->
        <div class="mb-3">
            <!-- Mostrar una etiqueta con el texto "Nombre" -->
            <label for="nombre" class="form-label">Nombre</label>
            <!-- Crear un campo de texto con una clase "form-control" y un identificador "nombre" -->
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            <!-- Crear un campo oculto con un identificador "accion" y un valor "buscar_usuario" -->
            <input type="hidden" id="accion" name="accion" value="buscar_usuario">
        </div>
        <!-- Crear un botón de tipo "submit" con una clase "btn btn-primary" y el texto "Buscar usuario" -->
        <button type="submit" class="btn btn-primary">Buscar usuario</button>
    </form>
</div>
