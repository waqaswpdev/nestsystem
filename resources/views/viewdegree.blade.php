@extends('layouts.app')

@section('content')
<div class="page-wrapper">

<div class="row mx-3" >
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <div class="d-md-flex align-items-center">
                    <div>
                        <h4 class="card-title">Degree Information</h4>
                        <h5 class="card-subtitle">List of Institute Degrees</h5>
                    </div>
                     
                </div>
                <!-- title -->
            </div>
            <div class="table-responsive">
                <table class="table v-middle">
                    <thead>
                        <tr class="bg-light">
                            <th class="border-top-0">Degree Name</th>
                            <th class="border-top-0">Degree Slots</th>
                            <th class="border-top-0">Degree Duration</th>
                            <th class="border-top-0">Duration From</th>
                            <th class="border-top-0">Duration To</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($degreeinfo as $ins)
                            
                        
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10">
                                      <h5> {{ $ins->degreeName }} </h5>
                                    </div>
                                </td>
                                <td>
                                    {{ $ins->degreeSlots }}
                                                            
                            </td>
                            <td>{{ $ins->degreeDuration }}</td>
                            <td>{{ $ins->degreeDurationFrom }}</td>
                            <td>{{ $ins->degreeDurationTo }}</td> 
                             
                        </tr>
                        
                        @endforeach
                        
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
</div>
</div>  
</div>
@endsection