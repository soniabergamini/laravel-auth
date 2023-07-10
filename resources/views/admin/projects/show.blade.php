{{-- <pre>
    @dd($projects);
</pre> --}}
 @extends('layouts.admin')

 @section('content')
 <div class="container-fluid mt-4">
 	<div class="row justify-content-center">

            <div class="col-8 mb-3">
 			    <div class="border d-flex justify-between rounded">
 			    	<div class="d-flex align-items-center">
                        <a href="{{ $project->link }}" class="w-100">
                            <img src="{{ $project->image }}" alt="{{ $project->name }}" class="img-fluid object-cover rounded">
                        </a>
                    </div>

 			    	<div class="text-center d-flex flex-column px-5 py-3 w-75">
 			    		<h4 class="text-primary mb-1">{{ Str::upper($project->name) }}</h4>
                        <span class="text-body-secondary fst-italic">( {{ $project->stack }} )</span>
                        <p class="text-body-secondary mt-3">{{ $project->description }}</p>
 			    	</div>
 			    </div>
 		    </div>

 	</div>
 </div>
 @endsection

