<!DOCTYPE html>
<html>
<script src="" async defer></script>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>

    <table>
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Code</th>
                <th scope="col">Product</th>
                <th scope="col">Product Size Code</th>
                <th scope="col">Info</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Qty</th>
                <th scope="col">Location</th>
                <th scope="col">Total</th>
                <th scope="col">C.note</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="goldring.jpg" alt="Cincin Emas Lintah Silang Chrome"></td>
                <td>Cincin Emas Lintah Silang Chrome L:0.8CM</td>
                <td>Lorem Ipsum</td>
                <td>Lorem Ipsum</td>
                <td>Size: 16cm Weight: 4.09g Gold Rate: 293</td>
                <td>1,342.37</td>
                <td>1</td>
                <td>DAMAI</td>
                <td>1,342.37</td>
                <td rowspan="2">Lorem Ipsum</td>
            </tr>
            <tr>
                <td><img src="goldring2.jpg" alt="Gelang Tocang Diamond Cut Chrome"></td>
                <td>Gelang Tocang Diamond Cut Chrome L:1CM</td>
                <td>Lorem Ipsum</td>
                <td>Lorem Ipsum</td>
                <td>Size: 5.6cm Weight: 25.94g Gold Rate: 293</td>
                <td>8,450.92</td>
                <td>1</td>
                <td>DAMAI</td>
                <td>8,450.92</td>
             
            </tr>
            <tr>
                <td><img src="goldring.jpg" alt="Cincin Emas Tocang Diamond Cut Chrome"></td>
                <td>Cincin Emas Tocang Diamond Cut Chrome L:1CM</td>
                <td>Lorem Ipsum</td>
                <td>Lorem Ipsum</td>
                <td>Size: 16cm Weight: 4.01g Gold Rate: 293</td>
                <td>1,318.93</td>
                <td>1</td>
                <td>SGBESI</td>
                <td>1,318.93</td>
                <td>Lorem Ipsum</td>
            </tr>
            <tr id="btn-row">
                <td colspan="9"></td>
                <td >
                    <button id="btn-combine-shipment">Combine Shipment</button>
                </td>
            </tr>
            <tr id="total-item">
                <td colspan="8">Total Item</td>
                <td>11,112.22</td>
                <td></td>
            </tr>
            <tr id="discount">
                <td colspan="8">Discount</td>
                <td>68.08</td>
                <td>
                    Voucher Code <br>
                    <span>RD-GMUC-QX</span>
                </td>
            </tr>
            <tr id="grand-total">
                <td colspan="8">Grand Total</td>
                <td>11,044.14</td>
                <td></td>
            </tr>
        </tbody>
    </table>

</body>

</html>
<style>
    table {
        width: -webkit-fill-available;
        border: 1px solid black;
        border-collapse: collapse;
        padding: 0px;
    }

    th {
        text-align: center;
        background-color: #666699;
        border: 1px solid black;
    }

    img{
        width: 100px;
        height: 100px;
    }

    #total-item td:first-child,
    #discount td:first-child,
    #grand-total td:first-child
    {
        text-align: right;
    }

    #btn-combine-shipment{
        border-radius: 0;
        box-shadow: 0 1px #999;
        background-color: #6085c7;
    }

    #discount span{
        font-weight: bold;
    }

    td {
        text-align: center;
        padding: 10px;
        border: 1px solid black;
    }

    #btn-row td{
        text-align: center !important;
        border: none !important;
    }
</style>