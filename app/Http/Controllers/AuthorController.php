<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function get_authors(){
        $authors = Author::all();
        // dd($authors);
        return view('main.writer',compact('authors'));
    }
    // public function get_author($id){
    //     $author = Author::find($id);
    //     return view('main.writer_detail', compact('author'));
    // }
    public function get_authorById($id){
        $author = Author::with('article')->find($id);
        // dd($author);
        return view('main.writer_detail',['author'=> $author]);
    }
}
