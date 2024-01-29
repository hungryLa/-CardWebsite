<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">

    <title>Proviant</title>
    <meta content="" name="description">

    <meta content="" property="og:title">
    <meta content="" property="og:type">
    <meta content="" property="og:url">
    <meta content="" property="og:image">

    <link href="{{@asset('./apple-touch-icon.png')}}" rel="apple-touch-icon" sizes="180x180">
    <link href="{{@asset('./favicon-32x32.png')}}" rel="icon" sizes="32x32" type="image/png">
    <link href="{{@asset('./favicon-16x16.png')}}" rel="icon" sizes="16x16" type="image/png">
    <link href="{{@asset('./site.webmanifest')}}" rel="manifest">

    <meta content="#333333" name="theme-color">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900;1000&display=swap"
          rel="stylesheet">

    @vite(['resources/css/app.css'])
</head>

<body>

<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <a href="{{route('main')}}">
                    <svg fill="currentColor" viewBox="0 0 69 42" xmlns="http://www.w3.org/2000/svg">
                        <path d="M63.0586 6.79865C55.963 -0.206646 44.8465 -1.25744 36.6866 4.34679C36.3318 4.5803 35.977 4.81381 35.6222 5.04732C35.2675 5.28083 35.0309 5.51434 34.6762 5.86461L24.3875 15.672C21.5493 18.4741 21.431 22.9108 24.2693 25.7129L31.6014 33.1852C31.2466 33.4188 31.0101 33.769 30.6553 34.0025C30.3005 34.236 29.9457 34.4695 29.591 34.7031C24.3875 37.9722 17.765 38.089 12.4433 35.1701C4.40156 30.6166 1.56332 20.5757 6.0572 12.6364C9.25023 7.26566 15.1632 3.99653 21.431 4.23004C21.7858 4.23004 22.1406 4.23004 22.6136 4.34679C26.0432 4.69706 29.1179 6.33163 31.7196 8.54997L34.3214 10.7683L37.1596 8.1997L34.3214 5.74785C32.6657 4.23004 30.6553 2.94573 28.5266 2.0117C19.8936 -1.49095 9.60501 1.19441 3.81026 9.01699C3.33722 9.60076 2.98244 10.3013 2.62766 10.8851C-2.93057 20.6925 0.617238 32.9517 10.5511 38.4392C11.2606 38.7895 11.9702 39.1397 12.6798 39.49C20.0119 42.5256 28.4084 41.1246 34.3214 35.9874L44.7283 25.9464C47.5665 23.2611 47.5665 18.8244 44.8465 16.0223L37.3961 8.54997C37.7509 8.31646 38.1057 7.96619 38.3422 7.73268C38.5787 7.49917 39.0518 7.26566 39.4066 7.03216C47.2117 2.12845 57.6186 4.46355 62.5855 12.2861C62.7038 12.4029 62.8221 12.6364 62.9403 12.7531C67.5525 20.6925 64.7142 30.8501 56.6725 35.4036C53.243 37.3884 49.3404 37.9722 45.5561 37.3884C42.4813 36.9214 39.6431 35.4036 37.3961 33.302L34.4396 30.8501L31.8379 33.4188L34.3214 35.7539C37.2779 38.556 40.9439 40.5408 45.083 41.2413C52.5334 42.4089 60.3386 39.6068 65.069 33.1852C70.982 25.0124 70.1542 13.9207 63.0586 6.79865ZM41.89 18.4741C43.3091 19.8752 43.3091 22.2103 41.89 23.6113L34.3214 30.7334L26.9892 23.3778C25.5701 21.9768 25.5701 19.7584 26.9892 18.3574L34.4396 11.1186L41.89 18.4741Z"
                              fill="currentColor"/>
                    </svg>
                </a>
            </div>
            <nav class="header__navigation">
                <ul class="header__list">
                    <li class="header__item">
                        <a class="header__link" href="https://www.proviant.online">Proviant-Эксперт Калькуляция</a>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="https://www.proviant-pay.online">Proviant-Pay Безналичные
                            платежи</a>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="https://www.proviant.online/#rec628610896">Контакты</a>
                    </li>
                </ul>
            </nav>

            <button class="header__burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<div class="menu">
    <div class="container">
        <div class="menu__inner">
            <nav class="menu__navigation">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a class="menu__link" href="https://www.proviant.online">Proviant-Эксперт Калькуляция</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="https://www.proviant-pay.online">Proviant-Pay Безналичные
                            платежи</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="https://www.proviant.online/#rec628608146">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<main>
    <section class="connect">
        <div class="container">
            <div class="connect__inner">
                <form class="connect__form" method="post" action="{{route('sendMail')}}" >
                    @csrf
                    <h1 class="connect__title">Свяжитесь с нами!</h1>
                    <p class="connect__text">Оставьте свои данные, и мы ответим вам в течение 24 часов.</p>
                    <div class="connect__inputs">
                        <label>
                            <input class="connect__input connect__input-name" id="name" name="name"
                                   placeholder="Введите имя" type="text">
                            <small class="connect__input__error connect__input__error-name"></small>
                        </label>
                        <label>
                            <input class="connect__input connect__input-email" id="email" name="email"
                                   placeholder="Введите E-mail" type="text">
                            <small class="connect__input__error connect__input__error-email"></small>
                        </label>
                        <label>
                            <input class="connect__input connect__input-phone" id="phone" name="phone"
                                   placeholder="+7 (999) 999-99-99" type="text">
                            <small class="connect__input__error connect__input__error-phone"></small>
                        </label>
                    </div>

                    <button class="connect__button" type="submit">Продолжить</button>
                </form>

                <div class="connect__gallery">
                    <button class="connect__gallery__item connect__gallery__item-background">
                        <img alt="Провиант 1" class="connect__gallery__item__image" src="{{@asset('./image-1.jpg')}}">
                    </button>
                    <button class="connect__gallery__item connect__gallery__item-foreground">
                        <img alt="Провиант 2" class="connect__gallery__item__image" src="{{@asset('./image-2.jpg')}}">
                    </button>
                    <button class="connect__gallery__item connect__gallery__item-background">
                        <img alt="Провиант 3" class="connect__gallery__item__image" src="{{@asset('./image-3.jpg')}}">
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__logo">
                <a href="{{route('main')}}">
                    <svg fill="currentColor" viewBox="0 0 69 42" xmlns="http://www.w3.org/2000/svg">
                        <path d="M63.0586 6.79865C55.963 -0.206646 44.8465 -1.25744 36.6866 4.34679C36.3318 4.5803 35.977 4.81381 35.6222 5.04732C35.2675 5.28083 35.0309 5.51434 34.6762 5.86461L24.3875 15.672C21.5493 18.4741 21.431 22.9108 24.2693 25.7129L31.6014 33.1852C31.2466 33.4188 31.0101 33.769 30.6553 34.0025C30.3005 34.236 29.9457 34.4695 29.591 34.7031C24.3875 37.9722 17.765 38.089 12.4433 35.1701C4.40156 30.6166 1.56332 20.5757 6.0572 12.6364C9.25023 7.26566 15.1632 3.99653 21.431 4.23004C21.7858 4.23004 22.1406 4.23004 22.6136 4.34679C26.0432 4.69706 29.1179 6.33163 31.7196 8.54997L34.3214 10.7683L37.1596 8.1997L34.3214 5.74785C32.6657 4.23004 30.6553 2.94573 28.5266 2.0117C19.8936 -1.49095 9.60501 1.19441 3.81026 9.01699C3.33722 9.60076 2.98244 10.3013 2.62766 10.8851C-2.93057 20.6925 0.617238 32.9517 10.5511 38.4392C11.2606 38.7895 11.9702 39.1397 12.6798 39.49C20.0119 42.5256 28.4084 41.1246 34.3214 35.9874L44.7283 25.9464C47.5665 23.2611 47.5665 18.8244 44.8465 16.0223L37.3961 8.54997C37.7509 8.31646 38.1057 7.96619 38.3422 7.73268C38.5787 7.49917 39.0518 7.26566 39.4066 7.03216C47.2117 2.12845 57.6186 4.46355 62.5855 12.2861C62.7038 12.4029 62.8221 12.6364 62.9403 12.7531C67.5525 20.6925 64.7142 30.8501 56.6725 35.4036C53.243 37.3884 49.3404 37.9722 45.5561 37.3884C42.4813 36.9214 39.6431 35.4036 37.3961 33.302L34.4396 30.8501L31.8379 33.4188L34.3214 35.7539C37.2779 38.556 40.9439 40.5408 45.083 41.2413C52.5334 42.4089 60.3386 39.6068 65.069 33.1852C70.982 25.0124 70.1542 13.9207 63.0586 6.79865ZM41.89 18.4741C43.3091 19.8752 43.3091 22.2103 41.89 23.6113L34.3214 30.7334L26.9892 23.3778C25.5701 21.9768 25.5701 19.7584 26.9892 18.3574L34.4396 11.1186L41.89 18.4741Z"
                              fill="currentColor"/>
                    </svg>
                </a>
            </div>

            <a class="footer__link" href="mailto:sale@progressrb.ru">sale@progressrb.ru</a>
        </div>
    </div>
</footer>

<dialog class="gallery-dialog" id="gallery-dialog">
    <div class="gallery-dialog__inner">
        <section aria-label="Images" class="splide" id="image-carousel">
            <ul class="splide__pagination"></ul>
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img alt="" src="{{@asset('./image-1.jpg')}}">
                    </li>
                    <li class="splide__slide">
                        <img alt="" src="{{@asset('./image-2.jpg')}}">
                    </li>
                    <li class="splide__slide">
                        <img alt="" src="{{@asset('./image-3.jpg')}}">
                    </li>
                </ul>
            </div>
        </section>
    </div>
</dialog>

<dialog class="form-dialog" id="form-dialog">
    <div class="form-dialog__inner">
        <div class="form-dialog__content">
            <img alt="Success" class="form-dialog__image" src="{{@asset('./check.svg')}}">
            <p class="form-dialog__text">Ваш запрос был успешно передан!</p>
        </div>
    </div>
</dialog>

@vite('resources/js/splide.js')
@vite('resources/js/mask.js')
@vite('resources/js/app.js')
</body>

</html>
