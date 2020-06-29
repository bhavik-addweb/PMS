<!-- bhavik 
edit Project
26-6-20 -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Project Details</div>

                <div class="card-body">
                  
                    
<form method="post" action="{{ route('pro.update', $data->id) }}" >

@csrf
@method('PATCH')
 <div class="form-group row">
   <label for="name" class="col-md-4 col-form-label text-md-right">New Project name</label>

     <div class="col-md-6">
         <input  type="text" class="form-control " name="name" value="{{$data->name}}" required >
            </div>
   </div>
       <div class="form-group row">
        <label for="vendor" class="col-md-4 col-form-label text-md-right">New Vendor Name</label>
         <div class="col-md-6">
            <input  type="text" class="form-control " name="vendor" value="{{$data->vendor}}" required >
           </div>
         </div>
                       
            <div class="form-group row">
            <label for="Desc" class="col-md-4 col-form-label text-md-right">New Description</label>
                <div class="col-md-6">
                 <textarea class="form-control " name="desc"  required >{{$data->desc}}</textarea>
                     </div>
            </div>
            <div class="form-group row mb-0">
                 <div class="col-md-6 offset-md-4">
                     <button type="submit" class="btn btn-primary">
                         Submit
                        </button>
                     </div>
            </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
