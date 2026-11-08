<?php
    $conn = mysqli_connect("localhost", "root", "", "costume_closet");
    $id = (int) $_GET["id"];
    $item = $_POST['item'];
    $borrower = $_POST['borrower'];
    $due_date = $_POST['due_date'];
    $sql = "INSERT INTO loans (item, borrower, due_date) VALUES ('$item', '$borrower', '$due_date')";
    mysqli_query($conn, $sql);
    header("Location: list.php");
?>