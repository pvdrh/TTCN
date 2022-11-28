<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hóa đơn</title>
</head>
<body>
<h1 style="text-align: center">
    {{$receipt}}
</h1>

<br>
<br>

<div style="padding: 20px">
    <p>Tên hóa đơn: {{$receipt }}</p>
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
        <tr>
            <td style="text-align: center">{{@$product->code}}</td>
            <td>{{@$product->name}}</td>
            <td style="text-align: center">{{number_format(@$product->price)}} VND</td>
        </tr>
        </tbody>
    </table>
    <p style="float: right; padding: 20px"> Tổng tiền: {{number_format(@$product->price)}} VND</p>
    <br>
    <br>
    <div style="float: right">
        <p> Người tạo</p>
        <br>
        <p> {{Auth::user()->name}}</p>
    </div>
</div>
</body>
</html>
