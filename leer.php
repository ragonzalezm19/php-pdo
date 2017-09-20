<?php
  /*
    Ejemplo de una funcion leer

    function leer($arg1, $arg2) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT a.campo_1, a.campo_2, b.campo_1
						FROM tabla_a AS a
							INNER JOIN tabla_b b ON b.id = a.b_id
							WHERE a.campo_1 = '{$arg1}' 
							AND a.campo_2 = '{$arg2}'";
			$data = $pdo->query($sql);
			$data = $data->fetchAll(PDO::FETCH_ASSOC);
			Database::disconnect();
			return $data;
		}
  */

	require_once 'database.php';