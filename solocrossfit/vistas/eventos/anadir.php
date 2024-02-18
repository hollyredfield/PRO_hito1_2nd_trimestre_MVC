<!-- Comentario: Este archivo PHP se encuentra en la ruta /c:/wamp64/www/solocrossfit/vistas/eventos/anadir.php -->

<div class = "container mt-5 ">
<!-- Comentario: Inicio del contenedor principal -->

<h2>Añadir detalles de usuario</h2>
<!-- Comentario: Título del formulario -->

<form action ="../../controladores/controlador_eventos_competiciones.php" method = "POST" class = "form">
<!-- Comentario: Inicio del formulario con el atributo action que indica la ruta del controlador -->

<div class = "mb-3 ">
<!-- Comentario: Inicio del primer campo del formulario -->

<label for = "id_usuario" class="form-label"> ID Usuario </label>
<!-- Comentario: Etiqueta del campo "ID Usuario" -->

<input type = "number" class ="form-control" id ="id_usuario" name ="id_usuario" required>
<!-- Comentario: Campo de entrada de número para el ID de usuario -->

<input type = "hidden" id ="accion" name = "accion" value= "insertar_detalle_usuario">
<!-- Comentario: Campo oculto para indicar la acción a realizar en el controlador -->

</div>
<!-- Comentario: Fin del primer campo del formulario -->

<div class = "mb-3">
<!-- Comentario: Inicio del segundo campo del formulario -->

<label for  = "numero_eventos_mes" class = "form-label"> Número de eventos del mes </label>
<!-- Comentario: Etiqueta del campo "Número de eventos del mes" -->

<input type = "number" class = "form-control" id ="numero_eventos_mes" name = "numero_eventos_mes" required>
<!-- Comentario: Campo de entrada de número para el número de eventos del mes -->

</div>
<!-- Comentario: Fin del segundo campo del formulario -->

<div class = "mb-3">
<!-- Comentario: Inicio del tercer campo del formulario -->

<label for ="horas_entrenamiento_semana" class = "form-label"> Horas de entrenamiento por semana</label>
<!-- Comentario: Etiqueta del campo "Horas de entrenamiento por semana" -->

<input type = "number" class = "form-control" id = "horas_entrenamiento_semana" name = "horas_entrenamiento_semana" required>
<!-- Comentario: Campo de entrada de número para las horas de entrenamiento por semana -->

</div>
<!-- Comentario: Fin del tercer campo del formulario -->

<div class = "mb-3">
<!-- Comentario: Inicio del cuarto campo del formulario -->

<label for = "fecha_evento" class = "form-label"> Fecha del evento </label>
<!-- Comentario: Etiqueta del campo "Fecha del evento" -->

<input type = "date" class = "form-control" id ="fecha_evento" name = "fecha_evento" required>
<!-- Comentario: Campo de entrada de fecha para la fecha del evento -->

</div>
<!-- Comentario: Fin del cuarto campo del formulario -->

<div class = "mb-3" >
<!-- Comentario: Inicio del quinto campo del formulario -->

<label for = "costo_total" class= "for-label"> Costo total </label>
<!-- Comentario: Etiqueta del campo "Costo total" -->

<input type = "number" step= "00.1" class = "form-control" id = "costo_total" name = "costo_total" required>
<!-- Comentario: Campo de entrada de número con paso decimal para el costo total -->

</div>
<!-- Comentario: Fin del quinto campo del formulario -->

<button type = "submit" class = "btn btn-primary"> Añadir detalle de usuario </button>
<!-- Comentario: Botón de envío del formulario -->

</form>
<!-- Comentario: Fin del formulario -->

</div>
<!-- Comentario: Fin del contenedor principal -->
