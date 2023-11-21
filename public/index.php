<?php
    try {
        $pdo = new PDO("mysql:host=172.26.0.2;dbname=evaluable", "root", "root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT id,nombre FROM user";
        $statement = $pdo->prepare($query);
        $statement->execute();
        $text = "";
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
           echo $text = "ID " . $row['id'] . " name: " . $row['nombre'] . "<br>" . $text;
        }
        
    } catch (PDOException $e) {
        echo "Error mio: " . $e->getMessage();
    }

?>