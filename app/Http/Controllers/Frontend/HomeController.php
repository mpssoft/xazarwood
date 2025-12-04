<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\License;
use App\Models\ProvinceCity;
use App\Models\Slider;
use Artesaos\SEOTools\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Modules\Product\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        auth()->loginUsingId(1);
        $this->seo()
            ->setTitle("صنایع چوبی روستیک")
            ->setDescription("ما در خزر چوب، با عشق به چوب و احترام به محیط زیست، متخصص ساخت میزهای روستیک (Rustic) و ظروف چوبی دست‌ساز در شهرستان سلماس هستیم.")
            ;
        $sliders = Slider::where('is_active',1)->orderBy('order')->get();
        //$courses = Course::where('spotplayer_id','!=','')->where("status","active")->get();
        $products = Product::whereDoesntHave('categories',function($query){
            $query->where('name','میز روستیک');
        })->latest()->take(4)->get();
        $tables = Product::whereHas('categories',function($query){
            $query->where('name','میز روستیک');
        })->latest()->take(4)->get();


        return view('frontend.home.glm-index',compact('sliders','products','tables'));
    }


    public function about()
    {
        $this->seo()
            ->setTitle(" درباره ما")
            ->setDescription("حسین نژاداسد مدرس مجرب فیزیک دبیرستان با سال‌ها تجربه در آمادگی دانش‌آموزان برای کنکور و کسب رتبه‌های برتر در شهرستان سلماس.")
        ;
        return view('frontend.home.about');
    }
    public function contact()
    {
        $this->seo()
            ->setTitle("ارتباط با ما")
            ->setDescription("برای دریافت مشاوره رایگان، ثبت‌نام در دوره‌ها یا پاسخ به سوالات خود با ما در تماس باشید. ما همیشه آماده کمک به شما هستیم. ")
        ;
        return view('frontend.home.contact');
    }
    public function faq()
    {
        $this->seo()
            ->setTitle(" سوالات متداول ")
            ->setDescription(" پاسخ سوالات رایج دانش‌آموزان و اولیای محترم درباره دوره‌های فیزیک و آمادگی برای کنکور ")
        ;
        return view('frontend.home.faq');
    }
    public function termsOfService()
    {
        $this->seo()
            ->setTitle("  شرایط و ظوابط استفاده ")
            ->setDescription(" قوانین و مقررات استفاده از سایت فیزیک بیست ")
        ;
        return view('frontend.home.terms-of-service');
    }

    public function getCities(Request $request)
    {

        $request->validate([
            'province_id' => 'integer'
        ]);
        $cities = ProvinceCity::where('parent',$request->province_id)->get();

        return response()->json(['cities'=>$cities]);
    }

}
