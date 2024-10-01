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
                                <td><button class="edit mr-2">edit</button> <button class="delete">Delete</button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2">edit</button> <button class="delete">Delete</button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2">edit</button> <button class="delete">Delete</button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2">edit</button> <button class="delete">Delete</button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2">edit</button> <button class="delete">Delete</button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2">edit</button> <button class="delete">Delete</button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2">edit</button> <button class="delete">Delete</button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2">edit</button> <button class="delete">Delete</button></td>
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
                        <input type="file" placeholder="Select Image">
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




@endsection
