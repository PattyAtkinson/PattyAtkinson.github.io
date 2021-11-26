<?php
   echo "Hello World";

   if(isset($_POST['submit']))
   {
      //read data from form
      $link = filter_input(INPUT_POST, "link");
      
      //generate output for text file
      $output = $link . "n";

      //open file for output with append mode "a"
      $fp = fopen("data/link.csv", "a");
      //write to the file
      fwrite($fp, $output);
      fclose($fp);
   }
   else
   {
      echo "empty submit";
   }
?>