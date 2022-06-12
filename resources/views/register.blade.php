@extends('layouts.sorted')



@section('content')
    <form class="form container" action="{{route('user.register')}}" method="post" autocomplete="off"> <!-- form--invalid -->
        @csrf
        <h2>Регистрация нового аккаунта</h2>
        <div class="form__item @error('email'){{'form__item--invalid'}} @enderror"> <!-- form__item--invalid -->
            <label for="email">E-mail <sup>*</sup></label>
            <input id="email" type="text" name="email" placeholder="Введите e-mail" value="{{ old('email') }}">
            <span class="form__error">Введите e-mail</span>
        </div>
        <div class="form__item @error('password'){{'form__item--invalid'}} @enderror">
            <label for="password">Пароль <sup>*</sup></label>
            <input id="password" type="password" name="password" placeholder="Введите пароль">
            <span class="form__error">Введите пароль</span>
        </div>
        <div class="form__item @error('name'){{'form__item--invalid'}} @enderror">
            <label for="name">Имя <sup>*</sup></label>
            <input id="name" type="text" name="name" placeholder="Введите имя" value="{{ old('name') }}">
            <span class="form__error">Введите имя</span>
        </div>
        <div class="form__item @error('contact'){{'form__item--invalid'}} @enderror">
            <label for="contact">Контактные данные <sup>*</sup></label>
            <textarea id="contact" name="contact" placeholder="Напишите как с вами связаться">{{ old('contact') }}</textarea>
            <span class="form__error">Напишите как с вами связаться</span>
        </div>
        <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
        <button type="submit" class="button">Зарегистрироваться</button>
        <a class="text-link" href="{{route('user.login')}}">Уже есть аккаунт</a>
    </form>
        @endsection



