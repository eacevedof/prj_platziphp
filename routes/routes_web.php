<?php

$r[] = ["action"=>"get","name"=>"index","path"=>"/","controller"=>"App\Controllers\IndexController","method"=>"indexAction"];
$r[] = ["action"=>"get","name"=>"contact","path"=>"/contact","controller"=>"App\Controllers\ContactController","method"=>"indexAction"];
$r[] = ["action"=>"post","name"=>"sendContact","path"=>"/contact/send","controller"=>"App\Controllers\ContactController","method"=>"sendAction"];
$r[] = ["action"=>"get","name"=>"indexJobs","path"=>"/admin/jobs","controller"=>"App\Controllers\JobsController","method"=>"indexAction"];
$r[] = ["action"=>"get","name"=>"deleteJobs","path"=>"/admin/jobs/{id}/delete","controller"=>"App\Controllers\JobsController","method"=>"deleteAction"];
$r[] = ["action"=>"get","name"=>"addJobs","path"=>"/admin/jobs/add","controller"=>"App\Controllers\JobsController","method"=>"getAddJobAction"];
$r[] = ["action"=>"post","name"=>"saveJobs","path"=>"/admin/jobs/add","controller"=>"App\Controllers\JobsController","method"=>"getAddJobAction"];
$r[] = ["action"=>"get","name"=>"addUser","path"=>"/admin/users/add","controller"=>"App\Controllers\UsersController","method"=>"getAddUser"];
$r[] = ["action"=>"post","name"=>"saveUser","path"=>"/admin/users/save","controller"=>"App\Controllers\UsersController","method"=>"postSaveUser"];
$r[] = ["action"=>"get","name"=>"loginForm","path"=>"/login","controller"=>"App\Controllers\AuthController","method"=>"getLogin"];
$r[] = ["action"=>"get","name"=>"logout","path"=>"/logout","controller"=>"App\Controllers\AuthController","method"=>"getLogout"];
$r[] = ["action"=>"post","name"=>"auth","path"=>"/auth","controller"=>"App\Controllers\AuthController","method"=>"postLogin"];
$r[] = ["action"=>"get","name"=>"admin","path"=>"/admin","controller"=>"App\Controllers\AdminController","method"=>"getIndex"];
$r[] = ["action"=>"get","name"=>"admin.profile.changePassword","path"=>"/admin/profile/changePassword","controller"=>"App\Controllers\ProfileController","method"=>"changePassword"];
$r[] = ["action"=>"post","name"=>"admin.profile.savePassword","path"=>"/admin/profile/savePassword","controller"=>"App\Controllers\ProfileController","method"=>"savePassword"];
