<?php

namespace App\Http\Controllers;
use App\Models\form;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use   Illuminate\Support\HtmlString;
use Illuminate\Http\Request;
use File;

class FormController extends Controller
{
         public function __construct()
   {
       //$this->middleware('auth')->except(['index','show']);
     $this->middleware('auth')->only(['indexAdmin']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form.index');

    }
    public function indexAdmin(Request $request)
    {
        if($request->has('search')){
            $forms = form::where('Name','LIKE','%'.$request->search.'%')->Paginate(10);

        }else{
            $forms = form::Paginate(5);

        }
        return view('form.indexAdmin')->with('forms', $forms);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form.create');

    }
    public function resultserch()
    {
        return view('form.search-result');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeFiles(Request $request)
    {
        $request->validate([

            'filepath'=>'required|mimetypes:application/pdf|max:2048',
        ]);
        $input = $request->all();
        if ($filepath = $request->file('filepath')) {
           $destinationPath = 'download/';
           $profileImage = date('YmdHis').".".$filepath->getClientOriginalExtension();
           $filepath->move($destinationPath, $profileImage);
           $input['filepath'] = "$profileImage";
        }

        form::create($input);
        return redirect()->route('form.index')
        ->with('success','  تم اضافة اعلان جديد');

    }
    public function updateStatus(Request $request)
    {
        $form = form::find($request->id);
        $form->status = $request->status;

        $form->save();
        return response()->json(['success'=>'Status change successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $form = form::find($id);
        return view('form.show')->with('form',$form);
dd($id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(form $form)
    {
        return view('form.edit',compact('form'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

        $form = form::find($id);
        $form->update($request->all());
        return redirect()->route('form.index')
        ->with('success','تم  التعديل');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(form $form)
    {
        $form->delete();
        return redirect()->route('form.index')
        ->with('success','تم حذف الاعلان');

    }
    public function generate ($id)
    {
        $form = form::findOrFail($id);
        $form = QrCode::size(400)->generate($form->id);
        return view('form.show',compact('form'));

    }
    public function search(Request $request )

    {if($request->has('search')){
        $forms = form::where('id','LIKE','%'.$request->search.'%')->orwhere('id','LIKE','%'.$request->search.'%')->Paginate(10);

    }else{
        $forms = form::Paginate(10);

    }
    return view('form.search-result')->with('forms', $forms);

    }
    public function searchall(Request $request )

    {if($request->has('searchall')){
        $forms = form::where('Name','LIKE','%'.$request->search.'%')->orwhere('id','LIKE','%'.$request->search.'%')->Paginate(10);

    }else{
        $forms = form::Paginate(10);

    }
    return view('form.indexAdmin')->with('forms', $forms);

    }

    public function showpdf(string $id)
    {
        $form = form::find($id);
        return view('form.showpdf')->with('form',$form);

    }

}
