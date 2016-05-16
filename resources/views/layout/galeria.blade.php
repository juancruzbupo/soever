<div class="row">
    <div class="col-sm-4 portfolio-item">
        <a
        href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
            <div class="caption">
                <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                </div>
            </div>
            <img src="{{asset('public/assets/img/galeria/foto1.jpg')}}" width="280" height="240" alt="">
        </a>
        @if(Auth::check())
             <button type="button" onclick="inicio(1);" class="btn btn-primary">Editar</button>
        @endif
    </div>
    <div class="col-sm-4 portfolio-item">
        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
            <div class="caption">
                <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                </div>
            </div>
            <img src="{{asset('public/assets/img/galeria/foto2.jpg')}}" width="280" height="240" alt="">
        </a>
        @if(Auth::check())
             <button type="button" onclick="inicio(2);" class="btn btn-primary">Editar</button>
        @endif
    </div>
    <div class="col-sm-4 portfolio-item">
        <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
            <div class="caption">
                <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                </div>
            </div>
            <img src="{{asset('public/assets/img/galeria/foto3.jpg')}}" width="280" height="240" alt="">
        </a>
        @if(Auth::check())
             <button type="button" onclick="inicio(3);" class="btn btn-primary">Editar</button>
        @endif
    </div>
    <div class="col-sm-4 portfolio-item">
        <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
            <div class="caption">
                <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                </div>
            </div>
            <img src="{{asset('public/assets/img/galeria/foto4.jpg')}}" width="280" height="240" alt="">
        </a>
        @if(Auth::check())
             <button type="button" onclick="inicio(4);" class="btn btn-primary">Editar</button>
        @endif
    </div>
    <div class="col-sm-4 portfolio-item">
        <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
            <div class="caption">
                <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                </div>
            </div>
            <img src="{{asset('public/assets/img/galeria/foto5.jpg')}}" width="280" height="240" alt="">
        </a>
        @if(Auth::check())
             <button type="button" onclick="inicio(5);" class="btn btn-primary">Editar</button>
        @endif
    </div>
    <div class="col-sm-4 portfolio-item">
        <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
            <div class="caption">
                <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                </div>
            </div>
            <img src="{{asset('public/assets/img/galeria/foto6.jpg')}}" width="280" height="240" alt="">
        </a>
        @if(Auth::check())
             <button type="button" onclick="inicio(6);" class="btn btn-primary">Editar</button>
        @endif
    </div>
    <div class="col-sm-4 portfolio-item">
        <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
            <div class="caption">
                <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                </div>
            </div>
            <img src="{{asset('public/assets/img/galeria/foto7.jpg')}}" width="280" height="240" alt="">
        </a>
        @if(Auth::check())
             <button type="button" onclick="inicio(7);" class="btn btn-primary">Editar</button>
        @endif
    </div>
    <div class="col-sm-4 portfolio-item">
        <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
            <div class="caption">
                <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                </div>
            </div>
            <img src="{{asset('public/assets/img/galeria/foto8.jpg')}}" width="280" height="240" alt="">
        </a>
        @if(Auth::check())
             <button type="button" onclick="inicio(8);" class="btn btn-primary">Editar</button>
        @endif
    </div>
    <div class="col-sm-4 portfolio-item">
        <a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
            <div class="caption">
                <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                </div>
            </div>
            <img src="{{asset('public/assets/img/galeria/foto9.jpg')}}" width="280" height="240" alt="">
        </a>
        @if(Auth::check())
             <button type="button" onclick="inicio(9);" class="btn btn-primary">Editar</button>
        @endif
    </div>
</div>




<script>
    function inicio(num){
       $("#myModal2").modal('show');
       $(".modal-body #foto").val(num);
    }
</script>
