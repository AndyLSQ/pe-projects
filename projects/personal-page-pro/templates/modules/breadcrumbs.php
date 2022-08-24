<?php
//read page and id from the url

$bcPage = "";
$bcId = "";
$pageCrumb1 = "";
$pageCrumb2 = "";
$idCrumb1 = "";
$idCrumb2 = "";

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
  $pageCrumb2 = "project";
  $idCrumb1 = $bcId;
  // echo "<br>pageCrumb1: " . $pageCrumb1;
  // echo "<br>idCrumb: " . $idCrumb;
}
//if page is exercise
elseif ($bcPage == "exercise") {
  $pageCrumb1 = "projects";
  $pageCrumb2 = "project";
  $idCrumb1 = "exercises";
  $idCrumb2 = $bcId;
}
//elseif page is resume or goals
elseif ($bcPage == "resume" || "goals") {
  $pageCrumb1 = "about";
  $idCrumb1 = $bcPage;
}



?>

  <ul class="breadcrumbs">
    <!-- <li><a href="?">home</a></li> -->

    <li>
      <a href="?page=<?=$pageCrumb1?>">/&nbsp;<?=$pageCrumb1?> </a>
    </li>

    <?php
      if ($idCrumb2) { ?>

    <li>
      <a href="?page=<?=$pageCrumb2?>&id=<?=$idCrumb1?>">&nbsp;/&nbsp;<?=$idCrumb1?> </a>
    </li>
    

    <li>
      <a href="#">&nbsp;/&nbsp;<?=$idCrumb2?> </a>
    </li>
    <?php } 

      else { ?>
        <li>
          <a href="#">&nbsp;/&nbsp;<?=$idCrumb1?> </a>
      </li>
     <?php }
    ?>

  </ul>