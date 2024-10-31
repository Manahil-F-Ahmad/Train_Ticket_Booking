<?php
//
$db = new PDO("mysql:dbname=train_ticket_booking;host=localhost","root","");
//use $rows = $db->("SELECT * FROM member");
//foreach ($rows as $row){
// <li> Name: <?= $row["username"];
// }
try{
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


// // echo "<table style='border: solid 1px black;'>";
// // echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

// class TableRows extends RecursiveIteratorIterator {
//     function __construct($it) {
//         parent::__construct($it, self::LEAVES_ONLY);
//     }

//     function current() {
//         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
//     }

//     function beginChildren() {
//         echo "<tr>";
//     }

//     function endChildren() {
//         echo "</tr>" . "\n";
//     }
// }


// try {
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $stmt = $db->prepare("SELECT trainID FROM trains");
//     $stmt->execute();

//     // set the resulting array to associative
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

//     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
//         echo $v;
//     }
// }
// catch(PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }
// echo "</table>";

//Use w3schools open on phone to check codes


// Use this one for payment and booking and also insert the values into Customer and Member
// try {
//     // set the PDO error mode to exception
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//     VALUES ('John', 'Doe', 'john@example.com')";
//     // use exec() because no results are returned
//     $db->exec($sql);
//     echo "New record created successfully";
// } 
// catch(PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage();
// }

