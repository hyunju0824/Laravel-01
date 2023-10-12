
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

<div class="bg-yellow-200">

  <h2>게시판</h2>          

  <table class="bg-green-200 mx-auto w-3/4 table-hover">

    <thead>

      <tr>

        <th>번호</th>

        <th>제목</th>

        <th>글쓴이</th>

        <th>작성일</th>

      </tr>

    </thead>

    <tbody>
      @foreach ($posts as $key => $post)
      <tr>

        {{-- 번호 --}}
        <td class="w-10 text-center">{{$key+1 + (($posts->currentPage()-1) * 5)}}</td>

        {{-- 제목 --}}
        <!-- {{$post->title}} (화면에 띄울 값) -->
        <td class="px-3">
        <a href="{{route("posts.show", $post->id)}}">{{$post->title}}</a>
        </td>

        {{-- 이름 --}}
        <td>{{$post->writer}}</td>

        {{-- 날짜 --}}
        <td>{{$post->created_at}}</td>

        {{-- 편집/삭제 --}}
        <td><a href="{{route("posts.edit", $post)}}">수정</a>
          <form action="{{route('posts.destroy', $post->id)}}" method="post">
            @method('delete')
            @csrf
            <input onclick="return confirm('글을 삭제하겠습니까?')" type="submit" value="삭제">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>

  </table>

  <a href="{{route("posts.create")}}" class="btn btn-primary pull-right">글쓰기</a>
  {!! $posts->links() !!}

</div>

<button
  class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-green-500 hover:bg-green-700"
>
  Hello, Tailwind CSS!
</button>

</body> 
