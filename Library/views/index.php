<style>
	table {
		border-collapse: collapse;
	}

	td {
		padding: 2px 4px;
		border: 1px solid black;
	}
</style>
<a href="edit.php">Создать</a>
<table>
	<?php foreach ($books as $book) :  ?>
		<tr>
			<td>
				<?= $book['id'] ?>
			</td>
			<td>
				<a href="edit.php?id=<?= $book['id'] ?>">
					<?= $book['name'] ?>
				</a>
			</td>
			<td>
				<?= $book['year'] ?>
			</td>
			<td>
				<?= $book['author'] ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>