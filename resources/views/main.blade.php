@extends("layout")

@section("page-title") Главная @endsection

@section("page-content")

    <style>
    .site-wrapper {
      display: table;
      width: 100%;
      height: 600px;
      background-color: #3330;
      /*height: 100%; */
      /*min-height: 100%;*/
    }
    </style>

    <h2 class="cover-heading" style="margin-top: 15vw">Узнай сколько будут стоить <b>земельные работы</b> на твоём участке!</h2>
    <p class="lead">Воспользуйся нашим расчётом любого вида земельных работ!</p>
    <p class="lead">
        <a href="/choise" class="btn btn-lg btn-default">Рассчитать</a>
    </p>
    <div id="video-bg">
      <video src="images/2in1 second anim.webm" width="100%" height="auto" preload="auto" autoplay loop muted>
      </video>
    </div>
@endsection
