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

class BlogController extends Controller
{
    
    public function index(){

        SEOTools::setTitle('Blog | Jens van Wijhe');
        SEOTools::setDescription('I blog about web development.');
        SEOTools::opengraph()->setUrl(url()->full());
        // SEOTools::jsonLd()->setType('Person');


        $url = env("PRISMIC_URL", false);
        $token = env("PRISMIC_ACCESS_TOKEN", false);
        $api = Api::get($url, $token);
        $response = $api->query(Predicates::at('document.type', 'blog'));
        $blogs = $response->results;

        return view('blogs.index', [
            'blogs' => $blogs,
        ]);
    } 
    
    public function show($blog){

        $url = env("PRISMIC_URL", false);
        $token = env("PRISMIC_ACCESS_TOKEN", false);
        $api = Api::get($url, $token);
        $blog = $api->getByUID('blog',$blog);

      
        $seo_title = collect($blog->data->seo_title)->first()->text;
        $seo_description = collect($blog->data->seo_description)->first()->text;
        $seo_image = $blog->data->seo_image->url;

        SEOTools::setTitle($seo_title);
        SEOTools::setDescription($seo_description);
        SEOTools::opengraph()->setUrl(url()->full());
        // SEOTools::setCanonical('https://codecasts.com.br/lesson');
    
        SEOTools::jsonLd()->addImage($seo_image);
        SEOTools::opengraph()->addImage($seo_image);
        SEOTools::jsonLd()->setType('blog');
        SEOTools::jsonLd()->addValue('author', 'Jens van Wijhe');
        SEOTools::jsonLd()->addValue('datePublished', strtotime($blog->first_publication_date));


        return view('blogs.show', [
            'blog' => $blog
        ]);
    }
}
