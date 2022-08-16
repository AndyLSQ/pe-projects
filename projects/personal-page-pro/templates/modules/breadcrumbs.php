<?php
//read page and id from the url

$bcPage = "";
$bcId = "";
$pageCrumb1 = "";
$pageCrumb2 = "";
$idCrumb1 = "";

if (isset($_GET["page"])) {
  $bcPage = $_GET["page"];
  // echo "<br>bcPage: " .  $bcPage;
}

if (isset($_GET["id"])) {
  $bcId = $_GET["id"];
  // echo "<br>bcId: " . $bcId;
}

//if page is project
if ($bcPage == "project") {
  $pageCrumb1 = "projects";
  $idCrumb = $bcId;
  // echo "<br>pageCrumb1: " . $pageCrumb1;
  // echo "<br>idCrumb: " . $idCrumb;
}
//if page is exercise
elseif ($bcPage == "exercise") {
  $pageCrumb1 = "projects";
  $pageCrumb2 = "e4p";
  $idCrumb = $bcId;
}
//elseif page is resume or goals
elseif ($bcPage == "resume" || "goals") {
  $pageCrumb1 = "about";
  $idCrumb = $bcPage;
}






//if id is layout-garden

//set $idCrumb to layout-garden

//if page is about


//set $pageCrumb1 to about





?>

<ul class="breadcrumbs">
  <li><a href="?">home</a></li>

  <li><a href="?page=<?=$pageCrumb1?>">&nbsp;> <?=$pageCrumb1?></a></li>

  <?php if ($pageCrumb2) {?>
    <li><a href="?page=<?=$pageCrumb2?>">&nbsp;> <?=$pageCrumb2?></a></li>
  <?php } ?>

  <li><a href="#">&nbsp;> <?=$idCrumb?></a></li>
</ul>