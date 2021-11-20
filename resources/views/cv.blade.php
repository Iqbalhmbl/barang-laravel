@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
            <div class="card text-white bg-dark mb-3">
                <img src="{{ asset('iqbal.png')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h1>Iqbal Hambali</h1>
                    <a>iqbalhmbl505@gmail.com</a><br>
                     <a href="https://www.linkedin.com/in/iqbal-hambali-a31a88195/">Linkedin</a>
                </div>
            </div>
            <div class="card text-white bg-dark mb-3">
                <div class="card-body text-center">
                    <a>+62 878 2873 6448</a><br>
                   
                    <a>Sukajadi Bandung, Jawa Barat – Indonesia 40162</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">{{ __('Ringkasan') }}</div>
                <div class="card-body" style="text-justify">
                    Berminat dalam pengembangan dan pembuatan perangkat lunak berbasis web, yang tertarik untuk mengembangkan perangkat lunak yang lebih cepat dan efisien, tertarik untuk melakukan penelitian tentang bagaimana suatu produk. Seorang pekerja tim yang gemar terlibat dalam perencanaan, analisis dan perancangan, membuat keputusan, mendengarkan, membantu, dan menyampaikan ide kepada anggota tim. Mencari posisi yang mendukung tujuan saya, yang akan memberi saya pembelajaran trial-error-learning agar terus bisa berkembang.
                </div>
            </div>

            <div class="card text-white bg-dark mb-3">
                <div class="card-header">{{ __('Pendidikan') }}</div>
                <div class="card-body" style="text-justify">
                    <a>1. Rekayasa Perangkat Lunak – SMK ICB Cinta Niaga, Bandung – Jawa Barat, Indonesia (2014 – 2017)</a>
                    <br>
                    <a>2. Diploma Teknik Informatika - Politeknik Pos Indonesia, Bandung – Jawa Barat, Indonesia
                        IPK 3.05 (2017 – 2021)</a>
                </div>
            </div>

            <div class="card text-white bg-dark mb-3">
                <div class="card-header">{{ __('Pengalaman') }}</div>
                <div class="card-body" style="text-justify">
                    <a>1. IT Support</a>
                    <br>
                    <a>  Kantor Imigrasi Klas I Bandung</a>
                    <a>  - Mengelola data, Membuat Laporan, dan Mengembangkan Aplikasi.</a>
                    <br>
                    <a>1. Full Stack Web Developer</a>
                    <br>
                    <a>PT. Vaganza Solusi Internasional - Terlibat dalam Proyek Aplikasi Internal PT. Vaganza Solusi Internasional menggunakan PHP Framework (Laravel), Javascript, Bootsrap, GeoJson, Google Analytic, dan GIT.
                </div>
            </div>

            <div class="card text-white bg-dark mb-3">
                <div class="card-header">{{ __('Kemampuan') }}</div>
                <div class="card-body" style="text-justify">
                    <a>1. Web Programmer (HTML, PHP, Laravel, CodeIgniter, Javascript, Bootsrap, CSS, MVC, OOP)</a>
                    <br>
                    <a>2. Desain Grafis (CorelDraw, Adobe Photoshop)</a>
                    <br>
                    <a>3. Pengolahan Data (Microsoft Office Word, Excel)</a>
                    <br>
                    <a>4. Web Desain (Figma)</a>
                    <br>
                    <a>5. Analisis</a>
                </div>
            </div>

            <div class="card text-white bg-dark mb-3">
                <div class="card-header">{{ __('Proyek') }}</div>
                <div class="card-body" style="text-justify">
                    <a>1. Terlibat dalam proyek Aplikasi Pengarsipan Dokumen Pada Kantor Imigrasi Surabaya Menggunakan Framework Laravel (2020)</a>
                    <br>
                    <a>2. Terlibat dalam proyek Pengembangan Aplikasi WEST JAVA INVESTMENT AND PARTNERSHIP (2021)</a>
                    <br>
                    <a>3. Terlibat dalam proyek Aplikasi Ikatan Alumni Antropologi UNPAD Menggunakan Framework Laravel (2021)</a>
                    <br>
                    <a>4. Membuat Aplikasi Pendukung Keputusan dalam menentukan bantuan Bedah Rumah Dengan metode TOPSIS dan SAW Menggunakan Framework Laravel (2021)</a>
                    <br>
                    <a>5. Membuat Aplikasi Koperasi Komet Sederhana Terdepan (KOMENTAR) Menggunakan Framework Laravel (2021).</a>
                </div>
            </div>

            <div class="card text-white bg-dark mb-3">
                <div class="card-header">{{ __('Sertifikasi dan Pencapaian') }}</div>
                <div class="card-body" style="text-justify">
                    <a>1. Sertifikat Magang Kantor Imigrasi Klas I Bandung</a>
                    <br>
                    <a>2. Sertifikat IC3 Computing Fundamental GS5</a>
                    <br>
                    <a>- Hardware</a>
                    <br>
                    <a>- Software</a>
                    <br>
                    <a>- Operating System</a>
                    <br>
                    <a>- Troubleshooting</a>
                    <br>
                    <a>- Basic Computer Care</a>
                    <br>
                    <a>3. Achieviement Credential “COMPUTING FUNDAMENTAL”</a>
                    <br>
                    <a>4. Sertifikat TOEFL (493)</a>
                </div>
            </div>

        </div>
        
    </div>
</div>
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
