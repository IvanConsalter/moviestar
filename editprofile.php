<?php
  include_once('templates/header.php');
  include_once('dao/UserDAO.php');

  $userDao = new UserDAO($conn, $BASE_URL);
  $userData = $userDao->verifyToken(true);
?>
  <main>
    <div id="main-container" class="container-fluid">
      <h1>Edição de perfil</h1>
    </div>
  </main>
<?php
  include_once('templates/footer.php');
?>
  