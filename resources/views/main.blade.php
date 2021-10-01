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

    <h2 class="cover-heading" style="margin-top: 15vw">Нужны услуги видеографа?<br><b>Жми на кнопку и выбирай.</b></br></h2>
    <p class="lead">
        <a href="/choise" class="btn btn-lg btn-default">Услуги</a>
    </p>
    <div id="video-bg">
      <img src="images/693141.jpg" width="100%" height="auto" preload="auto">
    </div>
@endsection
