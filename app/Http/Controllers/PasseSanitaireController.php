<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PasseSanitaire;

class PasseSanitaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passe_sanitaires = PasseSanitaire::latest()->paginate(5);
    
        return view('passe_sanitaires.index',compact('passe_sanitaires'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('passe_sanitaires.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'telephone' => 'required',
            'cv_recto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cv_verso' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cni_recto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cni_verso' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'billet' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($cv_recto = $request->file('cv_recto') and  $cv_verso = $request->file('cv_verso')) {
            $destinationPath = 'img/';
            $profileCV_recto = date('YmdHis') . "." . $cv_recto->getClientOriginalExtension();
            $cv_recto->move($destinationPath, $profileCV_recto);
            $input['cv_recto'] = "$profileCV_recto";

            $profileCV_verso = date('YmdHis') . "." . $cv_verso->getClientOriginalExtension();
            $cv_verso->move($destinationPath, $profileCV_verso);
            $input['cv_verso'] = "$profileCV_verso";
        }
    //     else if ($cv_verso = $request->file('cv_verso')) {
    //         $destinationPath = 'img/';
    //         $profileCV_verso = date('YmdHis') . "." . $cv_verso->getClientOriginalExtension();
    //         $cv_verso->move($destinationPath, $profileCV_verso);
    //         $input['cv_verso'] = "$profileCV_verso";
    //     }
    //     else if ($cni_recto = $request->file('cni_recto')) {
    //         $destinationPath = 'img/';
    //         $profileCNI_recto = date('YmdHis') . "." . $cni_recto->getClientOriginalExtension();
    //         $cni_recto->move($destinationPath, $profileCNI_recto);
    //         $input['cni_recto'] = "$profileCNI_recto";
    //     }
    //     else if ($cni_verso = $request->file('cni_verso')) {
    //         $destinationPath = 'img/';
    //         $profileCNI_verso = date('YmdHis') . "." . $cni_verso->getClientOriginalExtension();
    //         $cni_verso->move($destinationPath, $profileCNI_verso);
    //         $input['cni_verso'] = "$profileCNI_verso";
    //     }

    
    //    else if ($billet = $request->file('billet')) {
    //         $destinationPath = 'img/';
    //         $profileBillet = date('YmdHis') . "." . $billet->getClientOriginalExtension();
    //         $billet->move($destinationPath, $profileBillet);
    //         $input['billet'] = "$profileBillet";
    //     }
    
        PasseSanitaire::create($input);
     
        return redirect()->route('passe_sanitaires.index')
                        ->with('success','Product created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\PasseSanitaire  $product
     * @return \Illuminate\Http\Response
     */
    public function show(PasseSanitaire $passe_sanitaire)
    {
        return view('passe_sanitaires.show',compact('passe_sanitaire'));
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PasseSanitaire  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(PasseSanitaire $passe_sanitaire)
    {
        $passe_sanitaire->delete();
     
        return redirect()->route('passe_sanitaires.index')
                        ->with('success','Product deleted successfully');
    }
}
