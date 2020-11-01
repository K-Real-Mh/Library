<?php

function getBooks(): array
{
	$sql = "SELECT * FROM books";
	return queryALL($sql);
}

function updateBook(int $id, array $data): int
{
	if (empty($data)) {
		return null;
	}
	$update_fields = [];
	foreach ($data as $key => $value) {
		
		$value = "'$value'";
		$update_fields[] = "{$key} = {$value}";
	}
	$update_fields = implode(", ", $update_fields);

	$sql = "UPDATE books SET {$update_fields} WHERE id = {$id}";
	return execute($sql);
}

function createBook(array $data):int
{
	if (empty($data)) {
		return null;
	}
	$sql = "INSERT INTO books (name, year, author)
	VALUES ('{$data['name']}', '{$data['year']}', '{$data['author']}')";

	return execute($sql);
}

function getBookById(string $id):array
{
    return queryOne("SELECT * FROM books WHERE id = {$id}");
}
