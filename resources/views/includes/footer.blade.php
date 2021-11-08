<div id="footer" class="d-none d-md-block">
    <section class="news-footer">
        <div class="container mb-4 p-3">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="subscribe-text">
                        <h4>Newsletter</h4>
                        <p class="mb-0">Quer receber novidades e promoções sobre cursos? Cadastre-se na nossa
                            newsletter.</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="subscribe-form">
                        <form method="post" class="d-md-flex">
                            @csrf
                            <input type="email" required name="email" class="inputletter form-control"
                                   placeholder="Digite seu email">
                            <button type="button"
                                    data-loading-text="<i class='fas fa-spinner fa-spin mr-2'></i>Aguarde..."
                                    class="botaoFooter">Cadastrar
                            </button>
                        </form>
                        <div class="newsletterMessage"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-4 p-3">
        <div class="row align-items-center">
            <div class="col-md-4">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" class="img-fluid">
                </a>
                <div class="col-md-12 social-media text-center mt-2">
                    <a href="https://www.facebook.com/acic.caruaru"> <i class="fab fa-2x fa-facebook"></i></a>
                    <a href="https://www.instagram.com/AcicCaruaru/"> <i class="fab fa-2x fa-instagram"></i></a>
                    <a href="https://twitter.com/AcicCaruaru"> <i class="fab fa-2x fa-twitter"></i></a>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="mb-0">
                                        <i aria-hidden="true" class="fas fa-phone-volume"></i> Caruaru (PE): (81) 3721-2725
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3 mt-md-0">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="mailto" href="mailto:escoladenegocios@aciccaruaru.com">
                                        <i aria-hidden="true" class="far fa-envelope-open"></i>
                                        escoladenegocios@aciccaruaru.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <img class="img-fluid" src="{{ asset('/images/selossl.png') }}" alt="Selo SSL">
                            </div>

                            <div class="col-md-4">
                                <img class="img-fluid" src="{{ asset('/images/compra.png') }}"
                                     alt="Selo Compra Segura">
                            </div>

                            <div class="col-md-4">
                                <a target="_blank"
                                   href="https://transparencyreport.google.com/safe-browsing/search?url=https:%2F%2Fwww.escoladenegociosacic.com&hl=pt_BR">
                                    <img class="img-fluid" src="/images/site-seguro.png" alt="Selo site seguro">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="subfooter container-fluid py-4">
        <div class="row">
            <div class="col-12 text-center">
                <h5 class="font-weight-bold mb-3">ACIC - Associação Comercial e Empresarial de Caruaru</h5>
                <h5 class="mb-3">Rua Armando da Fonte, 15 - 2°
                    Andar - Mauricio de Nassau | CEP 55012-025 | Caruaru - PE</h5>
                <h3 class="font-weight-bold mb-0">Fone: (81) 3721-2725</h3>
            </div>
        </div>
    </div>

    <p class="copyright m-0 font-weight-bold">{{ config('app.name') }} &copy; {{ date('Y') }}</p>
</div>

<footer class="d-block d-md-none">
    <section class="news-footer">
        <div class="container mb-4 p-3">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="subscribe-text">
                        <h4>Newsletter</h4>
                        <p>Quer receber novidades e promoções sobre cursos? Cadastre-se na nossa newsletter.</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="subscribe-form">
                        <form method="post" class="d-md-flex">
                            @csrf
                            <input type="email" required name="email" class="inputletter form-control"
                                   placeholder="Digite seu email">
                            <button type="button"
                                    data-loading-text="<i class='fas fa-spinner fa-spin mr-2'></i>Aguarde..."
                                    class="botaoFooter mt-2">Cadastrar</button>
                        </form>
                        <div class="newsletterMessage"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container pb-3">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 text-center">
                        <div class="row">
                            <div class="col-8 offset-2 col-sm-12 offset-sm-0">
                                <a href="/">
                                    <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}"
                                         class="img-fluid">
                                </a>
                            </div>
                            <div class="col-md-12 social-media text-aling-center mt-3">
                                <a href="https://www.facebook.com/acic.caruaru"> <i class="fab fa-2x fa-facebook"></i></a>
                                <a href="https://www.instagram.com/AcicCaruaru/"> <i class="fab fa-2x fa-instagram"></i></a>
                                <a href="https://twitter.com/AcicCaruaru"> <i class="fab fa-2x fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row align-items-center">
                            <div class="col-6 offset-3 offset-sm-0 col-sm-4 mb-3 mb-sm-0">
                                <img class="img-fluid" src="{{ asset('/images/selossl.png') }}" alt="Selo SSL">
                            </div>

                            <div class="col-6 offset-3 offset-sm-0 col-sm-4 mb-3 mb-sm-0">
                                <img class="img-fluid" src="{{ asset('/images/compra.png') }}"
                                     alt="Selo Compra Segura">
                            </div>

                            <div class="col-6 offset-3 offset-sm-0 col-sm-4 mb-3 mb-sm-0">
                                <a target="_blank"
                                   href="https://transparencyreport.google.com/safe-browsing/search?url=https:%2F%2Fwww.escoladenegociosacic.com&hl=pt_BR">
                                    <img class="img-fluid" src="/images/site-seguro.png" alt="Selo site seguro">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="subfooter container-fluid py-3">
        <div class="row">
            <div class="col-12 text-center">
                <h5 class="font-weight-bold mb-3">ACIC - Associação Comercial e Empresarial de Caruaru</h5>
                <h5 class="mb-3">Rua Armando da Fonte, 15 - 2°
                    Andar - Mauricio de Nassau | CEP 55012-025 | Caruaru - PE</h5>
                <h3 class="font-weight-bold mb-0">Fone: (81) 3721-2725</h3>
            </div>
        </div>
    </div>
    <p class="copyright m-0 font-weight-bold">{{ config('app.name') }} &copy; {{ date('Y') }}</p>
</footer>
