<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function index()
    {

        return view('home.index');
    }

//    public function reception(Request $request)
//    {
//
//        $inputs = $request->all();
//        foreach ($inputs as $key => $value) {
//            if (strpos($key, 'user') !== false) {
//                $id = explode('-', $key)[1];
//                $user = User::find($id);
//                $sex = 'women';
//                if (isset($inputs['sex-' . $id])) {
//                    $sex = 'men';
//                }
//                $imageUrl = 'https://randomuser.me/api/portraits/'.$sex.'/' . fake()->numberBetween(1, 99) . '.jpg';
//                $nameImage = 'img/users/'. $user->id. '.jpg';
//                $image = new Image();
//                $image->url = $nameImage;
//                $image->user_id = $user->id;
//                $image->save();
//                Storage::disk('public')->put($nameImage, file_get_contents($imageUrl));
//
//            }
//
//        }
//        return redirect()->route('home');
//    }
}
