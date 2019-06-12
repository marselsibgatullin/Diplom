<?php

return [
//MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
//AccountController
	'account/login' => [
		'controller' => 'account',
		'action' => 'login',
	],

	'account/register' => [
		'controller' => 'account',
		'action' => 'register',
	],
	'account/logout' => [
		'controller' => 'account',
		'action' => 'logout',
	],
//ProfileController
	'profile/show' => [
		'controller' => 'profile',
		'action' => 'show',
	],
	'profile/download/{page:\d+}' => [
		'controller' => 'profile',
		'action' => 'download',
	],
	'profile/news/{page:\d+}' => [
		'controller' => 'profile',
		'action' => 'news',
	],
	'profile/show/{page:\d+}' => [
		'controller' => 'profile',
		'action' => 'show',
	],
	'profile/edit' => [
		'controller' => 'profile',
		'action' => 'edit',
	],	
	'profile/students/{page:\d+}' => [
		'controller' => 'profile',
		'action' => 'students',
	],
	'profile/employers/{page:\d+}' => [
		'controller' => 'profile',
		'action' => 'employers',
	],
//PostsController
	'posts/{page:\d+}' => [
		'controller' => 'posts',
		'action' => 'index',
	],
	'posts/detail/{page:\d+}' => [
		'controller' => 'posts',
		'action' => 'detail',
	],
	'posts/add' => [
		'controller' => 'posts',
		'action' => 'add',
	],


	'posts/edit/{page:\d+}' => [
		'controller' => 'posts',
		'action' => 'edit',
	],
	'posts/list/{page:\d+}' => [
		'controller' => 'posts',
		'action' => 'list',
	],
	'posts/delete/{page:\d+}' => [
		'controller' => 'posts',
		'action' => 'delete',
	],
//WorksController
	'works/add' => [
		'controller' => 'works',
		'action' => 'add',
	],
	'works/delete/{page:\d+}' => [
		'controller' => 'works',
		'action' => 'delete',
	],
	'works/list/{page:\d+}' => [
		'controller' => 'works',
		'action' => 'list',
	],

	'works/search' => [
		'controller' => 'works',
		'action' => 'search',
	],
//StudentsController
	'students/list' => [
		'controller' => 'students',
		'action' => 'list',
	],
	'students/works/{page:\d+}' => [
		'controller' => 'students',
		'action' => 'works',
	],
];