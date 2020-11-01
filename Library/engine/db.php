<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';

function connectionCheck(): object
{
	$config = include CONFIG_DIR . 'config.php';
	static $connection = null;
	if (is_null($connection)) {
		$connection = mysqli_connect(
			$config['host'],
			$config['login'],
			$config['password'],
			$config['db']
		);
	}
	return $connection;
}

function queryAll(string $sql):array
{
	$result = mysqli_query(connectionCheck(), $sql);
	return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function execute(string $sql): int
{
	$result = mysqli_query(connectionCheck(), $sql);
	return mysqli_affected_rows(connectionCheck());
}

function queryOne(string $sql):array
{
	return queryAll($sql)[0];
}