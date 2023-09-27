<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\post;

class helloController extends Controller
{
    private $posts;

    public function __construct(post $posts){
        // Laravel 의 IOC(Inversion of Control) 입니다
        // 일단은 이렇게 모델을 가져오는 것이 추천 코드라고 생각하시면 됩니다.
        $this->posts = $posts;
    }
    public function create(){
        return view('create');
    }

    public function upload(request $request){
        $request = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'writer' => 'required',
            'password' => 'required'
        ]);
        $this->posts->create($request);
        return redirect()->route('posts.list');
        }

    public function list(){
        // 페이징
        $posts = $this->posts->latest()->paginate(5);
        // list 에 $posts 를 보내줌
        return view('list', compact('posts'));
    }

    public function show(post $post){
        //post.show 로 post 페이지의 데이터를 넘김
        return view('show', compact('post'));
    }

}
