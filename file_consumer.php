<?php

  //importing classes
  require 'db.php';

  //open the log file and read it line by line

  $handle = @fopen("log.txt", "r");
  $values=array();

  //a.	Logs into a database with respective columns
  while (!feof($handle))
  {
      //file to write content of log file 1 .. question b
      $file = fopen("log2.txt","a");
      $buffer = fgets($handle, 4096);

      //Separate string by the means of |
      $values = explode("|",$buffer);

      //insert the record into database with respective columns
      // use mysql insert query here
      for( $i = 0; $i < count($values); $i++){

        // a.	Logs into a database with respective columns
        //insert into the database
        $sql = "INSERT INTO `assesment`(`time_details`,`request_ip`,`TAT`) VALUES ('".$values["0"]."','".$values["1"]."','".$values["2"]."' )";
        $conn->query($sql);

        //b.	Logs the data in a log file while reading
        fwrite($file,$values["0"].$values["1"].$values["2"].PHP_EOL);

       }

       //c.  check for duplicates
       $TATs = array();
       list ($time, $request, $tat) = explode("|",$buffer);
       $TAT = $TAT;

       //check if array is empty
       if (empty($TATs)) {
           $TATs[] = $TAT;
       } else {
           if (in_array($TAT, $TATs)) {
               echo "Duplicate TAT: " . $TAT . "<br/>";
           } else {
               $TATs[] = $TAT;
           }
       }

       //d.	Extracts performance metrics e.g TAT
       //loop through and get the array index of tAT
       print_r($values["2"]);

       //close the connection to the file for question b
       fclose($file);
  }

  //close out handle
  fclose($handle);
  //close mysqli conn
  mysqli_close($conn);



 ?>
