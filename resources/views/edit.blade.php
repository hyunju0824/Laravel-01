<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>웹 게시판</title>
  <!-- 부트스트랩 CDN 링크 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h1>게시글 수정</h1>

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

  <form action="{{route("posts.update",$post)}}" id="postForm" method="post" class="mt-3">
    @csrf
    @method('patch')
    <div class=form-group>
      <label for=title>제목</label>
      <input name="title" type=text class=form-control id=title required>
    </div>
    <div class=form-group>
        <label for=title>이름</label>
        <input name="writer" type=text class=form-control id=writer required>
      </div>
    <div class=form-group>
      <label for=content>내용</label>
      <textarea name="content" class=form-control id=content rows=3 required></textarea>
    </div>
    <div class=form-group>
        <label for=password>비밀번호</label>
        <input name="password" type=password class=form-control id=password required>
      </div>
      <div>
        <button type="submit">수정</button>
      </div>

    
  </form>
  
</div>

</body>
</html>


