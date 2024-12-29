<?php
require_once __DIR__ . '/config/conexiondb.php';
require_once __DIR__ . '/config/variablesentorno.php';

// Crear una instancia de la clase de conexión
$db = new ConexionDB();

// Obtener la instancia de PDO
$pdo = $db->getPdo();

// Realizar una consulta de ejemplo
try {
    $stmt = $pdo->query('SELECT * FROM tu_tabla LIMIT 1');
    $row = $stmt->fetch();
    $dbStatus = "Conexión exitosa. Datos de ejemplo: " . json_encode($row);
} catch (PDOException $e) {
    $dbStatus = "Error en la consulta: " . $e->getMessage();
}

// Cerrar la conexión
$db->closeConnection();
?>

<body>
    <div class="container mt-5">
        <!-- Primer apartado -->
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h1>Bienvenid@ a cvWeb</h1>
                <p><?php echo $dbStatus; ?></p>
            </div>
        </div>

        <!-- Segundo apartado -->
        <div class="row mt-4">
            <div class="col-md-8 mx-auto text-center">
                <!-- Contenido adicional -->
            </div>
        </div>
    </div>
</body>