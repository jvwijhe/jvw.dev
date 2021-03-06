<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOTools;

use Illuminate\Http\Request;

use Prismic\Api;
use Prismic\LinkResolver;
use Prismic\Predicates;

// use Prismic\Dom\RichText;
use Prismic\Dom\RichText;
use Prismic\Dom\Link;

class PageController extends Controller
{
    public function contact(){

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
        SEOTools::jsonLd()->setType('Person');


        $url = "https://jvwdev.cdn.prismic.io/api/v2";
        $token = env("PRISMIC_ACCESS_TOKEN", false);
        $api = Api::get($url, $token);
        // $response = $api->query(Predicates::at('document.type', 'blog'));
        $response = $api->query(Predicates::at('document.type', 'contact'));
        $page = $response->results[0];

        



        return view('pages.contact', ['page' => $page]);
    }
}
