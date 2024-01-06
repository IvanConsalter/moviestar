<?php

  require_once("models/Review.php");
  require_once("models/Message.php");

  require_once("dao/UserDAO.php");

  class ReviewDao implements ReviewDAOInterface {

    private $conn;
    private $url;
    private $message;

    public function __construct(PDO $conn, $url) {
      $this->conn = $conn;
      $this->url = $url;
      $this->message = new Message($url);
    }

    public function buildReview($data) {
    }

    public function create(Review $review) {
    }

    public function getMoviesReview($id) {
    }

    public function hasAlreadyReviewed($id, $userId) {
    }

    public function getRatings($id) {
    }

  }

?>