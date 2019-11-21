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

    // foreach ($json as $x){
    //     echo '<pre>'.$x['Image Name']. "\t ... ... \t" . dechex($x['PID']). "\t ... ... \t". $x['Services'].'</pre>';
    // }
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PID to HEX Converter</title>

  </head>
  <body>
  <div class="container">    
    <h1>PID to HEX Converter</h1>
    <h2>Gaming Mill Industries</h2>

            <table class="table table-sm table-striped table-bordered table-dark table-hover">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Process</th>
            <th scope="col">PID</th>
            <th scope="col">HEX</th>
            <th scope="col">Services</th>
            </tr>
        </thead>
        <tbody>
<?php foreach ($json as $x): ?>
            <tr>
            <th scope="row"><?php echo $x['Image Name'];?></th>
            <td><?php echo $x['PID'];?></td>
            <td><?php echo dechex($x['PID']);?></td>
            <td><?php echo $x['Services'];?></td>
            </tr>
<?php endforeach; ?>
        </tbody>
        </table>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
