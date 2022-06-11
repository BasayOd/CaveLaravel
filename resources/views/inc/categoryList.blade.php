<nav class="nav">
    <ul class="nav__list container">
        @foreach($categories as $category)
            <li class="nav__item {{(isset($selected)&&$selected->id==$category->id)?'nav__item--current':''}}">
                <a href="{{route('main.category.sort', $category->id)}}">{{$category->name}}</a>
            </li>
        @endforeach
    </ul>
</nav>
