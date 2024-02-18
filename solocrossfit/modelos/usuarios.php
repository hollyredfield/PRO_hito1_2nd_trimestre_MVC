<?php

require_once 'class_conexion.php';

class Usuario {
    
    private $cursor;

    public function __construct() {
        $this-> cursor = (new Conexion())-> get_conexion();
    }

    // Método para insertar un usuario en la base de datos
    public function insertar_usuario($nombre, $plan_trabajo, $peso_actual, $categoria_peso, $eventos_mes, $horas_extra_mes, $gastos_detallados, $costo_total, $comparacion_peso_categoria) {
        $sql = $this->cursor->prepare("INSERT INTO usuarios (nombre, plan_trabajo, peso_actual, categoria_peso, eventos_mes, horas_extra_mes, gastos_detallados, costo_total, comparacion_peso_categoria) VALUES (?,?,?,?,?,?,?,?,?)");
        $sql->bind_param("ssdsiisds", $nombre, $plan_trabajo, $peso_actual, $categoria_peso, $eventos_mes, $horas_extra_mes, $gastos_detallados, $costo_total, $comparacion_peso_categoria);
        if ($sql->execute()) {
            return true; 
        } else {
            return false;
        }
    }

    // Método para buscar un usuario en la base de datos por su nombre
    public function buscar_usuario($nombre) {
        $sql = $this->cursor->prepare("SELECT * FROM usuarios WHERE nombre = ?");
        $sql->bind_param("s", $nombre);
        $sql->execute();
        $resultado = $sql->get_result();
        $usuario = $resultado->fetch_assoc();
        if ($usuario) {
            return $usuario;
        } else {
            return null;
        }
    }

    // Método para eliminar un usuario de la base de datos por su nombre
    public function eliminar($nombre) {
        $sql = $this->cursor->prepare("DELETE FROM usuarios WHERE nombre = ?");
        $sql->bind_param("s", $nombre);
        $resultado = $sql->execute();
        if ($resultado) {
            return true;
        } else {
            return false;
        }
        return $resultado;
    }

    // Método para modificar los datos de un usuario en la base de datos
    public function modificar_usuario($nombre, $plan_trabajo, $peso_actual, $categoria_peso, $eventos_mes, $horas_extra_mes, $gastos_detallados, $costo_total, $comparacion_peso_categoria) {
        $sql = $this->cursor->prepare("UPDATE usuarios SET plan_trabajo = ?, peso_actual = ?, categoria_peso = ?, eventos_mes = ?, horas_extra_mes = ?, gastos_detallados = ?, costo_total = ?, comparacion_peso_categoria = ? WHERE nombre = ?");
        $sql->bind_param("sssiisdss", $plan_trabajo, $peso_actual, $categoria_peso, $eventos_mes, $horas_extra_mes, $gastos_detallados, $costo_total, $comparacion_peso_categoria, $nombre);
        if ($sql->execute()) {
            return true; 
        } else {
            return false;
        }
    }

    // Método para mostrar todos los usuarios de la base de datos en una tabla
    public function mostrar_usuarios() {
        $sql = $this->cursor->prepare("SELECT * FROM usuarios"); // Prepara la consulta SQL para seleccionar todos los usuarios de la base de datos
        $sql->execute(); // Ejecuta la consulta SQL
        $resultado = $sql->get_result(); // Obtiene el resultado de la consulta
        $usuarios = $resultado->fetch_all(MYSQLI_ASSOC); // Obtiene todos los usuarios como un array asociativo

        echo "<table>"; // Imprime el inicio de la tabla HTML
        echo "<tr>"; // Imprime el inicio de la fila de encabezados de la tabla
        echo "<th>Nombre</th>"; // Imprime el encabezado "Nombre"
        echo "<th>Plan de trabajo</th>"; // Imprime el encabezado "Plan de trabajo"
        echo "<th>Peso actual</th>"; // Imprime el encabezado "Peso actual"
        echo "<th>Categoría de peso</th>"; // Imprime el encabezado "Categoría de peso"
        echo "<th>Eventos del mes</th>"; // Imprime el encabezado "Eventos del mes"
        echo "<th>Horas extra del mes</th>"; // Imprime el encabezado "Horas extra del mes"
        echo "<th>Gastos detallados</th>"; // Imprime el encabezado "Gastos detallados"
        echo "<th>Costo total</th>"; // Imprime el encabezado "Costo total"
        echo "<th>Comparación de peso y categoría</th>"; // Imprime el encabezado "Comparación de peso y categoría"
        echo "</tr>"; // Imprime el fin de la fila de encabezados de la tabla

        foreach ($usuarios as $usuario) { // Itera sobre cada usuario en el array de usuarios
            echo "<tr>"; // Imprime el inicio de una fila de datos de la tabla
            echo "<td>" . $usuario['nombre'] . "</td>"; // Imprime el valor del campo "nombre" del usuario
            echo "<td>" . $usuario['plan_trabajo'] . "</td>"; // Imprime el valor del campo "plan_trabajo" del usuario
            echo "<td>" . $usuario['peso_actual'] . "</td>"; // Imprime el valor del campo "peso_actual" del usuario
            echo "<td>" . $usuario['categoria_peso'] . "</td>"; // Imprime el valor del campo "categoria_peso" del usuario
            echo "<td>" . $usuario['eventos_mes'] . "</td>"; // Imprime el valor del campo "eventos_mes" del usuario
            echo "<td>" . $usuario['horas_extra_mes'] . "</td>"; // Imprime el valor del campo "horas_extra_mes" del usuario
            echo "<td>" . $usuario['gastos_detallados'] . "</td>"; // Imprime el valor del campo "gastos_detallados" del usuario
            echo "<td>" . $usuario['costo_total'] . "€" . "</td>"; // Imprime el valor del campo "costo_total" del usuario, seguido del símbolo del euro
            echo "<td>" . $usuario['comparacion_peso_categoria'] . "</td>"; // Imprime el valor del campo "comparacion_peso_categoria" del usuario
            echo "</tr>"; // Imprime el fin de la fila de datos de la tabla
        }

        echo "</table>"; // Imprime el fin de la tabla HTML

        return $usuarios; // Devuelve el array de usuarios
    }

}
?>
