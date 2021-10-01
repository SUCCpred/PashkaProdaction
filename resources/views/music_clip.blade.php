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
        <form id="mainform" name="pit-form"  method="post" action="/music_clip">
            @csrf
            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                          <h4 class="my-0 font-weight-normal text-dark">Музыкальный клип</h4>
                      </div>
                      <div class="card-body">
                          <p class="text-dark">Сценарий</p>
                              <select class="form-select" name="NeedScenario" aria-label="Default select example">
                                  <option selected value="0">Уже готов</option>
                                  <option value="1">Нужно написать</option>
                              </select>
                          <p class="text-dark">Длительность съёмок</p>
                              <select class="form-select" name="FilmingDuration" aria-label="Default select example">
                                  <option selected value="0">Несколько часов</option>
                                  <option value="1">День</option>
                                  <option value="2">Больше дня</option>
                              </select>
                          <p class="text-dark">Наличие графики</p>
                              <select class="form-select" name="IncludeGraphics" aria-label="Default select example">
                                  <option selected value="0">Нет</option>
                                  <option value="1">Да</option>
                              </select>

                              <button id="finalbut1" type="button" class="btn btn-lg btn-block btn-primary m-3">Рассчитать</button>
                          </div>
                      </div>
                  </div>
              </div>
      </form>
      <script>
      $("#finalbut1").click('keyup mouseup', function () {
          var input = $("<input>")
              .attr("type", "hidden")
              .attr("name", "redirpage").val(0);
          $('#mainform').append(input);
          $('form#mainform').submit();
      });
      </script>
  </div>
@endsection
