
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            @foreach($categories as $category)
                <li class="promo__item promo__item--{{$category->style_name}}">
                    <a class="promo__link" href="{{route('main.category.sort', $category->id)}}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>
    </section>
