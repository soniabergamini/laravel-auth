{{-- <pre>
    @dd($projects);
</pre> --}}
 @extends('layouts.admin')

 @section('content')
 <div class="container-fluid mt-4">
 	<div class="row justify-content-center align-items-stretch">

        @foreach ($projects as $item)
            <div class="col-12 col-md-6 col-lg-3 mb-3">
 			    <div class="card h-100">
 			    	<div class="card-header p-0 d-flex justify-content-center position-relative">
                        <a href="{{ $item->link }}" class="w-100">
                            <img src="{{ $item->image }}" alt="{{ $item->name }}" class="img-fluid object-cover w-100 rounded">
                        </a>
                        <a href="{{ route('admin.projects.show', $item) }}" class="position-absolute bg-body-secondary top-0 start-0 rounded p-1">Details</a>
                    </div>

 			    	<div class="card-body text-center">
 			    		<h6 class="text-primary mb-1">{{ Str::upper($item->name) }}</h6>
                        <span class="text-body-secondary fst-italic">( {{ $item->stack }} )</span>
                        {{-- <p class="text-body-secondary mt-3">{{ $item->description }}</p> --}}
 			    	</div>
 			    </div>
 		    </div>
        @endforeach

 	</div>
 </div>
 @endsection

