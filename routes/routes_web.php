<?php
return [
    ["action"=>"get","name"=>"index","path"=>"/","controller"=>"App\Controllers\IndexController","method"=>"indexAction"],
    ["action"=>"get","name"=>"contact","path"=>"/contact","controller"=>"App\Controllers\ContactController","method"=>"indexAction"],
    ["action"=>"post","name"=>"sendContact","path"=>"/contact/send","controller"=>"App\Controllers\ContactController","method"=>"sendAction"],
    ["action"=>"get","name"=>"indexJobs","path"=>"/admin/jobs","controller"=>"App\Controllers\JobsController","method"=>"indexAction"],
    ["action"=>"get","name"=>"deleteJobs","path"=>"/admin/jobs/{id}/delete","controller"=>"App\Controllers\JobsController","method"=>"deleteAction"],
    ["action"=>"get","name"=>"addJobs","path"=>"/admin/jobs/add","controller"=>"App\Controllers\JobsController","method"=>"getAddJobAction"],
    ["action"=>"post","name"=>"saveJobs","path"=>"/admin/jobs/add","controller"=>"App\Controllers\JobsController","method"=>"getAddJobAction"],
    ["action"=>"get","name"=>"addUser","path"=>"/admin/users/add","controller"=>"App\Controllers\UsersController","method"=>"getAddUser"],
    ["action"=>"post","name"=>"saveUser","path"=>"/admin/users/save","controller"=>"App\Controllers\UsersController","method"=>"postSaveUser"],
    ["action"=>"get","name"=>"loginForm","path"=>"/login","controller"=>"App\Controllers\AuthController","method"=>"getLogin"],
    ["action"=>"get","name"=>"logout","path"=>"/logout","controller"=>"App\Controllers\AuthController","method"=>"getLogout"],
    ["action"=>"post","name"=>"auth","path"=>"/auth","controller"=>"App\Controllers\AuthController","method"=>"postLogin"],
    ["action"=>"get","name"=>"admin","path"=>"/admin","controller"=>"App\Controllers\AdminController","method"=>"getIndex"],
    ["action"=>"get","name"=>"admin.profile.changePassword","path"=>"/admin/profile/changePassword","controller"=>"App\Controllers\ProfileController","method"=>"changePassword"],
    ["action"=>"post","name"=>"admin.profile.savePassword","path"=>"/admin/profile/savePassword","controller"=>"App\Controllers\ProfileController","method"=>"savePassword"],
];//end array