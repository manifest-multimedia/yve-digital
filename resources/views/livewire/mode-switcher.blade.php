<div>
    {{-- Success is as dangerous as failure. --}}
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
<div x-data="{ mode:'light'}"
x-init="@this.on{'darkmode', ()=>{mode=dark;}}"
> 
    <template x-if="mode == 'dark'"> 
    <link href="{{asset('css/neptune/darktheme.css')}}" rel="stylesheet">
    </template>
    
</div>

</div>
