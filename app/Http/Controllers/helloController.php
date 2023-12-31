<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\post;
use Illuminate\Support\Facades\Auth;

class helloController extends Controller
{
    private $posts;

    public function __construct(post $posts){
        // Laravel 의 IOC(Inversion of Control) 입니다
        // 일단은 이렇게 모델을 가져오는 것이 추천 코드라고 생각하시면 됩니다.
        $this->posts = $posts;
    }
    public function create(){
            if(Auth::check()==true){
                 return view("create");
            }
            else{
                return redirect()->route('login');
            }
    }

    public function upload(request $request){
        $request = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'writer' => 'required',
            'userKeyValue' => 'required'
        ]);
        $this->posts->create($request);
        return redirect()->route('posts.list');
        }

    public function list(){
        // 페이징
        // 
        // 
        // 
        $posts = $this->posts->latest()->paginate(5);
        // list 에 $posts 를 보내줌
        return view('list', compact('posts'));
    }

    public function show(post $post){
        //post.show 로 post 페이지의 데이터를 넘김
        return view('show', compact('post'));
    }

    // 수정 : 글쓴이 본인이라면 edit 페이지를 띄운다. 본인이 아니라면 list 페이지로 이동.
    public function edit(Request $request, post $post){
        if(Auth::user()->email==$post->userKeyValue)
            return view('edit', compact('post'));
        else
             return redirect()->route('posts.list');
    }

    //업데이트
    public function update(request $request, post $post){
        $request = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $post->update($request);
        return redirect()->route('posts.list', $post);
    }

    //삭제
    public function destroy(post $post){
        $post->delete();
        return redirect()->route('posts.list');
    }

    //내가 근 쓸 보기 버튼
    public function myPage(Request $request){
        $userEmail = $request -> post;
        $posts = post::where('userKeyValue', $userEmail)-> paginate(5);
        return view('myPage', compact('posts'));
    }

}