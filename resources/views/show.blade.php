

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>board1</title>
</head>
<body>
        <table border="1" style="width:600px">
            <caption>게시판</caption>
            <colgroup>
                <col width='15%' />
                <col width='*%' />
            </colgroup>
            <tbody>
                <tr>
                    <td>작성자</td>
                    <td>{{$post->writer}}</td>
                </tr>
                <tr>
                    <td>제목</td>
                    <td>{{$post->title}}</td>
                </tr>
                <tr>
                    <td>내용</td>
                    <td>{{$post->content}}</td>
                </tr>
            </tbody>
        </table>   
        <a href="#" onclick="history.back(-1)">돌아가기</a>
        <a href="board1Delete?brdno=<c:out value="${boardInfo.brdno}"/>">삭제</a>
        <a href="board1Update?brdno=<c:out value="${boardInfo.brdno}"/>">수정</a>
</body>
</html>