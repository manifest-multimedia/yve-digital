<div>
    {{-- Success is as dangerous as failure. --}}
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
   @if($mode==='dark')
   <link href="{{asset('css/neptune/main.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/neptune/darktheme.css')}}" rel="stylesheet">
    @else 
    <link href="{{asset('css/neptune/main.min.css')}}" rel="stylesheet">
    @endif
</div>
