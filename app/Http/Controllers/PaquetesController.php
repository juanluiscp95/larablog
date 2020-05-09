<?php

namespace App\Http\Controllers;

use App\User;
use App\Charts\MyChart;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Stichoza\GoogleTranslate\GoogleTranslate;

class PaquetesController extends Controller
{
    public function charts(){

        $chart = new MyChart();
        
        return view("paquetes.chart",["chart" => $chart->my_chart()]);
        return "hola chart";
    }

    public function image(){
        // create empty canvas with background color
        $img = Image::canvas(400, 400, '#666');

        // draw an empty rectangle border
        $img->rectangle(10, 10, 190, 190);

        // draw filled red rectangle
        $img->rectangle(5, 5, 195, 195, function ($draw) {
            $draw->background('#ff0000');
        });

        // draw transparent rectangle with 2px border
        $img->rectangle(5, 5, 195, 195, function ($draw) {
            $draw->background('rgba(255, 255, 255, 0.5)');
            $draw->border(2, '#000');
        });

        $img->save('jkrowling2.jpeg');
    }

    public function qr_generate(){
        //QrCode::format('svg')->size(700)->color(255,0,0)->generate('LaraBlog Juan Luis', '../public/qrcodes/qrcode.svg');

        QrCode::format('png')->size(700)->color(0,255,0)->merge('https://www.desarrollolibre.net/assets/img/logo.png', .3, true)->generate('LaraBlog Juan Luis', '../public/qrcodes/qrcode.png');
    }

    public function translate(){
        $tr = new GoogleTranslate();
        $tr->setSource('es');
        $tr->setTarget('en');
        echo $tr->translate('Hola me llamo juan luis y este es mi larablog');

    }

    public function stripe_create_customer(){
        $user = User::find(3);
        $stripeCustomer = $user->createAsStripeCustomer();
        dd($stripeCustomer);
    }

    public function stripe_payment_method_register(){
        $user = User::find(3);
        return view('paquetes.stripe_payment_method_register', [
            'intent' => $user->createSetupIntent()
        ]);
        
    }

    public function stripe_payment_method_create(){
        $user =User::find(3);        
        $user->addPaymentMethod($paymentMethod); //no funciona para obtener la clave para las tarjeras de credito por lo tanto no tengo ningun payment method
    }

    public function stripe_payment_method(){
        $user =User::find(3);      
        //dd($user->paymentMethods());
    }

    public function stripe_create_only_pay_form(){
        $user =User::find(3);  
        return view('paquetes.stripe_create_only_pay_form');
    }

    public function stripe_create_only_pay(){
        $user =User::find(3);  
        $stripeCharge = $user->charge(100, $paymentMethod); //no funciona para obtener la clave para las tarjeras de credito por lo tanto no tengo ningun payment method
        dd($stripeCharge);
    }

    public function stripe_create_suscription(){
        $user =User::find(3);  
        $paymentMethod = $user->defaultPaymentMethod();
        $user->newSubscription('default', 'plan_HDyMgOpHvW5Aq9')->create($paymentMethod->id);

    }
}
