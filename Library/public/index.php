<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
include_once ENGINE_DIR . 'books.php';
include_once ENGINE_DIR . 'db.php';
$books = getBooks();
include VIEWS_DIR . 'index.php';