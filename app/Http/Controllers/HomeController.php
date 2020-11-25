<?php
use Illuminate\Support\Facades\DB;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Send;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $number=2;
        $users=new Send();
        $users=$users->paginate($number);
        $page=(int)\request()->get('page');
        if($page===0)$page=1;
        $sort=$number*($page-1);
        return view('home',[
            'users'=>$users,
            'sort'=>$sort,
            'pageId'=>$page
            ]);
    }
    public function add()
    {
        return view('keksalar');
    }
    public function send(Request $request)
    {
        $send=new Send();
       
        $send->name=$_POST['name'];
        $send->manzil=$request->input('manzil');
        $send->lavozim=$request->input('lavozim');
        $send->telefon=$_POST['telefon'];
        $send->telegram=$_POST['telegram'];
        $send->eshitishingiz=$_POST['eshitishingiz'];
        $send->sabab=$_POST['sabab'];
        $send->vaqtingiz=$_POST['vaqtingiz'];

        $send->save();
        $request->session()->flash('msg','Data submitted');
        return redirect()->route('home');
    }
}

//     {
//         DB::table('users')->insert([
//             'name' => Str::random(10),
//             'email' => Str::random(10).'@gmail.com',
//             'password' => Hash::make('password'),
//         ]);
//     }
// }