<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();
        return view('index', ['todos' => $todos]);
    }
    public function create(TodoRequest $request) {
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
    public function update(TodoRequest $request) {
        $form = $request->all();
        Todo::where('id', $request->id)->update($form);
        unset($form['_token']);
        return redirect('/');
    }
    public function remove(Request $request) {
        Todo::find('id', $request->id)->delete();
        return redirect('/');
    }
}
