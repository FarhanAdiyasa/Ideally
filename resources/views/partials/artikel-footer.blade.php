<div class="image-footer-container">
    <img src="../img/Background-Footer.png" style="width: 100%;">


    <div class="btn-overlay-footer">
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

    <div class="text-overlay-footer">
      <p class="Hashtag">#</p>
      <p class="Semuabisatahu">SemuaBisaTahu</p>
    </div>
  </div>


  <footer
    style="background-color: #303030; color: white; height: 243px; display: flex; justify-content: center; align-items: center;  bottom: 0; width: 100%;">
    <div class="container text-center">
      <p><span style="font-weight: 700;"><span style="text-decoration: underline;">&copy;</span> PT Lanskap Indonesia
          Ideal</span> 2023.</p>
      <a href="#" class="btn rounded-pill" style="background-color: #06C195; color: white;">Informasi Lebih Lanjut!</a>
    </div>
  </footer>
