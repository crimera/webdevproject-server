<?php
include("./db/config.php");

header("Access-Control-Allow-Origin: *");

$request = $_SERVER['REQUEST_URI'];


# TODO: session_ids should be stored per client
session_id("bruh");
session_start();

switch ($request) {
	case '/upload':
		require __dir__ . '/upload.php';
		break;

	case '/history':
		require __dir__ . '/db/history.php';
		break;

	case '/login':
		require __dir__ . '/auth/login.php';
		break;

	case '/signup':
		require __dir__ . '/auth/signup.php';
		break;

	case '/logout':
		require __dir__ . '/auth/logout.php';
		break;

	case '/check':
		require __dir__ . '/auth/check.php';
		break;

	case '/isAdmin':
		require __dir__ . '/auth/isAdmin.php';
		break;

		// history

	case '/save':
		require __dir__ . '/history/save.php';
		break;

	case '/editHistory':
		require __dir__ . '/history/edit.php';
		break;

	case '/getHistoryItem':
		require __dir__ . '/history/item.php';
		break;

	case '/getHistory':
		require __dir__ . '/history/get.php';
		break;

	case '/delHistory':
		require __dir__ . '/history/delete.php';
		break;

		// admin
	case '/getHistoryData':
		require __dir__ . '/admin/history.php';
		break;

	case '/getUsersData':
		require __dir__ . '/admin/users.php';
		break;

	case '/ban':
		require __dir__ . '/admin/ban.php';
		break;

	case '/unBan':
		require __dir__ . '/admin/unBan.php';
		break;
}
