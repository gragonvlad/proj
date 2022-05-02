<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    
    <body class="subpixel-antialiased">
        <div id="lapp">
            <app></app>
        </div>
    <body class="antialiased">
        <div id="app">
            <app></app>
        </div>
        <script src="{{ mix('js/app.js')}}"></script>
    </body>
</html>
<?php
 $user='postgres';
$pass='qwerty';
$port='5432';
$servername='localhost';


try {
    $conn = new PDO("pgsql:host=$servername;port=$port;dbname=postgres", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    
    
$sqldd = "SELECT * from users where active='1';";
$sqldd2 = "SELECT id,username,active from users;";
$stmt = $conn->prepare($sqldd);
$stmt->execute();
$stmt2 = $conn->prepare($sqldd2);
$stmt2->execute();
$stmt3 = $conn->prepare($sqldd2);
$stmt3->execute();
$active = '1';
$sql = 'SELECT * FROM users  ORDER BY username' ; // where active = 1
foreach ($conn->query($sql) as $row) {
    print 'ID:' . $row['id'] . "\t";
    print 'USERNAME:' . $row['username'] . "\t";
    print 'ACTIVE:' . $row['active'] . "\n";
}
$result = $stmt->fetchAll();
$result2 = $stmt2->fetchColumn(1);
print_r($result);
$stmt->closeCursor();
print_r($result2);
$stmt2->closeCursor();
$colcount = $stmt3->columnCount();
print("\nКоличество в базе:");
print_r($colcount);
$stmt3->closeCursor();
print("\n");

  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }



 ?>
