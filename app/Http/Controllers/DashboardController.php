<?php

namespace App\Http\Controllers;

use App\Models\Button;

class DashboardController extends Controller
{
    //
    public function index() {

        // According to the task, the dashboard must initially contain 9 cells.
        // An alternative way would be to use a Factory and DatabaseSeeder

        if (Button::count() < 9) {
            for ($i = Button::count(); $i < 9; $i++) {
                Button::create([
                    'title' => '',
                    'url' => null,
                    'color' => '',
                ]);
            }
        }

        $buttons = Button::all();
        return view('dashboard.index', compact('buttons'));
    }

}
