<?php
   include('libreria.php');
    $oct1 = $_POST['oct1'];
    $oct2 = $_POST['oct2'];
    $oct3 = $_POST['oct3'];
    $oct4 = $_POST['oct4'];
    $pre = $_POST['pre'];

  

  $ip=$oct1.".".$oct2.".".$oct3.".".$oct4;


/*//////////////////////////////////////////////////////////// CONDICIONES///////////////////////////////////////// */
  if($oct1>=192 && $oct1<=223){/*<-------Entra a clase C validando octeto 1*/
                 if($oct2>=1 && $oct2<=255){/*<-------Valida octeto 2 en  clase C*/
                                if($oct3>=1 && $oct3<=255){/*<-------Valida octeto 3 en  clase C*/
                                                if($oct4==0){/*<-------Valida octeto 4 en  clase C*/

                                                               if($pre==26){/*<-------Valida prefijo en  clase C*/
                                $expSub=$pre-24;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                              function clasec26(int $cantHost, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                for($y=0; $y<=255; $y=$y+$cantHost){

                                  echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$oct3.'.'.$y."<br>";
                                  echo $oct1.'.'.$oct2.'.'.$oct3.'.'."255"."<br>";
                                  //$ip2=$oct1.'.'.$oct2.'.'.$oct3.'.'.($y=$y-1);

                                  //echo $numSub++."-->".$ip."<br>";

                                  $subneteo->altaclaseC($numSub,$oct1,$oct2,$oct3,$y);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.255.192
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                              
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           C
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           6
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasec26($cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                               }else{
                                                                    if($pre==27){
                                $expSub=$pre-24;
                                $expHost=32-$pre;
                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                
                                function clasec27(int $cantHost, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                for($y=0; $y<=255; $y=$y+$cantHost){

                                  echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$oct3.'.'.$y."<br>";
                                  echo $oct1.'.'.$oct2.'.'.$oct3.'.'."255"."<br>";
                                  //$ip2=$oct1.'.'.$oct2.'.'.$oct3.'.'.($y=$y-1);

                                  //echo $numSub++."-->".$ip."<br>";

                                  $subneteo->altaclaseC($numSub,$oct1,$oct2,$oct3,$y);
                                }

                              }

                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.255.224
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           C
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           5
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasec27($cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";
                                                                    }else{
                                                                         if($pre==28){
                                  function clasec28(int $cantHost, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                for($y=0; $y<=255; $y=$y+$cantHost){

                                  echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$oct3.'.'.$y."<br>";
                                  echo $oct1.'.'.$oct2.'.'.$oct3.'.'."255"."<br>";
                                  //$ip2=$oct1.'.'.$oct2.'.'.$oct3.'.'.($y=$y-1);

                                  //echo $numSub++."-->".$ip."<br>";

                                  $subneteo->altaclaseC($numSub,$oct1,$oct2,$oct3,$y);
                                }

                              }
                                 $expSub=$pre-24;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                              //echo $ip."/".$pre;
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.255.240
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           C
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           4
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasec28($cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";
                                                                         }else{
                                                                              if($pre==29){
                                $expSub=$pre-24;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasec29(int $cantHost, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                for($y=0; $y<=255; $y=$y+$cantHost){

                                  echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$oct3.'.'.$y."<br>";
                                  echo $oct1.'.'.$oct2.'.'.$oct3.'.'."255"."<br>";
                                  //$ip2=$oct1.'.'.$oct2.'.'.$oct3.'.'.($y=$y-1);

                                  //echo $numSub++."-->".$ip."<br>";

                                  $subneteo->altaclaseC($numSub,$oct1,$oct2,$oct3,$y);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.255.248
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           C
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           3
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasec29($cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                              }else{
                                                                                   if($pre==30){
                               $expSub=$pre-24;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasec30(int $cantHost, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                for($y=0; $y<=255; $y=$y+$cantHost){

                                  echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$oct3.'.'.$y."<br>";
                                  echo $oct1.'.'.$oct2.'.'.$oct3.'.'."255"."<br>";
                                  //$ip2=$oct1.'.'.$oct2.'.'.$oct3.'.'.($y=$y-1);

                                  //echo $numSub++."-->".$ip."<br>";

                                  $subneteo->altaclaseC($numSub,$oct1,$oct2,$oct3,$y);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.255.252
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           C
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           2
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasec30($cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                   }else{
                                                                                         echo "Prefijo incorrecto, introduce nuevo prefijo para clace C, entre 26 y 30...";

                                                                                   }

                                                                              }

                                                                         }

                                                                    }

                                                               }
                                                                    
                                                }else{
                                                    echo "Octeto 4 no valido en clase C, introduce un 0...";
                                                }
                                }else{
                                  echo "Octeto 3 no valido en clase C, introduce un numero de 1 a 255...";
                                }

                 }else{
                    echo "Octeto 2 no valido en clase C, introduce numero de 1 a 255...";
                 }


 /*<-------Termina clase C*/
  }else{
    if($oct1>=128 && $oct1<=191){/*<-------Entra a clase B validando octeto 1*/
                     if($oct2>=1 && $oct2<=255){/*<-------Valida octeto 2 en  clase B*/
                                    if($oct3==0){/*<-------Valida octeto 3 en  clase B*/
                                                  if($oct4==0){/*<-------Valida octeto 4 en  clase B*/
                                                                     

                                                                          if($pre==18){/*<-------Valida prefijo en  clase B*/

                                $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);

                                function claseb18(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=64-1; $i<=$cantSub-1; $i++, $j+=64, $a+=64){

                                    if($a>255 && $j>255){
                                        $a=64-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$oct2.'.'.($a+1).'.'.$oct4."<br>";
                                    echo $oct1.'.'.$oct2.'.'.($a+1).'.'."255"."<br>";
                                     //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.192.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           B
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           14
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                               <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          64 host, Cantidad de host suficientes....
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".claseb18($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                          }else{
                                                                            if($pre==19){/*<-------Valida prefijo en  clase B*/

                                $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function claseb19(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                               
                                $count=0;
                                for($i=0, $j=0, $a=32-1; $i<=$cantSub-1; $i++, $j+=32, $a+=32){

                                    if($a>255 && $j>255){
                                        $a=16-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$oct2.'.'.($a+1).'.'.$oct4."<br>";
                                    echo $oct1.'.'.$oct2.'.'.($a+1).'.'."255"."<br>";
                                     //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.224.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           B
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           13
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                               <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          32 host, Cantidad de host suficientes....
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".claseb19($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                            }else{
                                                                              if($pre==20){/*<-------Valida prefijo en  clase B*/

                                $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function claseb20(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=16-1; $i<=$cantSub-1; $i++, $j+=16, $a+=16){

                                    if($a>255 && $j>255){
                                        $a=16-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$oct2.'.'.($a+1).'.'.$oct4."<br>";
                                    echo $oct1.'.'.$oct2.'.'.($a+1).'.'."255"."<br>";
                                     //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.240.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           B
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           12
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                               <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          16 host, Cantidad de host suficientes....
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".claseb20($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                              }else{
                                                                                if($pre==21){/*<-------Valida prefijo en  clase B*/

                                $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function claseb21(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=8-1; $i<=$cantSub-1; $i++, $j+=8, $a+=8){

                                    if($a>255 && $j>255){
                                        $a=8-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$oct2.'.'.($a+1).'.'.$oct4."<br>";
                                    echo $oct1.'.'.$oct2.'.'.($a+1).'.'."255"."<br>";
                                     //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.248.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           B
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           11
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                               <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          8 host, Cantidad de host suficientes....
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".claseb21($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                }else{
                                                                                  if($pre==22){/*<-------Valida prefijo en  clase B*/

                               $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                              function claseb22(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                /*for($y=0; $y<=255; $y=$y+$cantHost){

                                  echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$y.'.'.$oct4."<br>";
                                  //$ip2=$oct1.'.'.$oct2.'.'.$oct3.'.'.($y=$y-1);

                                  //echo $numSub++."-->".$ip."<br>";

                                  $subneteo->altaclaseB($numSub,$oct1,$oct2,$oct3,$oct4);
                                }*/
                                $count=0;
                                for($i=0, $j=0, $a=4-1; $i<=$cantSub-1; $i++, $j+=4, $a+=4){

                                    if($a>255 && $j>255){
                                        $a=4-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$oct2.'.'.($a+1).'.'.$oct4."<br>";
                                    echo $oct1.'.'.$oct2.'.'.($a+1).'.'."255"."<br>";
                                     //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.252.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           B
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           10
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                               <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          4 host, Cantidad de host suficientes....
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".claseb22($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                  }else{
                                                                                    if($pre==23){/*<-------Valida prefijo en  clase B*/

                                $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                 function claseb23(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=2-1; $i<=$cantSub-1; $i++, $j+=2, $a+=2){

                                    if($a>255 && $j>255){
                                        $a=2-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$oct2.'.'.($a+1).'.'.$oct4."<br>";
                                    echo $oct1.'.'.$oct2.'.'.($a+1).'.'."255"."<br>";
                                     //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.254.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           B
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           9
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                               <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          2 host, Cantidad de host insuficientes....
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".claseb23($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                    }else{
                                                                                      if($pre==24){/*<-------Valida prefijo en  clase B*/

                               $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function claseb24(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                /*for($y=0; $y<=255; $y=$y+$cantHost){

                                  echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$y.'.'.$oct4."<br>";
                                  //$ip2=$oct1.'.'.$oct2.'.'.$oct3.'.'.($y=$y-1);

                                  //echo $numSub++."-->".$ip."<br>";

                                  $subneteo->altaclaseB($numSub,$oct1,$oct2,$oct3,$oct4);
                                }*/
                                $count=0;
                                for($i=0, $j=0, $a=$cantHost-1; $i<=$cantSub-1; $i++, $j+=$cantHost, $a+=$cantHost){

                                    if($a>255 && $j>255){
                                        $a=$cantHost-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$oct2.'.'.($a+1).'.'.$oct4."<br>";
                                     
                                     //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.255.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           B
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           8
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                               <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          256 host, Cantidad de host suficientes....
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".claseb24($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                      }else{
                                                                                        if($pre==25){/*<-------Valida prefijo en  clase B*/

                                 $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                 function claseb25(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                /*for($y=0; $y<=255; $y=$y+$cantHost){

                                  echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$y.'.'.$oct4."<br>";
                                  //$ip2=$oct1.'.'.$oct2.'.'.$oct3.'.'.($y=$y-1);

                                  //echo $numSub++."-->".$ip."<br>";

                                  $subneteo->altaclaseB($numSub,$oct1,$oct2,$oct3,$oct4);
                                }*/
                                $count=0;
                                for($i=0, $j=0, $a=$cantHost-1; $i<=$cantSub-1; $i++, $j+=$cantHost, $a=$a+$cantHost){

                                    if($a>255 && $j>255){
                                        $a=$cantHost-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$count.'.'.($a+1)."<br>";
                                    echo $oct1.'.'.$oct2.'.'.$count.'.'."255"."<br>";

                                     $subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.255.128
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           B
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           7
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                               <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          128 host, Cantidad de host suficientes....
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".claseb25($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                        }else{
                                                                                          if($pre==26){/*<-------Valida prefijo en  clase B*/

                               $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                 $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function claseb26(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                /*for($y=0; $y<=255; $y=$y+$cantHost){

                                  echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$y.'.'.$oct4."<br>";
                                  //$ip2=$oct1.'.'.$oct2.'.'.$oct3.'.'.($y=$y-1);

                                  //echo $numSub++."-->".$ip."<br>";

                                  $subneteo->altaclaseB($numSub,$oct1,$oct2,$oct3,$oct4);
                                }*/
                                $count=0;
                                for($i=0, $j=0, $a=$cantHost-1; $i<=$cantSub-1; $i++, $j+=$cantHost, $a=$a+$cantHost){

                                    if($a>255 && $j>255){
                                        $a=$cantHost-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$count.'.'.($a+1)."<br>";
                                     echo $oct1.'.'.$oct2.'.'.$count.'.'."255"."<br>";
                                     $subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.255.192
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           B
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           6
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                               <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          64 host, Cantidad de host suficientes....
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".claseb26($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                          }else{
                                                                                            if($pre==27){/*<-------Valida prefijo en  clase B*/

                                 $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                 function claseb27(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                /*for($y=0; $y<=255; $y=$y+$cantHost){

                                  echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$y.'.'.$oct4."<br>";
                                  //$ip2=$oct1.'.'.$oct2.'.'.$oct3.'.'.($y=$y-1);

                                  //echo $numSub++."-->".$ip."<br>";

                                  $subneteo->altaclaseB($numSub,$oct1,$oct2,$oct3,$oct4);
                                }*/
                                $count=0;
                                for($i=0, $j=0, $a=$cantHost-1; $i<=$cantSub-1; $i++, $j+=$cantHost, $a=$a+$cantHost){

                                    if($a>255 && $j>255){
                                        $a=$cantHost-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$count.'.'.($a+1)."<br>";
                                    echo $oct1.'.'.$oct2.'.'.$count.'.'."255"."<br>";
                                     $subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.255.224
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           B
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           5
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                               <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          32 host, Cantidad de host suficientes....
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".claseb27($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                            }else{
                                                                                              if($pre==28){/*<-------Valida prefijo en  clase B*/

                               $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function claseb28(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                /*for($y=0; $y<=255; $y=$y+$cantHost){

                                  echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$y.'.'.$oct4."<br>";
                                  //$ip2=$oct1.'.'.$oct2.'.'.$oct3.'.'.($y=$y-1);

                                  //echo $numSub++."-->".$ip."<br>";

                                  $subneteo->altaclaseB($numSub,$oct1,$oct2,$oct3,$oct4);
                                }*/
                                $count=0;
                                for($i=0, $j=0, $a=$cantHost-1; $i<=$cantSub-1; $i++, $j+=$cantHost, $a=$a+$cantHost){

                                    if($a>255 && $j>255){
                                        $a=$cantHost-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$count.'.'.($a+1)."<br>";
                                    echo $oct1.'.'.$oct2.'.'.$count.'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.255.240
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           B
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           4
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                               <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          16 host, Cantidad de host suficientes....
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".claseb28($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                              }else{
                                                                                                 if($pre==29){/*<-------Valida prefijo en  clase B*/
                                 $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function claseb29(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                /*for($y=0; $y<=255; $y=$y+$cantHost){

                                  echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$y.'.'.$oct4."<br>";
                                  //$ip2=$oct1.'.'.$oct2.'.'.$oct3.'.'.($y=$y-1);

                                  //echo $numSub++."-->".$ip."<br>";

                                  $subneteo->altaclaseB($numSub,$oct1,$oct2,$oct3,$oct4);
                                }*/
                                $count=0;
                                for($i=0, $j=0, $a=$cantHost-1; $i<=$cantSub-1; $i++, $j+=$cantHost, $a=$a+$cantHost){

                                    if($a>255 && $j>255){
                                        $a=$cantHost-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$count.'.'.($a+1)."<br>";
                                    echo $oct1.'.'.$oct2.'.'.$count.'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.255.248
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                          B
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           3
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                               <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          8 host, Cantidad de host suficientes....
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".claseb29($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                                 }else{
                                                                                                    if($pre==30){/*<-------Valida prefijo en  clase B*/

                                $expSub=$pre-16;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function claseb30(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                /*for($y=0; $y<=255; $y=$y+$cantHost){

                                  echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$y.'.'.$oct4."<br>";
                                  //$ip2=$oct1.'.'.$oct2.'.'.$oct3.'.'.($y=$y-1);

                                  //echo $numSub++."-->".$ip."<br>";

                                  $subneteo->altaclaseB($numSub,$oct1,$oct2,$oct3,$oct4);
                                }*/
                                $count=0;
                                for($i=0, $j=0, $a=$cantHost-1; $i<=$cantSub-1; $i++, $j+=$cantHost, $a=$a+$cantHost){

                                    if($a>255 && $j>255){
                                        $a=$cantHost-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$oct2.'.'.$count.'.'.($a+1)."<br>";
                                    echo $oct1.'.'.$oct2.'.'.$count.'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.255.252
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           B
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           2
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                               <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          4 host, Cantidad de host suficientes....
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".claseb30($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                                    }else{
                                                                                                      echo "Prefijo incorrecto, introduce nuevo prefijo para clace B, entre 18 y 30...";

                                                                                                    }

                                                                                                 }

                                                                                              }

                                                                                            }

                                                                                          }

                                                                                        }

                                                                                      }

                                                                                    }

                                                                                  }

                                                                                }

                                                                              }

                                                                            }

                                                                          }


                                                  }else{
                                                      echo "Octeto 4 no valido en clase B, introduce un 0...";
                                                  }

                                    }else{
                                        echo "Octeto 3 no valido no valido en clase B, introduce un 0...";
                                    }

                     }else{
                         echo "Octeto 2 no valido en clase B, introduce un numero de 1 a 255...";
                     }
  /*<-------Termina clase B*/               
    }else{
       if($oct1>=0 && $oct1<=127){/*<-------Entra a clase A validando octeto 1*/
                      if($oct2==0){/*<-------Valida octeto 2 en  clase A*/
                                     if($oct3==0){/*<-------Valida octeto 3 en  clase A*/
                                                    if($oct4==0){/*<-------Valida octeto 4 en  clase A*/
                                                                             

                                                                             if($pre==10){/*<-------Valida prefijo en  clase A*/

                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea10(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=64-1; $i<=$cantSub-1; $i++, $j+=64, $a=$a+64){

                                    if($a>255 && $j>255){
                                        $a=64-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.($a+1).'.'.$oct3.'.'.$oct4."<br>";
                                    echo $oct1.'.'.($a+1).'.'."255".'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.192.0.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           22
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          64 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasea10($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                             }else{
                                                                                if($pre==11){/*<-------Valida prefijo en  clase A*/

                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea11(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=32-1; $i<=$cantSub-1; $i++, $j+=32, $a=$a+32){

                                    if($a>255 && $j>255){
                                        $a=32-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.($a+1).'.'.$oct3.'.'.$oct4."<br>";
                                    echo $oct1.'.'.($a+1).'.'."255".'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.224.0.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           21
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          32 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasea11($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                }else{
                                                                                     if($pre==12){/*<-------Valida prefijo en  clase A*/

                                 $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea12(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=16-1; $i<=$cantSub-1; $i++, $j+=16, $a=$a+16){

                                    if($a>255 && $j>255){
                                        $a=16-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.($a+1).'.'.$oct3.'.'.$oct4."<br>";
                                    echo $oct1.'.'.$oct2.'.'."255".'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.240.0.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           20
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          16 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasea12($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                     }else{
                                                                                          if($pre==13){/*<-------Valida prefijo en  clase A*/

                             $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea13(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=8-1; $i<=$cantSub-1; $i++, $j+=8, $a=$a+8){

                                    if($a>255 && $j>255){
                                        $a=8-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.($a+1).'.'.$oct3.'.'.$oct4."<br>";
                                    echo $oct1.'.'.$oct2.'.'."255".'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.248.0.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           19
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          8 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                              <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasea13($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                          }else{
                                                                                               if($pre==14){/*<-------Valida prefijo en  clase A*/

                                 $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea14(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=4-1; $i<=$cantSub-1; $i++, $j+=4, $a=$a+4){

                                    if($a>255 && $j>255){
                                        $a=4-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.($a+1).'.'.$oct3.'.'.$oct4."<br>";
                                    echo $oct1.'.'.$oct2.'.'."255".'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.252.0.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           18
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          4 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasea14($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                               }else{
                                                                                                   if($pre==15){/*<-------Valida prefijo en  clase A*/

                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea15(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=2-1; $i<=$cantSub-1; $i++, $j+=2, $a=$a+2){

                                    if($a>255 && $j>255){
                                        $a=2-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.($a+1).'.'.$oct3.'.'.$oct4."<br>";
                                    echo $oct1.'.'.$oct2.'.'."255".'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.254.0.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           17
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          2 host, Cantidad de host insuficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasea15($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";


                                                                                                   }else{
                                                                                                       if($pre==16){/*<-------Valida prefijo en  clase A*/

                               $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                 function clasea16(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=1-1; $i<=$cantSub-1; $i++, $j+=1, $a=$a+1){

                                    if($a>255 && $j>255){
                                        $a=1-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.($a+1).'.'.$oct3.'.'.$oct4."<br>";
                                    echo $oct1.'.'.$oct2.'.'."255".'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.255.0.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           16
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          1 host, Cantidad de host insuficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasea16($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                                       }else{
                                                                                                            if($pre==17){/*<-------Valida prefijo en  clase A*/

                                 $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea17(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=128-1; $i<=$cantSub-1; $i++, $j+=128, $a=$a+128){

                                    if($a>255 && $j>255){
                                        $a=128-1;
                                        $j=0;
                                        $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.($a+1).'.'.$oct3.'.'.$oct4."<br>";
                                    echo $oct1.'.'.$oct2.'.'."255".'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.128.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           15
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          128 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasea17($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                                            }else{
                                                                                                                if($pre==18){/*<-------Valida prefijo en  clase A*/

                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea18(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=64-1; $i<=$cantSub-1; $i++, $j+=64, $a=$a+64){

                                    if($a>255 && $j>255){
                                        $a=64-1;
                                        $j=0;
                                        $count++;
                                    }
                                    if($a>255){
                                      $count++;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$count.'.'.($a+1).'.'.$oct4."<br>";
                                    //echo $oct1.'.'.$oct2.'.'.($a-1).'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.192.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           14
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          64 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          
                                    </td>
                                    <td> 
                                          ".clasea18($cantHost,$cantSub,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                                                }else{
                                                                                                                     if($pre==19){/*<-------Valida prefijo en  clase A*/

                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                              //echo $ip."/".$pre;

                                function clasea19(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=32-1; $i<=$cantSub-1; $i++, $j+=32, $a=$a+32){

                                    if($a>255 && $j>255){
                                        $a=32-1;
                                        $j=0;
                                        $count++;
                                    }
                                    if($a>255){
                                      $count++;
                                    }
                                    if($count==255){
                                      break;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$count.'.'.$a.'.'.$oct4."<br>";
                                    //echo $oct1.'.'.$oct2.'.'.($a-1).'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.224.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           13
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          32 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          <label><b>Todos los rangos de las subredes:</b></label>
                                    </td>
                                    <td> 
                                          ".clasea19($cantSub,$cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             
    
    
    
                    </table>";

                                                                                                                     }else{
                                                                                                                          if($pre==20){/*<-------Valida prefijo en  clase A*/

                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea20(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=16-1; $i<=$cantSub-1; $i++, $j+=16, $a=$a+16){

                                    if($a>255 && $j>255){
                                        $a=16-1;
                                        $j=0;
                                        $count++;
                                    }
                                    if($a>255){
                                      $count++;
                                    }
                                    if($count==255){
                                      break;
                                    }
                                    
                                    
                                    echo $numSub++."-->".$oct1.'.'.$count.'.'.$a.'.'.$oct4."<br>";
                                    //echo $oct1.'.'.$oct2.'.'.($a-1).'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.240.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           12
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          16 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Todos los rangos de las subredes:</b></label>
                                    </td>
                                    <td> 
                                          ".clasea20($cantSub,$cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             
    
                    </table>";



                                                                                                                          }else{
                                                                                                                               if($pre==21){/*<-------Valida prefijo en  clase A*/


                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea21(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=8-1; $i<=$cantSub-1; $i++, $j+=8, $a=$a+8){

                                    if($a>255 && $j>255){
                                        $a=8-1;
                                        $j=0;
                                        $count++;
                                    }
                                    if($a>255){
                                      $count++;
                                    }
                                    if($count==255){
                                      break;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$count.'.'.$a.'.'.$oct4."<br>";
                                    //echo $oct1.'.'.$oct2.'.'.($a-1).'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.248.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           11
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          8 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          <label><b>Todos los rangos de las subredes:</b></label>
                                    </td>
                                    <td> 
                                          ".clasea21($cantSub,$cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                                                               }else{
                                                                                                                                    if($pre==22){/*<-------Valida prefijo en  clase A*/

                               $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea22(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=4-1; $i<=$cantSub-1; $i++, $j+=4, $a=$a+4){

                                    if($a>255 && $j>255){
                                        $a=4-1;
                                        $j=0;
                                        $count++;
                                    }
                                    if($a>255){
                                      $count++;
                                    }
                                    if($count==255){
                                      break;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$count.'.'.$a.'.'.$oct4."<br>";
                                    //echo $oct1.'.'.$oct2.'.'.($a-1).'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.252.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           10
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          4 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          <label><b>Todos los rangos de las subredes:</b></label>
                                    </td>
                                    <td> 
                                          ".clasea22($cantSub,$cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                                                                    }else{
                                                                                                                                         if($pre==23){

                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea23(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=2-1; $i<=$cantSub-1; $i++, $j+=2, $a=$a+2){

                                    if($a>255 && $j>255){
                                        $a=2-1;
                                        $j=0;
                                        $count++;
                                    }
                                    if($a>255){
                                      $count++;
                                    }
                                    if($count==255){
                                      break;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$count.'.'.$a.'.'.$oct4."<br>";
                                    //echo $oct1.'.'.$oct2.'.'.($a-1).'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.254.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           9
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          2 host, Cantidad de host insuficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          <label><b>Todos los rangos de las subredes:</b></label>
                                    </td>
                                    <td> 
                                          ".clasea23($cantSub,$cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                                                                         }else{
                                                                                                                                              if($pre==24){

                               $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea24(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                for($i=0, $j=0, $a=1-1; $i<=$cantSub-1; $i++, $j+=1, $a=$a+1){

                                    if($a>255 && $j>255){
                                        $a=1-1;
                                        $j=0;
                                        $count++;
                                    }
                                    if($a>255){
                                      $count++;
                                    }
                                    if($count==255){
                                      break;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$count.'.'.$a.'.'.$oct4."<br>";
                                    //echo $oct1.'.'.$oct2.'.'.($a-1).'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.255.0
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           8
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          1 host, Cantidad de host insuficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          <label><b>Todos los rangos de las subredes:</b></label>
                                    </td>
                                    <td> 
                                          ".clasea24($cantSub,$cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                                                                              }else{
                                                                                                                                                   if($pre==25){

                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea25(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                $count1=0;
                                for($i=0, $j=0, $a=128-1; $i<=$cantSub-1; $i++, $j+=128, $a=$a+128){

                                    if($a>255 && $j>255){
                                        $a=128-1;
                                        $j=0;
                                        $count++;
                                    }
                                    if($a>255){
                                      $count++;
                                    }
                                    if($count==255){
                                      $count1++;
                                    }
                                    if($count==255 and $count1==255){
                                      break;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$count1.'.'.$count.'.'.$a."<br>";
                                    //echo $oct1.'.'.$oct2.'.'.($a-1).'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.0.128
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           7
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          128 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Todos los rangos de las subredes:</b></label>
                                    </td>
                                    <td> 
                                          ".clasea25($cantSub,$cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>

    
                    </table>";

                                                                                                                                                   }else{
                                                                                                                                                        if($pre==26){

                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea26(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                $count1=0;
                                for($i=0, $j=0, $a=64-1; $i<=$cantSub-1; $i++, $j+=64, $a=$a+64){

                                    if($a>255 && $j>255){
                                        $a=64-1;
                                        $j=0;
                                        $count++;
                                    }
                                    if($a>255){
                                      $count++;
                                    }
                                    if($count==255){
                                      $count1++;
                                    }
                                    if($count==255 and $count1==255){
                                      break;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$count1.'.'.$count.'.'.$a."<br>";
                                    //echo $oct1.'.'.$oct2.'.'.($a-1).'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.0.192
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           6
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          64 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Todos los rangos de las subredes:</b></label>
                                    </td>
                                    <td> 
                                          ".clasea26($cantSub,$cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                                                                                        }else{
                                                                                                                                                             if($pre==27){

                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea27(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                $count1=0;
                                for($i=0, $j=0, $a=32-1; $i<=$cantSub-1; $i++, $j+=32, $a=$a+32){

                                    if($a>255 && $j>255){
                                        $a=32-1;
                                        $j=0;
                                        $count++;
                                    }
                                    if($a>255){
                                      $count++;
                                    }
                                    if($count==255){
                                      $count1++;
                                    }
                                    if($count==255 and $count1==255){
                                      break;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$count1.'.'.$count.'.'.$a."<br>";
                                    //echo $oct1.'.'.$oct2.'.'.($a-1).'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.0.224
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           5
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          32 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Todos los rangos de las subredes:</b></label>
                                    </td>
                                    <td> 
                                          ".clasea27($cantSub,$cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";


                                                                                                                                                             }else{
                                                                                                                                                                  if($pre==28){

                                 $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                function clasea28(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                $count1=0;
                                for($i=0, $j=0, $a=16-1; $i<=$cantSub-1; $i++, $j+=16, $a=$a+16){

                                    if($a>255 && $j>255){
                                        $a=16-1;
                                        $j=0;
                                        $count++;
                                    }
                                    if($a>255){
                                      $count++;
                                    }
                                    if($count==255){
                                      $count1++;
                                    }
                                    if($count==255 and $count1==255){
                                      break;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$count1.'.'.$count.'.'.$a."<br>";
                                    //echo $oct1.'.'.$oct2.'.'.($a-1).'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.0.240
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           24
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          16 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Todos los rangos de las subredes:</b></label>
                                    </td>
                                    <td> 
                                          ".clasea28($cantSub,$cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                                                                                                  }else{
                                                                                                                                                                       if($pre==29){

                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                                 function clasea29(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                $count1=0;
                                for($i=0, $j=0, $a=8-1; $i<=$cantSub-1; $i++, $j+=8, $a=$a+8){

                                    if($a>255 && $j>255){
                                        $a=8-1;
                                        $j=0;
                                        $count++;
                                    }
                                    if($a>255){
                                      $count++;
                                    }
                                    if($count==255){
                                      $count1++;
                                    }
                                    if($count==255 and $count1==255){
                                      break;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$count1.'.'.$count.'.'.$a."<br>";
                                    //echo $oct1.'.'.$oct2.'.'.($a-1).'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.0.248
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           3
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          8 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                             <tr>
                                    <td> 
                                          <label><b>Todos los rangos de las subredes:</b></label>
                                    </td>
                                    <td> 
                                          ".clasea29($cantSub,$cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                                                                                                       }else{
                                                                                                                                                                            if($pre==30){

                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                              function clasea30(int $cantHost,$cantSub, String $oct1,$oct2,$oct3,$oct4){
                                echo "<b>Intervalos de las subredes:</b><br>";
                                $subneteo = new subneteo();
                                $subneteo->vaciarTablas();
                                $subneteo->vaciarIntervalo();

                                $subneteo->altaIntervalo($cantHost);

                                $numSub=0;
                                
                                $count=0;
                                $count1=0;
                                for($i=0, $j=0, $a=4-1; $i<=$cantSub-1; $i++, $j+=4, $a=$a+4){

                                    if($a>255 && $j>255){
                                        $a=4-1;
                                        $j=0;
                                        $count++;
                                    }
                                    if($a>255){
                                      $count++;
                                    }
                                    if($count==255){
                                      $count1++;
                                    }
                                    if($count==255 and $count1==255){
                                      break;
                                    }
                                    
                                    echo $numSub++."-->".$oct1.'.'.$count1.'.'.$count.'.'.$a."<br>";
                                    //echo $oct1.'.'.$oct2.'.'.($a-1).'.'."255"."<br>";
                                    //$subneteo->altaclaseB($numSub,$oct1,$oct2,$count,$a);
                                }

                              }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.0.252
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           2
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          4 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            
                             <tr>
                                    <td> 
                                          <label><b>Todos los rangos de las subredes:</b></label>
                                    </td>
                                    <td> 
                                          ".clasea30($cantSub,$cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
    
                    </table>";
                                                                                                                                                                            }else{
                                                                                                                                                                                 if($pre==30){

                                $expSub=$pre-8;
                                $expHost=32-$pre;

                                $cantSub=pow(2,$expSub);
                                $cantHost=pow(2,$expHost);
                              function clasea30(int $cantHost, String $oct1,$oct2,$oct3,$oct4){

                                       /*for($y=0; $y<=$cantHost; $y++){
                                                 
                                                 echo $oct1.".".$oct2.".".$y.".".$oct4."<br>";

                                                 if($y%31==0){
                                                      echo $oct1.".".$oct2.".".$y."."."255"."<br>";
                                                 }else{
                                                     if($y==255){

                                                     }
                                                 }
                                                
                                            }*/

                                             /*for($y=0; $y<=$cantHost; $y++){

                                                 for($j=0; $j<=256; $j=$j+31){

                                                      echo $oct1.".".$oct2.".".$j.".".$oct4."<br>";
                                                      echo $y."<br>";

                                                 } 

                                            }*/

                                            for($y=0; $y<=255; $y=$y+4){

                                              echo $numSub++.$oct1.".".$oct2.".".$oct3.".".$y."<br>";
                                              echo $oct1.".".$oct2.".".$oct3.".".($y+3)."<br>";

                                              if(($y+3)==255){
                                                 $y=-4;
                                                 $oct3++;
                                              }
                                              if($oct3==255){
                                                 $oct3=0;
                                                 $oct2++;
                                              }
                                              if($oct2==255){
                                                break;
                                              }

                                            }
                                         
                                           
                                          
                                }
                                echo"
                                        <table>
                                              <tr>
                                    <td> 
                                           <label><b>Mascara o submascara:</b></label>
                                    </td>
                                      <td> 
                                           255.0.0.252
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Clase:</b></label>
                                    </td>
                                      <td> 
                                           A
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                           <label><b>Bits para subneteo:</b></label>
                                    </td>
                                      <td> 
                                           2
                                      </td>
                                    <td> </td>
                                      <td> </td>
                                    <td> </td>
                            </tr>
                          <tr>
           
                                    <td> 
                                           <label><b>Numero total de subredes:</b></label> 
                                    </td>
                                    <td> 
                                           ".$cantSub."
                                    </td>
                                    <td>   
                                  </td>
                                    <td> </td>
                                    <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos por subred:</b></label>
                                    </td>
                                    <td> 
                                          ".$cantHost."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Numero total de nodos reales por subred (rangos):</b></label>
                                    </td>
                                    <td> 
                                          4 host, Cantidad de host suficientes...
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
                            <tr>
                                    <td> 
                                          <label><b>Todos los rangos de las subredes:</b></label>
                                    </td>
                                    <td> 
                                          ".clasea30($cantHost,$oct1,$oct2,$oct3,$oct4)."
                                    </td>
                                    <td> </td>
                                    <td> </td>
                                      <td> </td>
                            </tr>
    
                    </table>";

                                                                                                                                                                                 }else{
                                                                                                                                                                                   echo "Prefijo incorrecto, introduce nuevo prefijo para clase 
                                                                                                                                                                                        A, entre 10 y 30...";

                                                                                                                                                                                 }

                                                                                                                                                                            }

                                                                                                                                                                       }

                                                                                                                                                                  }

                                                                                                                                                             }

                                                                                                                                                        }

                                                                                                                                                   }

                                                                                                                                              }

                                                                                                                                         } 

                                                                                                                                    }

                                                                                                                               }

                                                                                                                          }

                                                                                                                     } 

                                                                                                                }

                                                                                                            }

                                                                                                       }

                                                                                                   }

                                                                                               }

                                                                                          }

                                                                                     }

                                                                                }


                                                                             }


                                                    }else{
                                                        echo "Octeto 4 no valido en clase A, introduce un 0...";
                                                    }
                                     }else{
                                          echo "Octeto 3 no valido en clase A, introduce un 0...";
                                     }

                      }else{
                         echo "Octeto 2 no valido en clase A, introduce un 0...";
                      }
       }else{
            echo "Octeto 1 no valido, introduce un numero entre el 0 y el 223...";
       }
  /*<-------Termina clase A*/ 
    }
  }
/*//////////////////////////////////////////////////////////// /////////////////////////////////////////////////// */



 ?>