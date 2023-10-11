
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>웹 게시판</title>

<!-- 부트스트랩 사용하기 위해 -->

<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container">

  <h2>게시판</h2>          

  <table class="table table-hover">

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

        <td>{{$key+1 + (($posts->currentPage()-1) * 5)}}</td>

        {{-- 제목 --}}
        <!-- {{$post->title}} (화면에 띄울 값) -->
        <td>
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

</body> 
