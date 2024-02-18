<?php

// Incluye el archivo de eventos y competiciones
require_once '../modelos/eventos_competiciones.php';

// Configura la visualización de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Añadir detalles de usuario
$accion = $_POST["accion"] ?? null; // Obtener el valor de la variable "accion" de la solicitud POST o establecerlo como nulo si no está presente
$numero_eventos_mes = $_POST["numero_eventos_mes"] ?? null; // Obtener el valor de la variable "numero_eventos_mes" de la solicitud POST o establecerlo como nulo si no está presente
$horas_entrenamiento_semana = $_POST["horas_entrenamiento_semana"] ?? null; // Obtener el valor de la variable "horas_entrenamiento_semana" de la solicitud POST o establecerlo como nulo si no está presente
$fecha_evento = $_POST["fecha_evento"] ?? null; // Obtener el valor de la variable "fecha_evento" de la solicitud POST o establecerlo como nulo si no está presente
$costo_total = $_POST["costo_total"] ?? null; // Obtener el valor de la variable "costo_total" de la solicitud POST o establecerlo como nulo si no está presente

// Buscar detalles de usuario
$id_usuario = $_POST["id_usuario"] ?? null; // Obtener el valor de la variable "id_usuario" de la solicitud POST o establecerlo como nulo si no está presente
$id_evento = $_POST["id_evento"] ?? null; // Obtener el valor de la variable "id_evento" de la solicitud POST o establecerlo como nulo si no está presente

$detalle_usuario = new DetallesUsuario(); // Crear una nueva instancia de la clase DetallesUsuario

switch($accion) {
    case "insertar_detalle_usuario":
        $id_usuario = $_POST["id_usuario"] ?? null; // Obtener el valor de la variable "id_usuario" de la solicitud POST o establecerlo como nulo si no está presente
        if ($detalle_usuario -> insertar_detalle_usuario($id_usuario, $numero_eventos_mes, $horas_entrenamiento_semana, $fecha_evento, $costo_total)) {
            echo "Detalle de usuario insertado correctamente"; // Imprimir mensaje si se inserta correctamente el detalle de usuario
        } else {
            echo "Error al insertar detalle de usuario"; // Imprimir mensaje si hay un error al insertar el detalle de usuario
        }
        return; // Finalizar la ejecución del script
        break;
    
    case "buscar_detalle_usuario":
        $resultado = $detalle_usuario -> buscar_detalle_usuario($id_usuario); // Buscar el detalle de usuario utilizando el ID de usuario
        if ($resultado) {
            echo "Detalle de usuario encontrado" . PHP_EOL; // Imprimir mensaje si se encuentra el detalle de usuario
            echo "ID Usuario: " . $resultado["id_usuario"] . "<br>" . PHP_EOL; // Imprimir el ID de usuario
            echo "Número de eventos del mes: " . $resultado["numero_eventos_mes"] . "<br>" . PHP_EOL; // Imprimir el número de eventos del mes
            echo "Horas de entrenamiento por semana: " . $resultado["horas_entrenamiento_semana"] . PHP_EOL . "<br>"; // Imprimir las horas de entrenamiento por semana
            echo "Fecha del evento: " . $resultado["fecha_evento"] . PHP_EOL. "<br>"; // Imprimir la fecha del evento
            echo "Costo total: " . $resultado["costo_total"] . PHP_EOL . "<br>"; // Imprimir el costo total
        } else {
            echo "No se encontró detalle de usuario con el ID proporcionado"; // Imprimir mensaje si no se encuentra el detalle de usuario con el ID proporcionado
        }
        return; // Finalizar la ejecución del script
        break;
    
    case "eliminar":
        if ($detalle_usuario -> eliminar($id_usuario)) {
            // ...
        }

        return; // Finalizar la ejecución del script
    
    case "modificar":
        if ($detalle_usuario -> modificar_detalle_usuario($id_evento, $id_usuario, $numero_eventos_mes, $horas_entrenamiento_semana, $fecha_evento, $costo_total) ) {
            echo "Detalle de usuario modificado correctamente"; // Imprimir mensaje si se modifica correctamente el detalle de usuario
        } else {
            echo "Error al modificar detalle de usuario"; // Imprimir mensaje si hay un error al modificar el detalle de usuario
        }
        return; // Finalizar la ejecución del script
        break;
}

?>