# Task-Manager-PID-to-Hex-Converter
A simple PHP script to convert a list of PIDs from Windows Task Manger to HEX code.

Original made for Gaming Mill.

This process involves outputting the processes from Task Manager into a CSV file via CMD; using a online converter 
to output into a JSON file, and looping through the JSON 

1. Generate Task List as CSV file: Run CMD as Admin and run command  tasklist/svc /FO json > c:\processes_list.json (you can
change the filename or save dir in this command to whatever you like).

2. Convert the CSV file to JSON at, for example: https://www.csvjson.com/csv2json

3. Place pid_converter.php and the converted JSON file (file name MUST be csvjson.json) into the same
folder on your server (web or local, e.g, XAMP).

4.  Go to file on server and see the output.
