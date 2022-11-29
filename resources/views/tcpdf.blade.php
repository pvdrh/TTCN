<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hoa Don</title>
</head>
<body>
<h1 style="text-align: center">
    {{$receipt}}
</h1>

<br>
<br>

<div style="padding: 20px">
    <p>Ten hoa don: {{$receipt }}</p>
    <p>Ngay xuat: {{date("d/m/Y")}}</p>
    <p>Nguoi xuat: {{Auth::user()->name}}</p>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr class="bg-blue">
            <th style="text-align: center">Ma san pham</th>
            <th>Ten san pham</th>
            <th style="text-align: center">Gia</th>
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
    <p style="float: right; padding: 20px"> Tong tien: {{number_format(@$product->price)}} VND</p>
</div>
</body>
</html>
