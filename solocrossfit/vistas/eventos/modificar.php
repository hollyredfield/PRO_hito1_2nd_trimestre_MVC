<!-- This is a PHP file that contains a form for modifying event details. -->

<h2> Modificar Detalles de Evento </h2>
<!-- Heading for the form -->

<form action="../../controladores/controlador_eventos_competiciones.php" method="post">
    <!-- The form will submit data to the specified PHP file using the POST method -->

    <div class="form-group">
        <label for="id_evento">ID del Evento</label>
        <!-- Label for the input field that will capture the event ID -->
        <input type="number" class="form-control" id="id_evento" name="id_evento" required>
        <!-- Input field for capturing the event ID. It is a required field. -->
    </div>

    <div class="form-group">
        <label for="id_usuario">ID del Usuario</label>
        <!-- Label for the input field that will capture the user ID -->
        <input type="number" class="form-control" id="id_usuario" name="id_usuario" required>
        <!-- Input field for capturing the user ID. It is a required field. -->
    </div>

    <div class="form-group">
        <label for="numero_eventos_mes">Número de Eventos al Mes</label>
        <!-- Label for the input field that will capture the number of events per month -->
        <input type="number" class="form-control" id="numero_eventos_mes" name="numero_eventos_mes" required>
        <!-- Input field for capturing the number of events per month. It is a required field. -->
    </div>

    <div class="form-group">
        <label for="horas_entrenamiento_semana">Horas de Entrenamiento a la Semana</label>
        <!-- Label for the input field that will capture the number of training hours per week -->
        <input type="number" class="form-control" id="horas_entrenamiento_semana" name="horas_entrenamiento_semana" required>
        <!-- Input field for capturing the number of training hours per week. It is a required field. -->
    </div>

    <div class="form-group">
        <label for="fecha_evento">Fecha del Evento</label>
        <!-- Label for the input field that will capture the event date -->
        <input type="date" class="form-control" id="fecha_evento" name="fecha_evento" required>
        <!-- Input field for capturing the event date. It is a required field. -->
    </div>

    <div class="form-group">
        <label for="costo_total">Costo Total</label>
        <!-- Label for the input field that will capture the total cost -->
        <input type="number" step="0.01" class="form-control" id="costo_total" name="costo_total" required>
        <!-- Input field for capturing the total cost. It is a required field. -->
    </div>

    <input type="hidden" id="accion" name="accion" value="modificar">
    <!-- Hidden input field for specifying the action to be performed (in this case, "modificar") -->

    <button type="submit" class="btn btn-primary">Modificar Detalle de Usuario</button>
    <!-- Submit button for submitting the form -->
</form>