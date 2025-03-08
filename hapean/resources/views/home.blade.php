@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Logo -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-8 text-center">
            <img src="{{ asset('backend/assets/img/homee.jpg') }}" class="img-fluid rounded shadow" width="300" alt="">
        </div>
    </div>

    <!-- Tombol Tambah Produk -->
    <div class="row mb-4">
        <div class="col-md-12 text-end">
            <a href="{{ route('products.create') }}" class="btn btn-success">
                <i class="fa-solid fa-plus"></i> Tambah Produk
            </a>
        </div>
    </div>

    <!-- Daftar Produk -->
    <div class="row">
        @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded">
                    <img src="{{ asset($product->image ?? 'uploads/default-image.jpg') }}" class="card-img-top img-fluid rounded-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title text-primary fw-bold">{{ $product->name }}</h5>
                        <p class="card-text text-muted">
                            <strong>Harga :</strong> Rp. {{ number_format($product->price, 0, ',', '.') }}<br>
                            <strong>Kategori :</strong> {{ $product->category ?? '-' }} <br>
                        </p>
                        <hr>
                        <p class="card-text text-secondary">{{ $product->description }}</p>
                        <a href="{{ url('products/' . $product->id) }}" class="btn btn-primary w-100"> 
                            <i class="fa-solid fa-cart-plus"></i> Detail
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>
</div>

<style>
    .card {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection
