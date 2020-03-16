<?php

  if($_SESSION['auth']!=true){
?>
  <form action="admin.php" method="post">
    <label> Логин: <input class="input" type="text" name="login" size="10" /></label> &nbsp;&nbsp;
    <label> Пароль: <input class="input" type="password" name="password" size="10" /></label> <br /><br />
    <input type="hidden" name="login_start" value="ok" />
    <input class="submit"  onmouseover="this.className='submitnew'"      
onmouseout="this.className='submit'" type="submit" value="Войти" />
 </form>
<h1><b>--------------------------------------------------------------------------------------------</b> </h1>
<h1><b>&#1042;&#1077;&#1088;&#1085;&#1091;&#1090;&#1100;&#1089;&#1103; &#1085;&#1072; &#1076;&#1086;&#1084;&#1072;&#1096;&#1085;&#1102;&#1102; &#1089;&#1090;&#1088;&#1072;&#1085;&#1080;&#1094;&#1091;:</b> </h1>
<form action="/index.php">
    <button type="submit">&#1044;&#1086;&#1084;&#1086;&#1081;</button>
</form>
<?php
}
else{
?> 

  <form action="admin.php" method="post">
  <p>Здравствуйте, <b><?php echo $_SESSION['login'];?></b>!</p>
    <input  type="hidden" name="logoff" value="ok" />
    <input  class="submit"  onmouseover="this.className='submitnew'"      
onmouseout="this.className='submit'" type="submit" value="Выход" />
  </form>
<h1><b>--------------------------------------------------------------------------------------------</b> </h1>
<h1><b>&#1042;&#1077;&#1088;&#1085;&#1091;&#1090;&#1100;&#1089;&#1103; &#1085;&#1072; &#1076;&#1086;&#1084;&#1072;&#1096;&#1085;&#1102;&#1102; &#1089;&#1090;&#1088;&#1072;&#1085;&#1080;&#1094;&#1091;:</b> </h1>
<form action="/index.php">
    <button type="submit">&#1044;&#1086;&#1084;&#1086;&#1081;</button>
</form>
<h1><b>--------------------------------------------------------------------------------------------</b> </h1>
 <h1><b>&#1057;&#1080;&#1085;&#1093;&#1088;&#1086;&#1085;&#1080;&#1079;&#1072;&#1094;&#1080;&#1103; &#1076;&#1072;&#1085;&#1085;&#1099;&#1093; &#1089; &#1089;&#1095;&#1077;&#1090;&#1095;&#1080;&#1082;&#1072;&#1084;&#1080; &#1087;&#1086;&#1083;&#1100;&#1079;&#1086;&#1074;&#1072;&#1090;&#1077;&#1083;&#1103;:</b> </h1>
<form action="sinchro.php" method="post">
  
<label>   <input class="input" type="text"  name="sinchrocold" maxlength="8" value="00000000" /> &#1093;&#1086;&#1083;&#1086;&#1076;&#1085;&#1072;&#1103; &#1074;&#1086;&#1076;&#1072; </label> <br>
<br />
<label>  <input class="input" type="text"  name="sinchrohot"  maxlength="8"  value="00000000"  />  &#1075;&#1086;&#1088;&#1103;&#1095;&#1072;&#1103; &#1074;&#1086;&#1076;&#1072; </label> <br>

   <br />

   <input  class="submit"  onmouseover="this.className='submitnew'"      
onmouseout="this.className='submit'" type="submit" value="&#1057;&#1080;&#1085;&#1093;&#1088;&#1086;&#1085;&#1080;&#1079;&#1080;&#1088;&#1086;&#1074;&#1072;&#1090;&#1100;" />
   </form>
<h1><b>--------------------------------------------------------------------------------------------</b> </h1>

   <h1><b>&#1057;&#1073;&#1088;&#1086;&#1089;&#1080;&#1090;&#1100; &#1086;&#1096;&#1080;&#1073;&#1082;&#1080;:</b> </h1>
  
  <form action="delerrors.php" method="post">
  
   <input  class="submit"  onmouseover="this.className='submitnew'"      
onmouseout="this.className='submit'" type="submit" value="&#1057;&#1090;&#1077;&#1088;&#1077;&#1090;&#1100;" />
   </form>
   <h1><b>--------------------------------------------------------------------------------------------</b> </h1>
<?php
}
?>