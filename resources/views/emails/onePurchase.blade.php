<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .quantity__cart {
            text-align: center;
        }
        h4 {
            text-align: center;
        }
        h5 {
            text-align: center;
            font-size:  14px;
        }
        th,
        td {
            padding: 10px;
        }
        .totalPayment {
            display: flex;
            position: relative;
            margin: auto;
            margin-left: 520px;
        }
        .totalPayment h6 {
            font-weight: bold;
            font-size: 13px;
            margin-top: 13px;
            position: absolute;
            margin-left: 3px;
        }
        .table-container {
            margin: 0 auto; /* Căn giữa bảng */
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h4>Cảm ơn {{$CustomerUser->name}} đã mua hàng tại SmarStore</h4>
        <h5>Thông tin đơn hàng của bạn</h5>
        <table class="table__product-payment" id="customers__payment">
            <tr class="">
                <th>Tên sản phẩm</th>
                <th>Đơn Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
            <tr class="product__cart-item">
                <td class="seller__td-img">
                    <div class="detail__product-info">
                        <span class="seller-name_product">{{ $Product->product_name }}</span>
                    </div>
                </td>
                <td>
                    <span class="price__product-cart">{{ $Product->price }}</span>
                    <span>đ</span>
                </td>
                <td>
                    <div class="quantity__cart">
                        <div class="number_quantity">1</div>
                    </div>
                </td>
                <td>
                    <span class="total__product-cart">{{ $Product->price * 1 }}.00</span>
                    <span>đ</span>
                </td>
            </tr>
    
        </table>
    </div>
    <div class="totalPayment">
        <p>Phương thức vận chuyển:</p>
        <h6>{{$shipMethod}}</h6>   
    </div>
    <div class="totalPayment">
        <p>Địa chỉ giao hàng:</p>
        <h6>{{$CustomerUser->address}}</h6>   
    </div>
    <div class="totalPayment">
            <p>Tổng tiền:</p>
            <h6>{{$totalPayment}}</h6>   
    </div>
</body>
</html>
