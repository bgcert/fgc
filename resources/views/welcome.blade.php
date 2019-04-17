@extends('layouts.app')

@section('content')
<section class="fgc-header">
    <div class="nav-container">
        <div class="container">
            <nav class="main-nav navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">
                    <img src="/img/logo.jpg" class="d-inline-block align-top" alt="">
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">За църквата <span class="sr-only">(current)</span></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">За църквата</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Събития</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Блог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="h1">
                Църква на Пълното Евангелие
            </div>
            <p>
                Църква на Пълното Евангелие е Българска християнска общност, която вярва във всичко, което пише в светото писание – Библията.
            </p>
            <p>
                <a href="#" class="btn btn-danger btn-lg">Свържете се с нас</a>
                <a href="#" class="btn btn-outline-light btn-lg">Събития</a>
            </p>
        </div>
    </div>
</section>

<section class="about-us">
    <div class="container">
        <div class="title text-center">
            <div class="h1">За Църквата</div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-8">
                <p>
                    Църква на Пълното Евангелие е Българска християнска общност, която вярва във всичко, което пише в светото писание – Библията.
                </p>
                <p>
                    Нашето мото е: <strong>"Щом е написано, значи е установено!"</strong>
                </p>
                <p>
                    Вярваме, че Исус Христос е жив и днес върши чудеса! Ние сме приятелска група от млади хора, които искат да отразяват Бога във всяка област от живота ни.
                </p>
                <p>
                    Ако искаш да разбереш и достигнеш до всички обещания, които словото на Бога има за теб и семейството ти, те каним да ни посетиш!
                </p>
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary btn-lg">Свържете се с нас</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="videos">
    <div class="container">
        <div class="title text-center">
            <div class="h1">Проповеди</div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="video">
                    <div class="video_cover"></div>
                    <div class="v_content">
                        <div class="title_date">
                            <a href="#">Среща с Бога</a>
                            <div class="v_date">20.03.2019 г.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="video">
                    <div class="video_cover small"></div>
                    <div class="v_content">
                        <div class="title_date">
                            <a href="#">Среща с Бога</a>
                            <div class="v_date">20.03.2019 г.</div>
                        </div>
                    </div>
                    <div class="video_cover small"></div>
                    <div class="v_content">
                        <div class="title_date">
                            <a href="#">Среща с Бога</a>
                            <div class="v_date">20.03.2019 г.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="video">
                    <div class="video_cover small"></div>
                    <div class="v_content">
                        <div class="title_date">
                            <a href="#">Среща с Бога</a>
                            <div class="v_date">20.03.2019 г.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="video">
                    <div class="video_cover small"></div>
                    <div class="v_content">
                        <div class="title_date">
                            <a href="#">Среща с Бога</a>
                            <div class="v_date">20.03.2019 г.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="video">
                    <div class="video_cover small"></div>
                    <div class="v_content">
                        <div class="title_date">
                            <a href="#">Среща с Бога</a>
                            <div class="v_date">20.03.2019 г.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <div class="title text-center">
            <div class="h1">Публикации</div>
            <div class="fgc-divider"></div>
        </div>

        <div class="row">
            @for($i = 0; $i <= 2; $i++) <div class="fgc-blog col-4">
                <div class="row no-gutters">
                    <div class="col-12">
                        <a href="#" class="cover"></a>
                    </div>
                    <div class="col-3">
                        <div class="blog-date">
                            <div class="day">30</div>
                            <div class="month">юли</div>
                        </div>
                    </div>
                    <div class="event-content col-9">
                        <a href="#" class="blog-title">Lorem ipsum dolor sit amet consectetur</a>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Accusamus beatae reprehenderit saepe facilis cumque?
                        </p>
                        <div class="separator"></div>
                        <div class="footer">
                            <div class="category">
                                <span>Категория:</span> <a href="#">Слово</a>
                            </div>
                            <div class="tags">
                                <span>Тагове:</span>
                                <a href="#">мъдрост</a>,
                                <a href="#">слово</a>,
                                <a href="#">завет</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endfor
    </div>
    <p class="text-center">
        <a href="#" class="btn btn-danger btn-lg"> Всички публикации</a>
    </p>
    </div>
</section>

<section class="events">
    <div class="container">
        <div class="title text-center">
            <div class="h1">Актуални събития</div>
            <div class="fgc-divider"></div>
        </div>

        @for($i = 0; $i <= 2; $i++) <div class="fgc-event">
            <div class="row no-gutters">
                <div class="col-6 event-date">
                    <div class="overlay">
                        <div class="text-center">
                            <div class="day">30</div>
                            <div class="month">юли</div>
                        </div>
                    </div>
                </div>
                <div class="event-content col-6">
                    <div class="event-title">Lorem ipsum dolor sit amet consectetur</div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Accusamus beatae reprehenderit saepe facilis cumque?
                    </p>
                </div>
            </div>
    </div>
    @endfor
    </div>
</section>
@endsection