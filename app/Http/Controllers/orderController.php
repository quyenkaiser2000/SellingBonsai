<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use App\Http\Controllers\orderController;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
class orderController extends Conversation
{
    public function run(){
        $this->ask('Bạn muốn mua cây nào. Hãy nhập tên cây có trong cửa hàng?', function(Answer $answer){
            $this->name = $answer->getText();
            $this->askamount();
        });
    }
    public function askamount(){
        $this->ask('Hãy nhập số lượng?', function(Answer $answer){
            $this->amout = $answer->getText();
            $this->askaddress();
        });
    }
    public function askaddress(){
        $this->ask('Nhập địa chỉ và số điện thoại người nhận hàng?', function(Answer $answer){
            $this->address = $answer->getText();
            $this->say('Hoàn tất . Đây là chi tiết bạn chọn mua hàng');
            $this->say('Tên cây: '.$this->name);
            $this->say('Số lượng: '.$this->amout);
            $this->say('Địa chỉ: '.$this->address);
            $this->say('Hãy đợi 1 ít phút . Chủ cửa hàng sẽ đến ngay!');
        });
    }
}
