<?php

namespace App\Models;

use DateTime;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . "../models/baseModel.php";


class RegistroIngresoModel extends BaseModel
{

//     public function __construct(
//         private ?int $id = null,
//         private ?DateTime $fechaIn = null,
//         private ?DateTime $fechaOut = null,
//         private ?int $fkidUserGym = null,
//         private ?int $fkidActividad = null,
//         private ?int $fkidTrainer = null
//     ) {
//         parent::__construct();
//         $this->table = "registroingreso";
//     }

//     public function getAllFicha()
//     {
//         $sql = "SELECT 
//     registroingreso.id, 
//     registroingreso.fechaIn, 
//     registroingreso.fechaOut,   
//     usuario.id AS usuarioId,
//     actividad.nombre AS actividad,
//     trainer.nombre AS nombreTrainer
// FROM 
//     registroingreso
// INNER JOIN 
//     usuario ON registroingreso.fkidUserGym = usuario.id
// INNER JOIN 
//     usuario AS trainer ON registroingreso.fkidTrainer = trainer.id
// INNER JOIN 
//     actividad ON registroingreso.fkidActividad = actividad.id";
        
//         $statement = $this->dbConnection->query($sql);
//         $res = $statement->fetchAll(PDO::FETCH_OBJ);
//         return $res;
//     }

//     public function save()
// {
//     try {
//         // 1. Convierte las fechas de DateTime a string
//         $fechaIn = $this->fechaIn->format('Y-m-d');
//         $fechaOut = $this->fechaOut->format('Y-m-d');
        

//         // 2. Prepara la consulta SQL
//         $sql = $this->dbConnection->prepare("INSERT INTO $this->table (fechaIn, fechaOut,fkidUserGym, fkidActividad, fkidTrainer)
//         VALUES (:fechaIn, :fechaOut, fkidUserGym, fkidActividad, fkidTrainer)");

//         // 3. Asocia los parámetros
//         $sql->bindParam(":fechaIn", $fechaIn, PDO::PARAM_STR);
//         $sql->bindParam(":fechaOut", $fechaOut, PDO::PARAM_STR);
//         $sql->bindParam(":fkidUserGym", $fkidUserGym, PDO::PARAM_INT);
//         $sql->bindParam(":fkidActividad", $this->fkidActividad, PDO::PARAM_INT);
//         $sql->bindParam(":fkidTrainer", $this->fkidTrainer, PDO::PARAM_INT);

//         // 4. Ejecuta la consulta
//         $res = $sql->execute();
//         return $res;

//     } catch (PDOException $ex) {
//         echo "Error en la consulta: " . $ex->getMessage();
//     }
// }
    

//     public function deleteRegistroIngreso()
//     {
//         try {
//             $sql = "DELETE FROM $this->table WHERE id = :id";
//             $statement = $this->dbConnection->prepare($sql);
//             $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
//             $res = $statement->execute();
//             return $res;
//         } catch (PDOException $ex) {
//             echo "Error al eliminar la ficha" . $ex->getMessage();
//         }
//     }



//     public function editRegistroIngreso()
// {
//     try {
//         // Convierte las fechas de DateTime a string
//         $fechaIn = $this->fechaIn->format('Y-m-d');
//         $fechaOut = $this->fechaOut->format('Y-m-d');

//         // Prepara la consulta SQL
//         $sql = "UPDATE registroingreso SET 
//                     fechaIn = :fechaIn, 
//                     fechaOut = :fechaOut, 
//                     fkidUserGym = :usuarioId, 
//                     fkidActividad = :actividad, 
//                     fkidTrainer = :nombreTrainer 
//                 WHERE id = :id";

//         $statement = $this->dbConnection->prepare($sql);
//         $statement->bindParam(":fechaIn", $fechaIn, PDO::PARAM_STR);
//         $statement->bindParam(":fechaOut", $fechaOut, PDO::PARAM_STR);
//         $statement->bindParam(":fkidUserGym", $fkidUserGym, PDO::PARAM_INT);
//         $statement->bindParam(":fkidActividad", $fkidActividad, PDO::PARAM_INT);
//         $statement->bindParam(":fkidTrainer", $fkidTrainer, PDO::PARAM_INT);

//         $resp = $statement->execute();
//         return $resp;
//     } catch (PDOException $ex) {
//         echo "La ficha no pudo ser editada: " . $ex->getMessage();
//     }
// }
//     public function getOneGestor()
//     {
//         try {
//             $sql = "SELECT * FROM $this->table  WHERE id= :id";
//             $statement = $this->dbConnection->prepare($sql);
//             $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
//             $statement->execute();
//             $res = $statement->fetchAll(PDO::FETCH_OBJ);
//             return $res;

//         } catch (PDOException $ex) {
//             echo "Error al obtener el gestor>" . $ex->getMessage();
//         }
//     }

//     public function getOnePrograma()
//     {
//         try {
//             $sql = "SELECT * FROM $this->table  WHERE id= :id";
//             $statement = $this->dbConnection->prepare($sql);
//             $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
//             $statement->execute();
//             $res = $statement->fetchAll(PDO::FETCH_OBJ);
//             return $res;

//         } catch (PDOException $ex) {
//             echo "Error al obtener el programa>" . $ex->getMessage();
//         }
//     }

//     public function getOneFicha()
//     {
//         try {
//             $sql = "SELECT * FROM $this->table  WHERE id = :id";
//             $statement = $this->dbConnection->prepare($sql);
//             $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
//             $statement->execute();
//             $res = $statement->fetchAll(PDO::FETCH_OBJ);
//             return $res;

//         } catch (PDOException $ex) {
//             echo "Error al obtener la ficha>" . $ex->getMessage();
//         }
//     }
 }