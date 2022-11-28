<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hóa đơn</title>
</head>
<body>
<h1 style="text-align: center">
    <td>{{$data['receipts']->name}}</td>
</h1>

<br>
<br>

<div style="padding: 20px">
    <p>Tên hóa đơn: {{$data['receipts']->name}}</p>
    <p>Ngày xuất: {{date("d/m/Y")}}</p>
    <p>Người xuất: {{Auth::user()->name}}</p>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr class="bg-blue">
            <th style="text-align: center">Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th style="text-align: center">Giá</th>
        </tr>
        </thead>
        <tbody>
        @if (count($data['products']) > 0)
            <tr>
                <td style="text-align: center">{{$data['products']->code}}</td>
                <td>{{$data['products']->name}}</td>
                <td style="text-align: center">{{number_format($data['products']->price)}} VND</td>
            </tr>
        @endif
        </tbody>
    </table>

    <div class="col-md-9">

    </div>
    <div class="col-md-3">
        <p> Người tạo</p>
        <br>
        <p> {{Auth::user()->name}}</p>
    </div>
</div>
</body>
</html>
