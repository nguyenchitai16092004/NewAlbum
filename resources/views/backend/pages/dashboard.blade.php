@extends('backend.layouts.master')
@section('title', 'Home Admin')
@section('main')

<link rel="stylesheet" href="/css/custom-style-dashboard.css">

<div class="analytics-sparkle-area">
    <h1>Statistics</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Customer</h5>
                        {{-- <span class="counter"></span>  --}}
                        <h2>xx/xx<span class="tuition-fees">in this month</span>
                        </h2>
                        <span class="text-success">xx</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50%
                                    Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Bill</h5>
                        <h2>xx/xx</span> <span class="tuition-fees">in this month</span>
                        </h2>
                        <span class="text-danger">xx</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50%
                                    Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Website Traffic</h5>
                        <h2>xx/xx</span> <span class="tuition-fees">in this month</span>
                        </h2>
                        <span class="text-info">xx</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50%
                                    Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>XX</h5>
                        <h2>xx/xx</span> <span class="tuition-fees">in this month</span>
                        </h2>
                        <span class="text-warning">xx</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50%
                                    Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject"><b>Chart Selling</b></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="actions graph-rp graph-rp-dl">
                                    <p>in 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-inline cus-product-sl-rp">
                        <li>
                            <h5><i class="fa fa-circle" style="color: #006DF0;"></i>REVENUE (VND)</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle" style="color: #65b12d;"></i>PURCHASES (ITEMS)</h5>
                        </li>
                    </ul>
                    <div id="morris-bar-chart" style="height: 356px;"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div
                    class="white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Total Visit</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash"></div>
                        </li>
                        <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i>
                            <span class="counter text-success"><span class="counter">xx</span></span>
                        </li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Website Views</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash2"></div>
                        </li>
                        <li class="text-right graph-two-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span
                                class="counter text-purple"><span class="counter">xx</span></span>
                        </li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Unique Visitor</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash3"></div>
                        </li>
                        <li class="text-right graph-three-ctn"><i class="fa fa-level-up" aria-hidden="true"></i>
                            <span class="counter text-info"><span class="counter">xx</span></span>
                        </li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Website Rate</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash4"></div>
                        </li>
                        <li class="text-right graph-four-ctn"><i class="fa fa-level-up" aria-hidden="true"></i>
                            <span class="text-danger"><span class="counter">xx</span></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script>
    // Data for the chart
    var data = [
        { month: 'Jan', revenue: 5000, purchases: 1200 },
        { month: 'Feb', revenue: 4200, purchases: 1100 },
        { month: 'Mar', revenue: 4800, purchases: 1150 },
        { month: 'Apr', revenue: 4600, purchases: 1050 },
        { month: 'May', revenue: 5200, purchases: 1300 },
        { month: 'Jun', revenue: 5500, purchases: 1400 },
        { month: 'Jul', revenue: 6000, purchases: 1600 },
        { month: 'Aug', revenue: 5800, purchases: 1500 },
        { month: 'Sep', revenue: 5600, purchases: 1400 },
        { month: 'Oct', revenue: 5900, purchases: 1450 },
        { month: 'Nov', revenue: 6100, purchases: 1550 },
        { month: 'Dec', revenue: 6500, purchases: 1700 }
    ];

    // Initialize Morris.js Bar Chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: data,
        xkey: 'month',
        ykeys: ['revenue', 'purchases'],
        labels: ['Revenue (VND)', 'Purchases (Items)'],
        barColors: ['#006DF0', '#65b12d'],
        hideHover: 'auto',
        resize: true
    });
</script>


<div class="container-fluid mt-5">
    <h1>Edit Website Infomation</h1>
    <form action="{{ route('dashboard.update') }}" method="POST" enctype="multipart/form-data">
        {{-- Hiển thị thông báo thành công --}}
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        {{-- Hiển thị thông báo lỗi --}}
        @if(session('error'))
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
                    <input type="url" id="facebookLink" name="Facebook" class="form-control" style="border-radius: 8px;"
                    value="{{ $contactInfo->Facebook ?? '' }}">
                </div>
    
                <!-- Instagram Link -->
                <div class="form-group">
                    <label for="instagramLink">Instagram:</label>
                    <input type="url" id="instagramLink" name="Instagram" class="form-control" style="border-radius: 8px;"
                    value="{{ $contactInfo->Instagram ?? '' }}">
                </div>
    
                <!-- Twitter Link -->
                <div class="form-group">
                    <label for="twitterLink">Twitter:</label>
                    <input type="url" id="twitterLink" name="Twitter" class="form-control" style="border-radius: 8px;"
                    value="{{ $contactInfo->Twitter ?? '' }}">
                </div>
            </div>
    
            <div class="col-md-6">
                <!-- Hotline -->
                <div class="form-group">
                    <label for="hotline">Hotline:</label>
                    <input type="tel" id="hotline" name="SDT" class="form-control" style="border-radius: 8px;" 
                    value="{{ $contactInfo->SDT ?? '' }}" required>
                </div>
    
                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="Email" class="form-control" style="border-radius: 8px;" 
                    value="{{ $contactInfo->Email ?? '' }}" required>
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
