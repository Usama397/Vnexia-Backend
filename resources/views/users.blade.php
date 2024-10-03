@extends('layout.app')


@section('contents')

<section class="work-site mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="first-top-headerrr">
                    <h5>Users</h5>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Create New</button>
                </div>
                <div class="main-natification-table">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>


                        </tbody>
                    </table>
                    <div class="main_loadmore-btn">
                        <button class="load-more">
                            Load More
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- modal  --}}

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="flex-input">
                        <label for="Image">Image:</label>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" type="button">Select Images </button>
                    </div>
                    <div class="flex-input">
                        <label for="Image">Name:</label>
                        <input type="text" placeholder=" Name">
                    </div>
                    <div class="flex-input">
                        <label for="Image">Email:</label>
                        <input type="text" placeholder="Email ">
                    </div>
                    <div class="flex-input">
                        <label for="Image">Password:</label>
                        <input type="password" placeholder="Password ">
                    </div>
                    <div class="flex-input">
                        <label for="Image">Device Status:</label>
                       <div class="device-status new-userss">
                        <span ><input type="checkbox"> <label for="safety Manager">safety Manager</label></span>
                        <span ><input type="checkbox"> <label for="safety Manager">Worker</label></span>
                       </div>
                    </div>
                    <div class="main_creat-btn">
                        <button type="submit">Create</button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
</div>

{{-- end modal  --}}


{{-- user Gallary  --}}

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog assing-userss">
      <div class="modal-content assing-userss">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel1">Gallary </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="main_tabing">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Upload</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Media</button>
                    </li>
                    
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="main-upload">
                            <h5>Upload an image / Video </h5>
                            <button type="button" id="uploadButton">Upload</button>
                            <input type="file" id="fileInput" accept="image/*" style="display: none;" multiple>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="mediaaa">
                            <form action="">
                                <div class="media-selection-page">
                                    <ul id="work-site-list">
                                        @for ($i = 0; $i < 10; $i++)
                                            <li class="work-site-item" onclick="toggleSelect(this)">
                                                <div class="work-site-box work-site-box{{ $i + 1 }}">
                                                    <div class="work-site-img">
                                                        <img src="{{ asset('assets/images/work-site-img.png') }}" alt="">
                                                    </div>
                                                    <div class="work-side-content mb-0">
                                                        <h6>IMG_238{{ $i + 1 }}.jpg</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                                <div class="main_creat-btn">
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
            </div>

            
            
            
        </div>
      </div>
    </div>
  </div>

{{-- end of Gallary modal  --}}


@endsection
