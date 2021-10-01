@extends("layout")

@section("page-title") Расчет @endsection

@section("page-content")
    <h1 class="m-5">Выбери земельную работу</h1>
    <div class="container">
        <div class="container">
            <nav class="nav">
                <div class="masthead-brand card m-4 box-shadow bg-dark super-borders">
                    <div class="card-header bg-dark super-borders-kostil">
                        <h4 class="my-0 font-weight-normal">Траншея</h4>
                    </div>
                    <div>
                        <a href="/trench"><video src="images/trench_animation.webm" autoplay muted loop style="width: 250px"></video></a>
                    </div>
                </div>
                <div class="card m-4 box-shadow bg-dark super-borders">
                    <div class="card-header bg-dark super-borders-kostil">
                        <h4 class="my-0 font-weight-normal ">Яма</h4>
                    </div>
                    <div >
                        <a href="/pit"><video src="images/dig_animation.webm" autoplay muted loop style="width: 250px"></video></a>
                    </div>
                </div>
                <div class="card m-4 box-shadow bg-dark super-borders">
                    <div class="card-header bg-dark super-borders-kostil">
                        <h4 class="my-0 font-weight-normal ">Планировка</h4>
                    </div>
                    <div >
                        <a href="/planning"><video src="images/planning_animation.webm" autoplay muted loop style="width: 250px"></video></a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <nav class="nav">
                <div class="card m-4 box-shadow bg-dark super-borders">
                    <div class="card-header bg-dark super-borders-kostil">
                        <h4 class="my-0 font-weight-normal ">Террасирование</h4>
                    </div>
                    <div >
                        <a href="/terracing"><video src="images/terracing_animation.webm" autoplay muted loop style="width: 250px"></video></a>
                    </div>
                </div>
                <div class="card m-4 box-shadow bg-dark super-borders">
                    <div class="card-header bg-dark super-borders-kostil">
                        <h4 class="my-0 font-weight-normal ">Гидромолот</h4>
                    </div>
                    <div >
                        <a href="/hydrohammer"><video src="images/hydrohammer_animation.webm" autoplay muted loop style="width: 250px"></video></a>
                    </div>
                </div>
                <div class="card m-4 box-shadow bg-dark super-borders">
                    <div class="card-header bg-dark super-borders-kostil">
                        <h4 class="my-0 font-weight-normal ">Гидробур</h4>
                    </div>
                    <div >
                        <a href="/hydrodrill"><video src="images/hydrodrill_animation.webm" autoplay muted loop style="width: 250px"></video></a>
                    </div>
                </div>
              </nav>
            </div>
                <div class="container" style="padding-left: 33.5%">
                    <nav class="nav">
                      <div class="card m-4 box-shadow bg-dark super-borders">
                          <div class="card-header bg-dark super-borders-kostil">
                              <h4 class="my-0 font-weight-normal ">Котлован</h4>
                          </div>
                          <div >
                              <a href="/foundation_pit"><video src="images/foundation_pit_animation.webm" autoplay muted loop style="width: 250px"></video></a>
                          </div>
                      </div>
                  </nav>
              </div>
            </div>
@endsection
