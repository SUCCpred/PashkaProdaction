@extends("layout")

@section("page-title")Расчет@endsection

@section("page-content")
    <h1>Заполни поля</h1>

    @if($errors->any())
    <div class="container">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
      </div>
    @endif

        <form id="mainform" name="trench-form" method="post" action="/wedding">
            @csrf
            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal text-dark">Свадебное видео</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-dark">Сколько камер нужно на съёмки?</p>
                                <select class="form-select" name="CameraCount" aria-label="Default select example">
                                    <option selected value="0">1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                </select>
                            <p class="text-dark">Формат видео</p>
                                <select class="form-select" name="VideoFormat" aria-label="Default select example">
                                    <option selected value="0">Клип</option>
                                    <option value="1">Репортаж</option>
                                    <option value="2">Клип+Репортаж</option>
                                </select>
                            <p class="text-dark">Длительность пребывания на свадьбе</p>
                                <select class="form-select" name="Duration" aria-label="Default select example">
                                    <option selected value="0">До первого танца</option>
                                    <option value="1">До конца</option>
                                </select>

                                <button id="finalbut1" type="button" class="btn btn-lg btn-block btn-primary m-3">Рассчитать</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
@endsection
