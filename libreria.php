<?php


function pagina_actual($actual){
if($_SERVER["PHP_SELF"] == $actual)
echo "class='active' ";//DEVUELVE LA RUTA..REQUEST_URI..
}



class subneteo{
	//atributos
	private $conexion;
	//Métodos
	public function __construct(){
    $servidor= "localhost";
    $usuario="root";
    $contraseña="";//12345678 
    $bd="subneteo";

    $this->conexion= new mysqli($servidor,$usuario,$contraseña,$bd);
    if($this->conexion->connect_errno >0){//Existe error?
    	die("sin conexion".$this->conexion->connect_errno);
    }
      $this->conexion->set_charset("utf8");//Devuelve todo en UTF

	}
/*******************CLASE B***************************************************************************************/
public function altaClaseB($numSub,$oct1,$oct2,$count,$a){
    $sql = "INSERT INTO claseb
    SET numsub='$numSub',
        oct1='$oct1',
        oct2='$oct2',
        oct3='$count',
        oct4='$a'";
    IF(!$resultado=$this->conexion->query($sql))//se insertó correctamente?
    die ("Error:".$this->conexion->error);
    else
      return(true);
  }
/*****************************************************************************************************************/
/*******************CLACE C***************************************************************************************/
  public function altaClaseC($numSub,$oct1,$oct2,$oct3,$y){
    $sql = "INSERT INTO clasec
    SET numsub='$numSub',
        oct1='$oct1',
        oct2='$oct2',
        oct3='$oct3',
        oct4='$y'";
    IF(!$resultado=$this->conexion->query($sql))//se insertó correctamente?
    die ("Error:".$this->conexion->error);
    else
      return(true);
  }

  public function buscarClaseCSubred(){
        $sql="SELECT * FROM medicion WHERE Nivel>=1.20";  
        $resultado=mysqli_query($con,$sql) or die ('Error en el query database'); 


    $sql ="SELECT * FROM clasec WHERE oct4='' and oct4='+'  ";
   IF(!$resultado=$this->conexion->query($sql))
    die ("Error:".$this->conexion->error);
    else{
      $contador=0;
      echo "<ul>";
      while ($registro=$resultado->fetch_assoc()) {
       echo "<li>" .$registro['nombre']." ".$registro['apellidos']. "<li>";
       $contador++;

      }
      echo "</ul> <p>Resultados encontrados:".$contador."</p>";

 }
  }

/******************************************************************************************************************/
/********************FUNCIONES GENERALES***************************************************************************/
  public function altaIntervalo($intervalo){
    $sql = "INSERT INTO intervalo
    SET intervalo='$intervalo'";
    IF(!$resultado=$this->conexion->query($sql))//se insertó correctamente?
    die ("Error:".$this->conexion->error);
    else
      return(true);
  }

  public function vaciarTablas(){
    $sql1 = "TRUNCATE  table clasec";
    $sql2 = "TRUNCATE  table claseb";
    $sql3 = "TRUNCATE  table clasea";

    IF(!$resultado=$this->conexion->query($sql1)){
        die ("Error:".$this->conexion->error);
    }else{
       return(true);
    }

   IF(!$resultado=$this->conexion->query($sql2)){
        die ("Error:".$this->conexion->error);
    }else{
       return(true);
    }

    IF(!$resultado=$this->conexion->query($sql3)){
        die ("Error:".$this->conexion->error);
    }else{
       return(true);
    }
  }

  public function vaciarIntervalo(){
    $sql1 = "TRUNCATE  table intervalo";
    
    IF(!$resultado=$this->conexion->query($sql1)){
        die ("Error:".$this->conexion->error);
    }else{
       return(true);
    }
  }
/******************************************************************************************************************/

}




?>