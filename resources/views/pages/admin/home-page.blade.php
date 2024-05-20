@extends('layouts.app')

@section('title', 'Home Page')

@push('style')
    <!-- CSS Libraries -->
    <style>
        .info-box {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
        .info-box-icon {
            width: 200px;
            height: 200px;
            overflow: hidden; /* Ensure images do not overflow the container */
            display: flex;
            justify-content: center; /* Center the image horizontally */
            align-items: center; /* Center the image vertically */
            margin: 0 auto; /* Center the box horizontally */
        }
        .info-box-icon img {
            /* Ensure images fill the container */
            width: 100%;
            height: 100%;
            object-fit: cover; /* Maintain aspect ratio and cover the entire container */
        }
        .info-box-number {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Home Page</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="info-box">
                        <div class="info-box-icon">
                            <img src="https://sportsvenuecalculator.com/wp-content/uploads/2022/11/Sponsor-6.jpg" alt="Lapangan Image">
                        </div>
                        <span class="info-box-text">Jumlah Lapangan</span>
                        <br>
                        <span class="info-box-number">2</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box">
                        <div class="info-box-icon">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEZ4zDjpSbKlj99VKlomMQtw9K2JCXUuUhgPwXmjSasw&s" alt="">
                        </div>
                        <span class="info-box-text">Jumlah Pesanan</span>
                        <br>
                        <span class="info-box-number">7</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box">
                        <div class="info-box-icon">
                            <img src="https://www.sportscenter.co.id/assets/Uploads/_resampled/SetWidth1920-2439.jpg" alt="Lapangan Image"> 
                        </div>
                        <span class="info-box-text">Jumlah Member</span>
                        <br>
                        <span class="info-box-number">12</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
