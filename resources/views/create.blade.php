<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>글쓰기</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    @font-face {
      font-family: 'Pretendard-Regular';
      src: url('https://cdn.jsdelivr.net/gh/Project-Noonnu/noonfonts_2107@1.1/Pretendard-Regular.woff') format('woff');
      font-weight: 400;
      font-style: normal;
  }
  * {
    font-family: 'Pretendard-Regular';
  }
  </style>
</head>
<body>

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
    <div class="mx-auto w-9/12">
        <label class="block pb-2 pt-3.5" for=title>이름</label>
        <input name="writer" type=text class="h-9" id=writer required>
      </div>
    <div class="mx-auto w-9/12">
      <label class="block pb-2 pt-3.5" for=content>내용</label>
      <textarea name="content" class="w-full h-80" id=content rows=3 required></textarea>
    </div>
    <div class="mx-auto w-9/12">
        <label class="block pb-2 pt-3.5" for=password>비밀번호</label>
        <input name="password" type=password class="h-9" id=password required>
      </div>
      <div class="mx-auto w-9/12" dir="rtl">
        <input class="w-12 bg-gray-300 hover:bg-gray-400" type="submit" name="" id="">
      </div>

    
  </form>
  </div>
  
</div>

</body>
</html>


