<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product1 = DB::table('jobs')
            ->get();
//        $product = $product1->where('status',1);
//        return response()->json($product, 200);
        return view('admin.listAdmin.Product.PC.listProductPC')->with('product',$product1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.listAdmin.Product.PC.formProductPC')->with([
            "product"=> new Job(),
            "action"=>"/admin/job",
            "method"=>"POST"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Job();
        $product->title = $request->get("title");
        $product->job_url = $request->get('job_url');
        $product->location = $request->get('location');
        $product->job_description = $request->get('job_description');
        $product->skills_experience = $request->get('skills_experience');
        $product->love_working_here = $request->get('love_working_here');
        $product->user_id = 2;
        $product->created_at = Carbon::now();
        $product->updated_at = Carbon::now();
        $product->save();
        return redirect('/admin/job');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Job::find($id);
        if ($product==null){
            return redirect("errors");
        }
        return view('admin.listAdmin.Product.PC.formProductPC')->with([
            "product"=> $product,
            "action"=>"/admin/job/" . $product->id,
            "method"=>"PUT"
        ]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Job::find($id);
        if ($product == null) {
            return view("errors.404");
        }
        $product->title = $request->get("title");
        $product->job_url = $request->get('job_url');
        $product->location = $request->get('location');
        $product->job_description = $request->get('job_description');
        $product->skills_experience = $request->get('skills_experience');
        $product->love_working_here = $request->get('love_working_here');
        $product->user_id = 2;
        $product->created_at = Carbon::now();
        $product->updated_at = Carbon::now();
        $product->save();
        if ($request->get("isAjax")) {
            return $product;
        } else {
            return redirect("/admin/job");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
