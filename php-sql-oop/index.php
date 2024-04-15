<?php
include 'User.php';
include 'FormHandler.php';

$user = new User($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST['name'] ?? '';
    $userEmail = $_POST['email'] ?? '';
    if (!empty($userName) && !empty($userEmail)) {
        $inputName = new FormHandler($userName);
        $inputEmail = new FormHandler($userEmail);
        $user -> addUser($inputName->getInputValue(), $inputEmail->getInputValue());
    }
}

$datauser = $user->getAllDatausers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD App</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Tambahkan Data Baru</h1>
        <form method="post">
            <input type="text" name="name" placeholder="Nama">
            <input type="email" name="email" placeholder="Email">
            <input type="submit" value="Tambahkan">
        </form>

        <div class="user">
            <h2>Daftar Pengguna</h2>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
                <?php foreach ($datauser as $user): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['name']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>
