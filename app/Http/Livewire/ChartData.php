<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User; 
use App\Models\Royalties;
use Auth; 


class ChartData extends Component
{

    public $user_id; 
    public $username; 

    public $year; 
    public $month;
    public $period; 
    public $downloads; 
    public $revenue; 
    public $streams; 

    public $jan_streams;
    public $feb_streams; 
    public $mar_streams; 
    public $apr_streams; 
    public $may_streams; 
    public $jun_streams; 
    public $jul_streams; 
    public $aug_streams; 
    public $sep_streams; 
    public $oct_streams; 
    public $nov_streams; 
    public $dec_streams; 

    public $jan_downloads=5;
    public $feb_downloads; 
    public $mar_downloads; 
    public $apr_downloads; 
    public $may_downloads; 
    public $jun_downloads; 
    public $jul_downloads; 
    public $aug_downloads; 
    public $sep_downloads; 
    public $oct_downloads; 
    public $nov_downloads; 
    public $dec_downloads; 

    public $jan_revenue=5;
    public $feb_revenue; 
    public $mar_revenue; 
    public $apr_revenue; 
    public $may_revenue; 
    public $jun_revenue; 
    public $jul_revenue; 
    public $aug_revenue; 
    public $sep_revenue; 
    public $oct_revenue; 
    public $nov_revenue; 
    public $dec_revenue; 

    public function mount(){

        $this->user_id = Auth::user()->id;
        $this->username = Auth::user()->username;

        $this->year=date('Y');
        $this->month=date('m');
        $this->month=$this->getMonth($this->month); 
        $this->period=$this->month.' '.$this->year;
        $this->jan_streams=Royalties::where('username', $this->username)
        ->where('period_gained', "JANUARY ".$this->year)->sum('total_streams');




    }

    public function render()
    {
        return view('livewire.chart-data');
    }

    public function getMonth($month){
        switch ($month) {
            case '01':
                return 'JAN'; 
                break;
            case '02':
                return 'February'; 
                break; 
            case '03':
                return 'March'; 
                break; 
            case '04':
                return 'April'; 
                break;
            case '05':
                return 'May'; 
                break;
            case '06':
                return 'June'; 
                break;
            case '07':
                return 'July'; 
                break;
            case '08':
                return 'August'; 
                break;
            case '09':
                return 'September'; 
                break;
            case '10':
                return 'October'; 
                break;
            case '11':
                return 'November'; 
                break;
            case '12':
                return 'December'; 
                break;
            default:
                # code...
                break;
        }
    }
}
