@extends('layouts.master')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
    @if (Auth::user()->role_name=='Doctor')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="col-12 col-lg-3" style="float: right">  
                <div class="card" data-bs-toggle="modal" data-bs-target="#default">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ URL::to('/images/'. Auth::user()->p_picture) }}" alt="{{ Auth::user()->p_picture }}">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">{{ Auth::user()->full_name }}</h5>
                                <h6 class="text-muted mb-0">{{ Auth::user()->email }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
            <div class="row-col-md-12">
                    <input type="text" class="form-control" placeholder="Full Name" id="first-name-icon" name="full_name" value="{{ $data[0]->full_name }}"readonly> <br>
                    <div class="card" data-bs-toggle="modal" data-bs-target="#consult">
                        <button type="button" class="btn btn-primary btn-lg">CONSULT</button>
                    </div>
                    
            </div>
            <hr>
            <section class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <center>
                                            <table>
                                                <tr>    
                                                    <h5>37.4</h5>
                                                </tr>
                                                <tr>
                                                    <p>Last Temperature</p>
                                                </tr>
                                            </table>
                                        </center>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                            <center>
                                                <table>
                                                    <tr>
                                                        <h5>05/09/21</h5>
                                                    </tr>
                                                    <tr>
                                                        <p>Last Report/Measure</p>
                                                    </tr>
                                                </table>
                                            </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                            <center>
                                                <table >
                                                    <tr>
                                                        <h5>Positive-Fever</h5>
                                                    </tr>
                                                    <tr>
                                                        <p>Status and Symptoms</p>
                                                    </tr>
                                                </table>
                                            </center>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                            <center>
                                                <table>
                                                    <tr>
                                                        <h5>12d 14h 43m</h5>
                                                    </tr>
                                                    <tr>
                                                        <p>Remaining Time Period</p>
                                                    </tr>
                                                </table>
                                            </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                            <table >
                                                <th>Personal Information</th>
                                                <tr>
                                                    <td>
                                                        Name:
                                                    </td>
                                                    <td>
                                                        <input type="text"  id="first-name-icon" name="full_name" value="{{ $data[0]->full_name }}"readonly> <br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Email:
                                                    </td>
                                                    <td>
                                                        <input type="text"  name="email" value="{{ $data[0]->email }}"readonly> <br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Contact:
                                                    </td>
                                                    <td>
                                                        <input type="text"  name="phone" value="{{ $data[0]->contactno }}"readonly> <br>
                                                    </td>
                                                </tr>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                            <center>
                                                <h6>Temperature Progress</h6>
                                                <div id="chart-indonesia"></div>
                                            </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <table>
                                                <th>Summary</th>
                                                <tr>
                                                    <td>Reports needed per day: 3</td>
                                                </tr>
                                                <tr>
                                                    <td>Medicine Intake: Paracetamol</td>
                                                </tr>
                                                <tr>
                                                    <td>Swabtest Result: Postive</td>
                                                </tr>
                                                <tr>
                                                    <td>Undergone Swabtes: YES</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
            {{-- user profile modal --}}
            <div class="card-body">
                <!--Basic Modal -->
                <div class="modal fade text-left" id="default" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel1">User Profile</h5>
                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                    X
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Full Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="full_name" value="{{ Auth::user()->full_name }}" readonly>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email Address</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" readonly>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Mobile Number</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="number" class="form-control" value="{{ Auth::user()->contactno }}" readonly>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="col-md-4">
                                            <label>Status</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" value="{{ Auth::user()->status }}" readonly>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-bag-check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Role Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" value="{{ Auth::user()->role_name }}" readonly>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-exclude"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- end user profile modal --}}
                
             {{-- consult modal --}}
             <div class="card-body">
                <!--Basic Modal -->
                <div class="modal fade text-left" id="consult" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel1">Consult Patient</h5>
                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                    X
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Name:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="full_name" value="{{ $data[0]->full_name }}" readonly>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Quarantine Period for the Patient:</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-6">
                                                <table>
                                                    <tr>
                                                        <td>From:
                                                            <input type="date" name="start" id="start" class="form-control">
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>To:
                                                            <input type="date" name="end" id="end" class="form-control">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Reports Needed Per Day for the Patient:</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" name="morning" id="morning" > Morning 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" name="afternoon" id="afternoon"> Afternoon
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" name="evening" id="evening"> Evening
                                                        </td>
                                                        
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Medicine needed to be intake:</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <select name="medicine" id="medicine" class="form-control">
                                                                <option value="paracetamol" >Flanax</option>
                                                                <option value="biogesic">Biogesic</option>
                                                                <option value="flanax">Paracetamol</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="dosage" id="dosage" placeholder="dosage" class="form-control">
                                                        </td>
                                                    </tr>
                                                    
                                                </table>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Important Remarks for the Patient:</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-6">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" name="remarks" id="remarks" placeholder="remarks">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                        <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary ml-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">DONE</span>
                                </button>
                                <button type="button" class="btn btn-danger ml-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">CANCEL</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            {{-- end user profile modal --}}
                
            {{-- message --}}
            {!! Toastr::message() !!}
        
            <br><br><br><br><br><br><br><br><br><br><br><br><hr>
            <footer>
            <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2021 &copy; Home Quart</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                >Team Fix-it</a></p>
            </div>
        </div>
            </footer>
        </div>
    @endif
@endsection