<?php require_once("lang.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>FERMI - Promotion</title>

<!-- Standard html meta tags -->
    <meta name="description" content="            Support us      If you are interested in promoting our project please write an email to this email address.      " />
    <meta name="keywords" content="aisf associazione italiana studenti di fisica iaps" />

<!-- og -->
    <meta property="og:title" content="Promotion">
<meta property="og:type" content="website">
<meta property="og:url" content="/promotion/">

<meta property="og:description" content="            Support us      If you are interested in promoting our project please write an email to this email address.      ">
<meta property="og:site_name" content="">
<meta property="og:locale" content="it">

<meta property="fb:admins" content=""> <!-- editable in config.yml -->
<meta property="fb:app_id" content="">

<!-- Twitter metadata. twitter:image should not be necessary, as twitter recognizes og:-->
<meta name="twitter:card"           content="summary" />
<meta name="twitter:site"           content="@aisf_fisica" />
<meta name="twitter:title"          content="Promotion" />
<meta name="twitter:description"    content="            Support us      If you are interested in promoting our project please write an email to this email address.      "/>
<!-- <meta name="twitter:image:alt"      content=""> Name of image for visually impaired. Will need to add this to all images -->

<!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link href="css/main.css" type="text/css" rel="stylesheet" media="screen"/>
</head>

<body>
  <?php require("menu.php");?>
  <div class="container">
<div class="post">

<header class="post-header">
  <h1 class="post-title"> Form </h1>
</header>

<form action="form.php" method="post">

<p> Title </p>
<input type="text" name="formTitle" maxlength="100" value="<?=$vartTitle;?>" >

<p> English Description  </p>
<input type="text" name="formDescr_en" maxlength="500" value="<?=$varDescr_en;?>" >

<p> Italian Description  </p>
<input type="text" name="formDescr_it" maxlength="500" value="<?=$varDescr_it;?>" >

<p> Link </p>
<input type="url" name="formLink" maxlength="100" value="<?=$varLink;?>" >

<p> Field </p>
<select name="formField">
    <option value="">Select...</option>
    <option value="15">Condensed Matter</option>
    <option value="1">Particle Physics</option>
 </select>


<p> Period </p>
<select name="formPeriod">
    <option value="">Select...</option>
    <option value="1">Spring</option>
    <option value="2">Summer</option>
 </select>


<p> Retribution </p>
<select name="formRetribution">
   <option value="">Select...</option>
   <option value="1">None</option>
   <option value="2">Low</option>
    <option value="3">Medium</option>
    <option value="4">High</option>
</select>


<p> Studies </p>
<select name="formStudies">
   <option value="">Select...</option>
   <option value="1">Undergraduate</option>
   <option value="2">Master</option>
</select>

<p> Location </p>
<select name="formLocation">
   <option value="">Select...</option>
   <option value="5">Italy</option>
   <option value="11">Spain</option>
</select>

<p> Quality </p>
<select name="formQuality">
   <option value="">Select...</option>
   <option value="1">Low</option>
   <option value="3">High</option>
</select>



<p> <input type="submit" name="formSubmit" value="Submit"></p>

</form>


 




</div>
</div>

<?php require("footer.php");?>

  </body>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/bin/materialize.min.js"></script>


</html>
