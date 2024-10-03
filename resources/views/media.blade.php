@extends('layout.app')


@section('contents')

<section class="work-site mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="first-top-headerrr">
                    <h5>Media</h5>
                    <button type="button" id="uploadButton">Upload</button>
                    <input type="file" id="fileInput" accept="image/*" style="display: none;" multiple>
                </div>
                <div class="mt-5 main-card-container">
                    <ul>
                        <li>
                            <div class="work-site-box work-site-box1">
                                <div class="work-site-img">
                                    <img src="{{asset('assets/images/preview-img.jpg')}}" alt="">
                                </div>
                                <div class="work-side-content mb-0">
                                    <h6>IMG_2384.jpg</h6>
                                </div>
                                <ul>
                                    <li><button class="view-image-btn" data-bs-toggle="modal"
                                            data-bs-target="#imageModal"
                                            data-image-src="{{asset('assets/images/preview-img.jpg')}}"><i
                                                class="fa-solid fa-eye"></i></button></li>

                                    <li><button><i class="fa-solid fa-trash"></i></button></li>
                                </ul>
                            </div>

                        </li>
                        <li>
                            <div class="work-site-box work-site-box1">
                                <div class="work-site-img">
                                    <img src="{{asset('assets/images/work-site-img.png')}}" alt="">
                                </div>
                                <div class="work-side-content mb-0">
                                    <h6>IMG_2384.jpg</h6>
                                </div>
                                <ul>
                                    <li><button class="view-image-btn" data-bs-toggle="modal"
                                            data-bs-target="#imageModal"
                                            data-image-src="{{asset('assets/images/preview-img.jpg')}}"><i
                                                class="fa-solid fa-eye"></i></button></li>

                                    <li><button><i class="fa-solid fa-trash"></i></button></li>
                                </ul>
                            </div>

                        </li>
                        <li>
                            <div class="work-site-box work-site-box1">
                                <div class="work-site-img">
                                    <img src="{{asset('assets/images/work-site-img.png')}}" alt="">
                                </div>
                                <div class="work-side-content mb-0">
                                    <h6>IMG_2384.jpg</h6>
                                </div>
                                <ul>
                                    <li><button class="view-image-btn" data-bs-toggle="modal"
                                            data-bs-target="#imageModal"
                                            data-image-src="{{asset('assets/images/preview-img.jpg')}}"><i
                                                class="fa-solid fa-eye"></i></button></li>

                                    <li><button><i class="fa-solid fa-trash"></i></button></li>
                                </ul>
                            </div>

                        </li>
                        <li>
                            <div class="work-site-box work-site-box1">
                                <div class="work-site-img">
                                    <img src="{{asset('assets/images/work-site-img.png')}}" alt="">
                                </div>
                                <div class="work-side-content mb-0">
                                    <h6>IMG_2384.jpg</h6>
                                </div>
                                <ul>
                                    <li><button class="view-image-btn" data-bs-toggle="modal"
                                            data-bs-target="#imageModal"
                                            data-image-src="{{asset('assets/images/preview-img.jpg')}}"><i
                                                class="fa-solid fa-eye"></i></button></li>

                                    <li><button><i class="fa-solid fa-trash"></i></button></li>
                                </ul>
                            </div>

                        </li>
                        <li>
                            <div class="work-site-box work-site-box1">
                                <div class="work-site-img">
                                    <img src="{{asset('assets/images/work-site-img.png')}}" alt="">
                                </div>
                                <div class="work-side-content mb-0">
                                    <h6>IMG_2384.jpg</h6>
                                </div>
                                <ul>
                                    <li><button class="view-image-btn" data-bs-toggle="modal"
                                            data-bs-target="#imageModal"
                                            data-image-src="{{asset('assets/images/preview-img.jpg')}}"><i
                                                class="fa-solid fa-eye"></i></button></li>

                                    <li><button><i class="fa-solid fa-trash"></i></button></li>
                                </ul>
                            </div>

                        </li>
                        <li>
                            <div class="work-site-box work-site-box1">
                                <div class="work-site-img">
                                    <img src="{{asset('assets/images/work-site-img.png')}}" alt="">
                                </div>
                                <div class="work-side-content mb-0">
                                    <h6>IMG_2384.jpg</h6>
                                </div>
                                <ul>
                                    <li><button class="view-image-btn" data-bs-toggle="modal"
                                            data-bs-target="#imageModal"
                                            data-image-src="{{asset('assets/images/preview-img.jpg')}}"><i
                                                class="fa-solid fa-eye"></i></button></li>

                                    <li><button><i class="fa-solid fa-trash"></i></button></li>
                                </ul>
                            </div>

                        </li>
                        <li>
                            <div class="work-site-box work-site-box1">
                                <div class="work-site-img">
                                    <img src="{{asset('assets/images/work-site-img.png')}}" alt="">
                                </div>
                                <div class="work-side-content mb-0">
                                    <h6>IMG_2384.jpg</h6>
                                </div>
                                <ul>
                                    <li><button class="view-image-btn" data-bs-toggle="modal"
                                            data-bs-target="#imageModal"
                                            data-image-src="{{asset('assets/images/preview-img.jpg')}}"><i
                                                class="fa-solid fa-eye"></i></button></li>

                                    <li><button><i class="fa-solid fa-trash"></i></button></li>
                                </ul>
                            </div>

                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog assing-userss widthsec">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="lightboxImage" src="" alt="Selected Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>
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
                        <label for="Image">Image:</label>
                        <input type="file" placeholder="Select Image">
                    </div>
                    <div class="flex-input">
                        <label for="Image">Work Site Name:</label>
                        <input type="text" placeholder="Work Site Name ">
                    </div>
                    <div class="flex-input two-flexx">
                        <div class="datess-input">
                            <label for="Image">Start Date: </label>
                            <input type="date" placeholder="Start Date ">
                        </div>
                        <div class="datess-input">
                            <label for="Image">End Date: </label>
                            <input type="date" placeholder="End Date">
                        </div>

                    </div>
                    <div class="flex-input">
                        <label for="Image">Work Site Name:</label>
                        <input type="text" placeholder="Work Site Name ">
                    </div>
                    <div class="flex-input brief">
                        <label for="Image">Work Site Description </label>
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
