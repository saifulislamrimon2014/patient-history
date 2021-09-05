@extends('layouts.app')

@section('content')
    <div id="background">
        <div class="container-fluid px-0">
            <div class="row px-5 bg-light mx-auto py-3">
                <div class="col-md-12">
                    <img src="{{ asset('frontend/assets/logo.png') }}" class="w-50 mx-auto d-block" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-3">
                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif
                    @if (session('danger'))
                        <div class="alert alert-danger mt-3">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                            <span>{{ session('danger') }}</span>
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning mt-3">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                            <span>{{ session('warning') }}</span>
                        </div>
                    @endif
                </div>
            </div>
            <!-- searching form -->
            <div class="row mx-auto">
                <div class="col-md-12 px-0">
                    <section class="search-sec">
                        <div class="container pb-5 pt-3">
                            <form action="{{ route('search') }}">
                                <div class="row mx-auto">
                                    <div class="col-lg-12 px-0">
                                        <h4 class="display-4 text-center font-weight-bold text-white my-0">Get Your Prescription</h4>
                                        <div class="row mx-auto pt-4">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-0 d-flex">
                                                <input type="search" name="search" class="form-control rounded-0 border-info text-light shadow-lg p-3 bg-white border-right-0 bg-transparent" placeholder="Enter Paitent Id">
                                                <input type="date" name="date" required class="form-control rounded-0 border-info text-light shadow-lg p-3 bg-white border-right-0 bg-transparent" placeholder="Enter Enrolling Date">
                                                <button type="submit" class="btn btn-info rounded-0">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- searching form -->
            <!-- first section -->
            <div class="card rounded-0 bg-transparent border-0 ">
                <div class="card-body">
                    <div class="row mx-auto pb-5">
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row mx-auto">
                                    <div class="col-md-7 pl-0  text-white">
                                        <div class="card rounded-0 bg-transparent shadow-lg p-3 mb-5 bg-white rounded text-white">
                                            <div class="card-header">
                                                <p class="lead my-0 text-center">Get Appointment</p>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{ route('appointment.store') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" class="form-control text-light rounded-0 bg-transparent" name="name" placeholder="Enter Your Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control text-light rounded-0 bg-transparent" name="phone" placeholder="Enter Your Phone Number">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control text-light rounded-0 bg-transparent" name="email" placeholder="Enter Your Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="gender" id="" class="form-control text-light rounded-0 bg-transparent">
                                                            <option class="text-dark" value="Male">Male</option>
                                                            <option class="text-dark" value="Female">Female</option>
                                                            <option class="text-dark" value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="religion" id="" class="form-control text-light rounded-0 bg-transparent">
                                                            <option class="text-dark" value="Islam">Islam</option>
                                                            <option class="text-dark" value="Hindu">Hindu</option>
                                                            <option class="text-dark" value="Hindu">Christian</option>
                                                            <option class="text-dark" value="Hindu">Buddhism</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="marritial_status" id="" class="form-control text-light rounded-0 bg-transparent">
                                                            <option class="text-dark" value="Unmarried">Unmarried</option>
                                                            <option class="text-dark" value="Married">Married</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" data-toggle="modal" data-target="#exampleModal" id="terms" required> <label for="terms" data-toggle="modal" data-target="#exampleModal">I accepted your terms & conditions</label>
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-sm btn-block">Apply</button>
                                                </form>
                                            </div>      
                                        </div>
                                    </div>

                                    <!-- Button trigger modal -->
                                        

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Terms & Conditions</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                          <p><span class="font-weight-bold">Dr. M.M.A Shalahuddin Qusar</span> <br>Enrolling Visit: 800 BDT <br> After Enrolling Visit: 500 BDT (Within 3 month) <br> Report Show Cost: None</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    @foreach ($doctor as $profile)
                                        <div class="col-md-5 pr-0">
                                            <div class="row gutters-sm">
                                                <div class="col-md-11 mb-3">
                                                    <div class="card bg-transparent shadow-lg p-3 mb-5 bg-white rounded text-white">
                                                        <div class="card-body">
                                                          <div class="d-flex flex-column align-items-center text-center">
                                                              <img src="{{ asset('storage/uploads/'. 'ProfilePicture/' . $profile->image) }}" alt="Admin" class="rounded-circle mb-1 border-info border" width="150">
                                                              <div class="mt-3">
                                                                <h4>{{ $profile->name }}</h4>
                                                                <p class="mb-3">{{ $profile->specialist }}</p>
                                                                <p class="mb-3">{{ $profile->degree }}</p>
                                                                <p class="mb-1">{{ $profile->phone }} (PS)</p>
                                                                <p class="font-size-sm">{{ $profile->email }}</p>
                                                                  @if ($profile->status == true)
                                                                    <p class="text-success font-weight-bold mb-3">Available</p>
                                                                  @else
                                                                    <p class="text-danger font-weight-bold mb-3">Offline</p>
                                                                  @endif
                                                                </p>
                                                                <br>
                                                                @if(Auth::user())
                                                                    <a href="{{ route('profile.edit',$profile->id) }}" class="btn btn-info btn-sm btn-block">Edit</a>  
                                                                @else
                                                                    <a href="#section_contact" class="btn btn-info btn-sm btn-block">Message</a>  
                                                                @endif
                                                              </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- first section -->

            <!-- second section -->
            <div class="row mx-auto pb-5"  id="section_contact">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row mx-auto">
                            <div class="col-md-12 pl-0">
                                <div class="card rounded-0 bg-transparent shadow-lg p-3 mb-5 bg-white rounded text-white">
                                    <div class="card-header">
                                        <p class="lead my-0 text-center">Get In Touch</p>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('contact.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control text-light rounded-0 bg-transparent" name="name" placeholder="Enter Your Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control text-light rounded-0 bg-transparent" name="email" placeholder="Enter Your Email Address">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control text-light rounded-0 bg-transparent" name="phone" placeholder="Enter Your Contact Number">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control bg-transparent text-light" name="message" placeholder="Enter Your Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info btn-sm btn-block">Send</button>
                                        </form>
                                    </div>      
                                </div>
                            </div>
                            {{-- <div class="col-md-5 pr-0">
                                <iframe height="370" class="p-2 bg-white w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.842906464229!2d89.54090131530612!3d22.845300828662193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9a9b495951cf%3A0x2e4bf2dcf241b56d!2sKhulna%20Polytechnic%20Institute%2C%20Khulna!5e0!3m2!1sen!2sbd!4v1611693272867!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- second section -->

        </div>
    </div>
@endsection
