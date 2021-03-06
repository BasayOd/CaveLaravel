@extends('layouts.sorted')



@section('content')
    <section class="lot-item container">
        <h2>{{$lot->name}}</h2>
        <div class="lot-item__content">
            <div class="lot-item__left">
                <div class="lot-item__image">
                    <img src="{{ Storage::url($lot->img)}}" width="730" height="548">
                </div>
                <p class="lot-item__category">Категория: <span>{{$lot->category->name}}</span></p>
                <p class="lot-item__description">{{$lot->description}}</p>
            </div>
            <div class="lot-item__right">
                <div class="lot-item__state">
                    <div class="lot-item__timer timer">
                        10:54
                    </div>
                    <div class="lot-item__cost-state">
                        <div class="lot-item__rate">
                            <span class="lot-item__amount">Текущая цена</span>
                            <span class="lot-item__cost">10 999</span>
                        </div>
                        <div class="lot-item__min-cost">
                            Мин. ставка <span>12 000 р</span>
                        </div>
                    </div>
                    <form class="lot-item__form" action="https://echo.htmlacademy.ru" method="post"
                          autocomplete="off">
                        <p class="lot-item__form-item form__item form__item--invalid">
                            <label for="cost">Ваша ставка</label>
                            <input id="cost" type="text" name="cost" placeholder="12 000">
                            <span class="form__error">Введите наименование лота</span>
                        </p>
                        <button type="submit" class="button">Сделать ставку</button>
                    </form>
                </div>
                <div class="history">
                    <h3>История ставок (<span>{{count($bets)}}</span>)</h3>
                    <table class="history__list">
                        @foreach( $bets as $bet)
                            <tr class="history__item">
                                <td class="history__name">{{$bet->user->name}}</td>
                                <td class="history__price">{{$bet->price}} р</td>
                                <td class="history__time">19.03.17 в 10:20</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('categories')
    @include('inc.categoryList')
@endsection

