<?php

namespace App\Http\Controllers;

use App\Models\Member01;
use Illuminate\Http\Request;

class Member01Controller extends Controller
{
    /**
    * 会員一覧画面の表示
    * @param Request $request
    * @return Response
    */
    public function top()
    {
        $members = Member01::all();

        return view('top', ['members' => $members]);
    }

    /**
    * 会員登録画面の表示
    *
    */
    public function register()
    {
        return view('register');
    }

    /**
    * 会員情報の登録
    *
    * @param Request $request
    * @return Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|max:255|unique:Member01',
        ]);

        Member01::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect('/top');
    } 

    /**
    * 会員情報の登録
    *
    * @param Request $request
    * @return Response
    */
    public function edit($id)
    {
        $member = Member01::findOrFail($id);
        return view('/edit', ['member' => $member]);
    }

    /**
    * 会員情報のUpdate
    *
    * @param Request $request
    * @return Response
    */
    public function update(Request $request, $id)
    {
        // バリデーションを追加
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);
        
        $member = Member01::findOrFail($id);
        $member->name = $request->input('name');
        $member->phone = $request->input('phone');
        $member->email = $request->input('email');
        $member->save();

        return redirect('/top')->with('success', '会員情報が無事更新されました');
    }

    /**
    * 会員情報の削除
    *
    * @param Request $request
    * @return Response
    */
    public function destroy(Request $request, $id)
    {
        $member = Member01::findOrFail($id);
        $member->delete();

        return redirect('/top')->with('success', "会員ID{$id}の情報が無事更新されました");
    }
}
