<?php
namespace Controllers;

use Controllers\Controller;
use Services\Validation;
use Db\Models\User;

class AuthController extends Controller {

    public function get_register() {

        return $this->view('auth/register');
    }

    public function post_register($request) {

        if(Validation::email($request['email'])) {
            if($request['password'] == $request['password_confirm']) {
                $user = new User;
                $user->create([
                    'email' => $request['email'],
                    'name' => $request['name'],
                    'password' => md5($request['password'])
                ]);

                $_SESSION['auth'] = true;
                $_SESSION['email'] = $request['email'];

                return $this->redirect('/', ['success' => 'Вы успешно зарегестрированы и авторизированы!']);
            } else {
                return $this->redirect('auth/register', ['error' => 'Пароли не совпадают!']);
            }
        } else {
            return $this->redirect('auth/register', ['error' => 'Введите данные корректно!']);
        }

    }

    public function get_auth() {
        return $this->view('auth/index');
    }

    public function post_auth($request) {
        $user_t = new User;
        $user = $user_t->select('*')->where("email='".$request['email']."'")->get();
        if($user) {
            if($user['password'] == md5($request['password'])) {
                $_SESSION['auth'] = true;
                $_SESSION['email'] = $request['email'];
                return $this->redirect('/', ['success' => 'Вы успешно авторизованы!']);
            } else {
                return $this->redirect('auth/index', ['error' => 'Пароли не совпадают!']);
            }
        } else {
            return $this->redirect('auth/index', ['error' => 'Пользователя с такой почтой не существует!']);
        }

    }

    public function logout() {
        $_SESSION['auth'] = false;
        $_SESSION['email'] = false;

        return $this->redirect('/', ['info' => 'Вы вышли из аккаунта!']);
    }

}