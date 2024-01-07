@foreach ($artikel->komentar as $komentar)
<div class="container-lg-10">
    <div class="row align-items-center">

        <div class="col-2">
            <div class="avatar">
                <img src="{{$komentar->createdBy->profile_picture}}" class="rounded-circle" alt="...">
            </div>
        </div>

        <div class="col-4">
            <h3 class="mb-0">{{$komentar->createdBy->firstname}} {{$komentar->createdBy->lastname}}</h3>
            <p class="text-muted">Pengawas Pemeliharaan Lanskap</p>
        </div>

        <div class="col-6">
            <p>{{$komentar->isi_komentar}}</p>
        </div>
    </div>
</div>
<hr class="hr-custom-komentar">
@endforeach