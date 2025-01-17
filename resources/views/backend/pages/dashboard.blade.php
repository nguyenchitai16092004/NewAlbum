@extends('backend.layouts.master')
@section('title', 'Home Admin')
@section('main')

    <link rel="stylesheet" href="css/custom-style-dashboard.css">

    <div class="analytics-sparkle-area">
        <h1>Dashboard</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width: 500px">
                    <div class="analytics-sparkle-line reso-mg-b-30">
                        <div class="analytics-content">
                            <h5 style="">Customer</h5>
                            {{-- <span class="counter"></span>  --}}
                            <h2>{{ $nguoiDungThangNay }} <span class="tuition-fees">sign-up in this month</span>
                            </h2>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50%
                                        Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width: 500px">
                    <div class="analytics-sparkle-line reso-mg-b-30">
                        <div class="analytics-content">
                            <h5>Bill</h5>
                            <h2>{{ $donHangThangNay }}</span> <span class="tuition-fees">in this month</span>
                            </h2>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50%
                                        Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-statistics mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Product Statistics by Category</h4>
                        <div class="asset-inner">
                            <canvas id="productStatisticsChart" width="1000" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Lấy dữ liệu từ controller
        const productStats = @json($productStats);

        const ctx = document.getElementById('productStatisticsChart').getContext('2d');
        const labels = productStats.map(stat => stat.TenLoaiSP);
        const data = productStats.map(stat => stat.SoLuong);

        const productStatisticsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Product Quantity',
                    data: data,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


    <div class="container-fluid mt-5">
        <h1>Edit Website Infomation</h1>
        <form action="{{ route('dashboard.update') }}" method="POST" enctype="multipart/form-data">
            {{-- Hiển thị thông báo thành công --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Hiển thị thông báo lỗi --}}
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            {{-- Hiển thị các lỗi validation --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <!-- Facebook Link -->
                    <div class="form-group">
                        <label for="facebookLink">Facebook:</label>
                        <input type="url" id="facebookLink" name="Facebook" class="form-control"
                            style="border-radius: 8px;" value="{{ $contactInfo->Facebook ?? '' }}">
                    </div>

                    <!-- Instagram Link -->
                    <div class="form-group">
                        <label for="instagramLink">Instagram:</label>
                        <input type="url" id="instagramLink" name="Instagram" class="form-control"
                            style="border-radius: 8px;" value="{{ $contactInfo->Instagram ?? '' }}">
                    </div>

                    <!-- Twitter Link -->
                    <div class="form-group">
                        <label for="twitterLink">Twitter:</label>
                        <input type="url" id="twitterLink" name="Twitter" class="form-control"
                            style="border-radius: 8px;" value="{{ $contactInfo->Twitter ?? '' }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Hotline -->
                    <div class="form-group">
                        <label for="hotline">Hotline:</label>
                        <input type="tel" id="hotline" name="SDT" class="form-control"
                            style="border-radius: 8px;" value="{{ $contactInfo->SDT ?? '' }}" required>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="Email" class="form-control"
                            style="border-radius: 8px;" value="{{ $contactInfo->Email ?? '' }}" required>
                    </div>

                </div>
            </div>

            <!-- Submit button -->
            <div class="form-group text-center">
                <button type="submit" style="border-radius: 8px;">Save Changes</button>
            </div>

        </form>
    </div>
@stop
