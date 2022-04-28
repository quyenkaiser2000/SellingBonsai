<?php
  
namespace App\Http\Controllers;
  
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use App\Http\Controllers\orderController;
use BotMan\BotMan\Messages\Conversations\Conversation;
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    
    public function handle()
    {
        $botman = app('botman');
        
        $botman->hears('Mua hàng', function ($bot){
            $bot->startConversation(new orderController);
        });
        
       
        /*$botman->hears('mua hàng', function (BotMan $bot) {
            $bot->reply("Bạn muốn mua gì?(Hoa,Bonsai,Lâu năm)");
        });*/
        $botman->hears('Thông tin cửa hàng', function (BotMan $bot) {
            $bot->reply("111 Thủ Đức, Tp.HCM - SĐT: 000xxx123");
        });
        $botman->hears('Hi', function (BotMan $bot) {
            $bot->reply("Xin chào bạn! Bạn cần gì hãy gõ từ khóa!");
        });
        
        $botman->listen();

    }
    
    /**
     * Place your BotMan logic here.
     */
    public function askthongtin($botman)
    {
        
        $botman->ask('Bạn muốn mua gì?', function(Answer $answer) {
  
            $this->say('Xin chào ');
        });
        
    }
    public function askName($botman)
    {
        
        $botman->ask('Xin chào! Bạn tên gì?', function(Answer $answer) {
  
            $name = $answer->getText();
            $this->say('Xin chào '.$name);
            
            
        });
        
        
    }
    public function askmuahang($botman)
    {
        $botman = app('botman');
        
        $botman->ask('Bạn muốn mua gì?(Hoa,Bonsai,Lâu năm)', function(Answer $answer) {
            
                if($answer->getText() == 'Hoa') {
                    $this->say('Xin chào ');
                }
                else{
                    $this->say('Hãy chọn từ khóa cần mua !');
                }  
                
            
        });


        

        
    }
}
