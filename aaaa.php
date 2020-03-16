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

 
             
        }

        
        $(document).ready(function(){  show();
  
            setInterval('show()',20000);  
        }); 

        
 
                                        


</script>
 
   
</head>
  
 <body>
 
<div class="r">
    
      <p class="r1">Холодная вода</p>
 
      <div class="r2" >
       
        <div class="r3" id="coldwater"></div> 
   
        </div>       
 
 </div>
        

          
<div class="r">
    
      <p class="r1">Горячая вода</p>
 
      <div class="r2" >
       
        <div class="r3" id="hotwater"></div> 
   
          
      </div>
          
</div>

<div class="error">
    
      <p class="r1">&#1053;&#1072;&#1083;&#1080;&#1095;&#1080;&#1077; &#1086;&#1096;&#1080;&#1073;&#1086;&#1082;</p>
 
      <div class="errorsubmain" >
       
        <div class="errortext" id="errors"></div> 
   
        </div>       
 
 </div>
       
   <form action="/admin.php">
    <button type="submit">&#1051;&#1080;&#1095;&#1085;&#1099;&#1081; &#1082;&#1072;&#1073;&#1080;&#1085;&#1077;&#1090;</button>
</form>
         
          
  
        

      </body>
</html> 