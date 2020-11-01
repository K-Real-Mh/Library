<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
include_once ENGINE_DIR . 'books.php';
include_once ENGINE_DIR . 'db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$book = $_POST['book'];
	if (isset($book['id'])) {
		$id = $book['id'];
		unset($book['id']);
		updateBook($id, $book);
	} else {
		createBook($book);
	}
	header("Location: {$_SERVER['REQUEST_URI']}");
}

$book = null;
if ($id = $_GET['id']) {
	$book = getBookById($id);
}

include VIEWS_DIR . 'edit.php';
