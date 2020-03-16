<?php
      function writeerrors($ewt) {
       $errors = "counts/errors.txt";
       $openerrors = fopen($errors, 'w') or die("can't open file");
       fwrite($openerrors, $ewt);
       fclose($openerrors);}
	 
    include ('connectcount.php');
	 $sql = "SELECT * FROM `count` ORDER BY  id DESC LIMIT 1";
     $query = mysqli_query($dbase, $sql);          
  if(!$query){
    echo 'Не удалось выполнить авторизацию!';
    }
  else {
    if (mysqli_num_rows($query) > 0){
      $res = mysqli_fetch_array($query);
      $cwtold = $res['cold'];
      $hwtold = $res['hot'];
    }
    else{
      echo  'В  таблице нет данных !';
   }
  }
	if (isset($_POST['coldwater'])) {
	$cwt = $_POST['coldwater'];
	}
      if (isset($_POST['hotwater'])) {
	   $hwt = $_POST['hotwater'];
	   }
	
	 
     

    
     if((($cwt) >=($cwtold) ) && (($cwt)>0) && (($hwt) >=($hwtold)) && (($hwt)>0))
{
	 $deltacold= ($cwt-$cwtold);
     $deltahot= ($hwt-$hwtold);
  include ('insdata.php');
		}  
      
  

  
     
  if((($cwt) < ($cwtold)) && (($cwt)>0)&&(($hwt) < ($hwtold) ) && (($hwt)>0))
      {  
        $ewt='&#1074;&#1093;&#1086;&#1076;&#1103;&#1097;&#1080;&#1077; &#1076;&#1072;&#1085;&#1085;&#1099;&#1077; &#1084;&#1077;&#1085;&#1100;&#1096;&#1077; &#1095;&#1077;&#1084; &#1087;&#1086;&#1089;&#1090;&#1091;&#1087;&#1080;&#1074;&#1096;&#1080;&#1077; &#1088;&#1072;&#1085;&#1077;&#1077;';
        writeerrors($ewt);
        echo "\n";
        echo 'coldwater=' ;
	echo $cwtold;
        echo '$';
        echo "\n";	
        
        echo 'hotwater=' ;
	echo $hwtold;
	echo '$';
        echo "\n";
      }
  else if((($cwt) < ($cwtold) ) && (($cwt)>0))

      { $ewt='&#1074;&#1093;&#1086;&#1076;&#1103;&#1097;&#1080;&#1077; &#1076;&#1072;&#1085;&#1085;&#1099;&#1077; &#1084;&#1077;&#1085;&#1100;&#1096;&#1077; &#1095;&#1077;&#1084; &#1087;&#1086;&#1089;&#1090;&#1091;&#1087;&#1080;&#1074;&#1096;&#1080;&#1077; &#1088;&#1072;&#1085;&#1077;&#1077;';
        writeerrors($ewt);

        echo "\n";
        echo 'coldwater=' ;
	echo $cwtold;	
	echo '$';
        echo "\n";
      }
  else if((($hwt) < ($hwtold) ) && (($hwt)>0))
      { $ewt='&#1074;&#1093;&#1086;&#1076;&#1103;&#1097;&#1080;&#1077; &#1076;&#1072;&#1085;&#1085;&#1099;&#1077; &#1084;&#1077;&#1085;&#1100;&#1096;&#1077; &#1095;&#1077;&#1084; &#1087;&#1086;&#1089;&#1090;&#1091;&#1087;&#1080;&#1074;&#1096;&#1080;&#1077; &#1088;&#1072;&#1085;&#1077;&#1077;';
        writeerrors($ewt);

 
        echo "\n";
        echo 'hotwater=' ;
	echo $hwtold;
	echo '$';
        echo "\n";	
      }
 




                  		
 
?>