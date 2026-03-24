<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report; 
use App\Models\Status; 

class AdminController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        $statuses = Status::all();

        // Передаем переменные в представление с помощью compact
        return view('admin.index', compact('reports', 'statuses')); //здесь по заданию написано что должно быть admin.index
    }
}
