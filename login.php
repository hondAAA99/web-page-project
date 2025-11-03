<?php

require_once 'connection.php';

try {
    $pdo = new PDO($attr, $user, $pass, $opts);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$q = $pdo->prepare("SELECT * FROM users WHERE email = :email");
$q->execute([
    ':email' => $_POST['email']
]);

while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
    echo htmlspecialchars($row['NAME']) . "<br>";
    echo htmlspecialchars($row['EMAIL']) . "<br>";
    echo htmlspecialchars($row['PASSWORD']) . "<br>";
}
?>
