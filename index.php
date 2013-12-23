<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    
        <form  method='post' action="<?php $_SERVER['PHP_SELF']?>" id='parser'>
            <textarea id='name' rows='20' cols='80' name='data'></textarea>
        <br>
        <input type='submit' value='format'>
        </form>
        <br>
        <br>
        <br>
            <?php
           
            
            
            $string=$_POST['data'];
            //$nstring=$string[0];
            $newstring=explode("\r\n", $string);
            
            $data="[".implode(",", $newstring).rtrim($data, ",");
            $data=rtrim($data, ",")."]";
            

            
            
?>
        
        
        <form method="post" action="writer.php" id="writer">
        <textarea rows='150' cols='80' id='output' name='ndata'> <?php echo $data;?>
        </textarea>
            
        <input type='submit' value='export'>
        </form>
        <button type='button' id='download'>Download</button>
        
        <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type='text/javascript' src='/js/jquery.json-2.4.min.js'></script>
        <script type='text/javascript'>
        $(document).ready(function(){
           var jsonString = $.toJSON( $('textarea#output').val());
           
         console.log(jsonString);
       
       
      
        $('#download').click(function(){
              console.log(jsonString) });
              
              
    });
    
   
    
        </script>
    </body>
</html>