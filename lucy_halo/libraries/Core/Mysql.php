<?php

class Mysql extends conexion 
{
    private $conexion;
    private $strquery;
    private $arrvalues;

function __construct()
{
    $this->conexion = new conexion();
    $this->conexion = $this->conexion->conect();
}

public function insert(string $query, array $arrvalues)
{
   $this->strquery = $query;
   $this->arrVAlues = $arrvalues;
   $insert = $this->conexion->prepare($this->strquery);
   $resInsert = $insert->execute($this->arrVAlues);
   if($resInsert)
   {
       $lastInsert = $this->conexion->lastInsertId();
      }else{
          $lastInsert = 0;
      }
      return $lastInsert;
}

public function select(string $query)
{
    $this->strquery = $query;
    $result = $this->conexion->prepare($this->strquery);
    $result->execute();
    $data = $result->fetch(PDO::FETCH_ASSOC);
    return $data;
}
  //devuelve todos los registros
public function select_all(string $query)
{
    $this->strquery = $query;
    $result = $this->conexion->prepare($this->strquery);
    $result->execute();
    $data = $result->fetchall(PDO::FETCH_ASSOC);
    return $data;
}

public function update(string $query, array $arrvalues)
{
    $this->strquery = $query;
    $this->arrVAlues = $arrvalues;
    $update = $this->conexion->prepare($this->strquery);
    $resExecute = $update->execute($this->arrVAlues);
    return $resExecute;
}

//eliminar 
public function delete(string $query)
{
    $this->strquery = $query;
    $result = $this->conexion->prepare($this->strquery);
    $result->execute();  //revisar lo ultimo del video 24
    return $result; 
}


}

?>