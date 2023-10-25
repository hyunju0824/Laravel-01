
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>웹 게시판</title>

<!-- 부트스트랩 사용하기 위해 -->

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

<div class="px-20">

  <h2 class="p-10 text-center text-3xl">게시판</h2>          

  <table class="mx-auto w-3/4 table-hover border-t-2 border-gray-300">

    <thead>

      <tr class="bg-gray-200 h-10">

        <th>번호</th>

        <th class="text-left pl-10">제목</th>

        <th class="text-left">글쓴이</th>

        <th>작성일</th>

        <th> </th>
      </tr>

    </thead>

    <tbody>
      @foreach ($posts as $key => $post)

      {{-- 보더색깔요 --}}
      <tr class="hover:bg-gray-100 border-b">

        {{-- 번호 --}}
        <td class="w-10 text-center">{{$key+1 + (($posts->currentPage()-1) * 5)}}</td>

        {{-- 제목 --}}
        <!-- {{$post->title}} (화면에 띄울 값) -->
        <td class="pl-10">
        <a href="{{route("posts.show", $post->id)}}">{{$post->title}}</a>
        </td>

        {{-- 이름 --}}
        <td>{{$post->writer}}</td>

        {{-- 날짜 --}}
        <td class="text-center">{{$post->created_at}}</td>

        {{-- 편집/삭제 --}}
        <td><a class="hover:text-blue-600" href="{{route("posts.edit", $post)}}">수정</a>
          <form action="{{route('posts.destroy', $post->id)}}" method="post">
            @method('delete')
            @csrf
            <input class="hover:text-blue-600" onclick="return confirm('글을 삭제하겠습니까?')" type="submit" value="삭제" class="cursor-pointer">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>

  </table>

  <div class="mx-auto mt-5 mb-5 w-3/4 flex flex-row justify-end"><a href="{{route("posts.create")}}" class="bg-gray-200 w-14 text-center hover:bg-gray-300">글쓰기</a></div>
  {!! $posts->links() !!}

</div>

<button
  class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-green-500 hover:bg-green-700"
>
  Hello, Tailwind CSS!
</button>

</body> 
