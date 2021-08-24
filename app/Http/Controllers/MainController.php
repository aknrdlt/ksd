<?php

namespace App\Http\Controllers;

use App\Models\AboutCompanyImage;
use App\Models\AboutCompanyWords;
use App\Models\Applications;
use App\Models\BannerImage;
use App\Models\BannerWords;
use App\Models\Contacts;
use App\Models\ContactWords;
use App\Models\InfrastructureImages;
use App\Models\Infrastructures;
use App\Models\InfrastructureWords;
use App\Models\Project;
use App\Models\Solutions;
use App\Models\SolutionWords;

use Illuminate\Http\Request;
use Exception;

class MainController extends Controller
{
    public function index(){
        $about_company_image = AboutCompanyImage::all();
        $about_company_words = AboutCompanyWords::all();
        $applications = Applications::all();
        $banner_image = BannerImage::all();
        $banner_words = BannerWords::all();
        $contacts = Contacts::find(1);
        $contacts_words = ContactWords::all();
        $infrastructures_images = InfrastructureImages::all();
        $infrastructures_words = InfrastructureWords::all();
        $infrastructures = Infrastructures::all();
        $project = Project::all();
        $project_words = Project::all();
        $solutions = Solutions::all();
        $solution_words = SolutionWords::all();

        return view('index', compact('about_company_image','about_company_words',
            'applications', 'banner_image', 'banner_words', 'infrastructures_words',
            'contacts_words', 'contacts', 'infrastructures_images', 'infrastructures',
            'project', 'project_words', 'solutions', 'solution_words'));
    }

    //send function
    public function send(Request $request): \Illuminate\Http\RedirectResponse
    {
        $demo = new \stdClass();
        $data = $request->validate([
            'name' => 'bail|required',
            'email' => 'bail|required',
            'message' => 'bail|required'
        ]);

        if($data == true){
            $demo -> name = $request-> input('name');
            $demo -> email = $request-> input('email');
            $demo -> message = $request-> input('message');
            Applications::create([
                'name' => $request-> input('name'),
                'email' => $request-> input('email'),
                'message' => $request-> input('message')
            ]);
            // Mail::to('aknrdlt@gmail.com')->send(new DemoMail($demo));
        }else{
            throw new Exception(' Заполните!');
        }
        return back();
    }

}
