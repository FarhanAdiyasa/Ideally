<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Detail everlasThing</h5>
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
                <h3 class="d-inline-block d-sm-none">{{$everlasThing->nama_produk}}</h3>
                <div class="col-12">
                    <img src="{{ asset('storage/' . $everlasThing->gambar_1) }}" class="product-image" alt="Product Image">
                </div>
                <div class="col-12 product-image-thumbs">
                    @if($everlasThing->gambar_1 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $everlasThing->gambar_1) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($everlasThing->gambar_2 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $everlasThing->gambar_2) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($everlasThing->gambar_3 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $everlasThing->gambar_3) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($everlasThing->gambar_4 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $everlasThing->gambar_4) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($everlasThing->gambar_5 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $everlasThing->gambar_5) }}" alt="Product Image">
                        </div>
                    @endif
                    @if($everlasThing->gambar_6 )
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/' . $everlasThing->gambar_6) }}" alt="Product Image">
                        </div>
                    @endif
                </div>
                </div>
                <div class="col-6">
                <h3 class="my-3"><strong>{{$everlasThing->nama_produk}}</strong></h3>
                <p>{{$everlasThing->deskripsi_singkat}}</p>
        
                <hr>
                
                <div class="bg-gray py-2 px-3 mt-4">
                    <h2 class="mb-0">
                    Rp. {{$everlasThing->harga_jual_projek_ideally}}
                    </h2>
                </div>

                <div class="mt-4">
                    <a href="{{$everlasThing->video}}" class="mb-0"><strong>Video Produk</strong></a>
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
                        <p><strong>Seri:</strong> {{$everlasThing->seri}}</p>
                        <p><strong>Nama Produk:</strong> {{$everlasThing->nama_produk}}</p>
                        <p><strong>Slug:</strong> {{$everlasThing->slug}}</p>
                        <p><strong>Satuan:</strong> {{$everlasThing->satuan}}</p>
                        <p><strong>Deskripsi Singkat:</strong> {{$everlasThing->deskripsi_singkat}}</p>
                        <p><strong>Armada Minimum:</strong> {{$everlasThing->armada_minimum}}</p>
                        <p><strong>Stok:</strong> {{$everlasThing->stok}}</p>
                        <p><strong>Harga Jual Ideally:</strong> Rp. {{$everlasThing->harga_jual_projek_ideally}}</p>
                        <p><strong>Tanggal Publikasi:</strong> {{$everlasThing->tanggal_publikasi}}</p>
                        <p><strong>Created By:</strong> {{$everlasThing->created_by}}</p>
                        <p><strong>Created At:</strong> {{$everlasThing->created_at}}</p>
                        <p><strong>Updated By:</strong> {{$everlasThing->updated_by}}</p>
                        <p><strong>Updated At:</strong> {{$everlasThing->updated_at}}</p>
                        <p><strong>Deleted By:</strong> {{$everlasThing->deleted_by}}</p>
                        <p><strong>Deleted At:</strong> {{$everlasThing->deleted_at}}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Jenis 1:</strong> {{$everlasThing->jenis_1}}</p>
                        <p><strong>Jenis 2:</strong> {{$everlasThing->jenis_2}}</p>
                        <p><strong>Garansi:</strong> {{$everlasThing->garansi}}</p>
                        <p><strong>Warna:</strong> {{$everlasThing->warna}}</p>
                        <p><strong>Dimensi:</strong> {{$everlasThing->dimensi}}</p>
                        <p><strong>Material Pendukung:</strong> {{$everlasThing->material_pendukung}}</p>
                        <p><strong>Berat (gram):</strong> {{$everlasThing->berat_gram}}</p>
                        <p><strong>Finishing:</strong> {{$everlasThing->finishing}}</p>
                        <p><strong>Harga B2I (11 unit):</strong> Rp. {{$everlasThing->harga_b2I_11_unit}}</p>
                        <p><strong>Harga B2I (1 unit):</strong> Rp. {{$everlasThing->harga_b2I_1_unit}}</p>
                        <p><strong>Harga B2B (11 unit):</strong> Rp. {{$everlasThing->harga_b2B_11_unit}}</p>
                        <p><strong>Harga B2B (1 unit):</strong> Rp. {{$everlasThing->harga_b2B_1_unit}}</p>
                        <p><strong>Harga B2C (11 unit):</strong> Rp. {{$everlasThing->harga_b2C_11_unit}}</p>
                        <p><strong>Harga B2C (1 unit):</strong> Rp. {{$everlasThing->harga_b2C_1_unit}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
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
