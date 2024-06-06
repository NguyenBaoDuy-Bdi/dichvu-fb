<?php

use App\Http\Controllers\CronJobs\CallbackController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CronJobs\RechargeController;
use App\Http\Controllers\CronJobs\Service\CreateOrderController;

 


Route::prefix('cronJob')->group(function () {
    Route::get('/recharge-card', [RechargeController::class, 'RechargeCard'])->name('cron.recharge.card');
    Route::get('/recharge-transfer/{type}', function($type){
        $domain = request()->getHost();
        $lam= Artisan::call("recharge:transfer $type $domain");
        $re=[
            $type => $lam
            ];
            
            return $re;
    });
 
    Route::get('/ordercon', function(){
      
        return Artisan::call("cron:ordercon");
    });
    Route::get('/chaydvall', function(){
      
      $output2 = Artisan::call('cron:2mxh');
      $output3 = Artisan::call('cron:tuongtacsale');
      $output4 = Artisan::call('cron:smmraja');
      $output5 = Artisan::call('cron:subgiare');
      $output6 = Artisan::call('cron:trumsubre');
      $output7 = Artisan::call('cron:subsieusale');
      $output8 = Artisan::call('cron:boosterview');
      $output9 = Artisan::call('cron:hacklike17');
      $output10 = Artisan::call('cron:hacklike17');
      $output11 = Artisan::call('cron:submeta');


    // Gộp kết quả vào một mảng
    $results = [
  
        'command2' => $output2,
        'command3' => $output3,
        'command4' => $output4,
        'command5' => $output5,
        'command6' => $output6,
        'command7' => $output7,
        'command8' => $output8,
        'command9' => $output9,
        'command10' => $output10,
        'command11' => $output11,
    
    
    ];

    // Return mảng kết quả
    return $results;
    });

  
    Route::get('/service/twomxh/buy', [CreateOrderController::class, 'SubgiareBuy'])->name('cronjob.service.twomxh.buy');
   
});

Route::prefix('/callback')->group(function(){
    Route::match(['get', 'post'], '/telegram/v1', [CallbackController::class, 'telegramV1'])->name('callback.telegram.v1');
});
