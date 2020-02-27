<?php

namespace App\Http\Controllers;
use App\Project;
use App\Plant;
use App\Plan;
use App\Contract;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Requests\RequestImg;
use App\Http\Requests\RequestCPL;
use App\Http\Requests\RequestPlan;
use App\Http\Requests\RequestContract;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $projects = Project::orderBy('end','ASC')->where('cobrado','=','0')->where('user_id','=',\Auth::user()->id)->paginate(13);
        $projects->each(function($projects){
            $projects->contracts;
            $plants=$projects->plants;
            $plants->each(function($plants){
                $plants->rooms;;
            });
            
        });

       
        return view('user.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestCPL $request)
    {
        
        $project = new Project($request->all());
        $project->user_id= \Auth::user()->id;
        $v=$request->status;
        $project=inicio($v,$project);
        $project->save();
        if (empty($request->file('contract'))) {  
        }else{
          $file=$request->file('contract');
          $path =public_path().'/archivos/contratos' ;
          $name='discontri'.time().$file->getClientOriginalExtension();
         $file->move($path,$name);
         $contract = new Contract();
         $contract->project_id=$project->id;
         $contract->name=$name;
         $contract->save();
        }
        
        return redirect()->action('ProjectController@index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        $status =$project->status;
        
        if ($status == 1) {
            $status=[1=>'Propuestos',2=>'Aprobado',3=>'Culminado',4=>'Cobrado'];
        }else if ($status == 2) {
            $status=[1=>'Aprobado',2=>'Propuesto',3=>'Culminado',4=>'Cobrado'];
        }else if ($status == 3) {
            $status=[1=>'Culminado',2=>'Propuesto',3=>'Aprobado',4=>'Cobrado'];
        }else{
             $status=[1=>'Cobrado',2=>'Propuesto',3=>'Aprobado',4=>'Culminado'];
        }
        
     
        return view('user.projects.edit',compact('project','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(RequestCPL $request, $id)
    {
     
        $project = Project::find($id);
        $project->fill($request->all());
        $v=$request->status;
        $project=inicioe($v,$project);
        $project->save();
        if (empty($request->file('contract'))) {  
        }else{
          $file=$request->file('contract');
          $path =public_path().'/archivos/contratos' ;
          $name='discontri'.time().$file->getClientOriginalExtension();
         $file->move($path,$name);
         $contract = new Contract();
         $contract->project_id=$project->id;
         $contract->name=$name;
         $contract->save();
        }
         return redirect()->action('ProjectController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

//manipulacion de imagenes des proyectos a largo plazo->111111111111
    public function addimg($id){
        $project = Project::find($id);
        $project->images;
        return view('user.project.addimg',compact('project'));
    }

    public function updateimg(RequestImg $request,$id){
       
        $file = $request->file('name');
        $name= 'imagenes'.time().$file->getClientOriginalName();
        $path= public_path().'/archivos/imagenes/';
        $file->move($path,$name);
        $image = new Image();
        $image->project_id=$id;
        $image->name=$name;
        $image->description=$request->description;
        $image->save();
        
        return redirect()->action('ProjectController@ver',$id);

    }

    public function delimg($id){
        $img = Image::where('project_id','=',$id)->get();
        
        return view('user.project.delimg',compact('img'));
    }
  
       
       public function deleteimg($id,$name){
       
       $image = Image::where('name','=',$name)->get()->first();
       $image->delete();
       $path=public_path().'/archivos/imagenes/'.$name;
       unlink($path);
            
       return redirect()->action('ProjectController@ver',$image->project_id);
    }

   
//manipulacion de imagenes des proyectos a largo plazo->000000000000000

//manipulacion de planos des proyectos a largo plazo->1111111111111111111111111
public function addplan($id){
        $project = Project::find($id);
        $project->plans;
        return view('user.project.addplan',compact('project'));
    }

    public function updateplan(RequestPlan $request,$id){
       
        $file = $request->file('plano');
        $name= 'planos'.time().$file->getClientOriginalName();
        $path= public_path().'/archivos/planos/';
        $file->move($path,$name);
        $plan = new Plan();
        $plan->project_id=$id;
        $plan->name=$name;
        $plan->description=$request->description;
        $plan->save();
        
        return redirect()->action('ProjectController@ver',$id);

    }

    public function delplan($id){
        $plan = Plan::where('project_id','=',$id)->get();
        
        return view('user.project.delplan',compact('plan'));
    }

    public function deleteplan($id,$name){
       
       $plan= Plan::where('name','=',$name)->get()->first();
       $plan->delete();
       $path=public_path().'/archivos/planos/'.$name;
       unlink($path);
            
       return redirect()->action('ProjectController@ver',$plan->project_id);
    }

//manipulacion de planos des proyectos a largo plazo->000000000000000

//manipulacion de contratos des proyectos a largo plazo->1111111111111111111111111
public function addcontract($id){
        $project = Project::find($id);
        $project->plans;
        return view('user.project.addcontract',compact('project'));
    }

    public function updatecontract(RequestContract $request,$id){
       
        $file = $request->file('contrato');
        $name= 'contratos'.time().$file->getClientOriginalName();
        $path= public_path().'/archivos/contratos/';
        $file->move($path,$name);
        $contr = new Contract();
        $contr->project_id=$id;
        $contr->name=$name;
        $contr->save();
        
        return redirect()->action('ProjectController@ver',$id);

    }

    public function delcontract($id){
        $contr = Contract::where('project_id','=',$id)->get();
        
        return view('user.project.delcontract',compact('contr'));
    }

    public function deletecontract($id,$name){
       
       $contr= Contract::where('name','=',$name)->get()->first();
       $contr->delete();
       $path=public_path().'/archivos/contratos/'.$name;
       unlink($path);
            
       return redirect()->action('ProjectController@ver',$contr->project_id);
    }

//manipulacion de contratos des proyectos a largo plazo->000000000000000


//consulta de estados de proyectos a largo plazo111111111111111111
     public function propuestos()
    {
        $projects = Project::where('status','=',1)->where('user_id','=',\Auth::user()->id)->orderBy('end','ASC')->paginate(10);
        return view('user.projects.propuestos',compact('projects'));
    }
    public function aprobados()
    {
          $projects = Project::where('status','=',2)->where('user_id','=',\Auth::user()->id)->orderBy('end','ASC')->paginate(10);
        return view('user.projects.aprobados',compact('projects'));
    }
    public function finalizados()
    {
          $projects = Project::where('status','=',3)->where('user_id','=',\Auth::user()->id)->orderBy('end','ASC')->paginate(10);
        return view('user.projects.finalizados',compact('projects'));
    }
    public function cobrados()
    {
          $projects = Project::where('status','=',4)->where('user_id','=',\Auth::user()->id)->orderBy('end','ASC')->paginate(10);
        return view('user.projects.cobrados',compact('projects'));
    }
//consulta de estados de proyectos a largo plazo0000000000000

//vista de proyectos de largo plazo1111111111111111111111   
    public function ver($id){

       $project = Project::find($id);
       
        $project->plants;
        $project->images;
        $project->plans;
        $project->contracts;
       
       
        return view('user.project.projectview',compact('project'));
    }
//vista de proyectos de largo plazo 0000000000000000000000

    public function cambiarp($id){
        $project = Project::find($id);
        $project->propuesta=cambiaretapa($project->propuesta);
        if ($project->propuesta == 1) {
            $project->status=1;
        }
        $project->save();
        return redirect()->action('ProjectController@ver',$id);
    }
    public function cambiara($id){
       $project = Project::find($id);
        $project->aprobado=cambiaretapa($project->aprobado);
        if ($project->aprobado == 1) {
            $project->status=2;
        }
        $project->save();
       return  redirect()->action('ProjectController@ver',$id);
    }
    public function cambiarf($id){
        $project = Project::find($id);
        $project->finalizado=cambiaretapa($project->finalizado);
        if ($project->finalizado == 1) {
            $project->status=3;
        }
        $project->save();
       return  redirect()->action('ProjectController@ver',$id);
    }
    public function cambiarc($id){
       $project = Project::find($id);
        $project->cobrado=cambiaretapa($project->cobrado);
        if ($project->cobrado == 1) {
            $project->status=4;
        }else{
            $project->status=3;
        }
        $project->save();
        return redirect()->action('ProjectController@ver',$id);
    }

}

function cambiaretapa($v){
    if ($v == 0) {
            return $v=1;

        }else{
            return $v=0;
        }
}

function inicio($v,$project){
    if($v == '1'){
        $project->propuesta=1;
        $project->aprobado=0;
        $project->finalizado=0;
        $project->cobrado=0;
        return $project;
    }else  if($v == '2'){
        $project->propuesta=0;
        $project->aprobado=1;
        $project->finalizado=0;
        $project->cobrado=0;
        return $project;
    }else  if($v == '3'){
        $project->propuesta=0;
        $project->aprobado=0;
        $project->finalizado=1;
        $project->cobrado=0;
        return $project;
    }else  if($v == '4'){
        $project->propuesta=0;
        $project->aprobado=0;
        $project->finalizado=0;
        $project->cobrado=1;
        return $project;
    }
}
function inicioe($v,$project){
    if($v == '1'){
        $project->propuesta=1;
        return $project;
    }else  if($v == '2'){
        $project->aprobado=1;
        return $project;
    }else  if($v == '3'){
        $project->finalizado=1;
        return $project;
    }else  if($v == '4'){
        $project->cobrado=1;
        return $project;
    }
}