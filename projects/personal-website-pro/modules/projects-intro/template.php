
<projects-intro>

  <header>
    <h2 class='attention-voice'>Checka ma projects</h2>

    <p class='calm-voice'>It's very professional.</p>
  </header>

  <project-grid>
    <?php $projects = getPageData('data/projects.json'); ?>

    <?php
      foreach ($projects as $project) {
        include('project-card.php');
      } 
    ?>
  </project-grid>

</projects-intro>
