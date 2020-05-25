<?php
    include ('/opt/lampp/htdocs/blog-sofia/config/database.php');

    $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

    $query = $pdo->prepare("DELETE FROM usuario WHERE id = :id");
    $query->bindValue(':id', $id);

    $query->execute();
    header('location: http://localhost/blog-sofia/admin/index.php?page=user');
?>