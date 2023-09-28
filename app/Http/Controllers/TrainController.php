<?php
namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $data =[
            "trains"=>Train::all()->where("data", ">=", now()->toDateString())
        ];
        return view("home", $data);
    }
}
