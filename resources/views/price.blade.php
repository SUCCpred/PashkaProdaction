@extends("layout")

@section("page-title")Расчет@endsection

@section("page-content")

@if($isTerracing == true)
<div class="container"><div class="alert alert-danger"><h4>Рассчёт террасирования производится ОЧЕНЬ приблизительно, если нужно узнать точную цену, позвоните по номеру телефона</h4></div></div>
@else
<p></p>
@endif

@if(empty($badground))
<p></p>
@else
<div class="container"><div class="alert alert-danger"><h4>Так как вы выбрали {{$badground}}, то придётся воспользоваться услугой гидромолота, стоимость которой состовляет 2500₽/час</h4></div></div>
@endif
    <h1 class="m-5">Стоимость услуг составляет:</h1>
    <h1 class="m-5">
        @if($price['error'] == 0)
            {{$price['main']}}₽
            @if($price['hour'] >0)
                + {{$price['hour']}}₽/час
            @endif
        @else
            {{$price['errormessage']}}
        @endif</h1>
    <h4>Для окозания услуги, позвоните по номеру </h4>
    <p class="lead m-5">
        <a href="/choise" class="btn btn-lg btn-secondary">Рассчитать ещё</a>
    </p>
    <div class="container mh-100"></div>
    </div>
@endsection
