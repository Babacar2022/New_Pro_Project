<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Student;
use App\Models\Information;
use App\Models\Center;
use App\Models\TypeInfo;
use App\Models\Fliere;
use App\Models\DemandeInfo;
use PDF;

class HomeController extends Controller
{
    public function index()
    {
        $student=Student::paginate(10);
        $information=Information::all();
        return view('home.UserPage',compact('student','information'));
    }
    public function redirect()
    {
        $userType= Auth::user()->userType;
        if($userType=='1')
        {
              return view('admin.home');

        }
        else
        {
        $student=Student::paginate(10);
        $information=Information::all();
        return view('home.UserPage',compact('student','information'));

        }

    }
    public function directition()
    {

            return view('home.directition');
    }
    public function presentation()
    {

            return view('home.presentation');
    }
    public function administration()
    {

            return view('home.administration');
    }

    public function info()
    {
        $information=Information::paginate(5);
        if(Auth::id())
        {
            return view('home.info',compact('information'));

        }
        else
        {
        return redirect('login');

        }
    }

    public function envoi_info()
    {
        $center=Center::all();
        $fliere=Fliere::all();
        return view("home.envoi_info",compact("center","fliere"));

    }

    public function add_demande(Request $request)

    {
       $demandeInfo = new DemandeInfo;
       $demandeInfo->nom=$request->nom;
       $demandeInfo->prenom=$request->prenom;
       $demandeInfo->adresse=$request->adresse;
       $demandeInfo->email=$request->email;
       $demandeInfo->telephone=$request->telephone;
       $demandeInfo->titre=$request->titre;
       $demandeInfo->description=$request->description;
       $demandeInfo->center=$request->center;
       $demandeInfo->fliere=$request->fliere;
       $demandeInfo->type_info=$request->type_info;
       $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('demandeInfo',$imagename);
        $demandeInfo->image=$imagename;

       $demandeInfo->save();
       return redirect()->back()->with('message','Added demande Successfully');
    }


    public function print_pdf_home($id)
    {
        $information=Information::find($id);
        $pdf=PDF::loadView('home.pdf',compact('information'));
        return $pdf->download('info_details.pdf');
    }


    public function informatique()
    {

            return view('home.informatique');
    }
    public function service()
    {

            return view('home.service');
    }
    public function contact()
    {

            return view('home.contact');
    }


    public function electro_mecanique()
    {

            return view('home.electro_mecanique');
    }
    public function adminis()
    {

            return view('home.adminis');
    }
    public function searchdata(Request $request)
   {
    $searchText=$request->search;
    $information=Information::where('nom','LIKE',"%$searchText%")->orWhere('center','LIKE',"%$searchText%")->get();
    return view('home.info',compact('information'));

   }
   public function student_search(Request $request)
   {
    $searchText=$request->search;
    $student=Student::where('nom','LIKE',"%$searchText%")->orWhere('prenom','LIKE',"%$searchText%")->get();
    return view('home.section3',compact('student'));

   }
   public function viste_center4()
   {
    return view('home.viste_center4');

   }

}
