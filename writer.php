<?php 


         $docroot=$_SERVER['DOCUMENT_ROOT'];
         

        $data=$_POST['ndata'];
        
        $file=fopen($docroot . "/log.txt", "w+"); 
        $tfile=$docroot . "/log.txt";
        chmod($tfile, 0777);
          
        
        fwrite($file,$data);
        fclose($file);
        header('location:json2csv.php');
        ?>

