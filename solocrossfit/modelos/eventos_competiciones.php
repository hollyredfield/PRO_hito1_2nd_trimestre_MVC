<?php

require_once 'class_conexion.php';
require_once 'usuarios.php';

class DetallesUsuario {
    
    private $cursor;

    public function __construct() {
        $this-> cursor = (new Conexion())-> get_conexion(); // Crea una instancia de la clase Conexion y obtiene la conexión a la base de datos.
    }

    public function insertar_detalle_usuario($id_usuario, $numero_eventos_mes, $horas_entrenamiento_semana, $fecha_evento, $costo_total) {
        $sql = $this -> cursor -> prepare ("INSERT INTO eventos_competiciones (id_usuario, numero_eventos_mes, horas_entrenamiento_semana, fecha_evento, costo_total) VALUES (?,?,?,?,?)"); // Prepara una consulta SQL para insertar un nuevo detalle de usuario en la tabla eventos_competiciones.
        $sql -> bind_param("iiisd", $id_usuario, $numero_eventos_mes, $horas_entrenamiento_semana, $fecha_evento, $costo); // Asocia los parámetros de la consulta SQL con los valores proporcionados.
        if ($sql -> execute()) { // Ejecuta la consulta SQL.
            return true; // Devuelve verdadero si la consulta se ejecutó correctamente.
        } else {
            return false; // Devuelve falso si ocurrió un error al ejecutar la consulta.
        }
    }

    public function buscar_detalle_usuario($id_usuario) {
        $sql = $this -> cursor -> prepare ("SELECT * FROM eventos_competiciones WHERE id_usuario = ?"); // Prepara una consulta SQL para buscar un detalle de usuario en la tabla eventos_competiciones.
        $sql -> bind_param("i", $id_usuario); // Asocia el parámetro de la consulta SQL con el valor proporcionado.
        $sql -> execute(); // Ejecuta la consulta SQL.
        $resultado = $sql -> get_result(); // Obtiene el resultado de la consulta.
        $detalle_usuario = $resultado -> fetch_assoc(); // Obtiene una fila del resultado como un array asociativo.

        if ($detalle_usuario) { // Verifica si se encontró un detalle de usuario.
            echo "Detalle de usuario encontrado" . PHP_EOL; // Imprime un mensaje indicando que se encontró el detalle de usuario.
            echo "ID Usuario: " . $detalle_usuario["id_usuario"] . "<br>" . PHP_EOL; // Imprime el ID del usuario.
            echo "Número de eventos del mes: " . $detalle_usuario["numero_eventos_mes"] . "<br>" . PHP_EOL; // Imprime el número de eventos del mes.
            echo "Horas de entrenamiento por semana: " . $detalle_usuario["horas_entrenamiento_semana"] . PHP_EOL . "<br>"; // Imprime las horas de entrenamiento por semana.
            echo "Fecha del evento: " . $detalle_usuario["fecha_evento"] . PHP_EOL. "<br>"; // Imprime la fecha del evento.
            echo "Costo total: " . $detalle_usuario["costo_total"] . PHP_EOL . "<br>"; // Imprime el costo total.
        } else {
            echo "No se encontró detalle de usuario con el ID proporcionado"; // Imprime un mensaje indicando que no se encontró el detalle de usuario.
        }
    }

    public function modificar_detalle_usuario($id_evento, $id_usuario, $numero_eventos_mes, $horas_entrenamiento_semana, $fecha_evento, $costo_total) {
        $sql = $this -> cursor -> prepare ("UPDATE eventos_competiciones SET id_usuario = ?, numero_eventos_mes = ?, horas_entrenamiento_semana = ?, fecha_evento = ?, costo_total = ? WHERE id_evento = ?"); // Prepara una consulta SQL para modificar un detalle de usuario en la tabla eventos_competiciones.
        $sql -> bind_param("iiisdi", $id_usuario, $numero_eventos_mes, $horas_entrenamiento_semana, $fecha_evento, $costo_total, $id_evento); // Asocia los parámetros de la consulta SQL con los valores proporcionados.
        if ($sql -> execute()) { // Ejecuta la consulta SQL.
            return true; // Devuelve verdadero si la consulta se ejecutó correctamente.
        } else {
            return false; // Devuelve falso si ocurrió un error al ejecutar la consulta.
        }
    }

