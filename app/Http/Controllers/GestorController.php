<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;


class GestorController
{

    public function userupdate($id)
    {
        $obj = $this->request->validate([
            'user_id' => 'required',
            'sala_id' => 'required',
            'exercicio' => 'required',
        ]);

        UserController::update($id, $obj);
    }

    public function userdestroy($id)
    {
        UserController::destroy($id);
    }

    public function useredit($id)
    {
        UserController::edit($id);
    }

    public function usershow($id)
    {
        UserController::show($id);
    }

    public function userstore()
    {
        $dado = $this->request->validate([
        'user_id' => 'required',
        'sala_id' => 'required',
        'exercicio' => 'required',
        ]);

        UserController::store($dado);
    }

}
