<html>

<head>
    <!-- div di seluruh halaman ini  di set seperti i block-->
<link rel="stylesheet" href="mystyle.css">
    <style>
        div {
            color : green;
            font-weight: bold;
            text-align: right;
        }
        .judulhalaman{
            text-align: center;
            font-size: large;
        }
    </style>

</head>

<body>
    <div class="judulhalaman">Selamat datang</div>
    <!-- Inline CSS , digunakan ketika ada spesiifik ke 1 bagian saja-->
    <p style="text-decoration: line-through;color : rgb(197, 66, 66)">Hallo apa kabar ?</p>
    <!-- Inpage CSS , digunakan ketika ada yg spesifik ke 1 halaman khusus -->
    <div>Hallo apa kabar ?</div>
    <!-- External CSS , digunakan unruk format umum 1 website-->
    <span>Hallo apa kabar ?</span>
    <p>Bagian terakhir</p>
</body>

</html>
 