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
        <form id="mainform" name="planning-form"  method="post" action="/interview">
            @csrf
            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal text-dark">Интервью</h4>
                          </div>
                          <div class="card-body">
                              <p class="text-dark">Длительность видео</p>
                                  <select class="form-select" name="VideoDuration" aria-label="Default select example">
                                      <option selected value="0">Меньше 10-ти минут</option>
                                      <option value="1">Больше 10-ти минут</option>
                                  </select>
                              <p class="text-dark">Количество камер</p>
                                <select class="form-select" name="CameraCount" aria-label="Default select example">
                                    <option selected value="0">1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                </select>

                                  <button id="finalbut1" type="button" class="btn btn-lg btn-block btn-warning m-3">Рассчитать</button>
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
