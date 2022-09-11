<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\Fliere;
use App\Models\TypeInfo;
use App\Models\Student;
use App\Models\Information;
use App\Models\DemandeInfo;
use PDF;
use Notification;
use App\Notifications\EnvoiEmailNotification;

use Illuminate\Http\Request;

class AdminController extends Controller
{


    //fonction du center
    public function view_center()
    {
        $data=Center::all();
       return view('admin.center',compact('data'));
    }
    public function add_center(Request $request)
    {
      $data=new Center;
      $data->center_name=$request->center;
      $data->save();

      return redirect()->back()->with('message','Added Center Successfully');
    }

    public function delete_center($id)
    {
        $data=Center::find($id);
        $data->delete();
        return redirect()->back()->with('message','Deleted Center Successfully');
    }
    //fonction de type information
    public function view_type_info()
    {
        $form=TypeInfo::all();
       return view('admin.type_info',compact('form'));
    }
    public function add_type_info(Request $request)
    {
      $form=new TypeInfo;
      $form->name=$request->type_info;
      $form->save();

      return redirect()->back()->with('message','Added type_info Successfully');
    }
    public function delete_type_info($id)
    {
        $form=TypeInfo::find($id);
        $form->delete();
        return redirect()->back()->with('message','Deleted Type Information Successfully');
    }
    //fonction de fliere
    public function view_fliere()
    {
        $format=Fliere::all();
       return view('admin.fliere', compact('format'));
    }
    public function add_fliere(Request $request)
    {
      $format=new Fliere;
      $format->name=$request->fliere;
      $format->save();

      return redirect()->back()->with('message','Added fliere Successfully');
    }
    public function delete_fliere($id)
    {
        $format=Fliere::find($id);
        $format->delete();
        return redirect()->back()->with('message','Deleted fliere Successfully');
    }

    public function view_utilisateur()
    {
      return view('auth.register');

    }

    public function view_student()
    {
        $center=Center::all();
        $fliere=Fliere::all();
      return view('admin.student',compact("center","fliere"));
    }
    public function add_student(Request $request)
    {
       $student = new Student;
       $student->nom=$request->nom;
       $student->prenom=$request->prenom;
       $student->adresse=$request->adresse;
       $student->matricule=$request->matricule;
       $student->telephone=$request->telephone;
       $student->description=$request->description;
       $student->center=$request->center;
       $student->fliere=$request->fliere;
       $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('student',$imagename);
        $student->image=$imagename;

       $student->save();
       return redirect()->back()->with('message','Added student Successfully');

    }
    public function show_student()
    {
        $student=Student::all();
        return view('admin.show_student', compact('student'));
    }
    public function delete_student($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect()->back();
    }
    public function update_student($id)
    {
        $student=Student::find($id);
        $center=Center::all();
        $fliere=Fliere::all();
        return view('admin.update_student',compact('student','center','fliere'));
    }
    public function update_student_confirm(Request $request,$id)
    {
        $student=Student::find($id);
        $student->nom=$request->nom;
        $student->prenom=$request->prenom;
        $student->adresse=$request->adresse;
        $student->telephone=$request->telephone;
        $student->description=$request->description;
        $student->center=$request->center;
        $student->fliere=$request->fliere;

        $image=$request->image;
        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('student',$imagename);
        $student->image=$imagename;

        }

       $student->save();
       return redirect()->back()->with('message','Update Student Successfully');

    }
    // Information
    public function view_information()
    {
        $center=Center::all();
        $type_info=TypeInfo::all();
        $fliere=Fliere::all();
      return view('admin.information',compact("center","type_info","fliere"));
    }
    public function add_information(Request $request)
    {
       $information = new Information;
       $information->nom=$request->nom;
       $information->description=$request->description;
       $information->center=$request->center;
       $information->type_info=$request->type_info;
       $information->fliere=$request->fliere;

       $information->save();
       return redirect()->back()->with('message','Added information Successfully');

    }
    public function show_information()
    {
        $information=Information::all();
        return view('admin.show_information',compact('information'));
    }

    public function delete_information($id)
    {
        $information=Information::find($id);
        $information->delete();
        return redirect()->back()->with('message','Deleted information Successfully');

    }
    public function edit_information($id)
    {
        $information=Information::find($id);
        $center=Center::all();
        $type_info=TypeInfo::all();
        $fliere=Fliere::all();
        return view('admin.edit_information', compact("information","center","type_info","fliere"));
    }
    public function update_information_confirm(Request $request,$id)
    {
        $information=Information::find($id);
        $information->nom=$request->nom;
        $information->description=$request->description;
        $information->center=$request->center;
        $information->type_info=$request->type_info;
        $information->fliere=$request->fliere;
       $information->save();
       return redirect()->back()->with('message','Update information Successfully');

    }
    public function demande()
    {
        $demandeInfo=DemandeInfo::all();
        return view('admin.demande',compact('demandeInfo'));
    }
   public function print_pdf($id)
   {
    $demandeInfo=DemandeInfo::find($id);
    $pdf=PDF::loadView('admin.pdf',compact('demandeInfo'));
    return $pdf->download('demandeDetails.pdf');
   }
   public function envoi_email($id)
   {
    $demandeInfo=DemandeInfo::find($id);
    return view('admin.email_info',compact('demandeInfo'));
   }
   public function envoi_user_email(Request $request,$id)
   {
    $demandeInfo=DemandeInfo::find($id);
    $details= [
           'greeting'=>$request->greeting,
           'firstline'=>$request->firstline,
           'body'=>$request->body,
           'button'=>$request->button,
           'url'=>$request->url,
           'lastline'=>$request->lastline,
    ];
    Notification::send($demandeInfo, new EnvoiEmailNotification($details));
    return redirect()->back();
   }
   public function searchdata(Request $request)
   {
    $searchText=$request->search;
    $demandeInfo=DemandeInfo::where('nom','LIKE',"%$searchText%")->orWhere('prenom','LIKE',"%$searchText%")->orWhere('adresse','LIKE',"%$searchText%")->orWhere('center','LIKE',"%$searchText%")->orWhere('fliere','LIKE',"%$searchText%")->get();
    return view('admin.demande',compact('demandeInfo'));

   }
}
