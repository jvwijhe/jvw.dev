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

class HomeController extends Controller
{
    public function show(){

        $url = env("PRISMIC_URL", false);
        $token = env("PRISMIC_ACCESS_TOKEN", false);
        $api = Api::get($url, $token);
        // $response = $api->query(Predicates::at('document.type', 'blog'));
        $response = $api->query(Predicates::at('document.type', 'homepage'));
        $document = $response->results[0];
        $seo_title = collect($document->data->seo_title)->first()->text;
        $seo_description = collect($document->data->seo_description)->first()->text;
        $seo_image = $document->data->seo_image->url;

        SEOTools::setTitle($seo_title);
        SEOTools::setDescription($seo_description);
        SEOTools::opengraph()->setUrl(url()->full());
        // SEOTools::setCanonical('https://codecasts.com.br/lesson');
        SEOTools::opengraph()->addProperty('type', 'profile')->setProfile([
            'first_name' => 'Jens',
            'last_name' => 'van Wijhe',
            'username' => 'jensvanwijhe',
            'gender' => 'male'
        ]);
        SEOTools::twitter()->setSite('@jensvanwijhe');
        SEOTools::jsonLd()->addImage($seo_image);
        SEOTools::opengraph()->addImage($seo_image);
        SEOTools::jsonLd()->setType('Person');


       
        
        $blog = $api->getByUID('blog','hello-world');


        return view('welcome', [
            'blog' => $blog,
            'document' => $document
        ]);
    }
}
