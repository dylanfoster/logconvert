<?php $file ='log.txt';
        


        $data=$_POST['ndata'];
        
            
          
            
        file_put_contents($file,$data);
        
        header('location:json2csv.php');
        ?>

