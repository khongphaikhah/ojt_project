<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    private object $model;
    private string $table;
    public function __construct()
    {
        $this->model = User::query();
        $this->table = (new User())->getTable();

        View::share('table', $this->table);
    }
    public function index(Request $request)
    { 
        // $selectedRole = $request->get('role');
        // $query = $this->model->get();
        // if(!empty($selectedRole) && $selectedRole !== 'Tất cả') {
        //     $query->where('role', $selectedRole);
        // }
        // $data = $this->model->get();
        
        $data = $this->model
            ->when($request->has('role'),function($q){
                return $q->where('role', request('role'));
            })
            ->get();
        
        $roles = UserRoleEnum::asArray();

        return view("admin.$this->table.index", [
            'data' => $data,
            'roles' => $roles,
            'selectedRole' => $request->get('role'),
        ]);
    }

    public function destroy($userId) {
        User::destroy($userId);
        return redirect()->back();
    }
}