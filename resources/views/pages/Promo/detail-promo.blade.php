<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Detail promo</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div> 
<div class="modal-body">
<div class="card card-solid">
    <div class="card-body">
    <div class="row mt-4">
        <nav class="w-100">
        <div class="nav nav-tabs" id="product-tab" role="tablist">
            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Informasi Promo</a>
            <!-- <a class="nav-item nav-link" id="product-detail-tab" data-toggle="tab" href="#product-detail" role="tab" aria-controls="product-detail" aria-selected="false">Target & Rentang Waktu Promo</a>
            <a class="nav-item nav-link" id="product-creation-tab" data-toggle="tab" href="#product-creation" role="tab" aria-controls="product-creation" aria-selected="false">Keterangan Tambahan</a> -->
        </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>ID promo:</strong> {{$promo->id_promo}}</p>
                        <p><strong>Nama Promo:</strong> {{$promo->nama_promo}}</p>
                        <p><strong>Jenis:</strong> 
                            @php
                                $brands = DB::select('SELECT DISTINCT id_promo, brand_produk FROM view_product_promo WHERE id_promo = :id_promo', ['id_promo' => $promo->id_promo]);
                                $brandNames = collect($brands)->pluck('brand_produk')->implode(', ');
                            @endphp

                            @if ($brandNames)
                                {{ $brandNames }}
                            @else
                                
                            @endif
                        </p>
                        <p><strong>Tanggal Publikasi:</strong> {{$promo->tanggal_publikasi}}</p>
                        <p><strong>Created By:</strong> {{$promo->created_by}}</p>
                        <p><strong>Created At:</strong> {{$promo->created_at}}</p>
                        <p><strong>Updated By:</strong> {{$promo->updated_by}}</p>
                        <p><strong>Updated At:</strong> {{$promo->updated_at}}</p>
                        <p><strong>Deleted By:</strong> {{$promo->deleted_by}}</p>
                        <p><strong>Deleted At:</strong> {{$promo->deleted_at}}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Persentase Promo:</strong> {{$promo->persentase_promo}}</p>
                        <p><strong>Nominal Potongan:</strong> {{$promo->nominal_promo}}</p>
                        <p><strong>Minimum Pembelian:</strong> {{$promo->minimum_pembelian}}</p>
                        <p><strong>Kuota:</strong> {{$promo->minimum_pembelian}}</p>
                        <p><strong>Tipe Promo:</strong> {{$promo->tipe_promo}}</p>
                        <p><strong>Tipe Potongan:</strong> {{$promo->tipe_potongan}}</p>
                        <p><strong>Target B2I:</strong> Rp. {{$promo->target_promo_b2i}}</p>
                        <p><strong>Target B2B:</strong> Rp. {{$promo->target_promo_b2b}}</p>
                        <p><strong>Target B2C:</strong> Rp. {{$promo->target_promo_b2c}}</p>
                        <p><strong>Tanggal Mulai:</strong> Rp. {{$promo->target_promo_b2i}}</p>
                        <p><strong>Tanggal Selesai:</strong> Rp. {{$promo->target_promo_b2b}}</p>
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
