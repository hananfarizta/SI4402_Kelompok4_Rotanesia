@extends('layouts.layout')
@section('content')

<link rel="stylesheet" href="css/about-us.css">
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<section id="about-us" style="margin-bottom: 150px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 20px">
                <h1 style="color: #c32334">Rotanesia</h1>
                <p style="font-size: 16px; text-align:justify;">E-commerce atau perdagangan elektronik adalah kegiatan berbelanja dan jual beli melalui jaringan internet. Perusahaan yang menjalankan kegiatan e-commerce akan membuat website yang menampilkan produk yang dijual dan memberikan sistem pembayaran online bagi pelanggan.<br>
					Rotanesia adalah perusahaan e-commerce yang menjual kerajinan yang terbuat dari bahan baku rotan. Kerajinan rotan adalah produk yang terbuat dari rotan sebagai bahan baku utamanya. Rotan merupakan salah satu jenis pohon yang tumbuh di hutan tropis dan memiliki sifat yang mudah dibentuk sehingga sering digunakan untuk membuat berbagai jenis kerajinan. Kerajinan rotan biasanya digunakan sebagai hiasan rumah atau objek yang memiliki nilai estetika tinggi. Kerajinan rotan dapat dibuat dalam berbagai bentuk dan ukuran sesuai dengan kebutuhan dan selera pelanggan.
					</p>
            </div>

            <div class="col-md-6">
                                    <div class="mapouter" >
                                        <div class="gmap_canvas">
                                            <iframe
                                                width="600"
                                                height="500"
                                                id="gmap_canvas"
                                                src="https://maps.google.com/maps?q=bandung,%20jalan%20logam,%20sky%20residen&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                frameborder="0"
                                                scrolling="no"
                                                marginheight="0"
                                                marginwidth="0"
                                                style="border: 5px solid#333; border-radius:10px;"
                                            ></iframe
                                            ><a href="https://123movies-to.org"></a
                                            ><br /><style>
                                                .mapouter {
                                                    position: relative;
                                                    text-align: right;
                                                    height: 500px;
                                                    width: 600px;
                                                }
                                            </style>
                                            <a href="https://www.embedgooglemap.net"></a
                                            ><style>
                                                .gmap_canvas {
                                                    overflow: hidden;
                                                    background: none !important;
                                                    height: 500px;
                                                    width: 600px;
                                                }
                                            </style>
                                        </div>
                                    </div>
            </div>
    </div>
</section>

        {{-- BG FOOTER --}}
        <footer class="bg-dark text-white py-5">
            <div class="container">
                <div class="row">
                <div class="col-md-3">
                    <div class="footer">
                    <h5>About Us</h5>
                    <p>Rotanesia adalah perusahaan e-commerce yang menjual kerajinan yang terbuat dari bahan baku rotan. Kerajinan rotan adalah produk yang terbuat dari rotan sebagai bahan baku utamanya. <a href=""> ...view more</a></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer">
                    <h5>Contact</h5>
                    <ul class="list-unstyled">
                    <li>123 Main Street</li>
                    <li>Banduing, Indonesia</li>
                    <li>555-555-5555</li>
                    <li>Rotanesia@gmail.com</li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer" style="border: none;">
                        <h5>Social Media</h5>
                        <ul class="list-unstyled">
                        <li><a href="#"><img src="image/icon/Facebook.png" alt="" width="20"> Facebook</a></li>
                        <li><a href="#"><img src="image/icon/twitter.png" alt="" width="20"> Twitter</a></li>
                        <li><a href="#"><img src="image/icon/instagram.png" alt="" width="20"> Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </footer>
        {{-- BG FOOTER --}}
        @endsection