@extends('menu')

@section('content')

<h2 style="color:green">
     
</h2>

<div class="container mx-auto flex justify-center">
    -
</div>

 {{-- {{importAll(require.context('../public/', true));}} --}}
<div style="width: 100%;">
    <div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;">
        <iframe title="Taller 2" id="frame1" frameborder="0" width="1200px" height="675px"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
            src="" type="text/html" allowscriptaccess="always"
            allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe>
    </div>
</div>

<script>
    const req=require.context('./public/evaluacion', useSubdirectories = true)

    const index= req('./index.htm')
    
    var iframe = document.getElementById("frame1");

    iframe.setAttribute("src", index);
</script>
@stop