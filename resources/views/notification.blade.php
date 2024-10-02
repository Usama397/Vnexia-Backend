@extends('layout.app')


@section('contents')

<section class="work-site mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="first-top-headerrr">
                    <h5>Notifications</h5>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Create
                        Notifications</button>
                </div>
                <div class="main-natification-table">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Notification</th>
                                <th scope="col">Work Site</th>
                                <th scope="col">Area</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>5</td>
                                <td>Johar town</td>
                                <td>karachi</td>
                                <td><button class="edit mr-2"><i class="fa-solid fa-pen-to-square"></i></button> <button class="delete"><i class="fa-solid fa-trash"></i></button></td>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Notification</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="main_flex">
                        <label for="Image">Title</label>
                        <input type="text" placeholder="Title">
                    </div>
                    <div class="main_flex">
                        <label for="Image">Message</label>
                        <textarea name="" placeholder="Message"></textarea>
                    </div>
                    <div class="assign-user-pop">
                        <h6>Worksite + Area</h6>
                        <button type="button" class="assign-user" data-bs-toggle="modal"
                            data-bs-target="#exampleModal1">Assign Users </button>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel1">Worksite + Area</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="side-roll">
                        <input type="checkbox">
                        <label for="">Select All</label>
                    </div>
                    <div class="main-checkboxx child-workside">
                        <ul>
                            <li>
                                <input type="checkbox">
                                <label for="">Worksite 01</label>
                                <ul>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 1</label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 2</label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 3</label>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label for="">Worksite 01</label>
                                <ul>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 1</label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 2</label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 3</label>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label for="">Worksite 01</label>
                                <ul>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 1</label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 2</label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 3</label>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label for="">Worksite 01</label>
                                <ul>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 1</label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 2</label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 3</label>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label for="">Worksite 01</label>
                                <ul>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 1</label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 2</label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label for="">Area 3</label>
                                    </li>
                                </ul>
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
