<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index() {
        $users = User::all();
        $title = 'Users';
        view('users/index', compact('title', 'users'));
    }

    public function view() {
        $user = User::find($_GET['id']);
        if($user) {
            $title = $user->name;
            view('users/view', compact('title', 'user'));
        } else {
            echo 404;
        }
    }

    public function edit() {
        $user = User::find($_GET['id']);
        if($user) {
            $title = 'Edit User';
            view('users/edit', compact('title', 'user'));
        } else {
            echo 404;
        }
    }

    public function update() {
        $user = User::find($_GET['id']);
        if($user) {
            $user->name = $_POST['name'];
            $user->email = $_POST['email'];
            if(!empty($_POST['password'])) {
                $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            }
            $user->save();
            redirect('/admin/users');
        } else {
            echo 404;
        }
    }

    public function delete() {
        $user = User::find($_GET['id']);
        if($user) {
            $user->delete();
            redirect('/admin/users');
        } else {
            echo 404;
        }
    }
}
