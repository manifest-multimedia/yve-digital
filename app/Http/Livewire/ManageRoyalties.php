<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination; 
use App\Models\Royalties;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;

class ManageRoyalties extends Component
{
    
    protected $paginationTheme = 'bootstrap';

    public $user;  
    public $selectedUser=null; 
    public $sort_period=null; 
    public $status=null;
    public $edit=[]; 
    public $record=null; 

    public $release_name=null; 
    public $song_name=null;
    public $revenue=null; 
    public $downloads=null; 
    public $streams=null; 
    public $platform=null; 
    public $period_gained=null; 

    public $totalrevenue;

    public function render()

    {

        if(Gate::allows('isAdmin'))

    {
        $username=''; 
        $earnings='';
        if (!is_null($this->selectedUser)){

            $username=$this->selectedUser;

        } else{

            $period=$royalties=Royalties::all()->unique('period_gained');
             
            $royalties=Royalties::latest()->paginate(5);

            
            if(!is_null($this->sort_period) || !empty($sort_period)){

                $royalties=Royalties::where('period_gained', $this->sort_period)
                ->latest()->paginate(5);

            }
            
        }
     
    }

    
    return view('livewire.manage-royalties', compact('royalties', 'earnings', 'period'));

}






    

public function updatedSortPeriod($value){
    $value=$value; 
    if(empty($value)) {
        $this->sort_period=null; 
    }

}
public function orderByMonth($data) {

    $data=$data;


    $data=$data->groupBy(function($data){
        return Carbon::parse($data->period_gained)->format('Month');
    });


    return $data;

}   

   

public function edit($record){

    $this->record=$record; 

    
    $this->status="edit"; 
    $this->edit=Royalties::where('id', $record)->get(); 

    $this->release_name=$this->edit[0]['release_name']; 
    $this->song_name=$this->edit[0]['song_name']; 
    $this->period_gained=$this->edit[0]['period_gained']; 
    $this->platform=$this->edit[0]['platform']; 
    $this->streams=$this->edit[0]['total_streams']; 
    $this->revenue=$this->edit[0]['revenue']; 
    $this->downloads=$this->edit[0]['downloads']; 

    return view('livewire.royaltiestable');
}

public function delete($record){

    #Delete Record 

    Royalties::where('id', $record)->delete(); 
    request()->session()->flash('success', "record deleted Successfully"); 
    return redirect('royalties');
    
}

public function cancel(){
    $this->resetInputsData();
    $this->status="show"; 
}

public function update($record){

    $data=[
        'release_name' => $this->release_name, 
        'song_name'=> $this->song_name, 
        'revenue' => $this->revenue, 
        'downloads'=>$this->downloads, 
        'streams'=>$this->streams, 
        'platform'=>$this->platform, 
    ];
    #validate

    $validator = Validator::make($data,  [
        'release_name' => 'required',
        'song_name'=>'required',
        'revenue'=>'required',
        'downloads'=>'required',
        'streams'=>'required',
        'platform'=>'required'
    ]); 

    $validated=$validator->validated(); 
    
  
    Royalties::where('id', $record)
                ->update(array(

                    'release_name' => $validated['release_name'], 
                    'song_name'=> $validated['song_name'], 
                    'revenue' => $validated['revenue'], 
                    'downloads'=>$validated['downloads'], 
                    'total_streams'=>$validated['streams'], 
                    'platform'=>$validated['platform'], 


                ));

                $this->resetInputsData();

                $this->status="show";
                
                return view('livewire.royaltiestable'); 



}

            private function resetInputsData(){
                $this->release_name=null; 
                $this->song_name=null;
                $this->revenue=null; 
                $this->downloads=null; 
                $this->streams=null; 
                $this->platform=null; 
                $this->period_gained=null; 
            }


}
