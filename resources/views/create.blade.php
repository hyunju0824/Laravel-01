
<body>
  @extends('layouts.app')

  @section('content')
<div class="px-72">
  <h1 class="p-10 text-center text-3xl">게시글 작성</h1>

  <!-- 글 작성 폼 -->
  <div class="mx-auto w-3/4">
  <form action="{{route("upload")}}" id="postForm" method="post" class="bg-gray-100 pt-12 pb-12 border-t-2 border-gray-300">
    @csrf
    <div class="mx-auto w-9/12">
      <label class="block pb-2" for=title>제목</label>
      <input name="title" type=text class="h-9 w-full" id=title required>
    </div>
        {{-- 어스 이름 가져오기 --}}
        <input class="hidden" name="writer" type=text class="h-9" id=writer value="{{Auth::user()->name}}">
 
    <div class="mx-auto w-9/12">
      <label class="block pb-2 pt-3.5" for=content>내용</label>
      <textarea name="content" class="w-full h-80" id=content rows=3 required></textarea>
    </div>
      <div class="mx-auto w-9/12" dir="rtl">
        <input class="w-12 mt-10 bg-gray-300 hover:bg-gray-400" type="submit" name="" id="">
      </div>
      <input class="hidden" name="userKeyValue" type="text" value="{{Auth::user()->email}}">
    
  </form>
  </div>
  
</div>
@endsection
</body>
</html>


