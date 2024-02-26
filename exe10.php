<?php
// Crie duas traits, 'LogErro' e 'LogInfo', ambas com um método 'registrarLog'.
// Em seguida, crie uma classe 'Registro' que utiliza ambas as traits.
// Demonstre o uso da classe e resolva possíveis conflitos de métodos.

trait LogError{
    private function registerLogError($error){
         echo "Seguinte erro ocorreu: $error";
     }
 }
 trait LogInfo{
     private function registerLogInfo($info){
         echo "$info, enviado com sucesso!";
     }
 
 }
 
 class Record{
     use LogError;
     use LogInfo;
 
     private $condition;
 
     public function sendInformation($condition){
         if($condition === true){
             $this->registerLogInfo("Name");
         }
         else{
             $this->registerLogError("ERROR   404");
         }
     }
 }
 
 $record = new Record();
 $record->sendInformation(false);
 ?>
 