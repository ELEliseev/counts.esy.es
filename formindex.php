<html>

<head>

<title> HOME
          </title>

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

   <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

 
   <link rel="stylesheet" type="text/css" href="style.css">
 
<script>  

        function show()  
        {  
           
 $.ajax({  
                url: "transfer/echocold.php", 
 
                cache: false,
  
               success: function(html){
  
                    $("#coldwater").html(html);
 
				}
             }); 

  $.ajax({  
                url: "transfer/echohot.php", 
 
                cache: false, 
 
                success: function(html){ 
 
                    $("#hotwater").html(html);
 
                }
             });

   $.ajax({  
                url: "transfer/echoerrors.php", 
 
                cache: false,
  
               success: function(html){
  
                    $("#errors").html(html);
 
				}
             }); 
			 
 $.ajax({  
                url: "transfer/echoalarm.php", 
 
                cache: false,
  
               success: function(html){
  
                    $("#alarmtext").html(html);
 
				}
             }); 
 
             
        }

        
        $(document).ready(function(){  show();
  
            setInterval('show()',10000);  
        }); 

        
 
                                        


</script>
 
   
</head>
  
 <body>
 <?php
  session_start();
  if($_SESSION['auth']!=true){
?>
<form action="index.php" method="post" class="formlogin">
    <label> Логин: <input class="input" type="text" name="login" size="10" /></label> <br /><br />
    <label> Пароль: <input class="input" type="password" name="password" size="10" /></label> <br /><br />
    <input type="hidden" name="login_start" value="ok" />
    <input class="submit"  onmouseover="this.className='submitnew'"      
onmouseout="this.className='submit'" type="submit" value="Войти" />
 </form>


<?php
}
else{
?> 
  <form action="index.php" method="post">
  <p>Здравствуйте, <b><?php echo $_SESSION['login'];?></b>!</p>
    <input  type="hidden" name="logoff" value="ok" />
    <input  class="submit"  onmouseover="this.className='submitnew'"      
onmouseout="this.className='submit'" type="submit" value="Выход" />
  </form>
<div class="cold">
    
      
 
      
       
        <div class="coldwater" id="coldwater"></div> 
   <div class="litrcold" ></div> 
           
 
 </div>
        

          
<div class="hot">
    
      
 
      
       
        <div class="hotwater" id="hotwater"></div> 
   
          <div class="litrhot" ></div>
  
          
</div>

<div class="error">
    
      <p class="r1">&#1053;&#1072;&#1083;&#1080;&#1095;&#1080;&#1077; &#1086;&#1096;&#1080;&#1073;&#1086;&#1082;</p>
 
      <div class="errorsubmain" >
       
        <div class="errortext" id="errors"></div> 
   
        </div>       
 
 </div>
 <div class="alarm">
    
      <p class="r1">СИСТЕМА АКВАСТОП</p>
 
      <div class="alarmsubmain" >
       
        <div class="alarmtext" id="alarmtext"></div> 
   
        </div>       
 
 </div>
       
   <form action="/admin.php" >
    <button type="submit" class="lk">Личный кабинет</button>
</form>
       <form action="/graf.php" >
    <button type="submit" class="graf">График час</button>
</form>   
     <form action="/grafday.php" >
    <button type="submit" class="grafday">График день</button>
</form>         
  
   <form action="/grafweek.php" >
    <button type="submit" class="grafweek">График неделя</button>
</form>         
       <form action="/grafmonth.php" >
    <button type="submit" class="grafmonth">График месяц</button>
</form>          
          <?php
}
?>   

      </body>

</html> 