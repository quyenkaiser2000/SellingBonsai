<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use App\Http\Controllers\orderController;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use App\Models\ProductCategory;
use BotMan\BotMan\Messages\Outgoing\Question;

class orderController extends Conversation
{
    public function run(){
        $question = Question::create('Hãy chọn loại bạn muốn mua?')
            ->addButtons([
                Button::create('Các loại hoa')->value('Các loại hoa'),
                Button::create('Bonsai')->value('Bonsai'),
                Button::create('Cây lâu năm')->value('Cây lâu năm'),
                Button::create('Cây trong nhà')->value('Cây trong nhà'),
                Button::create('Chậu cảnh')->value('Chậu cảnh'),
            ]);

        $this->ask($question, function ($answer) {
            if($answer->getvalue() == 'Các loại hoa')
            {
                $this->say('Truy cập link sau đến với giang hàng của shop: <a href="http://127.0.0.1:8000/shop/Category/Các%20loại%20hoa" target="_blank">Các loại hoa</a>');
            }
            
            if($answer->getvalue() == 'Bonsai')
            {
                $this->say('Truy cập link sau đến với giang hàng của shop: <a href="http://127.0.0.1:8000/shop/Category/Bonsai" target="_blank">Bonsai</a>');
            }
            if($answer->getvalue() == 'Cây lâu năm')
            {
                $this->say('Truy cập link sau đến với giang hàng của shop: <a href="http://127.0.0.1:8000/shop/Category/Cây%20lâu%20năm" target="_blank">Cây lâu năm</a>');
            }
            if($answer->getvalue() == 'Cây trong nhà')
            {
                $this->say('Truy cập link sau đến với giang hàng của shop: <a href="http://127.0.0.1:8000/shop/Category/Cây%20trong%20nhà" target="_blank">Cây trong nhà</a>');
            }
            if($answer->getvalue() == 'Chậu cảnh')
            {
                $this->say('Truy cập link sau đến với giang hàng của shop: <a href="http://127.0.0.1:8000/shop/Category/Chậu%20cảnh" target="_blank">Chậu cảnh/a>');
            }
        });
    }
    /*public function askaddress(){
        $this->ask('Nhập địa chỉ và số điện thoại người nhận hàng?', function(Answer $answer){
            $this->address = $answer->getText();
            $this->say('Hoàn tất . Đây là chi tiết bạn chọn mua hàng');
            $this->say('Tên cây: '.$this->name);
            $this->say('Số lượng: '.$this->amout);
            $this->say('Địa chỉ: '.$this->address);
            $this->say('Hãy đợi 1 ít phút . Chủ cửa hàng sẽ đến ngay!');
        });
    }*/
}
