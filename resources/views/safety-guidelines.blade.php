@extends('layout.app')


@section('contents')

<section class="work-site mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="first-top-headerrr">
                    <h5>Safety Guidelines</h5>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Create New</button>
                </div>
                <div class="mt-5 main-safety-card">
                    <ul>
                        <li>
                            <div class="safety-card">
                                <div class="icons">
                                    <img src="assets/images/setting-icon.png" alt="">
                                </div>
                                <div class="card-content">
                                    <h5>Rooftop</h5>
                                </div>
                            </div>

                            
                        </li>
                        <li>
                            <div class="safety-card">
                                <div class="icons">
                                    <img src="assets/images/setting-icon.png" alt="">
                                </div>
                                <div class="card-content">
                                    <h5>Rooftop</h5>
                                </div>
                            </div>

                            
                        </li>
                        <li>
                            <div class="safety-card">
                                <div class="icons">
                                    <img src="assets/images/setting-icon.png" alt="">
                                </div>
                                <div class="card-content">
                                    <h5>Rooftop</h5>
                                </div>
                            </div>

                            
                        </li>
                        <li>
                            <div class="safety-card">
                                <div class="icons">
                                    <img src="assets/images/setting-icon.png" alt="">
                                </div>
                                <div class="card-content">
                                    <h5>Rooftop</h5>
                                </div>
                            </div>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Work Site</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="flex-input">
                        <label for="Image">Icon:</label>
                        <input type="file" placeholder="Select Icon">
                    </div>
                    <div class="flex-input">
                        <label for="Image">Image:</label>
                        <input type="file" placeholder="Select Image">
                    </div>
                    <div class="flex-input">
                        <label for="Image">Title: </label>
                        <input type="text" placeholder="Title ">
                    </div>
                    <div class="flex-input brief">
                        <label for="Image">Description: </label>
                       <textarea placeholder="Description"></textarea>
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
          <h1 class="modal-title fs-5" id="exampleModalLabel1">Check Points </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="">
            <div class="main-checkboxx safetly-guide">
                <ul>
                    <li>
                        <input type="checkbox">
                        <label for="">Check Point 01</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">Check Point 01</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">Check Point 01</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">Check Point 01</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">Check Point 01</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">Check Point 01</label>
                    </li>

                    <li>
                        <input type="checkbox">
                        <label for="">Check Point 01</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">Check Point 01</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">Check Point 01</label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">Check Point 01</label>
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
