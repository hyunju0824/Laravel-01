

<body>
    @extends('layouts.app')

@section('content')
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
            <tr class="hover:bg-gray-100 border-b">
                <td class="w-10 text-center">{{$key+1 + (($posts->currentPage()-1) * 5)}}</td>
                <td class="pl-10">
                    <a class="hover:text-blue-600" href="{{route("posts.show", $post->id)}}">{{$post->title}}</a>
                </td>
                <td>{{$post->writer}}</td>
                <td class="text-center">{{$post->created_at}}</td>
                <td>
                    <a onclick="sendPromptValue('{{ route('posts.edit', ['post' => $post->id]) }}', '{{ $post->id }}')" class="hover:text-blue-600 cursor-pointer">수정</a>
                    <form action="{{route('posts.destroy', $post->id)}}" method="post" onsubmit="return confirm('글을 삭제하겠습니까?')">
                    @method('delete')
                    @csrf
                    <input type="submit" value="삭제" class="hover:text-blue-600 cursor-pointer">
</form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mx-auto mt-5 mb-5 w-3/4 flex flex-row justify-end"><a href="{{route("posts.create")}}" class="bg-gray-200 w-14 text-center hover:bg-gray-300">글쓰기</a></div>
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