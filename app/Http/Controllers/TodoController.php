<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    //
    public function getAllTodo() {
        // DB::insert('insert into users (password, name, email) values (?, ?, ?)', [5023, 'Emdadul Islam', 'B@b.com']);

        // $users = DB::select('select * from users');
        // return $users;
        $todo = collect([
            ['id'=> '1',
            'todo'=> 'Rokomari - new thing new thing new thing new thing 1'],
            ['id'=> '2',
            'todo'=> 'Rokomari - new thing new thing new thing new thing'],
            ['id'=> '3',
            'todo'=> 'Rokomari - new thing new thing new thing new thing 3'],
            ['id'=> '4',
            'todo'=> 'Rokomari - new thing new thing new thing new thing'],
            ['id'=> '5',
            'todo'=> 'Rokomari - new thing new thing new thing new thing 5'],

        ]);

        $user = new User();
        $user->name = 'EV';
        $user->email = 'EV@e.com';
        $user->phone = '01856493398';
        $user->todo = $todo;
        $user->password = '123456';
        $user->save();
        // User::where('id', 2)->delete();
        // $user = User::all();
        // return $user;

        // dd($user);
        

        return view('todo');
    }
}
