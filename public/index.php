<?php
    try {
        $pdo = new PDO("mysql:host=192.168.0.2;dbname=dacoma", "root", "root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM user";
        $statement = $pdo->prepare($query);
        $statement->execute();
        $text = "";
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
           echo $text = " name: " . $row['nombre'] ." edad: " . $row['edad'] ." musica: " . $row['musica'] . "<br>" . $text;
        }
        
    } catch (PDOException $e) {
        echo "Error mio: " . $e->getMessage();
    }

?>