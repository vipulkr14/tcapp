<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;
use App\TravelCost;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       /* $search=Search::all();*/
       $dropdown=TravelCost::groupBy('Country')->pluck('Country');
        return view('search.index')->with('country',$dropdown);
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
        $this->validate($request,[
            'Country'=>'required',
            'Days'=>'required',
            'Food_Priority'=>'numeric|min:1|max:3',
            'Stay_Priority'=>'numeric|min:1|max:3',
            'Travel_Priority'=>'numeric|min:1|max:3'
            ]);
        //Insert to Search Table

        $src = new Search;

        $c=$request->input('Country');
        $f=$request->input('Food_Priority');
        $s=$request->input('Stay_Priority');
        $t=$request->input('Travel_Priority');
        $daysTotal=$request->input('Days');
        $d=SearchController::calcDays($daysTotal,$c);
        $r=SearchController::calcCost($d,$f,$s,$t);

        $src->Country=$c;
        $src->Foodp=$f;
        $src->Stayp=$s;
        $src->Travelp=$t;
        $src->Days=$daysTotal;
        $src->Result=$r;
        $src->save();
        return view('search.result')->with('cities',$d)->with('cost',$r);
       // return redirect('/search')->with('success','Searched Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    protected function calcDays($daysTotal,$c){

        $travelcost=TravelCost::select('City','Days')->orderBy('Value','DES')->where('Country',$c)->get()->pluck('Days','City');

        $r=array();
        $i=0;
        $keys=array();
        $values=array();
        

        foreach ($travelcost as $key => $value) {
            # code...
            $keys[$i]=$key;
            $values[$i]=$value;
            ++$i;
        }

       for ($i=0; $i < count($keys); $i++) { 
           # code...
            if($daysTotal>0){
                if($daysTotal>=$values[$i]){
                     $r[$keys[$i]]=$values[$i];
                     $daysTotal=$daysTotal-$values[$i];
                 }
                elseif($daysTotal<$values[$i]){
                     $r[$keys[$i]]=$daysTotal;
                     $daysTotal=0;
                 }
        }
       }

       while ($daysTotal>0) {
           # code...
            for($i=0; $i < count($keys); $i++){
                if($daysTotal>0){
                    ++$r[$keys[$i]];
                    --$daysTotal;
                }
            }
       }
       return $r;

    }

    protected function calcCost($r,$f,$s,$t)
    {
        $food="Food".$f;
        $stay="Stay".$s;
        $travel="Travel".$t;
        $tc=0; //total cost of each city
        $c=0; //final cost

        //Priority based calculation
         foreach ($r as $key => $value) {
           # code...
            $cost=TravelCost::select($food,$stay,$travel)->where('City',$key)->get();
            $tc+=$cost->pluck($food)->toArray()[0];
            $tc+=$cost->pluck($stay)->toArray()[0];
            $tc+=$cost->pluck($travel)->toArray()[0];
            $tc*=$r[$key];
            $c+=$tc;
            $tc=0;
        }
            
       
        return $c;
    }
}
