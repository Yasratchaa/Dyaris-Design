@extends('layouts.templateOrder')


@section('headerOrder')
<link rel="stylesheet" href="{{ asset('css/dashboardOrder.css') }}">
@endsection

@section('isiInformasiOrder')
<div class="palingLuar">
    <div class="outer1">
        <div class="inner1">
            <div class="inti1">
                <h1>DYARIS <br> DESIGN</h1>
            </div>
            <div class="inti2">
                <form id="sendDesignForm" action="/DashBoard/SendDesign" method="post">
                    @csrf
                    <button class="button1" style="background: none; border: none;">Send Design</button>
                </form>

                <script>
                    document.getElementById("sendDesignForm").addEventListener("submit", function(event) {
                        event.preventDefault(); // Menghentikan form dari pengiriman default

                        // Redirect ke URL yang diinginkan
                        window.location.href = "https://wa.me/6282120182939";
                    });
                </script>

            </div>
        </div>
        <img src="/img/dyarisdash.png" alt="DYARIS Picture Dashboard">
    </div>
    <div class="outer2">
        <div class="inner3">
            <h1>Memfasilitasi kebebasan berekspresi melalui karya seni.</h1>
        </div>
        <div class="inner4">
            <div class="inti3">
                <div class="kotak1">
                    <h2>Desain karakter unik, personal</h2>
                </div>
                <p>Ini menekankan pentingnya memiliki karakter atau identitas yang unik untuk produk atau merek Anda. <br>
                    Desain karakter yang unik membantu produk Anda membedakan diri dari pesaing dan membangun koneksi <br>
                    emosional dengan pelanggan. Ketika karakter tersebut dipersonalisasi sesuai dengan preferensi atau <br>
                    kebutuhan pelanggan, hal itu meningkatkan daya tarik dan relevansi produk.
                </p>
            </div>
            <div class="inti3">
                <div class="kotak1">
                    <h2>Beragam produk, perangkat lunak/fisik.</h2>
                </div>
                <p>Ini merujuk pada kemampuan untuk mengaplikasikan desain karakter tersebut pada berbagai jenis produk, <br>
                    baik itu dalam bentuk perangkat lunak seperti aplikasi atau perangkat keras seperti produk fisik. <br>
                    Fleksibilitas dalam menerapkan desain karakter pada berbagai jenis produk memungkinkan untuk memenuhi <br>
                    kebutuhan pasar yang beragam dan memperluas potensi pasar Anda.
                </p>
            </div>
            <div class="inti3">
                <div class="kotak1">
                    <h2>Pelayanan penuh kasih, personalisasi.</h2>
                </div>
                <p>Ini menekankan pentingnya memberikan layanan pelanggan yang hangat dan perhatian serta kemampuan untuk <br>
                    menyediakan pengalaman yang dipersonalisasi. Dengan memberikan pelayanan yang penuh kasih dan <br>
                    memperhatikan kebutuhan individu pelanggan, Anda dapat membangun hubungan yang lebih kuat dan <br>
                    meningkatkan loyalitas pelanggan. Kemampuan untuk melakukan personalisasi juga memungkinkan untuk <br>
                    menyesuaikan produk atau layanan sesuai dengan preferensi atau kebutuhan pelanggan secara individual.
                </p>
            </div>
            <div class="inti3">
                <div class="kotak1">
                    <h2>Produk Yang Kita Tawarkan</h2>
                </div>
                <p>Produk utama kami adalah desain karakter yang dapat digunakan untuk berbagai keperluan. Desain karakter <br>
                    kami sangat fleksibel dan cocok untuk dijadikan konten di platform-platform media sosial seperti <br>
                    Instagram, serta untuk latar belakang di berbagai perangkat gadget. Selain itu, desain kami dapat <br>
                    dicetak untuk dijadikan hadiah, merchandise, stiker, label pada souvenir, atau kartu ucapan. <br>
                    Dengan karakter yang unik dan personal ini, Anda bisa menggunakannya sebagai pajangan dalam ruangan <br>
                    untuk menambahkan sentuhan kreatif pada dekorasi Anda.
                </p>
            </div>
        </div>
    </div>
</div>

<br>
<br>

@auth
<form action="orderprint" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="senddesign">
        <h1>Send Design</h1>
        <div>
            <label for="kontak">Kontak (WhatsApp)</label>
            <input type="text" id="kontak" name="kontak" required>
        </div>
        <div>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="order">Kategori</label>
            <select name="order" id="order" required>
                <option value="Orang">Orang</option>
                <option value="Hewan">Hewan</option>
                <option value="Barang">Barang</option>
            </select>
        </div>
        <div>
            <label for="file_name">Upload Design</label>
            <input type="file" id="file_name" name="file_name" required>
        </div>
        <button type="submit">Submit</button>
    </div>

</form>
@endauth

@endsection