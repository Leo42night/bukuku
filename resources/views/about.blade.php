<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bukuku</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

       
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f3f4f6;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5rem; 
            font-family: 'Arial', sans-serif; 
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        img {
            display: block;
            margin: 0 auto 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ABOUT</h1>
        <img src="gambarbuku.jpg" alt="Book Cover" width="200">
        <p> "BukuKu adalah sebuah aplikasi yang didesain untuk memberikan pengalaman membaca yang menyenangkan dan interaktif kepada pengguna. Dengan berbagai fitur yang intuitif, BukuKu memungkinkan pengguna untuk menjelajahi beragam koleksi buku dalam berbagai genre dengan mudah. Pengguna dapat menikmati kemudahan membaca, melakukan penandaan halaman, dan berbagi kesan serta ulasan tentang buku-buku favorit mereka dengan komunitas pembaca lainnya. Dengan antarmuka yang ramah pengguna dan tampilan yang menarik, BukuKu menjadi teman setia bagi para pecinta buku dalam menjelajahi dunia literatur."
        </p>
    </div>
</body>
</html>