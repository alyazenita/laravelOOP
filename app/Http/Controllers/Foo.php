<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Foo extends Controller
{
    public function index()
    {
        $data1 = $this->baz1();
         $data2 = $this->baz2();
        return view('baz',compact('data1','data2'));
    }

    public function baz1(){
        $input = 'kitabisa' ;

        $count =  strlen($input) ;
        $output = '' ;

        for( $i = $count ; $i >= 0 ; $i-- ) {
            $output .= substr($input, $i, 1) ;
        }

        return $output ;
    }

    public function baz2(){
        for($i = 1 ; $i <= 15 ; $i++) {
            // echo $i ;
           if($i % 5 == 0 && $i % 3 == 0) {
               echo $i . 'lorem ipsum <br>' ;
           } else if ($i % 5 == 0) {
                echo $i . 'ipsum <br>' ;
           } else if ($i % 3 == 0) {
                echo $i . 'lorem <br>' ;
           }
           else {
               echo $i . '<br>' ;
           }

        }

    }
}
