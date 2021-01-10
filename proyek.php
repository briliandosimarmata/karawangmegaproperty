<html lang="en">
<head>
    <?php
        include 'head.php';
    ?>
</head>
<body>
    <!-- Navbar -->
    <?php
        include 'navbar.php';
    ?>
    <!-- Navbar -->

    <!-- iNFO PROYEK -->
    <div class="container project-all">
        <div class="sticky-top">
            <div class="alert alert-success" role="alert">
                <h1>ARSA RECIDENCE</h1>
            </div>
        </div>
        <div class="row project justify-content-center">
            <div class="size-80">
                <img src="img/slider/slide1.jpg" alt="" class="img-fluid mx-auto">
                <a href="" class="btn btn-outline-light btn-sm">UNDUH BOOKLET</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="size-sm-80">
                <div class="col content-project ">
                    <h1>ARSA RECIDENCE</h1>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <h6>Pengembang</h6>
                                    <p>PT. ABC</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Deskripsi Proyek</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis quos, itaque possimus non nisi harum doloremque quis molestiae totam, sed quaerat culpa est impedit. Minima veritatis vero fugiat autem tempore.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Deskripsi Harga</h6>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti odit dolores labore nesciunt, vitae asperiores impedit optio itaque beatae suscipit eum. Voluptates voluptatum maxime adipisci ullam ratione vel. Rem, dignissimos.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="buttonSpec" onclick="showSpec()"><h6>Lihat Spesifikasi</h6></button>
                                    <!-- TAB MENU SPEC -->
                                    <div class="tabContainer" id="spesifikasi">
                                        <div class="buttonContainer">
                                            <button onclick="showPanel(0,'white')">Type 30</button>
                                            <button onclick="showPanel(1,'white')">Type 60</button>
                                        </div>
                                        <div class="tabPanel">
                                        <table class="table table-borderless mx-auto">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="mx-auto img-tab">
                                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    <div class="carousel-item active">
                                                                    <img class="d-block w-100" src="img/slider/slide1.jpg" alt="First slide">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                    <img class="d-block w-100" src="img/slider/slide2.jpg" alt="Second slide">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                    <img class="d-block w-100" src="img/slider/slide3.jpg" alt="Third slide">
                                                                    </div>
                                                                </div>
                                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <table class="mx-auto table table-dark tbl-spec">
                                            <tr>
                                                <td>Total Unit</td>
                                                <td>:</td>
                                                <td>15 Unit</td>
                                            </tr>
                                            <tr>
                                                <td>Luas Tanah</td>
                                                <td>:</td>
                                                <td>60 m<sup>2</sup></td>
                                            </tr>
                                            <tr>
                                                <td>Luas Bangunan</td>
                                                <td>:</td>
                                                <td>6 m x 10m</td>
                                            </tr>
                                            <tr>
                                                <td>Total Lantai</td>
                                                <td>:</td>
                                                <td>2 Lantai</td>
                                            </tr>
                                            <tr>
                                                <td>Kamar Tidur</td>
                                                <td>:</td>
                                                <td>2 Kamar</td>
                                            </tr>
                                            <tr>
                                                <td>Kamar Mandi</td>
                                                <td>:</td>
                                                <td>1 Kamar</td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                            </tr>
                                        </table>    
                                        <button class="btn btn-success btn-lg disabled">Rp 800.000.000</button>                    
                                        </div>
                                        
                                        <div class="tabPanel">
                                            <table class="table table-borderless mx-auto">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="mx-auto img-tab">
                                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                                    <div class="carousel-inner">
                                                                        <div class="carousel-item active">
                                                                        <img class="d-block w-100" src="img/slider/slide1.jpg" alt="First slide">
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                        <img class="d-block w-100" src="img/slider/slide2.jpg" alt="Second slide">
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                        <img class="d-block w-100" src="img/slider/slide3.jpg" alt="Third slide">
                                                                        </div>
                                                                    </div>
                                                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table> 
                                            <table class="mx-auto table table-dark tbl-spec">
                                                <tr>
                                                    <td>Total Unit</td>
                                                    <td>:</td>
                                                    <td>20 Unit</td>
                                                </tr>
                                                <tr>
                                                    <td>Luas Tanah</td>
                                                    <td>:</td>
                                                    <td>80 m<sup>2</sup></td>
                                                </tr>
                                                <tr>
                                                    <td>Luas Bangunan</td>
                                                    <td>:</td>
                                                    <td>8 m x 10m</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Lantai</td>
                                                    <td>:</td>
                                                    <td>2 Lantai</td>
                                                </tr>
                                                <tr>
                                                    <td>Kamar Tidur</td>
                                                    <td>:</td>
                                                    <td>2 Kamar</td>
                                                </tr>
                                                <tr>
                                                    <td>Kamar Mandi</td>
                                                    <td>:</td>
                                                    <td>1 Kamar</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                            </table>    
                                            <button class="btn btn-success btn-lg disabled">Rp 1000.000.000</button>                    
                                        </div>
                                        </div>
                                    </div>
                                <!-- Akhir Tab menu spec -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Deskripsi Lokasi</h6>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum inventore voluptate nam consequuntur numquam ab nihil dolores reiciendis expedita, modi, ipsam nisi tempora sunt voluptatibus sed odio quis culpa saepe.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm btn-block"> Lihat Siteplan</a>
                                    <a href="https://api.whatsapp.com/send?phone=62816709770" class="btn btn-success btn-lg btn-block"> Chat Via Whatsapp</a>
                                    <a href="https://goo.gl/maps/ZyPWjCGurh1XJuwW6" class="btn btn-info btn-sm btn-block btn-gmap"> Lihat Lokasi di Google Map</a>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="gmap">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5769546488236!2d107.28886721431113!3d-6.319165763594254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e697735d00d8143%3A0x8b8c291f89042481!2sKarawang%20Mega%20Property!5e0!3m2!1sid!2sid!4v1592593376169!5m2!1sid!2sid" width="600" height="520" frameborder="0" style="border:0;" allowfullscreen="0" aria-hidden="false" tabindex="0">
                                        </iframe>
                                    </div>
                                </td>
                            </tr>
                            </div>
                        </tbody>
                    </table>
                    <!-- Akhir Spec -->                       
                </div>
            </div>
        </div>
    </div>
    
    <?php
        include 'footer.php'
    ?>
    <?php
        include 'javascript.php';
    ?>
    
    <script src="myJs.js"></script>
</body>
</html>