@extends('layouts.sorted')



@section('content')
                <section class="lots">
                    <div class="lots__header">
                        <h2>Все лоты в категории <span>«{{$selected->name}}»</span></h2>
                    </div>
                    @include('inc.lots')
                </section>
                {{ $lots->links() }}
            </div>
        @endsection

@section('categories')
            @include('inc.categoryList')
@endsection

