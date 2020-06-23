<!--    
    Maple Trap Story vMainRelease.10
Author: Pie
Version: Main release 1.0
Creation date: 6/20/2020 (updated)
Module: BASE WEBSITE root
form.php: Main MapleStory TrapStory form page
-->
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "css/form_styles.css">
</head>
<body>
    <?php require_once 'connect.php'?>
    <form id = "MTS_form1accCreate" action="db/create_user.php" method="post">
    <p>Account Name:</p> <input type="text" name="accname"><br>
    <input type="submit">
</form>

</body>
</html>