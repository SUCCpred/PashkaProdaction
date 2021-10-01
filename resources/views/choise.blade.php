@extends("layout")

@section("page-title") Расчет @endsection

@section("page-content")
    <h1 class="m-5">Выбери услугу</h1>
    <div class="container">
        <div class="container">
            <nav class="nav">
                <div class="masthead-brand card m-4 box-shadow bg-dark super-borders">
                    <div class="card-header bg-dark super-borders-kostil">
                        <h4 class="my-0 font-weight-normal">Свадебное видео</h4>
                    </div>
                    <div>
                        <a href="/wedding"><video src="images/wedding.webm" autoplay muted loop style="width: 250px"></video></a>
                    </div>
                </div>
                <div class="card m-4 box-shadow bg-dark super-borders">
                    <div class="card-header bg-dark super-borders-kostil">
                        <h4 class="my-0 font-weight-normal ">Музыкальный клип</h4>
                    </div>
                    <div >
                        <a href="/pit"><video src="images/music_clip.webm" autoplay muted loop style="width: 250px"></video></a>
                    </div>
                </div>
                <div class="card m-4 box-shadow bg-dark super-borders">
                    <div class="card-header bg-dark super-borders-kostil">
                        <h4 class="my-0 font-weight-normal ">Интервью</h4>
                    </div>
                    <div >
                        <a href="/planning"><video src="images/interview.webm" autoplay muted loop style="width: 250px"></video></a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container" style="padding-left: 170px;">
            <nav class="nav">
                <div class="card m-4 box-shadow bg-dark super-borders">
                    <div class="card-header bg-dark super-borders-kostil">
                        <h4 class="my-0 font-weight-normal ">Фотосессия</h4>
                    </div>
                    <div >
                        <a href="/terracing"><video src="images/photosession.webm" autoplay muted loop style="width: 250px"></video></a>
                    </div>
                </div>
                <div class="card m-4 box-shadow bg-dark super-borders">
                    <div class="card-header bg-dark super-borders-kostil">
                        <h4 class="my-0 font-weight-normal ">Анимация</h4>
                    </div>
                    <div >
                        <a href="/hydrohammer"><video src="images/animation.webm" autoplay muted loop style="width: 250px"></video></a>
                    </div>
                </div>
            </div>
@endsection
