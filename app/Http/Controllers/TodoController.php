<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Todo;
use App\Http\Requests\AuthorRequest;

class TodoController extends Controller
{
    public function index() {
        $authors = Todo::all();
        return view('index', ['authors' => $authors]);
    }
    public function create(AuthorRequest $request) {
        $form = $request->task();
        Todo::create($form);
        return redirect('/');
    }
    public function update(AuthorRequest $request) {
        $form = $request->task();
        Todo::where('id', $request->id)->update($form);
        unset($form['_token']);
        return redirect('/');
    }
    public function remove(Request $request) {
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
