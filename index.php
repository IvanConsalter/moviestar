<?php
include_once('templates/header.php');

include_once("dao/MovieDAO.php");

// DAO dos filmes
$movieDao = new MovieDAO($conn, $BASE_URL);

$latestMovies = $movieDao->getLatestMovies();

$actionMovies = $movieDao->getMoviesByCategory("Ação");

$comedyMovies = $movieDao->getMoviesByCategory("Comédia");
?>
<main>
  <div id="main-container" class="container-fluid">
    <h2 class="section-title">Filmes novos</h2>
    <p class="section-description">Veja as críticas dos últimos filmes adicionados no MovieStar</p>
    <div class="movies-container">
      <?php foreach ($latestMovies as $movie) : ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
    </div>
    <h2 class="section-title">Ação</h2>
    <p class="section-description">Veja os melhores filmes de ação</p>
    <div class="movies-container">
      <?php foreach ($actionMovies as $movie) : ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
    </div>
    <h2 class="section-title">Comédia</h2>
    <p class="section-description">Veja os melhores filmes de comédia</p>
    <div class="movies-container">
      <?php foreach ($comedyMovies as $movie) : ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?php
include_once('templates/footer.php');
?>