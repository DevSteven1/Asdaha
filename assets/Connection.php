<?php
$servername = "b23.h.filess.io";
$username = "01_subjecthe";
$password = "b5420850e355de60f56f296b825e676646e669d2";
$dbname = "01_subjecthe";
$port = 3307;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, nombre, apellido FROM usuarios");
    $stmt->execute();
    
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach($stmt->fetchAll() as $k=>$v){
        echo $v['id'] . ' ' . $v['nombre'] . ' ' . $v['apellido'] . '<br>';
    }
    
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

?>
