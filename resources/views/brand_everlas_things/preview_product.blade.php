<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

        <!-- Custom CSS -->  

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap JS -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <title>Ideally | preview product everlasThing</title>
    <style>
        /* Style untuk div dengan class .info-container */
.info-container {
    width: 300px;
    height: 59px;
    left: 145px;
    top: 56px;
    position: absolute;
}

/* Style untuk div dengan class .title */
.title {
    width: 171px;
    height: 21px;
    left: 0px;
    top: 0px;
    position: absolute;
    color: #382C20;
    font-size: 18px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    word-wrap: break-word;
}

/* Style untuk div dengan class .subtitle */
.subtitle {
    width: 300px;
    left: 0px;
    top: 21px;
    position: absolute;
    color: #382C20;
    font-size: 25px;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    text-transform: uppercase;
    word-wrap: break-word;
}

    </style>
    
</head>
<body>

    <div style="width: 1920px; height: 100px; left: 0px; top: 0px; position: absolute">
        <div style="width: 100%; height: 100%; top: 0px; position: absolute;">
            <img src="{{ asset('img/everlas_things/header-bg.png') }}" alt="">
        </div>
        <img style="width: 435px; height: 80px; left: 437px; top: 88px; position: absolute" src="{{ asset('img/everlas_things/logo-brand.png') }}" />
    </div>
    <div style="width: 100%; height: 100%; left: 0px; top: 200px; position: absolute">
        <div style="width: 1920px; height: 701px; left: 0px; top: 100px; position: absolute; background: #252525"></div>
        <div style="width: 107px; height: 701px; left: 330px; top: 100px; position: absolute">
            <div style="width: 80px; height: 40px; left: 107px; top: 310px; position: absolute; transform: rotate(90deg); transform-origin: 0 0">
                <div style="width: 80px; height: 40px; left: 0px; top: 0px; position: absolute; transform: rotate(90deg); transform-origin: 0 0; background: #382C20"></div>
                <div style="width: 20px; height: 0px; left: -30px; top: 40px; position: absolute; border: 1px white solid"></div>
                
            </div>
        </div>
        <div style="width: 500px; height: 721px; left: 1090px; top: 79px; position: absolute">
            <div style="width: 500px; height: 700px; left: 0px; top: 21px; position: absolute; background: #F3F3F3"></div>
            <div style="width: 500px; height: 0px; left: 500px; top: 152px; position: absolute; transform: rotate(180deg); transform-origin: 0 0; border: 5px #F2F2F2 solid"></div>
            <div style="width: 500px; height: 0px; left: 500px; top: 324px; position: absolute; transform: rotate(180deg); transform-origin: 0 0; border: 5px #F2F2F2 solid"></div>
            <div class="info-container">
                <div class="title">
                    @if(isset($everlast))
                        {{ $everlast->seri }}
                    @else
                        Product details not found.
                    @endif</div>
                <div class="subtitle">
                    @if(isset($everlast))
                        {{ $everlast->nama_produk }}
                    @else
                        Product details not found.
                    @endif</div>
                <div style="width: 254px; position: absolute; top: 100px;">
                    <table style="width: 100%; color: #382C20; font-size: 14px; font-family: Poppins; font-weight: 400;">
                        <tr>
                            <td style="width: 114px; text-align: left;">Jenis</td>
                            <td style="font-weight: 700;">
                                @if(isset($everlast))
                                    {{ $everlast->jenis_1 }}
                                @else
                                    Product details not found.
                                @endif</td>
                        </tr>
                        <tr>
                            <td style="width: 114px; text-align: left;">Warna</td>
                            <td style="font-weight: 700;">
                                @if(isset($everlast))
                                    {{ $everlast->warna }}
                                @else
                                    Product details not found.
                                @endif</td>
                        </tr>
                        <tr>
                            <td style="width: 114px; text-align: left;">Garansi</td>
                            <td style="font-weight: 700;">6 Bulan</td>
                        </tr>
                        <tr>
                            <td style="width: 114px; text-align: left;">Dimensi (cm)</td>
                            <td style="font-weight: 700;">@if(isset($everlast))
                                {{ $everlast->dimensi }}
                            @else
                                Product details not found.
                            @endif</td>
                        </tr>
                        <tr>
                            <td style="width: 114px; text-align: left;">Finishing</td>
                            <td style="font-weight: 700;">@if(isset($everlast))
                                {{ $everlast->material_pendukung }}
                            @else
                                Product details not found.
                            @endif</td>
                        </tr>
                    </table>
                </div>
                <div style="width: 300px; top: 300px; position: absolute; text-align: justify; color: #382C20; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                    @if(isset($everlast))
                                    {{ $everlast->deskripsi_singkat }}
                                @else
                                    Product details not found.
                                @endif
                </div>
            </div>                  

            <br>
            <div style="width: 300px; height: 88px; left: 145px; top: 485px; position: absolute">
                <div style="width: 50px; height: 30px; left: 250px; top: 22px; position: absolute">
                    <div style="width: 50px; height: 30px; left: 0px; top: 0px; position: absolute; background: #DFDFDF"></div>
                    <div style="left: 10px; top: 3px; position: absolute; color: #382C20; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">unit</div>
                </div>
                <div style="width: 50px; height: 30px; left: 250px; top: 55px; position: absolute">
                    <div style="width: 50px; height: 30px; left: 0px; top: 0px; position: absolute; background: #DFDFDF"></div>
                    <div style="left: 10px; top: 3px; position: absolute; color: #382C20; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">unit</div>
                </div>
                <div style="left: 204px; top: 26px; position: absolute"><span style="color: #382C20; font-size: 14px; font-family: Poppins; font-weight: 700; line-height: 25px; word-wrap: break-word">-<br/></span><span style="color: #382C20; font-size: 14px; font-family: Poppins; font-weight: 700; line-height: 33px; word-wrap: break-word">-</span></div>
                <div style="left: 0px; top: 0px; position: absolute; color: #382C20; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Daftar Harga</div>
                <div style="width: 165px; height: 63px; left: 0px; top: 22px; position: absolute">
                    <div style="width: 165px; height: 30.37px; left: 0px; top: 0px; position: absolute; background: #DFDFDF"></div>
                    <div style="width: 115px; height: 20px; left: 42px; top: 5px; position: absolute; text-align: right; color: #804F27; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">1,700,000</div>
                    <div style="left: 8px; top: 5px; position: absolute; color: #804F27; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Rp</div>
                    <div style="width: 165px; height: 30px; left: 0px; top: 33px; position: absolute; background: #DFDFDF"></div>
                    <div style="width: 115px; height: 20px; left: 42px; top: 39px; position: absolute; text-align: right; color: #804F27; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">1,550,000</div>
                    <div style="left: 8px; top: 38px; position: absolute; color: #804F27; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Rp</div>
                </div>
                <div style="width: 30px; height: 30px; left: 213px; top: 22px; position: absolute">
                    <div style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; background: #DFDFDF"></div>
                    <div style="left: 7px; top: 3px; position: absolute; text-align: center; color: #382C20; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">10</div>
                </div>
                <div style="width: 30px; height: 30px; left: 172px; top: 22px; position: absolute">
                    <div style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; background: #DFDFDF"></div>
                    <div style="left: 12px; top: 3px; position: absolute; text-align: center; color: #382C20; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">1</div>
                </div>
                <div style="width: 30px; height: 30px; left: 172px; top: 55px; position: absolute">
                    <div style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; background: #DFDFDF"></div>
                    <div style="left: 10px; top: 3px; position: absolute; text-align: center; color: #382C20; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">11</div>
                </div>
                <div style="width: 30px; height: 30px; left: 213px; top: 55px; position: absolute">
                    <div style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; background: #DFDFDF"></div>
                    <div style="left: 10px; top: 3px; position: absolute; text-align: center; color: #382C20; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">+</div>
                </div>
            </div>
            <div style="width: 299.50px; height: 70px; left: 145px; top: 583px; position: absolute">
                <div style="width: 56px; height: 49px; left: 196px; top: 21px; position: absolute">
                    <div style="width: 56px; height: 49px; left: 0px; top: 0px; position: absolute; background: white"></div>
                    <div style="left: 18px; top: 9px; position: absolute; text-align: center; color: #727272; font-size: 20px; font-family: Poppins; font-weight: 700; word-wrap: break-word">10</div>
                </div>
                <div style="width: 48.50px; height: 48.66px; left: 251px; top: 21px; position: absolute">
                    <a href="{{ route('tambahEverlasthingsKeKeranjang', ['id_everlas_things' => $everlast->id_everlas_things, 'quantity' => 1]) }}" style="display: block; width: 100%; height: 100%;">
                        <div style="width: 48.50px; height: 48.66px; background: #382C20; position: relative;">
                            <div style="width: 16px; height: 16px; left: 16px; top: 16px; position: absolute; background: white; border-radius: 9999px;"></div>
                        </div>
                    </a>
                </div>
                      
                <div style="width: 49px; height: 24.50px; left: 172px; top: 70px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0">
                    <div style="width: 49px; height: 24.50px; left: 0px; top: 0px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; background: #382C20"></div>
                    <div style="width: 12.25px; height: 0px; left: 18.37px; top: -24.50px; position: absolute; transform: rotate(-180deg); transform-origin: 0 0; border: 1px white solid"></div>
                    <div style="width: 8.30px; height: 8.30px; left: 12.25px; top: -9.19px; position: absolute; transform: rotate(-135deg); transform-origin: 0 0; background: white"></div>
                    <div style="width: 8.30px; height: 8.30px; left: 11.99px; top: -39.81px; position: absolute; transform: rotate(45deg); transform-origin: 0 0; background: white"></div>
                </div>
                <div style="width: 165px; height: 49px; left: 0px; top: 21px; position: absolute">
                    <div style="width: 165px; height: 49px; left: 0px; top: 0px; position: absolute; background: #DFDFDF"></div>
                    <div style="left: 70px; top: 13px; position: absolute; text-align: right; color: #804F27; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">17,000,000</div>
                    <div style="left: 8px; top: 13px; position: absolute; color: #804F27; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Rp</div>
                </div>
                <div style="left: 0px; top: 0px; position: absolute; color: #382C20; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Total Harga</div>
            </div>
            <div style="width: 80px; height: 40px; left: 420px; top: 0px; position: absolute">
                <div style="width: 80px; height: 40px; left: 0px; top: 0px; position: absolute; background: #382C20"></div>
                <div style="width: 20px; height: 0px; left: 40px; top: 30px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 1px white solid"></div>
                
            </div>
        </div>

        <!--Produk terkait-->
        <div style="width: 1920px; left: 0px; top: 800px; position: absolute;">
            <img src="{{ asset('img/everlas_things/terkait-bg.png') }}" alt="">
            <div style="left: 380px; top: 231px; position: absolute; color: #FF6412; font-size: 25px; font-family: Rubik One; font-weight: 400; word-wrap: break-word">PRODUK TERKAIT</div>
            <div style="width: 200px; height: 300px; left: 331px; top: 312px; position: absolute">
                <div style="width: 200px; height: 200px; left: 0px; top: 0px; position: absolute; background: #DFDFDF"></div>
                <div style="width: 200px; height: 100px; left: 0px; top: 200px; position: absolute; background: white"></div>
                <div style="left: 13px; top: 272px; position: absolute; color: #804F27; font-size: 12px; font-family: Poppins; font-weight: 700; text-transform: capitalize; word-wrap: break-word">Rp 1,700,000</div>
                <div style="width: 171px; height: 21px; left: 13px; top: 205px; position: absolute; color: #382C20; font-size: 10px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Seri Konstruksi</div>
                <div style="width: 175px; height: 57px; left: 13px; top: 219px; position: absolute; color: #382C20; font-size: 12px; font-family: Poppins; font-weight: 700; text-transform: uppercase; word-wrap: break-word">consectetur adipiscing elit.</div>
                <div style="width: 75px; height: 15px; left: 113px; top: 273px; position: absolute">
                </div>
            </div>
        </div> 
            
        <div style="width: 750px; height: 900px; left: 437px; top: 0px; position: absolute">
            <img src="{{ asset('img/everlas_things/product.png') }}" />
        </div>
    </div>    
        <div style="width: 1330px; height: 1474px; left: 330px; top: 1665px; position: absolute">
            <div style="width: 1500px; height: 1700px; left: 0px; top: 0px; position: absolute; background: #F2F2F2"></div>
            <div style="width: 1280px; height: 403px; left: 50px; top: 50px; position: absolute">
                <div style="left: 0px; top: 0px; position: absolute; color: #FF6412; font-size: 25px; font-family: Rubik One; font-weight: 400; word-wrap: break-word">PRODUK PALING BANYAK DICARI</div>
                <div style="width: 150px; height: 349px; left: 1130px; top: 54px; position: absolute">
                    <div style="width: 70px; height: 349px; left: 80px; top: 0px; position: absolute; background: white"></div>
                    <div style="width: 80px; height: 40px; left: 80px; top: 47px; position: absolute; transform: rotate(-180deg); transform-origin: 0 0">
                        <div style="width: 80px; height: 40px; left: 0px; top: 0px; position: absolute; transform: rotate(-180deg); transform-origin: 0 0; background: #382C20"></div>
                        <div style="width: 20px; height: 0px; left: -40px; top: -30px; position: absolute; transform: rotate(90deg); transform-origin: 0 0; border: 1px white solid"></div>
                        
                    </div>
                </div>
                <div style="width: 200px; height: 300px; left: 0px; top: 81px; position: absolute">
                    <div style="width: 200px; height: 200px; left: 0px; top: 0px; position: absolute; background: #DFDFDF"></div>
                    <div style="width: 200px; height: 100px; left: 0px; top: 200px; position: absolute; background: white"></div>
                    <div style="left: 13px; top: 272px; position: absolute; color: #804F27; font-size: 12px; font-family: Poppins; font-weight: 700; text-transform: capitalize; word-wrap: break-word">Rp 1,700,000</div>
                    <div style="width: 171px; height: 21px; left: 13px; top: 205px; position: absolute; color: #382C20; font-size: 10px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Seri Konstruksi</div>
                    <div style="width: 175px; height: 57px; left: 13px; top: 219px; position: absolute; color: #382C20; font-size: 12px; font-family: Poppins; font-weight: 700; text-transform: uppercase; word-wrap: break-word">consectetur adipiscing elit.</div>
                    <div style="width: 75px; height: 15px; left: 113px; top: 273px; position: absolute">
                    </div>
                </div>
            </div>

            <!--Produk terbaru-->
            <div style="width: 1280px; height: 403px; left: 50px; top: 531px; position: absolute">
                <div style="left: 0px; top: 0px; position: absolute; color: #FF6412; font-size: 25px; font-family: Rubik One; font-weight: 400; word-wrap: break-word">PRODUK TERBARU</div>
                <div style="width: 150px; height: 349px; left: 1130px; top: 54px; position: absolute">
                    <div style="width: 70px; height: 349px; left: 80px; top: 0px; position: absolute; background: white"></div>
                    <div style="width: 80px; height: 40px; left: 80px; top: 47px; position: absolute; transform: rotate(-180deg); transform-origin: 0 0">
                        <div style="width: 80px; height: 40px; left: 0px; top: 0px; position: absolute; transform: rotate(-180deg); transform-origin: 0 0; background: #382C20"></div>
                        <div style="width: 20px; height: 0px; left: -40px; top: -30px; position: absolute; transform: rotate(90deg); transform-origin: 0 0; border: 1px white solid"></div>
                        
                    </div>
                </div>
                
                <div style="width: 200px; height: 300px; left: 0px; top: 81px; position: absolute">
                    <div style="width: 200px; height: 200px; left: 0px; top: 0px; position: absolute; background: #DFDFDF"></div>
                    <div style="width: 200px; height: 100px; left: 0px; top: 200px; position: absolute; background: white"></div>
                    <div style="left: 13px; top: 272px; position: absolute; color: #804F27; font-size: 12px; font-family: Poppins; font-weight: 700; text-transform: capitalize; word-wrap: break-word">Rp 1,700,000</div>
                    <div style="width: 171px; height: 21px; left: 13px; top: 205px; position: absolute; color: #382C20; font-size: 10px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Seri Konstruksi</div>
                    <div style="width: 175px; height: 57px; left: 13px; top: 219px; position: absolute; color: #382C20; font-size: 12px; font-family: Poppins; font-weight: 700; text-transform: uppercase; word-wrap: break-word">consectetur adipiscing elit.</div>
                    <div style="width: 75px; height: 15px; left: 113px; top: 273px; position: absolute">
                    </div>
                </div>
            </div>

            <!--produk lainnya-->
            <div style="width: 1280px; height: 403px; left: 50px; top: 1012px; position: absolute">
                
                
                <div style="width: 200px; height: 300px; left: 0px; top: 81px; position: absolute">
                    <div style="width: 200px; height: 200px; left: 0px; top: 0px; position: absolute; background: #DFDFDF"></div>
                    <div style="width: 200px; height: 100px; left: 0px; top: 200px; position: absolute; background: white"></div>
                    <div style="left: 13px; top: 272px; position: absolute; color: #804F27; font-size: 12px; font-family: Poppins; font-weight: 700; text-transform: capitalize; word-wrap: break-word">Rp 1,700,000</div>
                    <div style="width: 171px; height: 21px; left: 13px; top: 205px; position: absolute; color: #382C20; font-size: 10px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Seri Konstruksi</div>
                    <div style="width: 175px; height: 57px; left: 13px; top: 219px; position: absolute; color: #382C20; font-size: 12px; font-family: Poppins; font-weight: 700; text-transform: uppercase; word-wrap: break-word">consectetur adipiscing elit.</div>
                    <div style="width: 75px; height: 15px; left: 113px; top: 273px; position: absolute">
                    </div>
                </div>
                <div style="left: 0px; top: 0px; position: absolute; color: #FF6412; font-size: 25px; font-family: Rubik One; font-weight: 400; word-wrap: break-word">PRODUK LAINNYA</div>
                <div style="width: 150px; height: 349px; left: 1130px; top: 54px; position: absolute">
                    <div style="width: 70px; height: 349px; left: 80px; top: 0px; position: absolute; background: white"></div>
                    <div style="width: 80px; height: 40px; left: 80px; top: 47px; position: absolute; transform: rotate(-180deg); transform-origin: 0 0">
                        <div style="width: 80px; height: 40px; left: 0px; top: 0px; position: absolute; transform: rotate(-180deg); transform-origin: 0 0; background: #382C20"></div>
                        <div style="width: 20px; height: 0px; left: -40px; top: -30px; position: absolute; transform: rotate(90deg); transform-origin: 0 0; border: 1px white solid"></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>