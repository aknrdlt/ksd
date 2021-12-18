<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Комплектстройдетальxxx</title>
    <link rel="stylesheet" href="style.css">
    <link href="Fonts/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="Fonts/PT Root UI_Bold.css">
    <link rel="stylesheet" href="Fonts/PT Root UI_Light.css">
    <link rel="stylesheet" href="Fonts/PT Root UI_Regular.css">
    <link rel="stylesheet" href="Fonts/PT Root UI_Medium.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflazre.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="page">
    <div class="header">
        <div class="container">
            <div class="header_top">
                <div class="header_logo_top">
                    <svg width="66" height="2" viewBox="0 0 66 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="0.644104" x2="65.5637" y2="0.644104" stroke="#023E8F"/>
                    </svg>
                    <span>Группа компаний</span>
                    <svg width="66" height="2" viewBox="0 0 66 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="0.644104" x2="65.5637" y2="0.644104" stroke="#023E8F"/>
                    </svg>
                </div>
                <div class="header_number">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.7071 11.7071L16.3552 14.3552C16.7113 14.7113 16.7113 15.2887 16.3552 15.6448C14.43 17.57 11.3821 17.7866 9.20399 16.153L7.62857 14.9714C5.88504 13.6638 4.33622 12.115 3.02857 10.3714L1.84701 8.79601C0.213407 6.61788 0.430014 3.56999 2.35523 1.64477C2.71133 1.28867 3.28867 1.28867 3.64477 1.64477L6.29289 4.29289C6.68342 4.68342 6.68342 5.31658 6.29289 5.70711L5.27175 6.72825C5.10946 6.89054 5.06923 7.13846 5.17187 7.34373C6.35853 9.71706 8.28294 11.6415 10.6563 12.8281C10.8615 12.9308 11.1095 12.8905 11.2717 12.7283L12.2929 11.7071C12.6834 11.3166 13.3166 11.3166 13.7071 11.7071Z" stroke="#023E8F"/>
                    </svg>
                    <span>+7 775 123 1875</span>
                    <a href="#">Оставить заявку</a>
                    <div class="header_language">
                        <h3>RU</h3>
                        <div class="triangle">
                            <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.5 0.5L3.5 3.5L6.5 0.5" stroke="#404040" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <h1 class="header_logo">Комплектстройдеталь</h1>
                <div class="header_nav">
                    <a href="#about" class="nav_item">О компании</a>
                    <a href="#power" class="nav_item">Инфраструктура </a>
                    <a href="#work" class="nav_item">Предлагаемые решения</a>
                    <a href="#projects" class="nav_iПроектирование и строительство объектов в промышленной отраслиtem">Реализованные проекты</a>
                    <a href="#contacts" class="nav_item">Контакты</a>
                </div>
            </div>
        </div>
    </div>
    <section class="company">
        <div class="company_inner">
            <h1>Промышленное <br>Строительство</h1>
            <div class="company_inner_content">
                <h2>{{ $banner_words[0]['word']}}</h2>
                <span>{{ $banner_words[1]['word']}}</span>
                <button>
                    Узнать больше
                    <svg style="padding-left: 12px;" width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 4.5L13.5 0.5M17.5 4.5L13.5 8.5M17.5 4.5H0" stroke="#023E8F"/>
                    </svg>
                </button>
            </div>
        </div>
        <div>
            <img src="{{Voyager::image($banner_image[0] -> image)}}" alt="" class="company_img">
        </div>
    </section>

    <section id="about" class="about">
        <img class="about_img" src="{{Voyager::image($about_company_image[0] -> image)}}" alt="">
        <div class="about_content">
            <div class="about_content_heading">
                <div>
                    <span>О компании</span>
                    <div>
                        <h1>{{ $about_company_words[0]['word']}}</h1>
                        <svg class="mb_none" style="margin-top: 80px;" width="20" height="20" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="8" height="8" fill="#FFD75C"/>
                        </svg>
                    </div>
                </div>
            </div >
            <div class="about_content_text">{{ $about_company_words[1]['word']}}</div>
            <button>
                Узнать больше
                <svg style="padding-left: 12px;" width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.5 4.5L13.5 0.5M17.5 4.5L13.5 8.5M17.5 4.5H0" stroke="#fff"/>
                </svg>
            </button>
        </div>
    </section>

    <section id="work" class="work">
        <div class="container">
            <div class="work_heading">
                <div class="work_title">
                    <span>{{ $solution_words[0]['word']}}</span>
                    <button>
                        Предлагаемые решения
                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="8" height="8" fill="#FFD75C"/>
                        </svg>
                    </button>
                </div>
                <div class="work_heading_text">
                    {{ $solution_words[1]['word']}}
                </div>
            </div>
            <div class="work_items">
                @foreach($solutions as $solution)
                <div class="work_item">
                    <div>
                        <div class="work_item_inner">
                            <div class="work_item_heading">{{$solution -> title}}</div>
                            <div class="work_item_text">{{$solution -> desc}}</div>
                            <button>
                                <svg width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 4.5L13.5 0.5M17.5 4.5L13.5 8.5M17.5 4.5H0" stroke="#023E8F"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="power" class="power">
        <div class="power_right">
            <div class="power_title">
                <span>{{ $infrastructures_words[0]['word']}}</span>
                <button>
                    Инфраструктура
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="8" height="8" fill="#FFD75C"/>
                    </svg>
                </button>
            </div>
            <div class="power_right_text">
                {{ $infrastructures_words[1]['word']}}            </div>
            <div class="power_items">
                <div class="power_items_inner">
                    @foreach($infrastructures as $infrastructure)
                        <div class="power_item">
                            <div class="power_item_heading">
                                <img src="{{Voyager::image($infrastructure -> image)}}" alt="">
                                <span>{{$infrastructure -> number}}</span>
                            </div>
                            <p>{{$infrastructure -> desc}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="power_left">
            <img src="{{Voyager::image($infrastructures_images[0] -> image )}}" alt="" class="power_img_absolute">
            <img class="power_left_img" src="{{Voyager::image($infrastructures_images[1] -> image )}}" alt="">
        </div>
    </section>

    <section id="projects" class="projects">
        <div class="container">
            <div class="projects_heading">
                <div class="project_title">
                    <span>Наши работы</span>
                    <button>
                        Реализованные проекты
                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="8" height="8" fill="#FFD75C"/>
                        </svg>
                    </button>
                </div>
                <div class="project_slider_dots">
                    <button class="prev">
                        <svg width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 4.5L5.5 0.5M1.5 4.5L5.5 8.5M1.5 4.5H19" stroke="#fff"/>
                        </svg>
                    </button>
                    <button class="next">
                        <svg width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 4.5L13.5 0.5M17.5 4.5L13.5 8.5M17.5 4.5H0" stroke="#fff"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="project_slider">
            @foreach($project as $proj)
            <div>
                <div class="project_items">
                    <div class="project_item_col">
                        <img src="{{Voyager::image($proj -> image4)}}" alt="">
                    </div>
                    <div class="project_item_col">
                        <div>
                            <img src="{{Voyager::image($proj -> image2)}}" alt="">
                            <img src="{{Voyager::image($proj -> image3)}}" alt="">
                        </div>
                        <img src="{{Voyager::image($proj -> image1)}}" alt="">
                    </div>
                </div>
                <div class="project_btn">
                    <h3>{{$proj -> title}}</h3>
                    <button>
                        <svg width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 4.5L13.5 0.5M17.5 4.5L13.5 8.5M17.5 4.5H0" stroke="#023E8F"/>
                        </svg>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="contacts" class="contacts">
        <div class="contacts_left">
            <div class="contacts_title">
                <span>{{$contacts_words[0]['word']}}</span>
                <button>
                    Контакты
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="8" height="8" fill="#FFD75C"/>
                    </svg>
                </button>
            </div>
            <div class="contacts_left_text">
                {{$contacts_words[4]['word']}}
            </div>
            <div class="contacts_address">
                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.39804 16.804L8.62825 17.2478L8.39804 16.804ZM7.60196 16.804L7.37175 17.2478H7.37175L7.60196 16.804ZM14.5 8C14.5 10.327 13.3141 12.2164 11.9 13.6426C10.4865 15.0684 8.88685 15.9872 8.16782 16.3601L8.62825 17.2478C9.39216 16.8516 11.0935 15.8765 12.6102 14.3467C14.1264 12.8173 15.5 10.6894 15.5 8H14.5ZM8 1.5C11.5899 1.5 14.5 4.41015 14.5 8H15.5C15.5 3.85786 12.1421 0.5 8 0.5V1.5ZM1.5 8C1.5 4.41015 4.41015 1.5 8 1.5V0.5C3.85786 0.5 0.5 3.85786 0.5 8H1.5ZM7.83218 16.3601C7.11315 15.9872 5.51351 15.0684 4.09996 13.6426C2.68593 12.2164 1.5 10.327 1.5 8H0.5C0.5 10.6894 1.87358 12.8173 3.38981 14.3467C4.9065 15.8765 6.60784 16.8516 7.37175 17.2478L7.83218 16.3601ZM8.16782 16.3601C8.0593 16.4164 7.9407 16.4164 7.83218 16.3601L7.37175 17.2478C7.76896 17.4538 8.23104 17.4538 8.62825 17.2478L8.16782 16.3601ZM10.5 8C10.5 9.38071 9.38071 10.5 8 10.5V11.5C9.933 11.5 11.5 9.933 11.5 8H10.5ZM8 5.5C9.38071 5.5 10.5 6.61929 10.5 8H11.5C11.5 6.067 9.933 4.5 8 4.5V5.5ZM5.5 8C5.5 6.61929 6.61929 5.5 8 5.5V4.5C6.067 4.5 4.5 6.067 4.5 8H5.5ZM8 10.5C6.61929 10.5 5.5 9.38071 5.5 8H4.5C4.5 9.933 6.067 11.5 8 11.5V10.5Z" fill="#404040"/>
                </svg>
                <span>
                    {{$contacts['location']}}
                </span>
            </div>
            <div class="contacts_number">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.7071 11.7071L16.3552 14.3552C16.7113 14.7113 16.7113 15.2887 16.3552 15.6448C14.43 17.57 11.3821 17.7866 9.20399 16.153L7.62857 14.9714C5.88504 13.6638 4.33622 12.115 3.02857 10.3714L1.84701 8.79601C0.213407 6.61788 0.430014 3.56999 2.35523 1.64477C2.71133 1.28867 3.28867 1.28867 3.64477 1.64477L6.29289 4.29289C6.68342 4.68342 6.68342 5.31658 6.29289 5.70711L5.27175 6.72825C5.10946 6.89054 5.06923 7.13846 5.17187 7.34373C6.35853 9.71706 8.28294 11.6415 10.6563 12.8281C10.8615 12.9308 11.1095 12.8905 11.2717 12.7283L12.2929 11.7071C12.6834 11.3166 13.3166 11.3166 13.7071 11.7071Z" stroke="#404040"/>
                </svg>
                <span>
                    {{$contacts['phone']}}
                    </span>
            </div>
            <div class="contacts_mail">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="4" y="6" width="16" height="12" rx="2" stroke="#404040"/>
                    <path d="M4 9L11.1056 12.5528C11.6686 12.8343 12.3314 12.8343 12.8944 12.5528L20 9" stroke="#404040"/>
                </svg>
                <span>
                    {{$contacts['email']}}
                    </span>
            </div>
        </div>
        <div class="contacts_form">
            <form class="request__form" method="get" action="/send">
                <input type="name" name="name" placeholder="Имя">
                <input type="name" name="email" placeholder="Email">
                <textarea id="" name="message" placeholder="Сообщение"></textarea>
                <button class="button">
                    Отправить
                    <svg style="padding-left: 12px;" width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 4.5L13.5 0.5M17.5 4.5L13.5 8.5M17.5 4.5H0" stroke="#023E8F"/>
                    </svg>
                </button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer_inner">
                <div class="footer_logo">
                    <div class="footer_logo_top">
                        <svg width="66" height="2" viewBox="0 0 66 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="0.644104" x2="65.5637" y2="0.644104" stroke="#A6A6A6"/>
                        </svg>
                        <span>Группа компаний</span>
                        <svg width="66" height="2" viewBox="0 0 66 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="0.644104" x2="65.5637" y2="0.644104" stroke="#A6A6A6"/>
                        </svg>
                    </div>
                    <div class="footer_logo_bottom">Комплектстройдеталь</div>
                    <div class="footer_logo_text">Проектирование и строительство объектов в промышленной отрасли</div>
                </div>
                <div class="footer_nav">
                    <div class="footer_nav_item">
                        <a href="#" class="footer_nav_item_heading">О компании</a>
                        <button>
                            <svg style="padding-right: 7px;" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="8" height="8" fill="#FFD75C"/>
                            </svg>
                            Основная деятельность
                        </button>
                        <button>
                            <svg style="padding-right: 7px;" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="8" height="8" fill="#FFD75C"/>
                            </svg>
                            Ценности компании
                        </button>
                        <button>
                            <svg style="padding-right: 7px;" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="8" height="8" fill="#FFD75C"/>
                            </svg>
                            География проектов
                        </button>
                    </div>
                    <div class="footer_nav_item">
                        <a href="#" class="footer_nav_item_heading">Предлагаемые решения</a>
                        <button>
                            <svg style="padding-right: 7px;" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="8" height="8" fill="#FFD75C"/>
                            </svg>
                            Проектирование
                        </button>
                        <button>
                            <svg style="padding-right: 7px;" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="8" height="8" fill="#FFD75C"/>
                            </svg>
                            Производство
                        </button>
                        <button>
                            <svg style="padding-right: 7px;" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="8" height="8" fill="#FFD75C"/>
                            </svg>
                            Строительство
                        </button>
                    </div>
                    <div class="footer_nav_item">
                        <a href="#" class="footer_nav_item_heading">Инфраструктура</a>
                        <button>
                            <svg style="padding-right: 7px;" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="8" height="8" fill="#FFD75C"/>
                            </svg>
                            Кадровый потенциал
                        </button>
                        <button>
                            <svg style="padding-right: 7px;" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="8" height="8" fill="#FFD75C"/>
                            </svg>
                            Производственные базы
                        </button>
                        <button>
                            <svg style="padding-right: 7px;" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="8" height="8" fill="#FFD75C"/>
                            </svg>
                            Техника и оборудование
                        </button>
                    </div>
                    <div class="footer_nav_item">
                        <a href="#" class="footer_nav_item_heading">Реализованные проекты</a>
                        <a style="padding-top: 20px;" href="#" class="footer_nav_item_heading">Контакты</a>
                    </div>
                </div>
            </div>
            <hr style="border: .1px solid #FFFFFF33; background-color: #FFFFFF33;">
            <div class="footer_text">
                <p>Все права на публикуемые на сайте материалы принадлежат компании ТОО КомплектСтройДеталь  © 1991-2021</p>

                <p>Пользователь уведомлен, что любые материалы, размещенные на сайте, являются объектами интеллектуальной собственности ТОО КомплектСтройДеталь. Пользователь не вправе без предварительного письменного разрешения правообладателя осуществлять какие-либо действия с объектами интеллектуальной собственности, в противном случае, правообладатель оставляет за собой право на взыскание штрафов, предусмотренных законодательством, а также на обращение в компетентные органы за защитой своих прав и законных интересов.</p>

                <p>Любая информация, представленная на данном сайте, носит исключительно информационный характер и ни при каких условиях не является публичной офертой.</p>
            </div>
        </div>
    </footer>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="app.js"></script>
</body>
</html>
