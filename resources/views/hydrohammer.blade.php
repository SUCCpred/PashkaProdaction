@extends("layout")

@section("page-title")Расчет@endsection

@section("page-content")
    <h1 class="m-5">Услуга гидромолота</h1>
    <h1 class="m-5">2500₽/час</h1>
    <h4>Для окозания услуги, позвоните по номеру </h4>
    @if(session('session-data') == null || count(session('session-data')) == 0)
        <p class="lead">
            <a href="/choise" class="btn btn-lg btn-secondary m-5">Рассчитать ещё</a>
        </p>
    @endif
    @if(session('session-data') != null && count(session('session-data')) > 0)
        <button id="finalbut2" type="button" class="btn btn-lg btn-block btn-primary m-3">Рассчитать</button>
    @endif
    <button id="addbut2" type="button" class="btn btn-lg btn-block btn-primary m-3">Добавить услугу</button>

    <div id="hiden10" style="display: none">
        <form id="mainform" name="hydrohammer-form"  method="post" action="/hydrohammer">
            @csrf
            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <p class="text-dark">Какую услугу добавить к этой?</p>
                            <select id="addselect" class="form-select" name="adding" aria-label="Default select example">
                                <option selected>Выберите, какую услугу добавить</option>
                                <option value="1">Траншея</option>
                                <option value="2">Яма</option>
                                <option value="3">Планировка</option>
                                <option value="4">Террасирование</option>
                                <option value="5">Гидромолот</option>
                                <option value="6">Гидробур</option>
                                <option value="7">Котлован</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>

        $("#addbut2").click('keyup mouseup', function () {
            $("#hiden10").css("display", "block");
        });
        $("#addselect").on('change', function () {
            var input = $("<input>")
                .attr("type", "hidden")
                .attr("name", "redirpage").val(this.value);
            $('#mainform').append(input);
            $('form#mainform').submit();
        });
    </script>
@endsection
