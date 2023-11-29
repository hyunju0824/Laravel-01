

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
        {{-- 포스트 데이터베이스의 유저키밸류가 어스유저의 이메일과 같으면 동작 --}}
        @if(Auth::check()==false)
        <div></div>
       
        @elseif($post->userKeyValue==Auth::user()->email)
        <a href="{{route("posts.edit",$post->id)}}">수정</a>
        <form action="{{route('posts.destroy', $post->id)}}" method="post" onsubmit="return confirm('글을 삭제하겠습니까?')">
            @method('delete')
            @csrf
            <input type="submit" value="삭제" class="hover:text-blue-600 cursor-pointer">
        </form>
        @endif
</body>
</html>