<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hoa Don</title>
</head>
<body>
<h1 style="text-align: center; font-weight: bold">
    {{$receipt}}
</h1>

<br>
<br>

<div style="padding: 20px">
    <p><b>Ten hoa don:</b> {{$receipt }}</p>
    <p><b>Ngay xuat:</b> {{date("d/m/Y")}}</p>
    <p><b>Nguoi xuat:</b> {{Auth::user()->name}}</p>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr class="bg-blue">
            <th style="text-align: center"><b>Ma san pham</b></th>
            <th><b>Ten san pham</b></th>
            <th style="text-align: center"><b>Gia</b></th>
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
    <p style="float: right; padding: 20px; font-weight: bold"> Tong tien: {{number_format(@$product->price)}} VND</p>
</div>
</body>
</html>
