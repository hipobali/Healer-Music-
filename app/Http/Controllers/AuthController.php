<?php

namespace App\Http\Controllers;

use App\Album;
use App\Singer;
use App\Song;
use Illuminate\Http\Request;
use Auth;
use App\Category;

class AuthController extends Controller
{
    public function getWelcome(){
        $cat=Category::OrderBy('id','desc')->get();
        $album=Album::OrderBy('id','desc')->get();
        $song=Song::OrderBy('id','desc')->get();
        $singer=Singer::OrderBy('id','desc')->get();
        return view('welcome')->with(['cat'=>$cat])->with(['song'=>$song])->with(['album'=>$album])->with(['singer'=>$singer]);
    }
    public function getLogin(){
        return view ('auth.login');
    }
    public function postLogin(Request $request){
        $this->validate($request,[
            'name'=>'required|exists:users',
            'password'=>'required'
        ]);
        $name=$request['name'];
        $password=$request['password'];
        if(Auth::attempt(['name'=>$name, 'password'=>$password])){
            return redirect()->route('dashboard');

        }else{
            return redirect()->back()->with('error','User login failed.');
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function getSongCat($id){
        $song=Song::where('category_id', $id)->get();
        $cat=Category::OrderBy('id','desc')->get();
        $album=Album::OrderBy('id','desc')->get();
        $singer=Singer::OrderBy('id','desc')->get();
        return view('welcome')->with(['cat'=>$cat])->with(['song'=>$song])->with(['album'=>$album])->with(['singer'=>$singer]);
    }
    public function getSongSinger($id){
        $song=Song::where('singer_id', $id)->get();
        $cat=Category::OrderBy('id','desc')->get();
        $album=Album::OrderBy('id','desc')->get();
        $singer=Singer::OrderBy('id','desc')->get();
        return view('welcome')->with(['cat'=>$cat])->with(['song'=>$song])->with(['album'=>$album])->with(['singer'=>$singer]);
    }
    public function getSongAlbum($id){
        $song=Song::where('album_id', $id)->get();
        $cat=Category::OrderBy('id','desc')->get();
        $album=Album::OrderBy('id','desc')->get();
        $singer=Singer::OrderBy('id','desc')->get();
        return view('welcome')->with(['cat'=>$cat])->with(['song'=>$song])->with(['album'=>$album])->with(['singer'=>$singer]);
    }
}
