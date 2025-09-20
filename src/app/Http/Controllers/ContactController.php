<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact'); // contact.blade.php を表示
    }

     // サンクスページ
    public function thanks()
    {
        return view('thanks');
    }

    //お問い合わせフォームの入力画面
    public function contact( Request $request)
    {
        return view('contact');
    }

    //お問い合わせフォームの確認画面
    public function confirm( Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'address' => 'required',
            'building' => 'nullable',
            'category' => 'required',
            'message' => 'required|max:120',
        ]);

        return view('confirm', ['contact' => $validated] );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'address' => 'required',
            'building' => 'nullable',
            'category' => 'required',
            'message' => 'required|max:120',
        ]);

        Contact::create($validated);

        return redirect()->route('thanks');
    }


    //ログインページ
    public function login()
    {
        return view('login');
    }

    //登録ページ
    public function register()
    {
        return view('register');
    }

    //管理画面
    public function admin()
    {
        return view('admin');
    }


}
