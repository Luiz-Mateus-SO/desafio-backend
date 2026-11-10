<?php

use App\Livewire\CreateMovie;
use App\Livewire\ListMovies;
use App\Livewire\ShowMovie;
use Illuminate\Support\Facades\Route;

// 1. Página de Listagem (Home)
Route::get('/', ListMovies::class)->name('home');

// 2. Página de Cadastro
Route::get('/cadastrar', CreateMovie::class)->name('create');

// 3. Página de Visualização do Filme (com parâmetro {film})
Route::get('/ver/{film}', ShowMovie::class)->name('see');
