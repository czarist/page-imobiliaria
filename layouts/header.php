<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="author" content="Lucas Cezar Trentin" />
    <meta name="theme-color" content="#FFFFFF">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="pingback" href="#">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <title>Construtora de Apartamentos em São Paulo</title>

</head>

<body itemscope itemtype="https://schema.org/WebPage">
    <header class="header d-block d-xl-none">
        <div class="position-fixed border-bottom bg-white w-100 py-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <a class="navbar-brand" href="/" title="Plano&amp;Plano"><img src="<?= getBaseUrl() ?>/img/planoeplano.svg" width="183" height="41" alt="Plano&amp;Plano" loading="lazy"></a>
                    </div>
                    <div class="col pl-0">
                        <button class="navbar-toggler d-flex align-items-center float-right pr-0" type="button" data-toggle="menu" data-target="#menu">
                            <span class="font-weight-bold font-size-sm mr-2">Menu</span>
                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0H14V2H0V0Z" fill="#FF1617"></path>
                                <path d="M0 8H14V10H0V8Z" fill="#FF1617"></path>
                                <path d="M0 16H14V18H0V16Z" fill="#FF1617"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="menu" class="nav-sidebar bg-white position-fixed h-100">
            <div class="container">
                <div class="row row-cols-1 py-2">
                    <div class="col border-bottom pb-2">
                        <a class="navbar-brand" href="/" title="Plano&amp;Plano"><img src="<?= getBaseUrl() ?>/img/planoeplano.svg" width="183" height="41" alt="Plano&amp;Plano" loading="lazy"></a>
                    </div>
                    <div class="col">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-body font-size-md d-flex align-items-center" href="#" title="Encontrar um Apê" role="button">
                                    <span class="icon-circle bg-salmao-light">
                                        <svg width="10" height="10" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.32041 0C5.51421 0 6.59432 0.477955 7.37597 1.25112C8.15762 2.02428 8.64083 3.09265 8.64083 4.27348C8.64083 5.45431 8.15762 6.52268 7.37597 7.29585C6.59432 8.06901 5.51421 8.54697 4.32041 8.54697C3.12662 8.54697 2.04651 8.06901 1.26486 7.29585C0.483204 6.52268 0 5.45431 0 4.27348C0 3.09265 0.483204 2.02428 1.26486 1.25112C2.04651 0.477955 3.12662 0 4.32041 0ZM7.85917 8.40639L10.3747 10.8946C10.5168 11.0351 10.7513 11.0351 10.8934 10.8946C11.0355 10.754 11.0355 10.522 10.8934 10.3815L8.37791 7.89329C8.23579 7.75272 8.00129 7.75272 7.85917 7.89329C7.70995 8.03387 7.70995 8.26582 7.85917 8.40639ZM6.85724 1.77125C6.21059 1.1246 5.31525 0.73099 4.32041 0.73099C3.33269 0.73099 2.43023 1.1246 1.78359 1.77125C1.13695 2.41086 0.739018 3.29649 0.739018 4.27348C0.739018 5.25048 1.13695 6.14313 1.7907 6.78275C2.43734 7.42236 3.33269 7.823 4.32752 7.823C5.31525 7.823 6.2177 7.42939 6.86434 6.78275C7.51098 6.14313 7.91602 5.25048 7.91602 4.27348C7.91602 3.29649 7.51098 2.41086 6.85724 1.77125Z" fill="#FF1617"></path>
                                        </svg>
                                    </span>
                                    <b>Encontrar um Apê</b>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-body font-size-md d-flex align-items-center" href="#" title="Faça uma Simulação" role="button">
                                    <span class="icon-circle bg-salmao-light">

                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 1024 1024">
                                            <title></title>
                                            <g id="icomoon-ignore">
                                            </g>
                                            <path fill="#FF1617" d="M761.16 241.459c74.115-1.21 140.408 27.834 187.675 75.102 47.671 47.671 76.715 113.964 75.102 187.675-0.809 74.516-32.032 141.794-81.284 191.044s-116.529 80.475-190.229 81.27c-74.115 1.211-140.408-27.834-187.675-75.102-41.262-41.259-68.048-96.19-74.369-157.968l-272.838 4.457-3.336 204.425c-0.266 16.287-13.923 29.946-30.213 30.212s-29.509-12.951-29.242-29.239l3.337-204.43-96.106 1.57-2.525 154.748c-0.266 16.287-13.923 29.946-30.213 30.212s-29.509-12.956-29.24-29.243l3.018-184.881c0.266-16.287 13.923-29.946 30.213-30.212l458.132-7.885c7.93-61.606 36.938-117.854 79.153-160.067 49.251-49.251 116.529-80.476 190.641-81.686zM548.713 511.588l-0.023 1.629c-0.931 57.008 21.432 108.349 58.289 145.202s88.592 59.622 146.019 58.276c57.008-0.929 109.921-24.998 147.997-63.075s62.546-90.587 63.075-147.997c0.529-57.412-21.020-108.766-58.276-146.019-36.853-36.852-88.592-59.62-146.019-58.276-57.008 0.93-109.921 25-147.997 63.075-37.259 38.066-61.318 90.159-63.062 147.186z"></path>
                                        </svg>
                                    </span>
                                    <b>Faça uma simulação</b>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-body font-size-md d-flex align-items-center" href="#" title="Portal do Cliente" target="_blank" role="button">
                                    <span class="icon-circle bg-primary">
                                        <svg width="14" height="14" viewBox="0 0 9 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.51351 9.61792H7.12127C7.35412 9.61792 7.56756 9.5209 7.71633 9.37213C7.87156 9.2169 7.96211 9.00993 7.96211 8.77708V5.155C7.96211 4.92215 7.86509 4.70871 7.71633 4.55994C7.56109 4.40471 7.35412 4.31416 7.12127 4.31416H6.51328H2.11504H1.51351C1.28066 4.31416 1.07369 4.41118 0.918456 4.55994L0.90552 4.57288C0.763224 4.72164 0.672672 4.92862 0.672672 5.155V8.77061C0.672672 9.00346 0.769692 9.21043 0.918456 9.36567C1.07369 9.5209 1.28066 9.61792 1.51351 9.61792ZM4.65696 7.96211C4.65696 8.14968 4.5082 8.29845 4.32062 8.29845C4.13305 8.29845 3.98429 8.14968 3.98429 7.96211V6.90783C3.93254 6.87549 3.8808 6.83668 3.84199 6.7914C3.7191 6.66851 3.64148 6.50034 3.64148 6.31277C3.64148 6.1252 3.7191 5.95056 3.84199 5.82767L3.86786 5.80827C3.98429 5.69831 4.13952 5.63363 4.31416 5.63363H4.32062H4.32709C4.5082 5.63363 4.67636 5.71125 4.79926 5.83414C4.92215 5.95703 4.99976 6.1252 4.99976 6.31277C4.99976 6.50034 4.92215 6.66851 4.79926 6.7914C4.75398 6.83668 4.7087 6.86902 4.65696 6.90136V7.96211ZM6.18341 3.64148V2.53546C6.18341 2.02448 5.97643 1.55879 5.6401 1.22245C5.29729 0.879648 4.8316 0.672672 4.32062 0.672672C3.80965 0.672672 3.34396 0.879648 3.00762 1.21598C2.66482 1.55879 2.45784 2.02448 2.45784 2.53546V3.64148H6.18341ZM1.78517 3.64148V2.53546C1.78517 1.83691 2.06976 1.20305 2.52899 0.74382C2.98822 0.284592 3.62208 0 4.32062 0C5.0127 0 5.64656 0.284592 6.10579 0.74382C6.56502 1.20305 6.84961 1.83691 6.84961 2.53546V3.64148H7.12127C7.53522 3.64148 7.91683 3.80965 8.18849 4.08778C8.46015 4.35943 8.63478 4.74105 8.63478 5.155V8.77061C8.63478 9.18456 8.46661 9.56617 8.18849 9.83783C7.91683 10.1095 7.53522 10.2841 7.12127 10.2841H1.51351C1.09956 10.2841 0.717948 10.116 0.446292 9.83783C0.168168 9.56617 0 9.19103 0 8.77061V5.155C0 4.74751 0.1617 4.37884 0.426888 4.10718L0.446292 4.08778C0.717948 3.80965 1.09956 3.64148 1.51351 3.64148H1.78517Z" fill="#ffffff"></path>
                                        </svg>
                                    </span>
                                    <b>Portal do cliente</b>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="col">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-body text-uppercase font-size-md font-weight-semibold" data-target="#quem-somos" data-toggle="menu">
                                    Quem Somos
                                    <span class="float-right">
                                        <svg width="10" height="10" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 9.73738C-0.097631 9.34686 -0.0976309 8.71369 0.292893 8.32317L3.58579 5.03027L0.292894 1.73738C-0.09763 1.34686 -0.0976299 0.713691 0.292895 0.323167C0.683419 -0.0673579 1.31658 -0.0673578 1.70711 0.323167L6.41421 5.03027L1.70711 9.73738C1.31658 10.1279 0.683417 10.1279 0.292893 9.73738Z" fill="#FF1617"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div id="quem-somos" class="d-flex flex-column subnav-sidebar bg-white position-fixed h-100 p-4">
                                    <p class="text-primary font-weight-semibold text-uppercase">Quem Somos</p>
                                    <a class="text-body text-uppercase font-size-md py-3" href="#" title="Quem é a Plano&amp;Plano">Quem é a Plano&amp;Plano</a>
                                    <a class="text-body text-uppercase font-size-md py-3" href="#" title="Corpo Diretivo">Corpo Diretivo</a>
                                    <a class="text-body text-uppercase font-size-md py-3" href="#" title="Engenharia e Resultados">Engenharia e Resultados</a>
                                    <a class="text-body text-uppercase font-size-md py-3" href="#" title="Nossas Conquistas">Nossas Conquistas</a>
                                    <a class="text-body text-uppercase font-size-md py-3" href="#" title="Portfólio">Portfólio</a>
                                    <a class="text-body text-uppercase font-size-md py-3" href="#" title="Imprensa">Imprensa</a>

                                    <button type="button" data-target="#quem-somos" class="btn btn-link text-primary text-uppercase text-left back-menu px-0">
                                        <span class="mr-3">
                                            <svg width="10" height="10" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.12141 0.323167C6.51194 0.713691 6.51194 1.34686 6.12141 1.73738L2.82852 5.03027L6.12141 8.32317C6.51194 8.71369 6.51194 9.34686 6.12141 9.73738C5.73089 10.1279 5.09772 10.1279 4.7072 9.73738L9.27647e-05 5.03027L4.7072 0.323167C5.09772 -0.0673577 5.73089 -0.0673577 6.12141 0.323167Z" fill="#FF1617"></path>
                                            </svg>
                                        </span>Voltar
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-body text-uppercase font-size-md font-weight-semibold" data-target="#corretores-e-imobiliarias" data-toggle="menu">
                                    Corretores e Imobiliárias
                                    <span class="float-right">
                                        <svg width="10" height="10" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 9.73738C-0.097631 9.34686 -0.0976309 8.71369 0.292893 8.32317L3.58579 5.03027L0.292894 1.73738C-0.09763 1.34686 -0.0976299 0.713691 0.292895 0.323167C0.683419 -0.0673579 1.31658 -0.0673578 1.70711 0.323167L6.41421 5.03027L1.70711 9.73738C1.31658 10.1279 0.683417 10.1279 0.292893 9.73738Z" fill="#FF1617"></path>
                                        </svg>
                                    </span></a>
                                <div id="corretores-e-imobiliarias" class="d-flex flex-column subnav-sidebar bg-white position-fixed h-100 p-4">
                                    <p class="text-primary font-weight-semibold text-uppercase">Corretores e Imobiliárias</p>
                                    <a class="text-body text-uppercase font-size-md py-3" href="#">Quero oferecer um terreno</a>
                                    <a class="text-body text-uppercase font-size-md py-3" href="#">Plano&amp;Corretores</a>
                                    <button type="button" data-target="#corretores-e-imobiliarias" class="btn btn-link text-primary text-uppercase text-left back-menu px-0">
                                        <span class="mr-3">
                                            <svg width="10" height="10" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.12141 0.323167C6.51194 0.713691 6.51194 1.34686 6.12141 1.73738L2.82852 5.03027L6.12141 8.32317C6.51194 8.71369 6.51194 9.34686 6.12141 9.73738C5.73089 10.1279 5.09772 10.1279 4.7072 9.73738L9.27647e-05 5.03027L4.7072 0.323167C5.09772 -0.0673577 5.73089 -0.0673577 6.12141 0.323167Z" fill="#FF1617"></path>
                                            </svg>
                                        </span>Voltar
                                    </button>
                                </div>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-body text-uppercase font-size-md font-weight-semibold" href="#" target="_blank" title="Investidores">Investidores</a>
                            </li>
                            <li class="nav-item d-none">
                                <a class="nav-link text-body text-uppercase font-size-md font-weight-semibold" href="#" target="_blank" title="Casa Verde e Amarela">Casa Verde e Amarela</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-body text-uppercase font-size-md font-weight-semibold" href="#" target="_blank" title="Minha Casa Minha Vida">Minha Casa Minha Vida</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-body text-uppercase font-size-md font-weight-semibold" href="#" title="Nossas lojas">Nossas Lojas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-body text-uppercase font-size-md font-weight-semibold" data-target="#contato" data-toggle="menu">Contato <span class="float-right">
                                        <svg width="10" height="10" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 9.73738C-0.097631 9.34686 -0.0976309 8.71369 0.292893 8.32317L3.58579 5.03027L0.292894 1.73738C-0.09763 1.34686 -0.0976299 0.713691 0.292895 0.323167C0.683419 -0.0673579 1.31658 -0.0673578 1.70711 0.323167L6.41421 5.03027L1.70711 9.73738C1.31658 10.1279 0.683417 10.1279 0.292893 9.73738Z" fill="#FF1617"></path>
                                        </svg>
                                    </span></a>
                                <div id="contato" class="d-flex flex-column subnav-sidebar bg-white position-fixed h-100 p-4">
                                    <p class="text-primary font-weight-semibold text-uppercase">Contato</p>
                                    <a class="text-body text-uppercase font-size-md py-3" href="#" title="Quero Oferecer um terreno">Quero Oferecer um terreno</a>
                                    <a class="text-body text-uppercase font-size-md py-3" href="#" title="Quero ser um fornecedor">Quero ser um fornecedor</a>
                                    <a class="text-body text-uppercase font-size-md py-3" href="#" title="Quero trabalhar na Plano&amp;Plano">Trabalhe Conosco</a>
                                    <button type="button" data-target="#contato" class="btn btn-link text-primary text-uppercase text-left back-menu px-0">
                                        <span class="mr-3">
                                            <svg width="10" height="10" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.12141 0.323167C6.51194 0.713691 6.51194 1.34686 6.12141 1.73738L2.82852 5.03027L6.12141 8.32317C6.51194 8.71369 6.51194 9.34686 6.12141 9.73738C5.73089 10.1279 5.09772 10.1279 4.7072 9.73738L9.27647e-05 5.03027L4.7072 0.323167C5.09772 -0.0673577 5.73089 -0.0673577 6.12141 0.323167Z" fill="#FF1617"></path>
                                            </svg>
                                        </span>Voltar
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-body text-uppercase font-size-md font-weight-semibold" href="#" title="Conheça nossos E-books" target="_blank">Conheça nossos E-books</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-body text-uppercase font-size-md font-weight-semibold" href="#" title="Blog" target="_blank">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="d-none d-xl-block">
        <div class="position-fixed w-100 bg-white">
            <nav class="navbar navbar-expand-xl navbar-light border-bottom mobile-navigation">
                <div class="container">
                    <a class="navbar-brand" href="/" title="Plano&amp;Plano"><img src="<?= getBaseUrl() ?>/img/planoeplano.svg" width="165" height="37" alt="Plano&amp;Plano" loading="lazy"></a>
                    <button class="navbar-toggler d-flex d-xl-none align-items-center pr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="font-weight-bold font-size-sm mr-2">Menu</span>
                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0H14V2H0V0Z" fill="#FF1617"></path>
                            <path d="M0 8H14V10H0V8Z" fill="#FF1617"></path>
                            <path d="M0 16H14V18H0V16Z" fill="#FF1617"></path>
                        </svg>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-nav-bullet align-items-center">
                            <li class="nav-item">
                                <a href="#" target="_blank" title="Loja Virtual" id="ecom-button" class="nav-link nav-link-header custom_nav-link nav-link-highlighted text-uppercase">
                                    <span class="mr-2"><svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.95047 10.2178H2.37622C1.74256 10.2178 1.1089 9.74253 1.02969 9.10887L0.237614 4.67324C0.158406 4.2772 0.237614 3.88116 0.554445 3.56433C0.712861 3.16829 1.1089 3.00987 1.58415 3.00987H10.7722C10.9307 3.00987 11.0891 3.08908 11.2475 3.2475C11.3267 3.40591 11.4059 3.56433 11.4059 3.72274L10.4554 9.10887C10.2178 9.74253 9.66334 10.2178 8.95047 10.2178Z" fill="#FFFFFF"></path>
                                            <path d="M10.7723 4.19801H10.6931C10.3762 4.1188 10.1386 3.80197 10.2178 3.48514L10.6138 1.10891C10.6931 0.475247 11.3267 0 11.9604 0H14.3366C14.6534 0 14.9703 0.237623 14.9703 0.633662C14.9703 1.0297 14.7326 1.26732 14.3366 1.26732H11.9604C11.8812 1.26732 11.802 1.34653 11.802 1.42574L11.4059 3.80197C11.2475 3.96039 11.0099 4.19801 10.7723 4.19801Z" fill="#FFFFFF"></path>
                                            <path d="M1.98019 16C0.871285 16 0 15.1287 0 14.0198C0 12.9109 0.871285 12.0396 1.98019 12.0396C3.0891 12.0396 3.96039 12.9109 3.96039 14.0198C4.0396 15.1287 3.0891 16 1.98019 16Z" fill="#FFFFFF"></path>
                                            <path d="M9.34653 16C8.23762 16 7.36633 15.1287 7.36633 14.0198C7.36633 12.9109 8.23762 12.0396 9.34653 12.0396C10.4554 12.0396 11.3267 12.9109 11.3267 14.0198C11.3267 15.1287 10.4554 16 9.34653 16Z" fill="#FFFFFF"></path>
                                        </svg>
                                    </span>
                                    <strong>Loja Virtual</strong>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-link-header custom_nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Quem Somos
                                </a>
                                <div class="dropdown-menu dropdown-menu-header" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item dropdown-item-header" href="#" title="Quem é a Plano&amp;Plano">Quem é a Plano&amp;Plano</a>
                                    <a class="dropdown-item dropdown-item-header" href="#" title="Corpo Diretivo">Corpo Diretivo</a>
                                    <a class="dropdown-item dropdown-item-header" href="#" title="Engenharia e Resultados">Engenharia e Resultados</a>
                                    <a class="dropdown-item dropdown-item-header" href="#" title="Nossas Conquistas">Nossas Conquistas</a>
                                    <a class="dropdown-item dropdown-item-header" href="#" title="Portfólio">Portfólio</a>
                                    <a class="dropdown-item dropdown-item-header" href="#" title="Imprensa">Imprensa</a>
                                    <a class="dropdown-item dropdown-item-header" href="#" title="Manual de marca">Manual de marca</a>
                                    <a class="dropdown-item dropdown-item-header" href="#" title="Mapa do site">Mapa do site</a>
                                    <a class="dropdown-item dropdown-item-header" href="#" target="_blank" title="ESG">ESG</a>
                                </div>
                            </li>
                            <li class="py-1"><svg width="3" height="3" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="3" height="3" fill="#FF7276"></rect>
                                </svg>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-link-header custom_nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Corretores e Imobiliárias
                                </a>
                                <div class="dropdown-menu dropdown-menu-header" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item dropdown-item-header" href="#" title="Quero oferecer um terreno" target="_blank">Quero oferecer um terreno</a>
                                    <a class="dropdown-item dropdown-item-header" href="#">Plano&amp;Corretores</a>
                                </div>
                            </li>
                            <li class="py-1"><svg width="3" height="3" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="3" height="3" fill="#FF7276"></rect>
                                </svg>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-link-header custom_nav-link text-uppercase" href="#" target="_blank" title="Investidores">
                                    Investidores
                                </a>
                            </li>
                        </ul>

                        <ul class="navbar-nav flex-lg-row align-items-center">
                            <li class="nav-item">
                                <a class="nav-link nav-link-header custom_nav-link d-flex align-items-center" href="#" title="Encontrar um Apê" role="button">
                                    <span class="icon-circle bg-salmao-light">
                                        <svg width="10" height="10" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.32041 0C5.51421 0 6.59432 0.477955 7.37597 1.25112C8.15762 2.02428 8.64083 3.09265 8.64083 4.27348C8.64083 5.45431 8.15762 6.52268 7.37597 7.29585C6.59432 8.06901 5.51421 8.54697 4.32041 8.54697C3.12662 8.54697 2.04651 8.06901 1.26486 7.29585C0.483204 6.52268 0 5.45431 0 4.27348C0 3.09265 0.483204 2.02428 1.26486 1.25112C2.04651 0.477955 3.12662 0 4.32041 0ZM7.85917 8.40639L10.3747 10.8946C10.5168 11.0351 10.7513 11.0351 10.8934 10.8946C11.0355 10.754 11.0355 10.522 10.8934 10.3815L8.37791 7.89329C8.23579 7.75272 8.00129 7.75272 7.85917 7.89329C7.70995 8.03387 7.70995 8.26582 7.85917 8.40639ZM6.85724 1.77125C6.21059 1.1246 5.31525 0.73099 4.32041 0.73099C3.33269 0.73099 2.43023 1.1246 1.78359 1.77125C1.13695 2.41086 0.739018 3.29649 0.739018 4.27348C0.739018 5.25048 1.13695 6.14313 1.7907 6.78275C2.43734 7.42236 3.33269 7.823 4.32752 7.823C5.31525 7.823 6.2177 7.42939 6.86434 6.78275C7.51098 6.14313 7.91602 5.25048 7.91602 4.27348C7.91602 3.29649 7.51098 2.41086 6.85724 1.77125Z" fill="#FF1617"></path>
                                        </svg>
                                    </span>
                                    <p class="mb-0 text-uppercase">Encontre um Apê</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-header custom_nav-link d-flex align-items-center" href="#" title="Faça uma Simulação" role="button">
                                    <span class="icon-circle bg-salmao-light">
                                        <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.04708 4.87373C4.67106 5.05562 5.18079 5.23337 5.57627 5.40699C5.97175 5.58061 6.30571 5.84104 6.57815 6.18827C6.85939 6.52724 7 6.97369 7 7.52762C7 7.97407 6.87696 8.38745 6.63088 8.76776C6.38481 9.1398 6.01569 9.44156 5.52354 9.67305C5.03139 9.89628 4.43377 10.0079 3.7307 10.0079H3.71751V11H3.21657V9.98309C2.30257 9.90868 1.55556 9.64412 0.975518 9.1894C0.404269 8.72642 0.0878845 8.12702 0.0263653 7.39121H2.00377C2.03892 7.68884 2.16196 7.9534 2.37288 8.18489C2.5838 8.40812 2.86503 8.5528 3.21657 8.61894V6.18827L2.95292 6.11387C2.32015 5.94025 1.80603 5.77076 1.41055 5.60541C1.02385 5.43179 0.689893 5.1755 0.408663 4.83653C0.136221 4.48929 0 4.03457 0 3.47238C0 2.98459 0.136221 2.55881 0.408663 2.19504C0.689893 1.83127 1.07219 1.55017 1.55556 1.35175C2.04771 1.15333 2.60138 1.04998 3.21657 1.04171V0H3.71751V1.05411C4.63151 1.11199 5.35656 1.36415 5.89266 1.8106C6.43754 2.24878 6.74513 2.81097 6.81544 3.49718H4.81168C4.76773 3.22435 4.64909 2.99286 4.45574 2.80271C4.27119 2.60428 4.02511 2.47614 3.71751 2.41826V4.77452L4.04708 4.87373ZM1.99058 3.39797C1.99058 3.6956 2.09605 3.9395 2.30697 4.12965C2.51789 4.31154 2.82109 4.47275 3.21657 4.6133V2.38106C2.82988 2.39759 2.52668 2.49267 2.30697 2.66629C2.09605 2.83991 1.99058 3.0838 1.99058 3.39797ZM3.71751 8.66854C4.12178 8.66028 4.43817 8.55693 4.66667 8.35851C4.89517 8.15182 5.00942 7.88726 5.00942 7.56483C5.00942 7.25893 4.89517 7.01503 4.66667 6.83315C4.44696 6.64299 4.13057 6.48177 3.71751 6.34949V8.66854Z" fill="#FF1617"></path>
                                        </svg>
                                    </span>
                                    <p class="mb-0 text-uppercase">Faça uma Simulação</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-header custom_nav-link d-flex align-items-center" href="#" title="Portal do Cliente" target="_blank" role="button">
                                    <span class="icon-circle bg-primary">
                                        <svg width="9" height="11" viewBox="0 0 9 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5.21289C5.9395 5.21289 7.10644 4.04594 7.10644 2.60644C7.10644 1.16694 5.9395 0 4.5 0C3.0605 0 1.89356 1.16694 1.89356 2.60644C1.89356 4.04594 3.0605 5.21289 4.5 5.21289ZM7.97828 8.8742C8.16748 9.36611 8.26486 9.89333 8.26486 10.4258H4.5H0.735138C0.735138 9.89333 0.832519 9.36611 1.02172 8.8742C1.21092 8.38229 1.48824 7.93532 1.83784 7.55883C2.18744 7.18234 2.60248 6.88369 3.05925 6.67993C3.51602 6.47618 4.00559 6.37131 4.5 6.37131C4.99441 6.37131 5.48398 6.47618 5.94075 6.67993C6.39752 6.88369 6.81256 7.18234 7.16216 7.55883C7.51176 7.93532 7.78908 8.38229 7.97828 8.8742Z" fill="#ffffff"></path>
                                        </svg>
                                    </span>
                                    <p class="mb-0 text-uppercase">Portal do cliente</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>