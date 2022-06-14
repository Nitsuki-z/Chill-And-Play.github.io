<?php
$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name="discord";

$pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$sql = "SELECT * FROM user";
$res = $pdo->query($sql);
$users = $res->fetchAll();

// TODO afficher liste
?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>

<h1>Les serveurs discord</h1>

<?php
$cars = [
  ["Serveur discord C.n.P",10,2],
  ["Serveur discord Aife",668,1],
  array("Serveur discord MangaGameHack",11,5),
  array("Serveur discord Zencraft",400,2)
];
  
echo $cars[0][0].": Membres: ".$cars[0][1].", bots: ".$cars[0][2].".<br>";
echo $cars[1][0].": Membres: ".$cars[1][1].", bots: ".$cars[1][2].".<br>";
echo $cars[2][0].": Membres: ".$cars[2][1].", bots: ".$cars[2][2].".<br>";
echo $cars[3][0].": Membres: ".$cars[3][1].", bots: ".$cars[3][2].".<br>";
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
echo "Aujourd'hui, nous sommes le".date ("A/m/j")."<br>";
?>

<?php
echo json_encode($users); 
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>prénom</th>
            <th>nom</th>
            <th>email</th>
    </thead>
    <tbody>
    <!-- debut boucle php -->    
    <?php foreach($users as $user): ?>
    <tr>
        <td><?php echo $user->first_name; ?></td>
        <td><?php echo $user->name; ?></td>
        <td><?php echo $user->email; ?></td>
    </tr>
    <?php endforeach ?>
    <!-- fin boucle -->
    </tbody>
</table>

</body>
</html>

