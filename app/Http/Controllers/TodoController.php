<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Author;
use App\Http\Requests\AuthorRequest;

class TodoController extends Controller
{
    public function index() {
        $authors = Author::all();
        return view('index', ['authors' => $authors]);
    }
    public function create(AuthorRequest $request) {
        $form = $request->task();
        Author::create($form);
        return redirect('/');
    }
    public function update(AuthorRequest $request) {
        $form = $request->task();
        Author::where('id', $request->id)->update($form);
        unset($form['_token']);
        return redirect('/');
    }
    public function remove(Request $request) {
        Author::find($request->id)->delete();
        return redirect('/');
    }
}
