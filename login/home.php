<?php
session_start();
echo"'<h1> Welcome to our website{$_SESSION['email']} </h1>";
?>
<body>
    <form action="logout.php" method="post">
        <input type="submit" class="btn btn-success" name="logout" value="logout">
    </form>
</body>