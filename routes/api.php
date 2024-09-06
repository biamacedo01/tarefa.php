<?php

use App\Http\Controllers\TarefaController;
use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/tarefa',[TarefaController::class,'store']);