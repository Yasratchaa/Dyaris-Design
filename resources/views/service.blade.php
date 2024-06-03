@extends('layouts.templateFooterHeader')
@section('headTambahan')
<link rel="stylesheet" href="css/service.css" />
@endsection

@section('isiInformasi')
<div>
  <br>
  <br>
  <br>
  <div class="text-wrapper-3">PRODUK<br>KAMI</div>
</div>
<br>
<br>
<br>
<div class="outer3">
  <div class="outer2">
    <button class="outer2" onclick="window.location.href='/dashboard'">
      <img class="imgService" src="{{ URL::to('img/convdraw.jpg') }}" alt="Conventional Drawing" />
      <div class="text-wrapper-4">DESIGN LUKIS</div>
      <p class="paragrafService">Rasakan kehangatan dan keaslian dalam setiap goresan tangan dalam seni lukis tradisional.
        Setiap sapuan kuas adalah ungkapan dari jiwa pencipta. Temukan keindahan dan kesejukan dalam setiap lukisan, menggali makna yang mendalam dan sentuhan personal yang tak tergantikan dari setiap karya seni.</p>
  </div>
  <div class="outer2">
    <button class="outer2" onclick="window.location.href='/dashboard'">
      <img class="imgService" src="{{ URL::to('img/digdraw1.jpg') }}" alt="Digital Drawing" />
      <div class="text-wrapper-4">DESIGN DIGITAL</div>
      <p class="paragrafService">Merambahlah dalam dunia seni digital yang futuristik dan nikmati keindahan karya-karya yang diciptakan dengan sentuhan teknologi terkini.
        Temukan kedalaman dan keunikan dalam desain digital. Jelajahi inovasi, kelincahan, dan kepraktisan , membawa Anda melintasi batas-batas tradisional dalam menciptakan karya yang memukau.</p>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection