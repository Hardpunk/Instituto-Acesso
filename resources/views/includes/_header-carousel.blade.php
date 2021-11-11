<section id="carouselSite" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @for($i = 1; $i <= 2; $i++)
            <div class="carousel-item{{ $i === 1 ? ' active' : '' }}">
                <img src="{{ asset("images/banners/banner{$i}.jpg") }}" class="img-fluid d-block w-100"
                     alt="Banner {{ $i }}"/>
            </div>
        @endfor
    </div>
    <ol class="carousel-indicators">
        @for($i = 0; $i < 2; $i++)
            <li data-target="#carouselSite" data-slide-to="{{ $i }}" class="{{ $i === 0 ? ' active' : '' }}"></li>
        @endfor
    </ol>

    <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only"></span>
    </a>

    <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only"></span>
    </a>
</section>
