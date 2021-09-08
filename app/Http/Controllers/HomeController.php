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
        if ($request->ajax()) {
            $data = PasseSanitaire::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Voir</a>';
                            return $btn;
                    })

                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('admins.index');
    }
    
        /**
     * Display the specified resource.
     *
     * @param  \App\PasseSanitaire  $product
     * @return \Illuminate\Http\Response
     */
    public function show(PasseSanitaire $passe_sanitaire)
    {
        // $passe_sanitaire = PasseSanitaire::all();
        return view('admins.show',compact('passe_sanitaire'));
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
     
        return redirect()->route('admins.index')
                        ->with('success','Patient deleted successfully');
    }
  
}
