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
        <form id="mainform" name="terracing-form"  method="post" action="/photosession">
            @csrf
            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal text-dark">Фотосессия</h4>
                          </div>
                          <div class="card-body">
                              <p class="text-dark">Количество итоговых фото</p>
                                  <select class="form-select" name="PhotoCount" aria-label="Default select example">
                                      <option selected value="0">Меньше 15-ти</option>
                                      <option value="1">Больше 15-ти</option>
                                  </select>
                              <p class="text-dark">Время съёмок</p>
                                <select class="form-select" name="FilmTime" aria-label="Default select example">
                                    <option selected value="0">Один час</option>
                                    <option value="1">Больше часа</option>
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
