<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Tony Computer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php echo ($currentPage == 1) ? " active " : "" ?>">
          <a class="nav-link" href="index.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <?php
          if (empty($_SESSION['user'])) {
            echo
            "<li class=\"nav-item\">
              <a class=\"nav-link".($currentPage == 2 ? " active " : "")."\" href=\"sign_in.php\">Sign in/Register<span class=\"sr-only\">(current)</span></a>
            </li>";
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
