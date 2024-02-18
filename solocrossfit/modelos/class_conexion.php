<?php
// Comentario: Se inicia la definición de la clase Conexion
class Conexion{
    // Comentario: Se definen las propiedades de la clase
    private $servidor = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $bdd ="solocrossfit";
    protected $conexion;

    // Comentario: Se define el constructor de la clase
    public function __construct(){
        // Comentario: Se crea una nueva instancia de la clase mysqli para establecer la conexión con la base de datos
        $this->conexion = new mysqli($this->servidor,
                                     $this->usuario,
                                     $this->clave,
                                     $this->bdd);
        // Comentario: Se verifica si la conexión fue exitosa
        if($this->conexion->connect_error){
            // Comentario: Si la conexión falla, se muestra un mensaje de error y se detiene la ejecución del programa
            die("Conexión Fallida". $this->conexion->connect_error);
        }
        // Comentario: Se establece el conjunto de caracteres UTF8 para la conexión
        $this->conexion->set_charset("UTF8");
        // Comentario: Se muestra un mensaje de conexión exitosa
        echo "Conexión correcta.".PHP_EOL;
    }

    // Comentario: Se define un método para obtener la conexión
    public function get_conexion(){
        return $this->conexion;
    }

    /*public function conectar_pdo(){
        try {
            $pdo = new pdo("mysql:host=$this->servidor;dbname=$this->bdd", $this->usuario, $this->clave);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMOD_EXCEPTION);

            $this->conexion = $pdo;
        }catch (PDOException $e){
            die("Error al conectar a la base de datos: ". $e->getMessage());
        }
    }*/
    
}





?>