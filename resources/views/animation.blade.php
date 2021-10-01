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
        <form id="mainform" name="hydrodrill-form"  method="post" action="/animation">
            @csrf
            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal text-dark">Анимация</h4>
                          </div>
                          <div class="card-body">
                              <p class="text-dark">Длительность анимации</p>
                                  <select class="form-select" name="AnimationDuration" aria-label="Default select example">
                                      <option selected value="0">Меньше минуты</option>
                                      <option value="1">Больше минуты</option>
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
