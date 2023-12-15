@extends('templates.main')

@section( 'main' )
<h1 style='color: mediumpurple'>Привет!</h1>
<h2>ТЫ НА ГЛАВНОЙ СТРАНИЦЕ!</h2>
<div>
    <ul>
        <li style="padding-bottom: 5px"><a href="/test" style="font-size: 35px">main page</a></li>
        <li style="padding-bottom: 5px"><a href="/test/articles" style="font-size: 35px">all articles</a></li>
        <li style="padding-bottom: 5px"><a href="/test/article" style="font-size: 35px">st only one</a></li>
    </ul>
</div>
@endsection
