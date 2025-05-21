<!DOCTYPE html>
<html lang="en">
<?php include "header.inc" ?>
<body>
    <form action="./process.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="hidden" name="ID" value="105699937"> <!-- I had a question why we used hidden type ? I never used it -->
        <button type="submit">Login</button>
    </form>
    <?php include "footer.inc" ?>
</body>
</html>