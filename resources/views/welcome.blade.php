<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách hóa đơn</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/dashboard.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/images/placeholder.jpg" alt="">
                    <span>{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <form style="text-align: center" role="form" class="row" action="{{ route('logout') }}" method="post">
                            @csrf
                            <button style="width: 85%" type="submit"><i class="icon-user"></i>Đăng Xuất
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        {{--        <div class="sidebar sidebar-main">--}}
        {{--            <div class="sidebar-content">--}}

        {{--                <!-- User menu -->--}}
        {{--                <div class="sidebar-user">--}}
        {{--                    <div class="category-content">--}}
        {{--                        <div class="media">--}}
        {{--                            <div class="media-body">--}}
        {{--                                <span class="media-heading text-semibold">Xin chào {{\Illuminate\Support\Facades\Auth::user()->name}}</span>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <!-- /user menu -->--}}


        {{--                <!-- Main navigation -->--}}
        {{--                <div class="sidebar-category sidebar-category-visible">--}}
        {{--                    <div class="category-content no-padding">--}}
        {{--                        <ul class="navigation navigation-main navigation-accordion">--}}
        {{--                            <!-- Main -->--}}
        {{--                            <li class="active"><a href="index.html"><i class="icon-home4"></i> <span>Dashboard</span></a></li>--}}
        {{--                        </ul>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <!-- /main navigation -->--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-left52 position-left"></i> Danh sách hóa đơn</h4>
                    </div>
                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class="content">

                <!-- Main charts -->
                <div class="row">
                    <div class="col-lg-12">

                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Thêm mới</button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Thêm mới hóa đơn</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="post" role="form" action="{{route('store')}}">
                                            @csrf
                                        <div class="modal-body">
                                                <label for="cars">Chọn sản phẩm:</label>
                                            @if(count($products) > 0)
                                                <select style="width: 50%" name="product" >
                                                    @foreach($products as $product)
                                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                                    @endforeach
                                                </select>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="bg-blue">
                                        <th style="text-align: center">Mã HĐ</th>
                                        <th>Tên hóa đơn</th>
                                        <th style="text-align: center">Ngày tạo</th>
                                        <th style="text-align: center">Người tạo</th>
                                        <th style="text-align: center">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if (count($receipts) > 0)
                                        @foreach($receipts as $receipt)
                                    <tr>
                                        <td style="text-align: center">{{$receipt->code}}</td>
                                        <td>{{$receipt->name}}</td>
                                        <td style="text-align: center">{{$receipt->created_at}}</td>
                                        <td style="text-align: center">{{$receipt->created_by}}</td>
                                        <td style="text-align: center"><a class="btn btn-info" href="{{route('export', $receipt->id)}}">Xuất PDF</a></td>
                                    </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /main charts -->

                <!-- Footer -->
{{--                <div class="footer text-muted">--}}
{{--                    &copy; 2022. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov"--}}
{{--                                                                             target="_blank">Eugene Kopyov</a>--}}
{{--                </div>--}}
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
