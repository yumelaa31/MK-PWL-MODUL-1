<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - YUMELA</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        /* Header Section */
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 50px 40px;
            text-align: center;
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.95;
            font-weight: 300;
        }

        /* Content Section */
        .content {
            padding: 40px;
        }

        /* Section Styles */
        .section {
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 1.6rem;
            color: #667eea;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #667eea;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* TENTANG Section */
        .tentang-content {
            color: #555;
            line-height: 1.8;
            font-size: 1.05rem;
            text-align: justify;
        }

        /* PENDIDIKAN Section */
        .pendidikan-item {
            background: #f8f9fa;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 5px solid #667eea;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .pendidikan-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
        }

        .pendidikan-item h3 {
            color: #667eea;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .pendidikan-item .tahun {
            color: #999;
            font-size: 0.95rem;
            margin-bottom: 8px;
        }

        .pendidikan-item p {
            color: #666;
            font-size: 0.95rem;
        }

        /* SKIL Section */
        .skill-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
        }

        .skill-item {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
        }

        .skill-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        /* KONTAK Section */
        .kontak-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .kontak-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-top: 4px solid #667eea;
        }

        .kontak-item i {
            color: #667eea;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .kontak-item h4 {
            color: #667eea;
            margin-bottom: 8px;
            font-size: 1rem;
        }

        .kontak-item p {
            color: #666;
            font-size: 0.95rem;
            word-break: break-word;
        }

        .kontak-item a {
            color: #667eea;
            text-decoration: none;
        }

        .kontak-item a:hover {
            text-decoration: underline;
        }

        /* Footer */
        .footer {
            background: #f8f9fa;
            text-align: center;
            padding: 20px;
            color: #999;
            font-size: 0.9rem;
            border-top: 1px solid #eee;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header {
                padding: 40px 20px;
            }

            .header h1 {
                font-size: 2.2rem;
            }

            .content {
                padding: 25px;
            }

            .section-title {
                font-size: 1.4rem;
            }

            .skill-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .kontak-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.8rem;
            }

            .skill-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- HEADER -->
        <div class="header">
            <h1>YUMELA</h1>
            <p>Mahasiswa Sistem Informasi</p>
        </div>

        <!-- CONTENT -->
        <div class="content">
            <!-- TENTANG Section -->
            <section class="section">
                <h2 class="section-title">Tentang Saya</h2>
                <div class="tentang-content">
                    <p>Saya adalah seorang mahasiswa yang bersemangat dalam dunia teknologi dan pengembangan web. Memiliki motivasi tinggi untuk terus belajar dan mengembangkan keterampilan di bidang pemrograman dan desain. Aktif mengikuti berbagai project dan tidak takut menghadapi tantangan baru dalam perjalanan akademik saya.</p>
                </div>
            </section>

            <!-- PENDIDIKAN Section -->
            <section class="section">
                <h2 class="section-title">Pendidikan</h2>
                
                <div class="pendidikan-item">
                    <h3>STMIK IKMI CIREBON</h3>
                    <div class="tahun">Fakultas Sistem Informasi | 2022 - Sekarang</div>
                    <p>Program Studi Sistem Informasi dengan fokus pada pengembangan web dan teknologi informasi terkini.</p>
                </div>

                <div class="pendidikan-item">
                    <h3>Sekolah Menengah Atas</h3>
                    <div class="tahun">2019 - 2022</div>
                    <p>Lulus dengan prestasi akademik yang baik dan aktif di berbagai kegiatan ekstrakurikuler bidang sains dan teknologi.</p>
                </div>
            </section>

            <!-- SKIL Section -->
            <section class="section">
                <h2 class="section-title">Keterampilan</h2>
                <div class="skill-grid">
                    <div class="skill-item">PHP</div>
                    <div class="skill-item">Laravel</div>
                    <div class="skill-item">MySQL</div>
                    <div class="skill-item">HTML/CSS</div>
                    <div class="skill-item">JavaScript</div>
                    <div class="skill-item">Blade Template</div>
                    <div class="skill-item">Git</div>
                    <div class="skill-item">Problem Solving</div>
                </div>
            </section>

            <!-- KONTAK Section -->
            <section class="section">
                <h2 class="section-title">Kontak</h2>
                <div class="kontak-grid">
                    <div class="kontak-item">
                        <h4>Email</h4>
                        <p><a href="mailto:yumela@email.com">yumela@email.com</a></p>
                    </div>

                    <div class="kontak-item">
                        <h4>Telepon</h4>
                        <p><a href="tel:+6281234567890">+62 812-345-67890</a></p>
                    </div>

                    <div class="kontak-item">
                        <h4>Alamat</h4>
                        <p>Kota Example, Provinsi Example, Indonesia</p>
                    </div>

                    <div class="kontak-item">
                        <h4>Media Sosial</h4>
                        <p>
                            <a href="#">Instagram</a> | 
                            <a href="#">LinkedIn</a> | 
                            <a href="#">GitHub</a>
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <p>&copy; 2026 YUMELA - Curriculum Vitae | Dibuat dengan Laravel 12</p>
        </div>
    </div>
</body>
</html>
