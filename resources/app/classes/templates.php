<?php
  class Templates {
    private $guestBar = [
      'Home' => 'index.php',
    ];

    private $memberBar = [
      'Home' => 'index.php',
    ];
    
    function top() {
      include_once 'resources/app/templates/top.php';
    }
    
    function bottom() {
      readfile('resources/app/templates/bottom.php');
    }
    
    function grabHtml($file) {
      readfile($file.'.html');
    }
    
    function grabPhp($file) {
      readfile($file.'.php');
    }
    
    function navbar($active) {
      ?>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand mb-0 h1">MyWorkoutWeek</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <?php
            foreach((isset($_SESSION['username']) ? $this->memberBar : $this->guestBar) as $k=>$v) {
              if(strtolower($k) == strtolower($active)) {
                ?> <li class="nav-item active"><a href="<?= $v ?>" class="nav-link"><?= $k ?></a></li> <?php
              } else {
                ?> <li class="nav-item"><a href="<?= $v ?>" class="nav-link"><?= $k ?></a></li> <?php
              }
            }
            ?>
          </ul>
        </div>
      </nav>
      <?php
    }
  }