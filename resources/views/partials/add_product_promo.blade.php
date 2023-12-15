<table id="products-ss" class="table table-hover table-bordered text-center">
    <h5>0 Produk Dipilih</h5>
    <thead>
        <tr>
            <th data-orderable="false">
                <label for="all">All</label>
                <input type="checkbox" name="" value="" id="all" class="check-all">
            </th> 
            <th>Info {{$brand}}</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
            <tr>
                <td>
                    <div class="row">
                        <input type="checkbox" name="id_{{ $brand }}[]" value="{{ $product->{'id_'.$brand} }}">
                    </div>
                </td>
                <td>
                    <div class="row">
                        <div class="col-4"><img src=" {{$product->gambar_1}}" width="56" height="56" alt="Product Image"></div>
                        <div class="col-8">
                            <div>
                                 {{ $product->nama_produk }}
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    @foreach ($product->harga_ranges as $hargaRange)
                        <div>{{ $hargaRange }}</div>
                    @endforeach
                </td>
                <td>
                    <div>
                        Stok: {{ $product->stok }}
                   </div>
                   <div>
                      Terjual : {{ $product->item_terjual }}
                   </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">
                    No record found!
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
<script>
    $(document).ready(function() {
        // Inisialisasi DataTable
        var table = $('#products-ss').DataTable();
    
        // Update jumlah_checked initially
        updateJumlahChecked();
    
        // Event listener untuk checkbox pada setiap baris tabel
        $('#products-ss tbody').on('change', 'input[type="checkbox"]', function() {
            // Periksa apakah semua checkbox di semua baris terpilih
            var allChecked = table.$('input[type="checkbox"]').length === table.$('input[type="checkbox"]:checked').length;
    
            // Atur status checked checkbox "All" sesuai hasil periksa di atas
            $('#all').prop('checked', allChecked);
    
            // Update jumlah_checked
            updateJumlahChecked();
        });
    
        // Event listener untuk checkbox "All"
        $('#all').on('change', function() {
            // Dapatkan status checked checkbox "All"
            var isChecked = $(this).prop('checked');
    
            // Set status checked untuk semua checkbox di semua halaman DataTable
            table.$('input[type="checkbox"]').prop('checked', isChecked);
    
            // Update jumlah_checked
            updateJumlahChecked();
        });
    
        function updateJumlahChecked() {
            // Hitung jumlah checkbox yang terpilih
            var jumlahChecked = table.$('input[type="checkbox"]:checked').length;
    
            // Tampilkan jumlah_checked
            $('#jumlah_checked').text(jumlahChecked + ' Produk Dipilih');
        }
    });
    </script>
    