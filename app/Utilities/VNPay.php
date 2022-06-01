<?php

namespace App\Utilities;


class VNPay
{
    
    static $vnp_TmnCode = "1K0HNOWM";//Mã website tại VNPAY 
    static $vnp_HashSecret = "EBBYSMTJNOXHGYSLGYALBQRJDMBXJKTJ"; //Chuỗi bí mật
    static $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    static $vnp_Returnurl = "/checkout/vnPayCheck";

    /** 
    * @param array $data
    * @return string
    */
    public static function vnpay_create_payment(array $data)
    {
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        
        $vnp_TxnRef = $data['vnp_TxnRef']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $data['vnp_OrderInfo'];
        $vnp_OrderType = 100000;
        $vnp_Amount = $data['vnp_Amount'] *100;
        $vnp_Locale = 'vn';
        
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];


        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => self::$vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => 'http://127.0.0.1:8000' . self::$vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        
        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        
        $vnp_Url = self::$vnp_Url . "?" . $query;
        if (isset(self::$vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, self::$vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);
            
        return $returnData['data'];
            // vui lòng tham khảo thêm tại code demo
    }
  
}