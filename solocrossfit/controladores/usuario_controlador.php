<?php

require_once ("../modelos/usuarios.php");
// Establece la configuración para mostrar los errores en pantalla
ini_set('display_errors', 1); // Habilita la visualización de errores en pantalla
ini_set('display_startup_errors', 1); // Habilita la visualización de errores de inicio en pantalla
error_reporting(E_ALL); // Establece el nivel de reporte de errores a todos los tipos de errores

$accion = $_POST["accion"] ?? null; // Obtiene el valor de la variable "accion" de la solicitud POST o establece el valor como null si no está presente
$nombre = $_POST["nombre"] ?? null; // Obtiene el valor de la variable "nombre" de la solicitud POST o establece el valor como null si no está presente
$plan_trabajo = $_POST["plan_trabajo"] ?? null; // Obtiene el valor de la variable "plan_trabajo" de la solicitud POST o establece el valor como null si no está presente
$peso = $_POST["peso"] ?? null; // Obtiene el valor de la variable "peso" de la solicitud POST o establece el valor como null si no está presente
$categoria_peso = $_POST["categoria_peso"] ?? null; // Obtiene el valor de la variable "categoria_peso" de la solicitud POST o establece el valor como null si no está presente
$evento_mes = $_POST["evento_mes"] ?? null; // Obtiene el valor de la variable "evento_mes" de la solicitud POST o establece el valor como null si no está presente
$horas_extra = $_POST["horas_extra"] ?? null; // Obtiene el valor de la variable "horas_extra" de la solicitud POST o establece el valor como null si no está presente
$gasto = $_POST["gasto"] ?? null; // Obtiene el valor de la variable "gasto" de la solicitud POST o establece el valor como null si no está presente
$costo_total = $_POST["costo_total"] ?? null; // Obtiene el valor de la variable "costo_total" de la solicitud POST o establece el valor como null si no está presente
$comparacion_peso_categoria = $_POST["comparacion_peso_categoria"] ?? null; // Obtiene el valor de la variable "comparacion_peso_categoria" de la solicitud POST o establece el valor como null si no está presente
$accion_actualizar_eliminar = $_POST["accion_actualizar_eliminar"] ?? null; // Obtiene el valor de la variable "accion_actualizar_eliminar" de la solicitud POST o establece el valor como null si no está presente
$peso_actual = $_POST["peso_actual"] ?? null; // Obtiene el valor de la variable "peso_actual" de la solicitud POST o establece el valor como null si no está presente

$usuario =  new Usuario(); // Crea una nueva instancia de la clase Usuario
switch($accion) { // Inicia un switch basado en el valor de la variable "accion"
    case "insertar_usuario": // Si el valor de "accion" es "insertar_usuario"
        if ( $usuario -> insertar_usuario($nombre, $plan_trabajo, $peso, $categoria_peso, $evento_mes, $horas_extra, $gasto, $costo_total, $comparacion_peso_categoria)) { // Llama al método "insertar_usuario" de la instancia de Usuario y verifica si se insertó correctamente
            echo "Usuario insertado correctamente"; // Imprime un mensaje indicando que el usuario se insertó correctamente
        } else {
            echo "Error al insertar usuario"; // Imprime un mensaje indicando que ocurrió un error al insertar el usuario
        }
        break; // Finaliza el caso "insertar_usuario"

    case "buscar_usuario": // Si el valor de "accion" es "buscar_usuario"
        $resultado = $usuario -> buscar_usuario($nombre); // Llama al método "buscar_usuario" de la instancia de Usuario y guarda el resultado en la variable $resultado
        if ($resultado) { // Si se encontró un usuario
            echo "Usuario encontrado" . PHP_EOL; // Imprime un mensaje indicando que se encontró un usuario
            echo "Nombre: " . $resultado["nombre"] . "<br>" . PHP_EOL; // Imprime el nombre del usuario
            echo "Plan de trabajo: " . $resultado["plan_trabajo"] . "<br>" . PHP_EOL; // Imprime el plan de trabajo del usuario
            echo "Peso: " . $resultado["peso_actual"] . PHP_EOL . "<br>"; // Imprime el peso actual del usuario
            echo "Categoria de peso: " . $resultado["categoria_peso"] . PHP_EOL. "<br>"; // Imprime la categoría de peso del usuario
            echo "Eventos del mes: " . $resultado["eventos_mes"] . PHP_EOL . "<br>"; // Imprime los eventos del mes del usuario
            echo "Horas extra: " . $resultado["horas_extra_mes"] . PHP_EOL . "<br>"; // Imprime las horas extra del usuario
            echo "Gastos detallados: " . $resultado["gastos_detallados"] . PHP_EOL . "<br>"; // Imprime los gastos detallados del usuario
            echo "Costo total: " . $resultado["costo_total"] . "€" . PHP_EOL . "<br>"; // Imprime el costo total del usuario
            echo "Comparacion de peso por categoria: " . $resultado["comparacion_peso_categoria"] . PHP_EOL ." <br>"; // Imprime la comparación de peso por categoría del usuario
        } else {
            echo "Usuario no encontrado"; // Imprime un mensaje indicando que el usuario no se encontró
        }
        break; // Finaliza el caso "buscar_usuario"

    case "eliminar_usuario": // Si el valor de "accion" es "eliminar_usuario"
        if ($usuario -> eliminar($nombre)) { // Llama al método "eliminar" de la instancia de Usuario y verifica si se eliminó correctamente
            echo "Usuario eliminado correctamente"; // Imprime un mensaje indicando que el usuario se eliminó correctamente
        } else {
            echo "Error al eliminar usuario"; // Imprime un mensaje indicando que ocurrió un error al eliminar el usuario
        }
        break; // Finaliza el caso "eliminar_usuario"

    case "modificar_usuario": // Si el valor de "accion" es "modificar_usuario"
        if ($usuario -> modificar_usuario($nombre, $plan_trabajo, $peso, $categoria_peso, $evento_mes, $horas_extra, $gasto, $costo_total, $comparacion_peso_categoria)) { // Llama al método "modificar_usuario" de la instancia de Usuario y verifica si se actualizó correctamente
            echo "Usuario actualizado correctamente"; // Imprime un mensaje indicando que el usuario se actualizó correctamente
        } else {
            echo "Error al actualizar usuario"; // Imprime un mensaje indicando que ocurrió un error al actualizar el usuario
        }
        break; // Finaliza el caso "modificar_usuario"

    switch($accion) { // Inicia un switch basado en el valor de la variable "accion"
        // Tus otros casos...
        case "mostrar_usuarios": // Si el valor de "accion" es "mostrar_usuarios"
            $usuario -> mostrar_usuarios(); // Llama al método "mostrar_usuarios" de la instancia de Usuario
            break; // Finaliza el caso "mostrar_usuarios"
        // Tus otros casos...
    }
}
?>
