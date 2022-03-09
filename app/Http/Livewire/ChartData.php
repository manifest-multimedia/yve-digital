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
    
        //Get Stream Data

        $this->jan_streams=Royalties::where('username', $this->username)->where('period_gained', "JANUARY ".$this->year)->sum('total_streams');
        $this->feb_streams=Royalties::where('username', $this->username)->where('period_gained', "FEBRUARY ".$this->year)->sum('total_streams');
        $this->mar_streams=Royalties::where('username', $this->username)->where('period_gained', "MARCH ".$this->year)->sum('total_streams');
        $this->apr_streams=Royalties::where('username', $this->username)->where('period_gained', "APRIL ".$this->year)->sum('total_streams');
        $this->may_streams=Royalties::where('username', $this->username)->where('period_gained', "MAY ".$this->year)->sum('total_streams');
        $this->jun_streams=Royalties::where('username', $this->username)->where('period_gained', "JUNE ".$this->year)->sum('total_streams');
        $this->jul_streams=Royalties::where('username', $this->username)->where('period_gained', "JULY ".$this->year)->sum('total_streams');
        $this->aug_streams=Royalties::where('username', $this->username)->where('period_gained', "AUGUST ".$this->year)->sum('total_streams');
        $this->sep_streams=Royalties::where('username', $this->username)->where('period_gained', "SEPTEMBER ".$this->year)->sum('total_streams');
        $this->oct_streams=Royalties::where('username', $this->username)->where('period_gained', "OCTOBER ".$this->year)->sum('total_streams');
        $this->nov_streams=Royalties::where('username', $this->username)->where('period_gained', "NOVEMBER ".$this->year)->sum('total_streams');
        $this->dec_streams=Royalties::where('username', $this->username)->where('period_gained', "DECEMBER ".$this->year)->sum('total_streams');

        //Get Download Data
        $this->jan_downloads=Royalties::where('username', $this->username)->where('period_gained', "JANUARY ".$this->year)->sum('downloads');
        $this->feb_downloads=Royalties::where('username', $this->username)->where('period_gained', "FEBRUARY ".$this->year)->sum('downloads');
        $this->mar_downloads=Royalties::where('username', $this->username)->where('period_gained', "MARCH ".$this->year)->sum('downloads');
        $this->apr_downloads=Royalties::where('username', $this->username)->where('period_gained', "APRIL ".$this->year)->sum('downloads');
        $this->may_downloads=Royalties::where('username', $this->username)->where('period_gained', "MAY ".$this->year)->sum('downloads');
        $this->jun_downloads=Royalties::where('username', $this->username)->where('period_gained', "JUNE ".$this->year)->sum('downloads');
        $this->jul_downloads=Royalties::where('username', $this->username)->where('period_gained', "JULY ".$this->year)->sum('downloads');
        $this->aug_downloads=Royalties::where('username', $this->username)->where('period_gained', "AUGUST ".$this->year)->sum('downloads');
        $this->sep_downloads=Royalties::where('username', $this->username)->where('period_gained', "SEPTEMBER ".$this->year)->sum('downloads');
        $this->oct_downloads=Royalties::where('username', $this->username)->where('period_gained', "OCTOBER ".$this->year)->sum('downloads');
        $this->nov_downloads=Royalties::where('username', $this->username)->where('period_gained', "NOVEMBER ".$this->year)->sum('downloads');
        $this->dec_downloads=Royalties::where('username', $this->username)->where('period_gained', "DECEMBER ".$this->year)->sum('downloads');


        //Get Revenue Data 
        $this->jan_revenue=Royalties::where('username', $this->username)->where('period_gained', "JANUARY ".$this->year)->sum('revenue');
        $this->feb_revenue=Royalties::where('username', $this->username)->where('period_gained', "FEBRUARY ".$this->year)->sum('revenue');
        $this->mar_revenue=Royalties::where('username', $this->username)->where('period_gained', "MARCH ".$this->year)->sum('revenue');
        $this->apr_revenue=Royalties::where('username', $this->username)->where('period_gained', "APRIL ".$this->year)->sum('revenue');
        $this->may_revenue=Royalties::where('username', $this->username)->where('period_gained', "MAY ".$this->year)->sum('revenue');
        $this->jun_revenue=Royalties::where('username', $this->username)->where('period_gained', "JUNE ".$this->year)->sum('revenue');
        $this->jul_revenue=Royalties::where('username', $this->username)->where('period_gained', "JULY ".$this->year)->sum('revenue');
        $this->aug_revenue=Royalties::where('username', $this->username)->where('period_gained', "AUGUST ".$this->year)->sum('revenue');
        $this->sep_revenue=Royalties::where('username', $this->username)->where('period_gained', "SEPTEMBER ".$this->year)->sum('revenue');
        $this->oct_revenue=Royalties::where('username', $this->username)->where('period_gained', "OCTOBER ".$this->year)->sum('revenue');
        $this->nov_revenue=Royalties::where('username', $this->username)->where('period_gained', "NOVEMBER ".$this->year)->sum('revenue');
        $this->dec_revenue=Royalties::where('username', $this->username)->where('period_gained', "DECEMBER ".$this->year)->sum('revenue');


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
