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
      <?php foreach($latestMovies as $movie): ?>
        <div class="card movie-card">
        <div class="card-img-top" style="background-image: url('<?= $BASE_URL ?>img/movies/<?= $movie->image ?>');"></div>
        <div class="card-body">
          <p class="card-rating">
            <i class="fas fa-star"></i>
            <span class="rating">9</span>
          </p>
          <h5 class="card-title">
            <a href="<?= $BASE_URL ?>movie.php?id=<? $movie->id ?>"><?= $movie->title ?></a>
          </h5>
          <a href="<?= $BASE_URL ?>movie.php?id=<? $movie->id ?>" class="btn btn-primary rate-btn">Avaliar</a>
          <a href="<?= $BASE_URL ?>movie.php?id=<? $movie->id ?>" class="btn btn-primary card-btn">Conhecer</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <h2 class="section-title">Ação</h2>
    <p class="section-description">Veja os melhores filmes de ação</p>
    <div class="movies-container">
    <?php foreach($actionMovies as $movie): ?>
        <div class="card movie-card">
        <div class="card-img-top" style="background-image: url('<?= $BASE_URL ?>img/movies/<?= $movie->image ?>');"></div>
        <div class="card-body">
          <p class="card-rating">
            <i class="fas fa-star"></i>
            <span class="rating">9</span>
          </p>
          <h5 class="card-title">
            <a href="<?= $BASE_URL ?>movie.php?id=<? $movie->id ?>"><?= $movie->title ?></a>
          </h5>
          <a href="<?= $BASE_URL ?>movie.php?id=<? $movie->id ?>" class="btn btn-primary rate-btn">Avaliar</a>
          <a href="<?= $BASE_URL ?>movie.php?id=<? $movie->id ?>" class="btn btn-primary card-btn">Conhecer</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <h2 class="section-title">Comédia</h2>
    <p class="section-description">Veja os melhores filmes de comédia</p>
    <div class="movies-container">
    <?php foreach($comedyMovies as $movie): ?>
        <div class="card movie-card">
        <div class="card-img-top" style="background-image: url('<?= $BASE_URL ?>img/movies/<?= $movie->image ?>');"></div>
        <div class="card-body">
          <p class="card-rating">
            <i class="fas fa-star"></i>
            <span class="rating">9</span>
          </p>
          <h5 class="card-title">
            <a href="<?= $BASE_URL ?>movie.php?id=<? $movie->id ?>"><?= $movie->title ?></a>
          </h5>
          <a href="<?= $BASE_URL ?>movie.php?id=<? $movie->id ?>" class="btn btn-primary rate-btn">Avaliar</a>
          <a href="<?= $BASE_URL ?>movie.php?id=<? $movie->id ?>" class="btn btn-primary card-btn">Conhecer</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  </main>
<?php
  include_once('templates/footer.php');
?>
  