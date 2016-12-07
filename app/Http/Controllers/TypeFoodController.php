<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TypeFood;

class TypeFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$typefood = TypeFood::all();
        //$typefood = TypeFood::all()->random(2);
        //$search = '%ก%';
        //$typefood = TypeFood::where('name', 'LIKE', $search)->get();
        //$typefood = TypeFood::orderBy('id', 'desc')->get();
        //$typefood = TypeFood::limit(3)->get();
        $typefood = TypeFood::paginate(4);
        //$typefood = TypeFood::simplePaginate(3);

        $count = TypeFood::count();

        return view('typefood.index',[
            'typefoods' => $typefood,
            'count' => $count
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    //ใช้เรียน
    public function insert(){
        $tf1 = new TypeFood();
        /*$tf->name = "นึ่ง";
        $tf->save();*/

        $tf1->create(['name'=>"ปิ้งย่าง"]);

        return "บันทึกเรียบร้อย";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typefood = TypeFood::find($id);
        return view('typefood.show',[
            'typefood' => $typefood
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    //ใช้เพื่อเรียน
    public function delete($id){
        //$typefood = TypeFood::find($id);
        //$typefood->delete();

        TypeFood::destroy($id);
        return back();
    }
}
