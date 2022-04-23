<div>
    {{-- Do your work, then step back. --}}
    <script> 
document.addEventListener('livewire:load', function(){

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        console.log("Device is Mobile");
 
}


    let year=@this.year

    let january_streams=@this.jan_streams
    let february_streams=@this.feb_streams
    let march_streams=@this.mar_streams 
    let april_streams=@this.apr_streams 
    let may_streams=@this.may_streams 
    let june_streams=@this.jun_streams 
    let july_streams=@this.jul_streams 
    let august_streams=@this.aug_streams 
    let september_streams=@this.sep_streams 
    let october_streams=@this.oct_streams 
    let november_streams=@this.nov_streams 
    let december_streams=@this.dec_streams 

    let january_downloads=@this.jan_downloads
    let february_downloads=@this.feb_downloads
    let march_downloads=@this.mar_downloads 
    let april_downloads=@this.apr_downloads 
    let may_downloads=@this.may_downloads 
    let june_downloads=@this.jun_downloads 
    let july_downloads=@this.jul_downloads 
    let august_downloads=@this.aug_downloads 
    let september_downloads=@this.sep_downloads 
    let october_downloads=@this.oct_downloads 
    let november_downloads=@this.nov_downloads 
    let december_downloads=@this.dec_downloads 

    let january_revenue=@this.jan_revenue
    let february_revenue=@this.feb_revenue
    let march_revenue=@this.mar_revenue 
    let april_revenue=@this.apr_revenue 
    let may_revenue=@this.may_revenue 
    let june_revenue=@this.jun_revenue 
    let july_revenue=@this.jul_revenue 
    let august_revenue=@this.aug_revenue 
    let september_revenue=@this.sep_revenue 
    let october_revenue=@this.oct_revenue 
    let november_revenue=@this.nov_revenue 
    let december_revenue=@this.dec_revenue 
    
    console.log('This works '+year+' January Streams '+january_streams);

    "use strict";
var options1 = {
  chart: {
      height: 350,
      type: 'bar',
      toolbar: {
        show: false
      }
  },
  plotOptions: {
      bar: {
          horizontal: false,
          columnWidth: '55%',
          endingShape: 'rounded',
          borderRadius: 10
      },
  },
  dataLabels: {
      enabled: false
  },
  stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
  },
  series: [{
      name: 'Streams',
      data: [january_streams, february_streams, march_streams, april_streams, may_streams, june_streams, july_streams, august_streams, september_streams, october_streams, november_streams, december_streams]
  }, {
      name: 'Downloads',
      data: [january_downloads, february_downloads, march_downloads, april_downloads, may_downloads, june_downloads, july_downloads, august_downloads, september_downloads, october_downloads, november_downloads, december_downloads]
  }, {
      name: 'Revenue',
      data: [january_revenue, february_revenue, march_revenue, april_revenue, may_revenue, june_revenue, july_revenue, august_revenue, september_revenue, october_revenue, november_revenue, december_revenue]
  }],
  xaxis: {
      categories: [ 'Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      labels: {
          style: {
              colors: 'rgba(94, 96, 110, .5)'
          }
      }
  },
  yaxis: {
      title: {
          text: 'Performance ' +'('+year+')'
      }
  },
  fill: {
      opacity: 1

  },
  tooltip: {
      y: {
          formatter: function (val) {
              return val 
          }
      }
  },
  grid: {
      borderColor: '#e2e6e9',
      strokeDashArray: 4
  }
}
var chart1 = new ApexCharts(
  document.querySelector("#performance-chart"),
  options1
);

chart1.render();

})

// $(document).ready(function () {

// });
    </script> 
</div>
