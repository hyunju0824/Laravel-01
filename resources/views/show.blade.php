<body>
    @extends('layouts.app')
  
    @section('content')
  <div class="px-72">
    <h1 class="p-10 text-center text-3xl">게시글</h1>
  
    <!-- 글 작성 폼 -->
    <div class="mx-auto w-3/4">
        <div class="bg-gray-100 pt-12 pb-12 border-t-2 border-gray-300">
      @csrf
      <div class="mx-auto w-9/12">
        <label class="block pb-2" for=title>제목</label>
        <div class="h-9 w-full bg-white leading-9" id=title>{{$post->title}}</div>
      </div>
          {{-- 어스 이름 가져오기 --}}
          <div class="hidden"><input name="writer" type=text class="h-9" id=writer value="{{Auth::user()->name}}"></div>
   
      <div class="mx-auto w-9/12">
        <label class="block pb-2 pt-3.5" for=content>내용</label>
        <div class="w-full h-80 bg-white" id=content rows=3 required>{{$post->content}}</div>

  {{-- 포스트 데이터베이스의 유저키밸류가 어스유저의 이메일과 같으면 동작 --}}
  @if(Auth::check()==false)
  <div></div>
 
  @elseif($post->userKeyValue==Auth::user()->email)

  <div class="flex justify-end mt-10">
      <a href="{{route("posts.edit",$post->id)}}" class="bg-gray-200 w-10 h-6 leading-6 text-center hover:bg-gray-300 mr-3">수정</a>
      <form action="{{route('posts.destroy', $post->id)}}" method="post" onsubmit="return confirm('글을 삭제하겠습니까?')">
      @method('delete')
      @csrf
      <input class="bg-gray-200 w-10 h-6 leading-6 text-center hover:bg-gray-300 text-center hover:bg-gray-300" type="submit" value="삭제" class="hover:text-blue-600 cursor-pointer">
  @endif
  </div>


      </div>

      
        <div class="hidden"><input name="userKeyValue" type="text" value="{{Auth::user()->email}}"></div>
      
      
        </div>
    
    </div>
    
  </div>
  @endsection
  </body>
  </html>
  
  
  