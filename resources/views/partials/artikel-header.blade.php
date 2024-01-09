<div class="container-fluid pb-3 header-container" style="margin-top: 30px;">
        <img src="{{asset('/img/Background-Headline.png')}}" style="width: 100%; " alt="Foto Header">

        <!-- Tambahkan teks di atas gambar -->
        <div class="text-overlay">
            <div class="text-background-headline">
                <span>Portal Edukasi</span>
            </div>
            <h3
                style="text-align: center; color: white; font-size: 65px; font-family: Quicksand; font-weight: 700; word-wrap: break-word">
                Arsitektur Lanskap</h3>
                <div class="btn-overlay-header">
                    <div class="d-flex justify-content-center">
                      <a href="{{ route('landing-artikel.kategori', ['kategori' => 'Desain-Taman']) }}">
                        <button type="button" class="btn rounded-pill m-2 {{ $active === "Desain-Taman" ? 'btn-on' : '' }}" style="font-size: 14px;">Desain Taman</button>
                    </a>
                    <a href="{{ route('landing-artikel.kategori', ['kategori' => 'Konstruksi-Taman']) }}">
                      <button type="button" class="btn rounded-pill m-2 {{ $active === "Konstruksi-Taman" ? 'btn-on' : '' }}" style="font-size: 14px;">Konstruksi Taman</button>
                    </a>
                    <a href="{{ route('landing-artikel.kategori', ['kategori' => 'Pemeliharaan-Taman']) }}">
                      <button type="button" class="btn rounded-pill m-2 {{ $active === "Pemeliharaan-Taman" ? 'btn-on' : '' }}" style="font-size: 14px;">Pemeliharaan Taman</button>
                    </a>
                    <a href="{{ route('landing-artikel.kategori', ['kategori' => 'Tanaman']) }}">
                      <button type="button" class="btn rounded-pill m-2 {{ $active === "Tanaman" ? 'btn-on' : '' }}" style="font-size: 14px;">Tanaman</button>
                    </a>
                    <a href="{{ route('landing-artikel.kategori', ['kategori' => 'Material']) }}">
                      <button type="button" class="btn rounded-pill m-2 {{ $active === "Material" ? 'btn-on' : '' }}" style="font-size: 14px;">Material</button>
                    </a>
                      <button type="button" class="btn rounded-pill m-2" style="font-size: 14px;">Lainnya</button>
                    </div>
                  </div>
        </div>
    </div>