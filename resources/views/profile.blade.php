@extends('layouts.app')
  
@section('title', 'Profile')
  
@section('contents')
    <h1 class="mb-0">Profile</h1>
    <hr />
 
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="" >
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row" id="res"></div>
                <div class="row mt-2">
                    @extends('layouts.app')

                    @section('title', 'Profile')
                    
                    @section('contents')
                        <div style="margin-left: 225px">
                            <h1 class="mb-0">Profile</h1>
                            <hr />
                    
                            <div class="row">
                                <div class="col-md-12 border-right">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Profile Settings</h4>
                                        </div>
                                        <div class="row" id="res"></div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label class="labels">Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="first name" value="{{ auth()->user()->name }}" disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="labels">Email</label>
                                                <input type="text" name="email" class="form-control" value="{{ auth()->user()->email }}" disabled>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label class="labels">Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="********" disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="labels">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="********" disabled>
                                            </div>
                                        </div>
                    
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label class="labels">Level</label>
                                                <input type="text" name="level" class="form-control" value="{{ auth()->user()->level }}" disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="labels">Created At</label>
                                                <input type="text" name="created_at" class="form-control" value="{{ auth()->user()->created_at }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endsection
                    
                    <div class="col-md-6">
                        <label class="labels">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="first name" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Email</label>
                        <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ auth()->user()->phone }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Address</label>
                        <input type="text" name="address" class="form-control" value="{{ auth()->user()->address }}" placeholder="Address">
                    </div>
                </div>
                 
                <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
            </div>
        </div>
         
    </div>   
            
        </form>
@endsection