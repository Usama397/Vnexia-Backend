@extends('layout.app')


@section('contents')

<section class="work-site mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="first-top-headerrr">
                    <h5>Work Site 01</h5>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Create Areas</button>
                </div>
                <div class="mt-5 area-boxes">
                    <ul>
                        <li>
                            <div class="area">Area 01</div>
                            <ul>
                                <li><button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"><i class="fa-solid fa-pen-to-square"></i></button></li>
                                <li><button><i class="fa-solid fa-trash"></i></button></li>
                            </ul>
                        </li>
                        <li>
                            <div class="area">Area 01</div>
                            <ul>
                                <li><button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"><i class="fa-solid fa-pen-to-square"></i></button></li>
                                <li><button><i class="fa-solid fa-trash"></i></button></li>
                            </ul>
                        </li>
                        <li>
                            <div class="area">Area 01</div>
                            <ul>
                                <li><button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"><i class="fa-solid fa-pen-to-square"></i></button></li>
                                <li><button><i class="fa-solid fa-trash"></i></button></li>
                            </ul>
                        </li>
                        <li>
                            <div class="area">Area 01</div>
                            <ul>
                                <li><button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"><i class="fa-solid fa-pen-to-square"></i></button></li>
                                <li><button><i class="fa-solid fa-trash"></i></button></li>
                            </ul>
                        </li>
                    </ul>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Area</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="flex-input">
                        <label for="Image">Area Name:</label>
                        <input type="text" placeholder="Area Name">
                    </div>
                    <div class="flex-input">
                        <label for="Image">Orin Device ID:</label>
                        <input type="text" placeholder="Orin Device ID ">
                    </div>
                    <div class="flex-input">
                        <label for="Image">Orin Device Key: </label>
                        <input type="text" placeholder="Orin Device Key ">
                    </div>
                    <div class="flex-input">
                        <label for="Image">Device Status:</label>
                       <div class="device-status">
                        <span class="green connected"><i class="fa-solid fa-check"></i> Connected</span>/
                        <span class="red disconnected"><i class="fa-solid fa-xmark"></i> Not Connected</span>
                       </div>
                    </div>
                    <div class="assign-user-pop">
                        <button  type="button" class="assign-user" data-bs-toggle="modal" data-bs-target="#exampleModal1">Assign Users </button>
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


{{-- user assign modal  --}}

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog assing-userss">
      <div class="modal-content assing-userss">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel1">Assign Users </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="">
            <div class="main-checkboxx">
                <ul>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>

                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>


                    <li>
                        <input type="checkbox">
                        <label for="">users</label>
                    </li>
                </ul>
            </div>
            <div class="main_creat-btn">
                <button type="submit">Assign</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>

{{-- end of user assign modal  --}}




@endsection
