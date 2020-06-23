<?php
$title = "Maple Trap Story";
$heading = "MTS";
$content = "MainContent";
$footer = "MST 6/20/2020";
?>
<html>
<head>
  <title>Maple Trap Story</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://kit.fontawesome.com/b870970ad8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
<header>
  <!-- Import content specific includes -->
  <script src = "js/main.js"></script>
  <div class "MainHeaderContent">
  <nav class="navbar customnav"> <!-- Navbar content -->
   <a class="navbar-brand" href="#">
    <div class = "_infoWrapper">
    <img src = "includes/mts_logo.png" style = "padding: 5px;" height = "75px" width = "75px">
      <hgroup id = "_infoWrapper hg1_bodyInfo" style = "color: white;font-family: 'Ubuntu'">
        <h1 style = "font-size: 20px"><i class="fab fa-canadian-maple-leaf">MapleTrapStory</i></h1>
        <h2 style = "font-size: 15px"><em>Original v62 Global MapleStory Server</em></h2>
        <h3 style = "font-size: 12px;">A new chapter of the legendary old school MapleStory</h3>
      </hgroup> 
    </div>
    <ul class = "flexLinkWrapper">
    <section class = "s1_navMiddle">
      <style>
      .quickJoinBtn_
      {
        border-radius: 15px;
      }
      </style>
          <button class = "quickJoinBtn_" onclick="">Join now!</button>
    </section>
      <li><a href="#">Home</a></li>
      <li><a href="#">Create an Account</a></li>
      <li><a href="#">Download</a></li>
      <li><a href="#">How to Connect</a></li>
      <li><a href="#">Donate</a></li>
      <li><a href="#">Join the community!</a></li>
    </ul>
   </a>
  </nav>
</header>
<!-- Render web pages -->
<article id = "_page">
<?php require_once '../MTSWeb_/index.php'; ?>
</article>
</body>
<!-- Bootstrap footer start -->
<style>
.customnav2 
{
  box-sizing: content-box;
    overflow: hidden;
    height: 70px;
    border-color: rgb(250,153,245);
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    background-color: rgb(150, 19, 177);
}
</style>
<div class="navbar fixed-bottom customnav2" style = "border-top-right-radius: 15px; border-top-left-radius: 15px">
  <style>
    p 
      {
        padding: 15px;
      }
    a:hover
      {
        color: rgb(250,153,245);
      }

    </style>

<footer class="page-footer font-small blue">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style = "padding: 1px; color: white; font-family: 'Ubuntu'">
  <img width = "150px" height = "90px" ALIGN=”left style = "padding: -35px; margin: -25px; float: left;" src = "./includes/logo.png" ></img>
    <div class = "footerInfo">
        <p style = "padding: 5px; margin: -15px; font-size: 1x; text-align: center;"><em>MapleStory is back!<br></em> MapleTrapStory is a new chapter of the iconic retro MapleStory built back up with modern technology</p>
    </div>
    <ul class = "_flexFooter" style = "display: block; position: absolute; right: 100px; top: 20px; ">
      <div class = "_flexFooter"  style = "display: flex; flex-flow: row; ">
          <a href = "#"><p class = "_flexFooter links">Contact us </p></a>
          <a href = "#"><p class = "_flexFooter links">Help/Guides</p></a>
          <a href = "#"><p class = "_flexFooter links">Apply for Admin/GM </p></a>
        <div class = "copyrightInfo" style = "display: inline-flex; flex-flow: column">         
            </i><b><a href="#">MTS 2020&trade;<br><i class="far fa-copyright"> www.mapletrapstory.com</i></b></a>
            <h2 class = "_flexFooter rightsInfo" style = "font-size: 10px;">Rights granted under "Fair Use Doctrine" (U.S. Constitution Article I Section 8 |Clause8)</h2>
        </div>  
      </div>
    </ul>
</footer>
</div>
<!-- Bootstrap footer end -->
</html>
