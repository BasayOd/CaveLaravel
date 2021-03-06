@extends('layouts.sorted')



@section('content')
    <form class="form container" action="{{route('user.login')}}" method="post"> <!-- form--invalid -->
        @csrf
        <h2>Вход</h2>
        <div class="form__item @error('email'){{'form__item--invalid'}} @enderror"> <!-- form__item--invalid -->
            <label for="email">E-mail <sup>*</sup></label>
            <input id="email" type="email" name="email" placeholder="Введите e-mail" value="{{ old('email') }}">
            <span class="form__error">Введите e-mail</span>
        </div>
        <div class="form__item form__item--last @error('password'){{'form__item--invalid'}} @enderror">
            <label for="password">Пароль <sup>*</sup></label>
            <input id="password" type="password" name="password" placeholder="Введите пароль">
            <span class="form__error">Введите пароль</span>
        </div>
        <button type="submit" class="button">Войти</button>
    </form>
        @endsection



