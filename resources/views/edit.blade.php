<body>
  @extends('layouts.app')

  @section('content')
<div class="px-72">
  <h1 class="p-10 text-center text-3xl">게시글 수정</h1>

  <!-- 유효성검사 -->
  @if ($errors->any())
        <div class="alert alert-warning" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  <!-- 글 작성 폼 -->
  <div class="mx-auto w-3/4">
  <form class="bg-gray-100 pt-12 pb-12 border-t-2 border-gray-300" action="{{route("posts.update",$post)}}" id="postForm" method="post" class="mt-3">
    @csrf
    @method('patch')
    <div class="mx-auto w-9/12">
      <label class="block pb-2" for=title>제목</label>
      <input name="title" type=text class="h-9 w-full" id=title required value={{$post->title}}>
    </div>
    <div class="mx-auto w-9/12">
      <div class="hidden"><input name="writer" type=text class="h-9" id=writer value="{{Auth::user()->name}}"></div>
      </div>
    <div class="mx-auto w-9/12">
      <label class="block pb-2 pt-3.5" for=content>내용</label>
      <textarea name="content" class="w-full h-80"  id=content rows=3 required>{{$post->content}}</textarea>
    </div>
      <div class="mx-auto w-9/12" dir="rtl">
        <button class="w-12 mt-10 bg-gray-300 hover:bg-gray-400" type="submit">수정</button>
      </div>

    
  </form>
</div>
</div>
@endsection
</body>
</html>


