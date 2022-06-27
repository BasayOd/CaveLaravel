@extends('layouts.sorted')



@section('content')
    <form class="form container" action="{{route('user.register')}}" method="post" autocomplete="off"> <!-- form--invalid -->
        @csrf
        <form class="form form--add-lot container form--invalid" action="https://echo.htmlacademy.ru" method="post" enctype="multipart/form-data"> <!-- form--invalid -->
            <h2>Добавление лота</h2>
            <div class="form__container-two">
                <div class="form__item form__item--invalid"> <!-- form__item--invalid -->
                    <label for="name">Наименование <sup>*</sup></label>
                    <input id="name" type="text" name="name" placeholder="Введите наименование лота">
                    <span class="form__error">Введите наименование лота</span>
                </div>
                <div class="form__item">
                    <label for="category">Категория <sup>*</sup></label>
                    <select id="category" name="category">
                        <option>Выберите категорию</option>
                        @foreach($categories as $category)
                            <option>{{$category->name}}</option>
                        @endforeach
                    </select>
                    <span class="form__error">Выберите категорию</span>
                </div>
            </div>
            <div class="form__item form__item--wide">
                <label for="description">Описание <sup>*</sup></label>
                <textarea id="description" name="description" placeholder="Напишите описание лота"></textarea>
                <span class="form__error">Напишите описание лота</span>
            </div>
            <div class="form__item form__item--file">
                <label>Изображение <sup>*</sup></label>
                <div class="form__input-file">
                    <input class="visually-hidden" type="file" id="img" name="img" value="">
                    <label for="img">
                        Добавить
                    </label>
                </div>
            </div>
            <div class="form__container-three">
                <div class="form__item form__item--small">
                    <label for="price">Начальная цена <sup>*</sup></label>
                    <input id="price" type="text" name="price" placeholder="0">
                    <span class="form__error">Введите начальную цену</span>
                </div>
                <div class="form__item form__item--small">
                    <label for="bet_step">Шаг ставки <sup>*</sup></label>
                    <input id="bet_step" type="text" name="bet_step" placeholder="0">
                    <span class="form__error">Введите шаг ставки</span>
                </div>
                <div class="form__item">
                    <label for="dt_end">Дата окончания торгов <sup>*</sup></label>
                    <input class="form__input-date" id="dt_end" type="text" name="dt_end" placeholder="Введите дату в формате ГГГГ-ММ-ДД">
                    <span class="form__error">Введите дату завершения торгов</span>
                </div>
            </div>
            <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
            <button type="submit" class="button">Добавить лот</button>
        </form>
        @endsection



