<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Detail agrigard</h5>
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
                <h3 class="d-inline-block d-sm-none">{{$agrigard->nama_latin}}</h3>
                <div class="col-12">
                    <img src="{{ asset('storage/' . $agrigard->gambar_1) }}" class="product-image" alt="Product Image">
                </div>
                <div class="col-12 product-image-thumbs">
                    @if($agrigard->gambar_1 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $agrigard->gambar_1) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($agrigard->gambar_2 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $agrigard->gambar_2) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($agrigard->gambar_3 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $agrigard->gambar_3) }}" alt="Product Image">
                        </div>
                    @endif
                </div>
                </div>
                <div class="col-6">
                <h3 class="my-3"><strong>{{$agrigard->nama_produk}}</strong></h3>
                <p>{{$agrigard->deskripsi_singkat}}</p>
        
                <hr>
                
                <div class="bg-gray py-2 px-3 mt-4">
                    <h2 class="mb-0">
                    Rp. {{$agrigard->harga_jual_projek_ideally}}
                    </h2>
                </div>

                <div class="mt-4">
                    <a href="{{$agrigard->video}}" class="mb-0"><strong>Video Produk</strong></a>
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
                        <p><strong>ID agrigard:</strong> {{$agrigard->id_agrigard}}</p>
                        <p><strong>Nama Produk:</strong> {{$agrigard->nama_produk}}</p>
                        <p><strong>Kategori:</strong> {{$agrigard->kategori}}</p>
                        <p><strong>Slug:</strong> {{$agrigard->slug}}</p>
                        <p><strong>Deskripsi Singkat:</strong> {{$agrigard->deskripsi_singkat}}</p>
                        <p><strong>Armada Minimum:</strong> {{$agrigard->armada_minimum}}</p>
                        <p><strong>Stok:</strong> {{$agrigard->stok}}</p>
                        <p><strong>Item Terjual:</strong> {{$agrigard->item_terjual}}</p>
                        <p><strong>Harga Jual Ideally:</strong> Rp. {{$agrigard->harga_jual_projek_ideally}}</p>
                        <p><strong>Tanggal Publikasi:</strong> {{$agrigard->tanggal_publikasi}}</p>
                        <p><strong>Created By:</strong> {{$agrigard->created_by}}</p>
                        <p><strong>Created At:</strong> {{$agrigard->created_at}}</p>
                        <p><strong>Updated By:</strong> {{$agrigard->updated_by}}</p>
                        <p><strong>Updated At:</strong> {{$agrigard->updated_at}}</p>
                        <p><strong>Deleted By:</strong> {{$agrigard->deleted_by}}</p>
                        <p><strong>Deleted At:</strong> {{$agrigard->deleted_at}}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Spesifikasi:</strong> {{$agrigard->spesifikasi}}</p>
                        <p><strong>Satuan:</strong> {{$agrigard->satuan}}</p>
                        <p><strong>Berat:</strong> {{$agrigard->berat}}</p>
                        <p><strong>Berat (gram):</strong> {{$agrigard->berat_gram}}</p>
                        <p><strong>Harga B2I (31 unit):</strong> Rp. {{$agrigard->harga_b2I_31_unit}}</p>
                        <p><strong>Harga B2I (11 unit):</strong> Rp. {{$agrigard->harga_b2I_11_unit}}</p>
                        <p><strong>Harga B2I (1 unit):</strong> Rp. {{$agrigard->harga_b2I_1_unit}}</p>
                        <p><strong>Harga B2B (31 unit):</strong> Rp. {{$agrigard->harga_b2B_31_unit}}</p>
                        <p><strong>Harga B2B (11 unit):</strong> Rp. {{$agrigard->harga_b2B_11_unit}}</p>
                        <p><strong>Harga B2B (1 unit):</strong> Rp. {{$agrigard->harga_b2B_1_unit}}</p>
                        <p><strong>Harga B2C (31 unit):</strong> Rp. {{$agrigard->harga_b2C_31_unit}}</p>
                        <p><strong>Harga B2C (11 unit):</strong> Rp. {{$agrigard->harga_b2C_11_unit}}</p>
                        <p><strong>Harga B2C (1 unit):</strong> Rp. {{$agrigard->harga_b2C_1_unit}}</p>
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
