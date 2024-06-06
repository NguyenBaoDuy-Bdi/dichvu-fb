<?php

namespace App\Http\Controllers\Guest\Service;

use App\Http\Controllers\Controller;
use App\Models\ServerService;
use App\Models\Service;
use App\Models\Activities;
use App\Models\Activitiessystem;
use App\Models\Orders;
use App\Models\ServiceSocial;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ViewServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('xss');
    }

    public function ViewServicePage($social, $service)
    {
        $activities = Activities::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        $activitiessystem = Activitiessystem::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        $social = ServiceSocial::where('domain', env('PARENT_SITE'))->where('slug', $social)->first();
        if ($social) {
            $service = Service::where('domain', env('PARENT_SITE'))->where('service_social', $social->slug)->where('slug', $service)->first();
            if ($service) {
                if ($service->category != 'bot'){
                 
                $server = ServerService::where('domain', getDomain())->where('service_id', $service->id)->where('social_id', $social->id)->get();
                // kiểm tra folder và file có tồn tại hay không nếu không tạo lại
                
                if (!file_exists(resource_path('views/service/' . $social->folder . '/' . $service->file . '.blade.php'))) {

                    // tạo 

                    $file_view = '';
                    switch ($service->category) {
                        case 'default':
                            $file_view = storage_path('/app/public/code/default.lbd');
                            $action_type = 'default';
                            break;
                        case 'reaction':
                            $file_view = storage_path('/app/public/code/reaction.lbd');
                            $action_type = 'reaction';
                            break;
                        case 'reaction-speed':
                            $file_view = storage_path('/app/public/code/reaction-speed.lbd');
                            $action_type = 'reaction-speed';
                            break;
                        case 'comment':
                            $file_view = storage_path('/app/public/code/comment.lbd');
                            $action_type = 'comment';
                            break;
                        case 'comment-quantity':
                            $file_view = storage_path('/app/public/code/comment2.lbd');
                            $action_type = 'comment-quantity';
                            break;
                        case 'minutes':
                            $file_view = storage_path('/app/public/code/minutes.lbd');
                            $action_type = 'minutes';
                            break;
                        case 'viplike':
                            $file_view = storage_path('/app/public/code/viplike.lbd');
                            $action_type = 'viplike';
                            break;
                        case 'viplike-kcx':
                            $file_view = storage_path('/app/public/code/viplike-kcx.lbd');
                            $action_type = 'viplike-kcx';
                            break;
                        case 'bot':
                            $file_view = storage_path('/app/public/code/bot.lbd');
                            $action_type = 'bot';
                            break;
                        case 'time':
                            $file_view = storage_path('/app/public/code/time.lbd');
                            $action_type = 'time';
                            break;
                        case 'proxy':
                            $file_view = storage_path('/app/public/code/proxy.lbd');
                            $action_type = 'proxy';
                            break;
                        
                        default:
                            $file_view = storage_path('/app/public/code/default.lbd');
                            $action_type = 'default';
                            break;
                    }
                    
                    $social_folder = $social->folder;
                    $file_view = File::get($file_view);
                    $file_service = $service->file;
                    $file = resource_path('views/service/' . $social_folder . '/' . $file_service . '.blade.php');

                    //tạo folder và file nếu chưa tồn tại
                    if (!file_exists(resource_path('views/service/' . $social_folder))) {
                        mkdir(resource_path('views/service/' . $social_folder), 0777, true);
                    }

                    // tạo file rồi ghi nội dung vào
                    if (!file_exists($file)) {
                        $fp = fopen($file, 'w');
                        fwrite($fp, $file_view);
                        fclose($fp);
                    }

                }
                return view('service.' . $social->folder . '.' . $service->file, compact('social', 'service', 'server', 'activities', 'activitiessystem'));
            }
            else{
                $activities = Activities::where('domain', getDomain())->orderBy('id', 'DESC')->get();
                $activitiessystem = Activitiessystem::where('domain', getDomain())->orderBy('id', 'DESC')->get();
                $user = Auth::user();
                $orders= Orders::where('domain', getDomain())->where('username', $user->username)->where('host', '!=','')->get();
              
                // kiểm tra folder và file có tồn tại hay không nếu không tạo lại
                $server = ServerService::where('domain', getDomain())->where('service_id', $service->id)->where('social_id', $social->id)->get();
                if (!file_exists(resource_path('views/service/' . $social->folder . '/' . $service->file . '.blade.php'))) {

                    // tạo 

                    $file_view = '';
                    switch ($service->category) {
                         
                        case 'bot':
                            $file_view = storage_path('/app/public/code/bot.lbd');
                            $action_type = 'bot';
                            break;
                        
                        
                        default:
                            $file_view = storage_path('/app/public/code/bot.lbd');
                            $action_type = 'default';
                            break;
                    }
                    
                    $social_folder = $social->folder;
                    $file_view = File::get($file_view);
                    $file_service = $service->file;
                    $file = resource_path('views/service/' . $social_folder . '/' . $file_service . '.blade.php');

                    //tạo folder và file nếu chưa tồn tại
                    if (!file_exists(resource_path('views/service/' . $social_folder))) {
                        mkdir(resource_path('views/service/' . $social_folder), 0777, true);
                    }

                    // tạo file rồi ghi nội dung vào
                    if (!file_exists($file)) {
                        $fp = fopen($file, 'w');
                        fwrite($fp, $file_view);
                        fclose($fp);
                    }

                }
                return view('service.' . $social->folder . '.' . $service->file, compact('social', 'service', 'orders', 'server', 'activities', 'activitiessystem'));
            }
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }

    public function viewService()
    {
        $activities = Activities::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        $activitiessystem = Activitiessystem::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        $services = Service::where('domain', env('PARENT_SITE'))->get();
        $service_socials = ServiceSocial::where('domain', env('PARENT_SITE'))->get();
        return view('Client.price', compact('services', 'activities', 'activitiessystem', 'service_socials'));
    }
}
