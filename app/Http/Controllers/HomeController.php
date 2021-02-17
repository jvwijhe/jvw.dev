<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOTools;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){

        SEOTools::setTitle('Jens van Wijhe');
        SEOTools::setDescription('🎯 Specialist in e-commerce en web development. Eigenaar van Beter Bekend.');
        SEOTools::opengraph()->setUrl('https://www.jvw.dev');
        // SEOTools::setCanonical('https://codecasts.com.br/lesson');
        SEOTools::opengraph()->addProperty('type', 'profile')->setProfile([
            'first_name' => 'Jens',
            'last_name' => 'van Wijhe',
            'username' => 'jensvanwijhe',
            'gender' => 'male'
        ]);
        SEOTools::twitter()->setSite('@jensvanwijhe');

        SEOTools::jsonLd()->addImage('https://avatars.githubusercontent.com/u/31101466?s=460&u=f941264a517f61521f72dae2383bcf2e24c4099c&v=4');

        return view('welcome');
    }
}
