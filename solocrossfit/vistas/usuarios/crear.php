<div class = "container mt-5 ">
<!-- Abre un contenedor con la clase "container" y un margen superior de 5 -->
<h2>Añadir usuarios</h2>
<!-- Título "Añadir usuarios" -->
<form action ="controladores/usuario_controlador.php" method = "POST" class = "form">
<!-- Formulario que envía los datos a "controladores/usuario_controlador.php" mediante el método POST y tiene la clase "form" -->

<div class = "mb-3 ">
<!-- Abre un div con la clase "mb-3" -->
<label for = "nombre" class="form-label"> Nombre </label>
<!-- Etiqueta para el campo "nombre" -->
<input type = "text" class ="form-control" id ="nombre" name ="nombre" required>
<!-- Campo de entrada de texto para el nombre con la clase "form-control" y el atributo "required" -->
<input type = "hidden" id ="accion" name = "accion" value= "insertar_usuario">
<!-- Campo oculto para el valor "insertar_usuario" con el id "accion" -->
</div>
<!-- Cierra el div -->

<div class = "mb-3">
<!-- Abre un div con la clase "mb-3" -->
    <label for  = "plan_trabajo" class = "form-label"> Plan de trabajo </label>
    <!-- Etiqueta para el campo "plan_trabajo" -->
    <input type = "text" class = "form-control" id ="plan_trabajo" name = "plan_trabajo" required>
    <!-- Campo de entrada de texto para el plan de trabajo con la clase "form-control" y el atributo "required" -->
<div class = "mb-3">
<!-- Abre un div con la clase "mb-3" -->
    <label for ="peso" class = "form-label"> Peso Actual</label>
    <!-- Etiqueta para el campo "peso" -->
    <select class = "form-control" id = "peso" name = "peso" required>
        <!-- Lista desplegable para seleccionar el peso -->
        <option selected disabled> Seleccione su peso</option>
        <option value= "peso_pesado"> +100kg</option>
        <option value= "peso_pesado_ligero"> 90-100kg</option>
        <option value= "peso_medio"> 81-90kg</option>
        <option value= "peso_medio_ligero"> 73-81kg</option>
        <option value= "peso_ligero"> 66-73kg</option>
        <option value= "peso_pluma"> -66kg</option>
    </select> 
<!-- Cierra la lista desplegable -->
<div class = "mb-3">
<!-- Abre un div con la clase "mb-3" -->
    <label for = "categoria_peso" class = "for-label"> Usuario por peso </label>
    <!-- Etiqueta para el campo "categoria_peso" -->
    <select class = "form-control" id ="categoria_peso" name = "categoria_peso" required>
        <!-- Lista desplegable para seleccionar la categoría de peso -->
        <option selected value ="default"> Selecciona tu Peso</option>
        <option value = "principal"> Principiante</option>
        <option value = "Intermedio"> Intermedio</option>
        <option value = "elite">Élite</option>
    </select>
<!-- Cierra la lista desplegable -->
<div class = "mb-3" >
<!-- Abre un div con la clase "mb-3" -->
 <label for = "evento_mes" class= "for-label"> Eventos del mes </label>
<!-- Etiqueta para el campo "evento_mes" -->
<input type = "number" class = "form-control" id = "evento_mes" name = "evento_mes" required>
<!-- Campo de entrada de número para los eventos del mes con la clase "form-control" y el atributo "required" -->
</div>
<!-- Cierra el div -->

<div class = "mb-3">
<!-- Abre un div con la clase "mb-3" -->
    <label for = "horas_extra " class = "form-label"> Horas extra </label>
    <!-- Etiqueta para el campo "horas_extra" -->
    <input type = "number" class= "form-control" id = "horas_extra" name = "horas_extra" required>
    <!-- Campo de entrada de número para las horas extra con la clase "form-control" y el atributo "required" -->
</div>
<!-- Cierra el div -->

<div class = "mb-3">
<!-- Abre un div con la clase "mb-3" -->
    <label for = "gastos_detallados" class = "form-label"> Gastos detallados </label>
    <!-- Etiqueta para el campo "gastos_detallados" -->
    <input for = "text" class = "form-control" id = "gasto" name = "gasto" required>
    <!-- Campo de entrada de texto para los gastos detallados con la clase "form-control" y el atributo "required" -->
</div>
<!-- Cierra el div -->

<div class = "mb-3">
<!-- Abre un div con la clase "mb-3" -->
    <label for = "costo_total" class = "form-label"> Costo total </label>
    <!-- Etiqueta para el campo "costo_total" -->
    <input type = "number" step= "00.1" class = "form-control" id = "costo_total" name = "costo_total" required>
    <!-- Campo de entrada de número para el costo total con la clase "form-control", el atributo "step" y el atributo "required" -->
</div>
<!-- Cierra el div -->

<div class = "mb-3">
<!-- Abre un div con la clase "mb-3" -->
    <label for = "comparacion_peso_categoria" class = "form-label"> Comparación de peso por categoría </label>
    <!-- Etiqueta para el campo "comparacion_peso_categoria" -->
    <input type = "text" class = "form-control" id = "comparacion_peso_categoria" name = "comparacion_peso_categoria" required>
    <!-- Campo de entrada de texto para la comparación de peso por categoría con la clase "form-control" y el atributo "required" -->
</div>
<!-- Cierra el div -->

<button type = "submit" class = "btn btn-primary"> Añadir usuario </button>
<!-- Botón para enviar el formulario con la clase "btn" y "btn-primary" -->
</form>
<!-- Cierra el formulario -->
</div>
<!-- Cierra el contenedor -->
