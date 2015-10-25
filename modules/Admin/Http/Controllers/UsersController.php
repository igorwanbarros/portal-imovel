<?php

namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use App\User;

class UsersController extends Controller
{

    public function index(User $user)
    {
        $object = $user->all();
        $title  = 'Usuários';
        
        return view('admin::users.index', compact('object','title'));
    }

    public function form(User $user, $id = null)
    {
        $object = $user->findOrNew($id);
        $title  = 'Usuários';
        
        return view('admin::users.form', compact('object','title'));
    }
    
    
    public function destroy($id)
    {
        return ['status' => User::destroy($id)];
    }

}
