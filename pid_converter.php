<?php

// Gaming Mill Industries 

// 1a. Generate Task List as CSV file: Run CMD as Admin and run command  tasklist/svc /FO json > c:\processes_list.json
// 1b. You can change the file location in the above command to wherever. 
// 2.  Convert the CSV file to JSON at: https://www.csvjson.com/csv2json
// 3.  Place this file (gm_pid_converter.php) and the converted JSON file (file name MUST be csvjson.json) into the same
//     folder on your server.
// 4.  Go to file on server and see the output.


    $jsondata = file_get_contents("csvjson.json");

    //print_r($jsondata);

    $json = json_decode($jsondata,TRUE);

    //print_r($json);

    foreach ($json as $x){
        echo '<pre>'.$x['Image Name']. "\t ... ... \t" . dechex($x['PID']). "\t ... ... \t". $x['Services'].'</pre>';
    }
?> 
