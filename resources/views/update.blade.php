@extends('layouts.index')

@section('page_title', 'Update' . $article->title)
@section('single', 'single')

@section('content')
    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <form class="post" enctype="multipart/form-data" method="post" action="{{route('article.updatePost', $article)}}">
            <h1>Update Post ({{$article->title}})</h1>
            @csrf
            <input type="text" name="title" value="{{$article->title}}" placeholder="Title"><br>
            <input type="text" name="anons_title" value="{{$article->anons_title}}" placeholder="Anons Title"><br>
            <textarea name="content" placeholder="Post content">{{$article->content}}</textarea><br>
            <img width="100%" height="480px" style="object-fit: contain" src="{{$article->image_url}} ">
            <input type="file" name="file"><br><br>
            <select name="category_id">
                @foreach($categories as $category)
                    <option
                        @if($article->category_id === $category['id'])
                            selected
                        @endif
                        value="{{$category['id']}}">
                        {{$category['name']}}
                    </option>
                @endforeach
            </select>

            <br>
            <input type="submit" class="button big fit" value="Update this Post">
        </form>

    </div>

    <!-- Footer -->
    <section id="footer">
        <p class="copyright">&copy; Blog. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
    </section>
@endsection
