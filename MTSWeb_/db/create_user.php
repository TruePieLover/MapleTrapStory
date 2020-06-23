
<!--    
    Maple Trap Story vMainRelease.10
Author: Pie
Version: Main release 1.0
Creation date: 6/20/2020 (updated)
Module: BASE WEBSITE root
create_user.php: Once user registered, show created user page
-->
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet">
<style>
html,body > * {
    background-color: purple;
}
</style>
</head>
<main>
<div class = "userData">
    <h2 style = "color: white;font-family:'Ubuntu'">Welcome 
    <?php echo htmlspecialchars($_POST['accname']); ?>.</h2>
</div>
</main>

</body>
</html>