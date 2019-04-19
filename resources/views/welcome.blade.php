@extends('layouts.app')

@section('content')
<section class="fgc-header">
    <div class="nav-container">
        <div class="container">
            <nav class="main-nav navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">
                    <img src="/img/logo_bg_tr.png" class="d-inline-block align-top" alt="">
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                За нас
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">За църквата</a>
                                <a class="dropdown-item" href="#">В какво вярваме</a>
                                <a class="dropdown-item" href="#">Екип</a>
                                <a class="dropdown-item" href="#">Служения</a>
                                <a class="dropdown-item" href="#">Партньори</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Служения
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Основно богослужение</a>
                                <a class="dropdown-item" href="#">Домашни групи</a>
                                <a class="dropdown-item" href="#">Молитвено събрание</a>
                                <a class="dropdown-item" href="#">Младежка група</a>
                            </div>
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
            <div>
                <img src="/img/logo_bg_tr.png" alt="">
            </div>
            <!-- <div class="h1">
                Църква на Пълното Евангелие
            </div> -->
            <div class="col-5 d-inline-block my-4">
                Църква на Пълното Евангелие е Българска християнска общност, която вярва във всичко, което пише в светото писание – Библията.
            </div>
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
            <div class="h1">За нас</div>
            <div class="pb-4">
                <img src="/img/book_divider.png" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-8">
                <p>
                    Ние сме съвременна българска християнска общност, която вярва във всичко, което пише в Светото Писание – Библията.
                </p>
                <p>
                    Бог показа, че сме възлюбени от Него като изпрати най-доброто от Небето, Своя Син Исус Христос!
                </p>
                <p>
                    Когато познаем тази любов ние се преобразяваме напълно отвътре навън. Толкова е чудесно да живеем в прегръдката на нашия небесен Баща.
                </p>
                <p>
                    Без значение кой си, през какво си минал или откъде си, винаги има място за теб в нашето църковно семейство!
                    Ако искаш да разбереш и да получиш всички обещания, които Словото на Бога има за теб и семейството ти, заповядай при нас!
                </p>
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary btn-lg">Свържи се с нас</a>
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