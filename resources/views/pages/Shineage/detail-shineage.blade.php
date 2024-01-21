<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Detail shineage</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div> 
<div class="modal-body">
<div class="card card-solid">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-6">
                <h3 class="d-inline-block d-sm-none">{{$shineage->nama_latin}}</h3>
                <div class="col-12">
                    <img src="{{ asset('storage/' . $shineage->gambar_1) }}" class="product-image" alt="Product Image">
                </div>
                <div class="col-12 product-image-thumbs">
                    @if($shineage->gambar_1 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $shineage->gambar_1) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($shineage->gambar_2 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $shineage->gambar_2) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($shineage->gambar_3 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $shineage->gambar_3) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($shineage->gambar_4 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $shineage->gambar_4) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($shineage->gambar_5 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $shineage->gambar_5) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($shineage->gambar_6 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $shineage->gambar_6) }}" alt="Product Image">
                        </div>
                    @endif
                </div>
                </div>
                <div class="col-6">
                <h3 class="my-3"><strong>{{$shineage->nama_produk}}</strong></h3>
                <p>{{$shineage->deskripsi_singkat}}</p>
        
                <hr>
                
                <div class="bg-gray py-2 px-3 mt-4">
                    <h2 class="mb-0">
                    Rp. {{$shineage->harga_jual_projek_ideally}}
                    </h2>
                </div>

                <div class="mt-4">
                    <a href="{{$shineage->video}}" class="mb-0"><strong>Video Produk</strong></a>
                </div>
                </div>
            </div>
        </div>

    <div class="row mt-4">
        <nav class="w-100">
        <div class="nav nav-tabs" id="product-tab" role="tablist">
            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Informasi Produk</a>
            <a class="nav-item nav-link" id="product-detail-tab" data-toggle="tab" href="#product-detail" role="tab" aria-controls="product-detail" aria-selected="false">Detail Produk dan Harga</a>
            <a class="nav-item nav-link" id="product-creation-tab" data-toggle="tab" href="#product-creation" role="tab" aria-controls="product-creation" aria-selected="false">Keterangan Tambahan</a>
        </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>ID Shineage:</strong> {{$shineage->id_shineage}}</p>
                        <p><strong>Nama Produk:</strong> {{$shineage->nama_produk}}</p>
                        <p><strong>Slug:</strong> {{$shineage->slug}}</p>
                        <p><strong>Jenis:</strong> {{$shineage->jenis}}</p>
                        <p><strong>Seri:</strong> {{$shineage->seri}}</p>
                        <p><strong>Warna:</strong> {{$shineage->warna}}</p>
                        <p><strong>Garansi:</strong> {{$shineage->garansi}}</p>
                        <p><strong>Dimensi:</strong> {{$shineage->dimensi}}</p>
                        <p><strong>Material Pendukung:</strong> {{$shineage->material_pendukung}}</p>
                        <p><strong>Finishing:</strong> {{$shineage->finishing}}</p>
                        <p><strong>Deskripsi Singkat:</strong> {{$shineage->deskripsi_singkat}}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Panjang:</strong> {{$shineage->panjang}}</p>
                        <p><strong>Lebar:</strong> {{$shineage->lebar}}</p>
                        <p><strong>Diameter:</strong> {{$shineage->diameter}}</p>
                        <p><strong>Tinggi:</strong> {{$shineage->tinggi}}</p>
                        <p><strong>Berat:</strong> {{$shineage->berat}}</p>
                        <p><strong>Berat (gram):</strong> {{$shineage->berat_gram}}</p>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="product-detail" role="tabpanel" aria-labelledby="product-detail-tab">
                <div class="row">    
                    <div class="col-md-6">
                        <p><strong>Armada Minimum:</strong> {{$shineage->armada_minimum}}</p>
                        <p><strong>Stok:</strong> {{$shineage->stok}}</p>
                        <p><strong>Item Terjual:</strong> {{$shineage->item_terjual}}</p>
                        <p><strong>Harga Jual Ideally:</strong> Rp. {{$shineage->harga_jual_projek_ideally}}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Harga B2I (11 unit):</strong> Rp. {{$shineage->harga_b2I_11_unit}}</p>
                        <p><strong>Harga B2I (1 unit):</strong> Rp. {{$shineage->harga_b2I_1_unit}}</p>
                        <p><strong>Harga B2B (11 unit):</strong> Rp. {{$shineage->harga_b2B_11_unit}}</p>
                        <p><strong>Harga B2B (1 unit):</strong> Rp. {{$shineage->harga_b2B_1_unit}}</p>
                        <p><strong>Harga B2C (11 unit):</strong> Rp. {{$shineage->harga_b2C_11_unit}}</p>
                        <p><strong>Harga B2C (1 unit):</strong> Rp. {{$shineage->harga_b2C_1_unit}}</p>
                    </div>
                </div>
            </div>

           <div class="tab-pane fade" id="product-creation" role="tabpanel" aria-labelledby="product-creation-tab">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Tanggal Publikasi:</strong> {{$shineage->tanggal_publikasi}}</p>
                        <p><strong>Created By:</strong> {{$shineage->created_by}}</p>
                        <p><strong>Created At:</strong> {{$shineage->created_at}}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Updated By:</strong> {{$shineage->updated_by}}</p>
                        <p><strong>Updated At:</strong> {{$shineage->updated_at}}</p>
                        <p><strong>Deleted By:</strong> {{$shineage->deleted_by}}</p>
                        <p><strong>Deleted At:</strong> {{$shineage->deleted_at}}</p>
                    </div>
                </div>

        </div>
    </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>