    public function eliminar($id_usuario) {
        $sql = $this -> cursor -> prepare ("DELETE FROM eventos_competiciones WHERE id_usuario = ?"); // Prepara una consulta SQL para eliminar un detalle de usuario de la tabla eventos_competiciones.
        $sql -> bind_param("i", $id_usuario); // Asocia el parámetro de la consulta SQL con el valor proporcionado.
        $resultado = $sql -> execute(); // Ejecuta la consulta SQL y guarda el resultado.
        if ($resultado) { // Verifica si la consulta se ejecutó correctamente.
            echo "Usuario eliminado correctamente"; // Imprime un mensaje indicando que el usuario se eliminó correctamente.
            return true; // Devuelve verdadero si el usuario se eliminó correctamente.
        } else {
            echo "Error al eliminar usuario"; // Imprime un mensaje indicando que ocurrió un error al eliminar el usuario.
            return false; // Devuelve falso si ocurrió un error al eliminar el usuario.
        }
    }

    public function mostrar_detalles_usuarios() {
        $sql = $this -> cursor -> prepare ("SELECT * FROM eventos_competiciones"); // Prepara una consulta SQL para obtener todos los detalles de usuarios de la tabla eventos_competiciones.
        $sql -> execute(); // Ejecuta la consulta SQL.
        $resultado = $sql -> get_result(); // Obtiene el resultado de la consulta.
        $detalles_usuarios = $resultado -> fetch_all(MYSQLI_ASSOC); // Obtiene todas las filas del resultado como un array asociativo.

        echo "<table>"; // Imprime el inicio de una tabla HTML.
        echo "<tr>"; // Imprime el inicio de una fila de la tabla.
        echo "<th>ID Usuario</th>"; // Imprime el encabezado de la columna "ID Usuario".
        echo "<th>Número de eventos del mes</th>"; // Imprime el encabezado de la columna "Número de eventos del mes".
        echo "<th>Horas de entrenamiento por semana</th>"; // Imprime el encabezado de la columna "Horas de entrenamiento por semana".
        echo "<th>Fecha del evento</th>"; // Imprime el encabezado de la columna "Fecha del evento".
        echo "<th>Costo</th>"; // Imprime el encabezado de la columna "Costo".
        echo "</tr>"; // Imprime el fin de una fila de la tabla.

        foreach ($detalles_usuarios as $detalle_usuario) { // Itera sobre cada detalle de usuario.
            echo "<tr>"; // Imprime el inicio de una fila de la tabla.
            echo "<td>" . $detalle_usuario['id_usuario'] . "</td>"; // Imprime el ID del usuario en una celda de la tabla.
            echo "<td>" . $detalle_usuario['numero_eventos_mes'] . "</td>"; // Imprime el número de eventos del mes en una celda de la tabla.
            echo "<td>" . $detalle_usuario['horas_entrenamiento_semana'] . "</td>"; // Imprime las horas de entrenamiento por semana en una celda de la tabla.
            echo "<td>" . $detalle_usuario['fecha_evento'] . "</td>"; // Imprime la fecha del evento en una celda de la tabla.
            echo "<td>" . (isset($detalle_usuario['costo_total']) ? $detalle_usuario['costo_total'] : 'No disponible') . "</td>"; // Imprime el costo total en una celda de la tabla, si está disponible; de lo contrario, imprime "No disponible".
            echo "</tr>"; // Imprime el fin de una fila de la tabla.
        }

        echo "</table>"; // Imprime el fin de la tabla.

        return $detalles_usuarios; // Devuelve todos los detalles de usuarios.
    }
}

//$modificar_detalle_usuario = new DetallesUsuario();
//$modificar_detalle_usuario -> modificar_detalle_usuario(20, 31, 2, 3, "2021-12-12", 100);