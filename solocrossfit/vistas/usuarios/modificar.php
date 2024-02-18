<!-- Contenedor principal -->
<div class="container mt-5">
    <!-- Título del formulario -->
    <h2>Actualizar usuario</h2>
    <!-- Inicio del formulario, se envía a 'usuario_controlador.php' usando el método POST -->
    <form action="/solocrossfit/controladores/usuario_controlador.php" method="POST" class="form">
    <!-- Campo oculto para definir la acción a realizar en el controlador -->
    <input type="hidden" id="accion" name="accion" value="modificar_usuario">
        <!-- Campo para el nombre del usuario -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <!-- Campo para el plan de trabajo del usuario -->
        <div class="mb-3">
            <label for="plan_trabajo" class="form-label">Plan de trabajo</label>
            <input type="text" class="form-control" id="plan_trabajo" name="plan_trabajo" required>
        </div>
        <!-- Campo para el peso actual del usuario -->
        <div class="mb-3">
            <label for="peso" class="form-label">Peso Actual</label>
            <!-- Selector de peso con varias opciones -->
            <select class="form-control" id="peso" name="peso" required>
                <option selected disabled>Seleccione su peso</option>
                <option value="peso_pesado">+100kg</option>
                <option value="peso_pesado_ligero">90-100kg</option>
                <option value="peso_medio">81-90kg</option>
                <option value="peso_medio_ligero">73-81kg</option>
                <option value="peso_ligero">66-73kg</option>
                <option value="peso_pluma">-66kg</option>
            </select>
        </div>
        <!-- Campo para la categoría de peso del usuario -->
        <div class="mb-3">
            <label for="categoria_peso" class="form-label">Usuario por peso</label>
            <!-- Selector de categoría de peso con varias opciones -->
            <select class="form-control" id="categoria_peso" name="categoria_peso" required>
                <option selected value="default">Selecciona tu Peso</option>
                <option value="principal">Principiante</option>
                <option value="Intermedio">Intermedio</option>
                <option value="elite">Élite</option>
            </select>
        </div>
        <!-- Campo para los eventos del mes del usuario -->
        <div class="mb-3">
            <label for="evento_mes" class="form-label">Eventos del mes</label>
            <input type="number" class="form-control" id="evento_mes" name="evento_mes" required>
        </div>
        <!-- Campo para las horas extra del usuario -->
        <div class="mb-3">
            <label for="horas_extra" class="form-label">Horas extra</label>
            <input type="number" class="form-control" id="horas_extra" name="horas_extra" required>
        </div>
        <!-- Campo para los gastos detallados del usuario -->
        <div class="mb-3">
            <label for="gastos_detallados" class="form-label">Gastos detallados</label>
            <input type="text" class="form-control" id="gasto" name="gasto" required>
        </div>
        <!-- Campo para el costo total del usuario -->
        <div class="mb-3">
            <label for="costo_total" class="form-label">Costo total</label>
            <input type="number" step="00.1" class="form-control" id="costo_total" name="costo_total" required>
        </div>
        <!-- Campo para la comparación de peso por categoría del usuario -->
        <div class="mb-3">
            <label for="comparacion_peso_categoria" class="form-label">Comparación de peso por categoría</label>
            <input type="text" class="form-control" id="comparacion_peso_categoria" name="comparacion_peso_categoria" required>
        </div>
        <!-- Botón para enviar el formulario -->
        <button type="submit" class="btn btn-primary">Actualizar usuario</button>
    </form>
</div>