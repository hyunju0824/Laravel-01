

<body>
    @extends('layouts.app')

@section('content')
    <h2 class="p-10 text-center text-3xl">게시판</h2>

    <table class="mx-auto w-3/5 table-hover border-t-2 border-gray-300 mb-20">
        <thead>
        <tr class="bg-gray-200 h-10">
            <th class="w-1/12 text-center">번호</th>
            <th class="w-2/5 text-left pl-10">제목</th>
            <th class="text-left">글쓴이</th>
            <th class="text-center">작성일</th>
            <th> </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $key => $post)
            <tr class="hover:bg-gray-100 border-b h-11">
                <td class="w-10 text-center">{{$key+1 + (($posts->currentPage()-1) * 5)}}</td>
                <td class="pl-10">
                    <a class="hover:text-blue-600" href="{{route("posts.show", $post->id)}}">{{$post->title}}</a>
                </td>
                <td>{{$post->writer}}</td>
                <td class="text-center">{{$post->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @if(Auth::check()==true)
    <div class="mx-auto w-3/5 text-right"><a href="{{route("posts.create")}}" class="inline-block bg-gray-200 w-14 text-center hover:bg-gray-300">글쓰기</a></div>
    @else
    <div></div>
    @endif
    {!! $posts->links() !!}
</div>
@endsection
<script>
    function sendPromptValue(editUrl, postId) {
        let inputValue = prompt("비밀번호를 입력하세요:");
        if (inputValue !== null) {
            window.location.href = editUrl + "?inputValue=" + inputValue + "&postId=" + postId + "&password=" + inputValue;
        }
    }
</script>

</body>
</html>