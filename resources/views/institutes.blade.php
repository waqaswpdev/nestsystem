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
                        <h4 class="card-title">Institues</h4>
                        <h5 class="card-subtitle">List of Institutes</h5>
                    </div>
                     
                </div>
                <!-- title -->
            </div>
            <div class="table-responsive">
                <table class="table v-middle">
                    <thead>
                        <tr class="bg-light">
                            <th class="border-top-0">Institute Name</th>
                            <th class="border-top-0">Institute City</th>
                            <th class="border-top-0">Institute Address</th>
                            <th class="border-top-0">Total Slots</th>
                            <th class="border-top-0">Consumed Slots</th>
                            <th class="border-top-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($institutes as $ins)
                            
                        
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10">
                                      <h5> {{ $ins->instituteName }} </h5>
                                    </div>
                                </td>
                                <td>
                                    {{ $ins->instituteCity }}
                                                            
                            </td>
                            <td>{{ $ins->instituteAddress }}</td>
                            <td>{{ $ins->instituteSlots }}</td>
                            <td>{{ $ins->instituteSlotsConsumed }}</td> 
                            <td>
                                <a href='veiwdegree/{{$ins->instituteID }}' ><label style="cursor: pointer" class="label label-primary">View Degree</label>
                            </td>
                        </tr>
                        
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            @include('layouts.pagination', ['paginator' => $institutes])
        </div>
    </div>
</div>
</div>  
</div>
@endsection