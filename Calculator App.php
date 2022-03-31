<?php
$firstNumber=$_POST['firstNumber'];
$lastNumber=$_POST['lastNumber'];
$button=$_POST['button'];
$result='';
if($button =='+'){
  $result=$firstNumber+$lastNumber;
}
if($button =='-'){
  $result=$firstNumber-$lastNumber;
}
if($button =='*'){
  $result=$firstNumber*$lastNumber;
}
if($button =='/'){
  $result=$firstNumber/$lastNumber;
}
if($button =='%'){
  $result=$firstNumber%$lastNumber;
}

?>
<html>
  <body>
    <span class="main">MASTER</span>
    <span class="span1">C.</span> 
    <span class="span2">R.</span>
    <span class="span4">U.</span>
    <span class="span3">D.</span> 
  <form action="" method="post" >
    <input type="number" class="" placeholder="Enter First Number" name="firstNumber"required><br />
    
    <input type="number" class="" placeholder="Enter Last Number" name="lastNumber"required><br />
    
    <input type="number" class=""placeholder="SHOW VALUE"readonly  value="<?php echo $result; ?>">  </input><br />
    
    <input class="" type="submit" name="button"value="+"></button>
    
    <input class="" type="submit" name="button"value="-"></button>
    
    <input class="" type="submit" name="button"value="*"></button>
    
    <input class="" type="submit" name="button"value="/"></button>
    
    <input class="" type="submit" name="button"value="%">
    
  </form>
    
    <style>
      body{
        margin-top:10 px;
        justify-content:center;
        margin-left:50%;
        margin-top:50%;
         width:400px;
         height:350px;
         background:#21282ad3;
         color:white;
         text-align:center;
      }
      input{
        margin-bottom:10px;
        padding:10px;
        border-radius:10%;
        background:black;
        color:white;
        width:100%;
      }
      button{
        margin-left:7px;
        padding: 7px;
      }
      h3{
        font-family:Trebuchet MS;
        font-size:25px;
      }
      @media(max-width: 200){
        body{
         width:100%;
         height:100%;
         display:fixed;
          
        }
      }
      
  .span1{
    color:red;
    font-size:20px;
    font-family:tahoma;
  }
   .span2{
    color:indigo;
    font-size:20px;
    font-family:tahoma;
  }
   .span3{
    color:blue;
    font-size:20px;
    font-family:tahoma;
  }
   .span4{
    color:orange;
    font-size:20px;
    font-family:tahoma;
  }
  .main{
    color:#fefefe;
    font-size:35px;
    font-family:tahoma;
    margin-top:220px;
  }
  
  
      
    </style>
    
  </body>
  
</html>