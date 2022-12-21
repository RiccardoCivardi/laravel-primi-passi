<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $title = 'HELLO LARAVEL!';
    $link_text = 'VAI ALLA PAGINA DI ATTERRAGGIO';
    $print_text = true;
    $names = ['Riccardo', 'Enrico', 'Loris', 'Alfredo', 'Stefano'];

    $students = [

    ];

    return view('home', compact('title','link_text','print_text','names', 'students'));
});

Route::get('/landing', function () {

    $title = 'Landing page LARAVEL';
    $link_text = 'TORNA ALLA HOME';

    class member_team {

        public $name;
        public $surname;
        public $age;

        public function __construct(String $_name, String $_surname, Int $_age) {

            $this->name = $_name;
            $this->surname = $_surname;
            $this->age = $_age;

        }

    };

    $team_members = [

        new member_team('Riccardo', 'Civardi', 31),
        new member_team('Enrico', 'Micheleotto', 28),
        new member_team('Federica', 'Pistoia', 33)

    ];

    return view('landing', compact('title','link_text', 'team_members'));
});
