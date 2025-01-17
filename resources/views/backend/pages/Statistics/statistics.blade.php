@extends('backend.layouts.master')
@section('title', 'Sales Statistics')
@section('main')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <!-- Biểu đồ doanh thu -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="caption pro-sl-hd">
                                <span class="caption-subject"><b>Sales Revenue Statistics</b></span>
                            </div>
                        </div>
                        <div id="morris-bar-sales-revenue" style="height: 300px;"></div>
                    </div>
                </div>

                <!-- Biểu đồ lượt mua -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="caption pro-sl-hd">
                                <span class="caption-subject"><b>Sales Purchases Statistics</b></span>
                            </div>
                        </div>
                        <div id="morris-bar-sales-purchases" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Dữ liệu doanh thu
        var dataDoanhThu = [
            @foreach ($doanhThuThang as $doanhThu)
                {
                    month: '{{ $doanhThu->month }}',
                    revenue: {{ $doanhThu->doanh_thu }}
                },
            @endforeach
        ];

        // Dữ liệu lượt mua
        var dataLuotMua = [
            @foreach ($luotMuaThang as $luotMua)
                {
                    month: '{{ $luotMua->month }}',
                    purchases: {{ $luotMua->so_luot_mua }}
                },
            @endforeach
        ];

        // Biểu đồ doanh thu
        Morris.Bar({
            element: 'morris-bar-sales-revenue',
            data: dataDoanhThu,
            xkey: 'month',
            ykeys: ['revenue'],
            labels: ['Revenue (VND)'],
            barColors: ['#006DF0'],
            hideHover: 'auto',
            resize: true,
            gridTextColor: '#000000'
        });

        // Biểu đồ lượt mua
        Morris.Bar({
            element: 'morris-bar-sales-purchases',
            data: dataLuotMua,
            xkey: 'month',
            ykeys: ['purchases'],
            labels: ['Purchases (Items)'],
            barColors: ['#65b12d'],
            hideHover: 'auto',
            resize: true,
            gridTextColor: '#000000'
        });
    </script>

@stop
