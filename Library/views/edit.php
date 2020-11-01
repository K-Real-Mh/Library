<a href="index.php">Назад к списку</a>
<form action="" method="post">
	<? if (!is_null($book)): ?>
	<input type="hidden" value="<?= $book['id'] ?>" name="book[id]">
	<? endif; ?>
	<div>
		<label for="">Название</label>
		<input type="text" value="<?= $book['name'] ?? '' ?>" name="book[name]">
	</div>
	<div>
		<label for="">Автор</label>
		<input type="text" value="<?= $book['author'] ?? '' ?>" name="book[author]">
	</div>
	<div>
		<label for="">Год</label>
		<input type="number" min="-9999" max="9999" value="<?= $book['year'] ?? 0 ?>" name="book[year]">
	</div>
	<input type="submit" value="<?= is_null($book) ? 'Создать' : 'Редактировать' ?>">
</form>