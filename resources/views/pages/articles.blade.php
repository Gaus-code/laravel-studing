<div>
    <ul>
        <li style="padding-bottom: 5px"><a href="/test" style="font-size: 35px">main page</a></li>
        <li style="padding-bottom: 5px"><a href="/test/articles" style="font-size: 35px">all articles</a></li>
        <li style="padding-bottom: 5px"><a href="/test/article" style="font-size: 35px">st only one</a></li>
    </ul>
</div>

<h1>ALL ARTICLES</h1>
@foreach( $articles as $article)
    <div>
        <h2><a href="#">{{ $article['title'] }}</a></h2>
    </div>
@endforeach
