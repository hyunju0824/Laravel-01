
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- 부트스트랩 사용하기 위해 -->

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>게시판 페이지</title>

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

      <tr>

        <td>1</td>

        <td>비트코인 떡락</td>

        <td>네오보유자</td>

        <td>2018-03-11</td>

      </tr>

    </tbody>

  </table>

  <a href="{{route("posts.create")}}" class="btn btn-primary pull-right">글쓰기</a>

</div>

</body> 