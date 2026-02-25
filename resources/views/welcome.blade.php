<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 1 Laravel 12</title>
    <style>
        /* Reset dasar untuk konsistensi tampilan */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Background dengan gradien modern */
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        /* Container utama untuk konten */
        .container {
            background-color: white;
            border-radius: 25px;
            padding: 50px 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 700px;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.3);
            animation: slideIn 0.6s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Header decoration */
        .header-decoration {
            height: 5px;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            border-radius: 5px;
            margin-bottom: 25px;
        }

        /* Judul utama yang lebih besar */
        h1 {
            font-size: 3rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 25px;
            line-height: 1.3;
            font-weight: 700;
        }

        /* Paragraf dengan gaya clean */
        p {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.8;
            margin-bottom: 30px;
            padding: 0 10px;
        }

        /* Box informasi tambahan */
        .info-box {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-left: 5px solid #667eea;
            padding: 20px;
            margin-top: 30px;
            border-radius: 15px;
            text-align: left;
            transition: transform 0.3s ease;
        }

        .info-box:hover {
            transform: translateX(5px);
        }

        .info-box h3 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 1.3rem;
            font-weight: 600;
        }

        .info-box ul {
            padding-left: 25px;
            color: #555;
        }

        .info-box li {
            margin-bottom: 10px;
            list-style-type: disc;
            color: #666;
        }

        .info-box li::marker {
            color: #667eea;
        }

        /* Footer sederhana */
        .footer {
            margin-top: 40px;
            color: #999;
            font-size: 0.95rem;
            border-top: 2px solid #eee;
            padding-top: 20px;
            line-height: 1.8;
        }

        .footer p:first-child {
            color: #667eea;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .footer p:last-child {
            color: #764ba2;
            font-size: 0.9rem;
        }

        /* Responsif untuk mobile */
        @media (max-width: 768px) {
            .container {
                padding: 40px 25px;
            }
            
            h1 {
                font-size: 2.3rem;
            }
            
            p {
                font-size: 1rem;
            }

            .info-box {
                padding: 15px;
            }

            .info-box h3 {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-decoration"></div>
        
        <h1>Selamat Datang!</h1>
        
        <p>Ini adalah halaman pertama saya di Laravel 12 dengan bantuan AI. Saya sangat senang memulai perjalanan belajar framework PHP modern ini.</p>
        
        <div class="info-box">
            <h3>Yang sudah dipelajari:</h3>
            <ul>
                <li>Instalasi Laravel 12 dan setup environment</li>
                <li>Struktur folder dasar Laravel</li>
                <li>Routing di file web.php</li>
                <li>Blade templating untuk view</li>
            </ul>
        </div>
        
        <div class="footer">
            <p>Modul 1 - Pemrograman Web dengan Laravel 12</p>
            <p>Universitas Example - Fakultas Sistem Informasi</p>
        </div>
    </div>
</body>
</html>

<!-- Tampilan dibuat dengan referensi dari DeepSeek -->
