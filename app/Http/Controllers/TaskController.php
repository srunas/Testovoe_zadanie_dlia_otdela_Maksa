<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        // Ваш код для сохранения задачи

        return redirect()->route('tasks.index')->with('success', 'Задача успешно добавлена!');
    }
};