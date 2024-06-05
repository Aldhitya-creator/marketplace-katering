@extends('user.layout')

@section('content')

<section id="katering" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="section-heading">Layanan Katering Kami</h2>
                <p class="text-muted">Nikmati pengalaman kuliner yang tak terlupakan dengan layanan katering kami. Dari acara pribadi hingga acara korporat, kami siap untuk menyajikan hidangan lezat kepada Anda dan tamu-tamu Anda.</p>
                <p class="text-muted">Berikut adalah beberapa fitur layanan katering kami:</p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check"></i> Hidangan berkualitas dengan bahan-bahan segar</li>
                    <li><i class="fas fa-check"></i> Menu yang dapat disesuaikan sesuai dengan preferensi Anda</li>
                    <li><i class="fas fa-check"></i> Pelayanan ramah dan profesional</li>
                    <li><i class="fas fa-check"></i> Pengaturan yang menarik dan estetis</li>
                    <li><i class="fas fa-check"></i> Pengiriman tepat waktu dan terjamin</li>
                </ul>
                <a class="btn btn-outline-primary" href="{{ url('daftar-makanan') }}">Pesan Sekarang</a>
            </div>
            <div class="col-lg-6">
                <img src="https://source.unsplash.com/4_jhDO54BYg" class="img-fluid" alt="Layanan Katering">
            </div>
        </div>
    </div>
</section>


@endsection