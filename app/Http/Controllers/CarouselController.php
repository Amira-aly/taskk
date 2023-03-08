<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarouselController extends Controller
{
    public function destroy($id){
        $post = DB::table('carousels')->where('id',$id)->delete();
        return redirect()->back();
    }
}
