<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('list');
    }

    public function details($id)
    {
        return view('details', ['id' => $id]);
    }

    public function modify()
    {
        return view('modify');
    }

    public function delete($id)
    {
        return view('delete', ['id' => $id]);
    }

    public function create()
    {
        return view('create');
    }
}
