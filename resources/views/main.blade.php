@extends('layouts.main')

@section('categories_main')
        @include('inc.categoryWithPic')
@endsection

@section('content')
    <div class="container">
        <section class="lots">
            <div class="lots__header">
                <h2>Открытые лоты</h2>
            </div>
            @include('inc.lots')
        </section>
        {{ $lots->links() }}
    </div>
@endsection
@section('categories')
    @include('inc.categoryList')
@endsection
