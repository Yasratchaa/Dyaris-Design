@extends('layouts.templateFooterHeader')
@section('headTambahan')
<link rel="stylesheet" href="css/service.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
<style>
    /* Tambahkan CSS untuk membuat slider dan konten lainnya rapi */
    .slider-container {
        width: 100%;
        max-width: 1200px;
        /* Sesuaikan lebar slider dengan kebutuhan */
        margin: 0 auto;
        /* Pusatkan slider */
    }

    .slick-slider {
        margin-bottom: 30px;
        /* Beri jarak antara slider dan konten header */
    }

    .slick-slider img {
        width: 100%;
    }

    /* Tambahkan gaya untuk membuat navigasi slider tampak lebih rapi */
    .slick-prev,
    .slick-next {
        font-size: 24px;
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
        border: none;
        padding: 10px 15px;
        border-radius: 50%;
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    .slick-prev {
        left: 20px;
    }

    .slick-next {
        right: 20px;
    }

    /* Konten lainnya */
    .header,
    .headline,
    .tagline,
    
    .relation {
        width: 100%;
        max-width: 1200px;
        /* Sesuaikan lebar konten dengan kebutuhan */
        margin: 0 auto;
        /* Pusatkan konten */
        padding: 20px;
        /* Beri jarak antara konten */
        box-sizing: border-box;
    }
</style>
@endsection

@section('isiInformasi')
<div class="slider-container">
    <div class="slick-slider">
        <div><img src="{{URL::to('img/slide-dyaris.jpg')}}" /></div>
        <div><img src="{{URL::to('img/slide-dyaris.jpg')}}" /></div>
        <div><img src="{{URL::to('img/slide-dyaris.jpg')}}" /></div>
    </div>
</div>

<!-- Sisipkan konten lainnya di bawah slider -->
<div class="header" data-aos="fade-up">
    <!-- Konten header -->
</div>
<!-- Sisipkan konten lainnya seperti tagline, division, achievement, relation, dll. -->

<!-- Tambahkan script untuk inisialisasi slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function() {
        $('.slick-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true, // menampilkan panah navigasi
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>'
        });
    });
</script>
<div class="header" data-aos="fade-up">
    <div class="left">
        <div class="header-2">
            <p class="text">
                <span class="span">DYARIS DESIGN</span>
            </p>
            <p class="p">
                Memfasilitasi kebebasan berekspresi melalui karya seni.
            </p>
        </div>
        <div class="butt">
            <div class="text-wrapper-2">Discovery our collection</div>
        </div>
    </div>

</div>
<div class="headline" data-aos="fade-up">
    <div class="headline-2">
        <img class="icon" src="{{URL::to('img/foto-dyaris1.jpg')}}" />

    </div>
    <div class="headline-2">
        <img class="icon" src="{{URL::to('img/foto-dyaris2.jpg')}}" />

    </div>
    <div class="headline-2">
        <img class="icon" src="{{URL::to('img/foto-dyaris4.jpg')}}" />

    </div>
</div>
<div class="tagline" data-aos="fade-up" id="about-us">
    <div class="text-center">
        <div class="text-wrapper-2" style="text-align: center;">TUJUAN</div>
        <div class="isi">
            <div class="div-wrapper">
                <p class="text-4">
                    DYARIS bertujuan menciptakan karya ilustrasi berupa character design agar dapat dinikmati oleh semua kalangan serta dapat diimplementasikan ke semua media baik online (soft file) maupun media cetak (frame, wall art, dll).
                </p>
            </div>
        </div>
    </div>
    <div class="division" data-aos="fade-up">
        <div class="technical">
            <div class="text-5">VISI</div>
            <div class="isi">

                <div class="div-wrapper">
                    <p class="text-4">
                        DYARIS bertujuan menciptakan karya ilustrasi berupa character design agar dapat dinikmati oleh semua kalangan serta dapat diimplementasikan ke semua media baik online (soft file) maupun media cetak (frame, wall arrt, dll).
                    </p>
                </div>
            </div>
        </div>
        <div class="nontechnical" data-aos="fade-up">
            <div class="text-5">MISI</div>
            <div class="isi">

                <div class="div-wrapper">
                    <p class="text-4">
                    Berkarya, bermanfaat , dan menjalin silaturahmi melalui ilustrasi.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="achievement" data-aos="fade-up">
        <div class="text-wrapper-3">Lokasi Kami</div>
        <p class="text-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d626.8788645258128!2d112.10308740444316!3d-7.862865097490273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78598fd62908a3%3A0x1b75c294c867bb2e!2sdyarisdesign!5e0!3m2!1sid!2sid!4v1717361665413!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>
    </div>
</div>
@endsection