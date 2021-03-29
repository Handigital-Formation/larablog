<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home() {
        return view('home');
    }
    public function contact() {
        return view('contact');
    }
    public function task() {
        $tasks = [
            'Apprendre laravel',
            'Sortir me promener'
        ];
        
        return view('task',
                    [
                        'monProjet' => 'Projet numéro 1',
                        'tasks' => $tasks,
                        'test' => request('title')
                    ]
        );
    }
}
