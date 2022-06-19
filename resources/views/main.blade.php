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
            <ul class="lots__list">
                @foreach($lots as $lot)
                    <li class="lots__item lot">
                        <div class="lot__image">
                            <img src="{{ Storage::url($lot->img)}}" width="350" height="260" alt="">
                        </div>
                        <div class="lot__info">
                            <span class="lot__category">{{$lot->category->name}}</span>
                            <h3 class="lot__title"><a class="text-link" href="lot.html">{{$lot->name}}</a></h3>
                            <div class="lot__state">
                                <div class="lot__rate">
                                    <span class="lot__amount">Стартовая цена</span>
                                    <span class="lot__cost">{{$lot->price}}<b class="rub">р</b></span>
                                </div>
                                <div class="lot__timer timer">
                                    16:54:12
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </section>
        {{ $lots->links() }}
        <ul class="pagination-list">
            <li class="pagination-item pagination-item-prev"><a>Назад</a></li>
            <li class="pagination-item pagination-item-active"><a>1</a></li>
            <li class="pagination-item"><a href="#">2</a></li>
            <li class="pagination-item"><a href="#">3</a></li>
            <li class="pagination-item"><a href="#">4</a></li>
            <li class="pagination-item pagination-item-next"><a href="#">Вперед</a></li>
        </ul>
    </div>
@endsection
@section('categories')
    @include('inc.categoryList')
@endsection
