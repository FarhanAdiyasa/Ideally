<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Detail batunesia</h5>
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
                <h3 class="d-inline-block d-sm-none">{{$batunesia->nama_latin}}</h3>
                <div class="col-12">
                    <img src="{{ asset('storage/' . $batunesia->gambar_1) }}" class="product-image" alt="Product Image">
                </div>
                <div class="col-12 product-image-thumbs">
                    @if($batunesia->gambar_1 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $batunesia->gambar_1) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($batunesia->gambar_2 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $batunesia->gambar_2) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($batunesia->gambar_3 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $batunesia->gambar_3) }}" alt="Product Image">
                        </div>
                    @endif
                </div>
                </div>
                <div class="col-6">
                <h3 class="my-3"><strong>{{$batunesia->nama_produk}}</strong></h3>
                <p>{{$batunesia->deskripsi_singkat}}</p>
        
                <hr>
                
                <div class="bg-gray py-2 px-3 mt-4">
                    <h2 class="mb-0">
                    Rp. {{$batunesia->harga_jual_projek_ideally}}
                    </h2>
                </div>

                <div class="mt-4">
                    <a href="{{$batunesia->video}}" class="mb-0"><strong>Video Produk</strong></a>
                </div>
                </div>
            </div>
        </div>

    <div class="row mt-4">
        <nav class="w-100">
        <div class="nav nav-tabs" id="product-tab" role="tablist">
            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Informasi Produk</a>
            <!-- <a class="nav-item nav-link" id="product-detail-tab" data-toggle="tab" href="#product-detail" role="tab" aria-controls="product-detail" aria-selected="false">Detail Produk dan Harga</a>
            <a class="nav-item nav-link" id="product-creation-tab" data-toggle="tab" href="#product-creation" role="tab" aria-controls="product-creation" aria-selected="false">Keterangan Tambahan</a> -->
        </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>ID Batu:</strong> {{$batunesia->id_batu}}</p>
                        <p><strong>Nama Produk:</strong> {{$batunesia->nama_produk}}</p>
                        <p><strong>Slug:</strong> {{$batunesia->slug}}</p>
                        <p><strong>Kategori:</strong> {{$batunesia->kategori}}</p>
                        <p><strong>Penempatan:</strong> {{$batunesia->penempatan}}</p>
                        <p><strong>Deskripsi Singkat:</strong> {{$batunesia->deskripsi_singkat}}</p>
                        <p><strong>Armada Minimum:</strong> {{$batunesia->armada_minimum}}</p>
                        <p><strong>Stok:</strong> {{$batunesia->stok}}</p>
                        <p><strong>Item Terjual:</strong> {{$batunesia->item_terjual}}</p>
                        <p><strong>Harga Jual Ideally:</strong> Rp. {{$batunesia->harga_jual_projek_ideally}}</p>
                        <p><strong>Tanggal Publikasi:</strong> {{$batunesia->tanggal_publikasi}}</p>
                        <p><strong>Created By:</strong> {{$batunesia->created_by}}</p>
                        <p><strong>Created At:</strong> {{$batunesia->created_at}}</p>
                        <p><strong>Updated By:</strong> {{$batunesia->updated_by}}</p>
                        <p><strong>Updated At:</strong> {{$batunesia->updated_at}}</p>
                        <p><strong>Deleted By:</strong> {{$batunesia->deleted_by}}</p>
                        <p><strong>Deleted At:</strong> {{$batunesia->deleted_at}}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Panjang:</strong> {{$batunesia->panjang}}</p>
                        <p><strong>Lebar:</strong> {{$batunesia->lebar}}</p>
                        <p><strong>Diameter:</strong> {{$batunesia->diameter}}</p>
                        <p><strong>Tinggi:</strong> {{$batunesia->tinggi}}</p>
                        <p><strong>Satuan:</strong> {{$batunesia->satuan}}</p>
                        <p><strong>Warna 1:</strong> {{$batunesia->warna_1}}</p>
                        <p><strong>Warna 2:</strong> {{$batunesia->warna_2}}</p>
                        <p><strong>Berat:</strong> {{$batunesia->berat}}</p>
                        <p><strong>Berat (gram):</strong> {{$batunesia->berat_gram}}</p>
                        <p><strong>Harga B2I (31 unit):</strong> Rp. {{$batunesia->harga_b2I_31_unit}}</p>
                        <p><strong>Harga B2I (11 unit):</strong> Rp. {{$batunesia->harga_b2I_11_unit}}</p>
                        <p><strong>Harga B2I (1 unit):</strong> Rp. {{$batunesia->harga_b2I_1_unit}}</p>
                        <p><strong>Harga B2B (31 unit):</strong> Rp. {{$batunesia->harga_b2B_31_unit}}</p>
                        <p><strong>Harga B2B (11 unit):</strong> Rp. {{$batunesia->harga_b2B_11_unit}}</p>
                        <p><strong>Harga B2B (1 unit):</strong> Rp. {{$batunesia->harga_b2B_1_unit}}</p>
                        <p><strong>Harga B2C (31 unit):</strong> Rp. {{$batunesia->harga_b2C_31_unit}}</p>
                        <p><strong>Harga B2C (11 unit):</strong> Rp. {{$batunesia->harga_b2C_11_unit}}</p>
                        <p><strong>Harga B2C (1 unit):</strong> Rp. {{$batunesia->harga_b2C_1_unit}}</p>
                    </div>
                </div>
            </div>
<!-- 
            <div class="tab-pane fade" id="product-detail" role="tabpanel" aria-labelledby="product-detail-tab">
                <div class="row">    
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>

           <div class="tab-pane fade" id="product-creation" role="tabpanel" aria-labelledby="product-creation-tab">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>

        </div> -->
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
