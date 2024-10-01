@extends('layout.app')


@section('contents')

<section class="work-site mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="first-top-headerrr">
                    <h5>Check Points</h5>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Create New</button>
                </div>
                <div class="mt-5 area-boxes">
                    <ul>
                        <li>
                            <div class="area">Insulated Gloves</div>
                        </li>
                        <li>
                            <div class="area">Helmet</div>
                        </li>
                        <li>
                            <div class="area">Insulated Shoes</div>
                        </li>
                        <li>
                            <div class="area">Body Harness</div>
                        </li>
                        <li>
                            <div class="area">Glasses</div>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Check Point</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="flex-input">
                        <label for="Image">Image:</label>
                        <input type="file" placeholder="Select Image">
                    </div>
                    <div class="flex-input">
                        <label for="Image">Video:</label>
                        <input type="file" placeholder="Select Video">
                    </div>
                    <div class="flex-input">
                        <label for="Image">Title:</label>
                        <input type="text" placeholder="Title">
                    </div>
                    <div class="flex-input">
                        <label for="Image">Subtitle:</label>
                        <input type="text" placeholder="Subtitle ">
                    </div>
                    <div class="flex-input brief">
                        <label for="Image">Description: </label>
                       <textarea placeholder="Description"></textarea>
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



@endsection
