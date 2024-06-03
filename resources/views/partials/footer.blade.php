<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <footer class="footer">
        <a href="/"><img class="logo" src="{{ asset('img/logo_dyaris.jpg') }}" /></a>
        <div class="konten-kanan">
            <div class="text33">DYARIS DESIGN</div>
            <p class="text-wrapper33" style="font-size: 12px;">Memfasilitasi Kebebasan Berkreasi Melalui Karya Seni</p>
            <div class="text-wrapper33"><i class="fab fa-instagram"></i> Instagram: @dyarisdesign</div>
            <div class="text-wrapper33"><i class="fab fa-whatsapp"></i> WhatsApp: +6281463812193</div>
            <div class="text-wrapper33"><i class="fas fa-map-marker-alt"></i> Lokasi: Blimbing Barat, Blimbing, Kec. Gurah, Kabupaten Kediri, Jawa Timur 64181</div>
        </div>
    </footer>

    <style>
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #07080C;
        }

        .logo {
            height: auto;
            max-width: 150px; /* Adjust the max-width as needed */
        }

        .konten-kanan {
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Align content to the left */
        }

        .text33 {
            font-weight: bold;
            text-align: left; /* Ensure the text is left-aligned */
        }

        .text-wrapper33 {
            margin-top: 5px;
            font-size: 14px;
            display: flex;
            align-items: center;
            text-align: left; /* Ensure the text is left-aligned */
        }

        .text-wrapper33 i {
            margin-right: 8px; /* Spacing between icon and text */
        }
    </style>
</body>
</html>
