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
    
    <form method="POST" action="/foo" >
                @csrf
                <input type="text" name="name"/><br/>
                <input type="submit" value="Add"/>
            </form>



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

print_r("\n" . $result2);
$stmt2->closeCursor();
$colcount = $stmt3->columnCount();
print("\nКоличество в базе:");
print_r("\t" . $colcount);
$stmt3->closeCursor();
print("\n");
$sqlik = 'SELECT id,username,active from users where active = :active AND username = :username';
$stht4 = $conn->prepare($sqlik);
$active = 11;
$username = '32rrr';
//$stht4->bindValue(1, $active, PDO::PARAM_INT);
//$stht4->bindValue(2, $username, PDO::PARAM_STR);
$stht4->execute([':active' => $active, ':username' => $username]);



echo PHP_EOL;
echo PHP_EOL;
echo '---------------';

$sqlik = 'SELECT id, username, active from users where active = :active AND username = :username';
$stht4= $conn->prepare($sqlik);
//$stht4->bindValue(':active' , $active, PDO::PARAM_INT);
//$stht4->bindValue(':username' , $username, PDO::PARAM_STR);

$stht4->execute([':active' => $active, ':username' => $username]);

echo "<pre>";
$rawDb = $stht4->fetchAll(PDO::FETCH_ASSOC);

$id = $rawDb[0]['id'];
$active = $rawDb[0]['active'];

$format = '<form method="POST" action=%s><input type="text" name="name"/><br/></form>';
echo sprintf($format, $active, "/n");

echo "</pre>";
$stht4->closeCursor();




echo PHP_EOL;
echo PHP_EOL;
echo '---------------';

$sqlik44 = 'SELECT id, menu, link from newtable';
$stht5= $conn->prepare($sqlik44);
//$stht4->bindValue(':active' , $active, PDO::PARAM_INT);
//$stht4->bindValue(':username' , $username, PDO::PARAM_STR);

$stht5->execute();

echo "<pre>";

$rawDb = $stht5->fetchAll(PDO::FETCH_ASSOC);
$n=0;
$id = $rawDb[$n]['menu'];
$active = $rawDb[$n]['link'];

//echo sprintf("%s %s", $id, $active, "/n");

$format = '<form method="POST" action=%s><input type="text" name="name"/><br/></form>';
echo sprintf($format, $active, "/n");
$format2 = '<p><a href="%s">%s</a></p>';
echo sprintf($format2, $active, $id, "/n");
echo "</pre>";
$stht5->closeCursor();

$sqlik45 = 'SELECT id, menu, link from newtable';
$stht6= $conn->prepare($sqlik45);
//$stht4->bindValue(':active' , $active, PDO::PARAM_INT);
//$stht4->bindValue(':username' , $username, PDO::PARAM_STR);

$stht6->execute();
echo "<pre>";

$rawDb = $stht6->fetchAll(PDO::FETCH_ASSOC);
$n=4;
$id = $rawDb[3]['menu'];
$active = $rawDb[3]['link'];

//echo sprintf("%s %s", $id, $active, "/n");

$format23 = '<p><img src="%s" alt="%s" width="450" height="450"></p>';
echo sprintf($format23, $active, $id, "FFA");

echo "</pre>";
$stht6->closeCursor();


  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }



 ?>
