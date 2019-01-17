<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 09/11/2018
 * Time: 20:30
 */

namespace App\Http\Controllers;


class Contacts extends Controller
{
    public function __invoke(){
        echo "Contacts";
    }

    public function create(){
        echo "privet";
    }
}
