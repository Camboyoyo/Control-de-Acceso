<?
    $host = "10.46.1.93";
    $dbname = "entes";
    $user = "postgres";
    $pass = "postgres";
    
    try {
        $entes = pg_connect("host=$host port=5432 dbname=$dbname user=$user password=$pass");
    } catch (PDOException $error) {
        $entes = $error;
        echo ("Error al conectar en la Base de Datos " . $error);
    }

    $host2 = "10.46.1.93";
    $dbname2 = "sigefirrhh";
    $user2 = "postgres";
    $pass2 = "postgres";
    
    try {
        $sigefir = pg_connect("host=$host2 port=5432 dbname=$dbname2 user=$user2 password=$pass2");
    } catch (PDOException $error) {
        $sigefir = $error;
        echo ("Error al conectar en la Base de Datos " . $error);
    }
?>