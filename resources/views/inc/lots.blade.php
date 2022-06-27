<ul class="lots__list">
    @foreach($lots as $lot)
        <li class="lots__item lot">
            <div class="lot__image">
                <img src="{{ Storage::url($lot->img)}}" width="350" height="260" alt="">
            </div>
            <div class="lot__info">
                <span class="lot__category">{{$lot->category->name}}</span>
                <h3 class="lot__title"><a class="text-link" href="{{route('show.lot', $lot->id)}}">{{$lot->name}}</a></h3>
                <div class="lot__state">
                    <div class="lot__rate">
                        <span class="lot__amount">Стартовая цена</span>
                        <span class="lot__cost">{{$lot->price}}<b class="rub">р</b></span>
                    </div>
                    <div class="lot__timer timer {{$lot->diffHours()?'timer--finishing':''}}">
                        {{$lot->diffTimer()}}
                    </div>
                </div>
            </div>
        </li>
    @endforeach
</ul>
