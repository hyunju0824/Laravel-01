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
  <h1>게시글 작성</h1>

  <!-- 글 작성 폼 -->

  <form id="postForm" class="mt-3">
    
    <div class=form-group>
      <label for=title>제목</label>
      <input type=text class=form-control id=title required>
    </div>
    <div class=form-group>
        <label for=title>이름</label>
        <input type=text class=form-control id=name required>
      </div>
    <div class=form-group>
      <label for=content>내용</label>
      <textarea class=form-control id=content rows=3 required></textarea>
    </div>
    <div class=form-group>
        <label for=password>비밀번호</label>
        <input type=password class=form-control id=password required>
      </div>
      <div>
        <button>제출</button>
      </div>

    
  </form>
  
</div>

</body>
</html>


