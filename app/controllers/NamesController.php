<?php 

namespace App\Controllers;

use App\Core\App;

class NamesController {


    public function index() {

        $names = App::get('database')->selectAll('names');

        return view('names', ['names' => $names]);
        //['names' => $names] equivalent to --> compact('names');
    } 

    public function store() {

        //Insert the name associated with the request.
        $answer = App::get('database')->insert('names', [
            'name' => $_POST['name']
        ]);

        //and then redirect back to all names.
        return redirect('names');
        
    }

}