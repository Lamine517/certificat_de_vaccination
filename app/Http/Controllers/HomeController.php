<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PasseSanitaire;
use DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     $passe_sanitaires = PasseSanitaire::latest()->paginate(5);
    
    //     return view('admins.index',compact('passe_sanitaires'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);
    // }
    public function index(Request $request)
    {
        
        // $aff = "{{ route('admins.show',$passe_sanitaire->id) }} ";
        if ($request->ajax()) {
            
            $passe_sanitaires = PasseSanitaire::all();
            return datatables()->of($passe_sanitaires)
                ->addColumn('action', function ($row) {

                    // $html = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm">Afficher</a>' ; 
                    // $html = '<a href="' . route("admins.show",$passe_sanitaire->id) . '" class="edit btn btn-info btn-sm">Afficher</a>' ; 
                    // $html = $html . '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Modifier</a>' ;
                    // $html = $html . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm">Supprimer</a>' ;

                    // $html = '<a href="{{ route(admins.show,$passe_sanitaire->id) }}" class="btn btn-xs btn-secondary btn-edit">Voir</a> ';
                    // $html .= '<button data-rowid="' . $row->id . '" class="btn btn-xs btn-danger btn-delete">Supprimer</button>';
                    $html = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Voir" class="edit btn btn-primary btn-sm voirPS"><i class="fas fa-pen text-white"></i></a>';
                    $html = $html.' <a href="javascript:void(0)" data-toggle="Supprimer" data-id="'.$row->id.'" data-original-title="Supprimer" class="btn btn-danger btn-sm deletePS"><i class="far fa-trash-alt text-white" data-feather="supprimer"></i></a>';
                    return $html;
                })->toJson();
        }

        return view('admins.index');
    }
    
        /**
     * Display the specified resource.
     *
     * @param  \App\PasseSanitaire  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $passe_sanitaire = PasseSanitaire::find($id);
        return response()->json($passe_sanitaire);
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PasseSanitaire  $product
     * @return \Illuminate\Http\Response
     */
    // public function destroy(PasseSanitaire $passe_sanitaire)
    // {
    //     $passe_sanitaire->delete();
     
    //     return redirect()->route('admins.index')
    //                     ->with('success','Patient deleted successfully');
    // }
    public function destroy($id)
    {
        PasseSanitaire::find($id)->delete();
     
        return response()->json(['success'=>'Demande deleted successfully.']);
    }
    
  
}
