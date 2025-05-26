@extends('layouts.app')


@section('main')

{{-- <div class="container-fluid shadow-lg header">
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1 class="text-center"><a href="index.html" class="h3 text-white text-decoration-none">Book Review
                    App</a></h1>
            <div class="d-flex align-items-center navigation">
                <a href="login.html" class="text-white">Account</a>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="row my-5">
        <div class="col-md-3">
            <div class="card border-0 shadow-lg">
                <div class="card-header  text-white">
                    Welcome, John Doe
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img src="images/profile-img-1.jpg" class="img-fluid rounded-circle" alt="Luna John">
                    </div>
                    <div class="h5 text-center">
                        <strong>John Doe</strong>
                        <p class="h6 mt-2 text-muted">5 Reviews</p>
                    </div>
                </div>
            </div>


            @include('layouts.nav')
        </div>
        <div class="col-md-9">

            <div class="card border-0 shadow">
                <div class="card-header  text-white">
                    Books
                </div>
                <div class="card-body pb-0">
                    <a href="add-book.html" class="btn btn-primary">Add Book</a>
                    <table class="table  table-striped mt-3">
                        <thead class="table-dark">
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Rating</th>
                                <th>Status</th>
                                <th width="150">Action</th>
                            </tr>
                        <tbody>
                            <tr>
                                <td>Atomic Habits</td>
                                <td>James Clear</td>
                                <td>3.0 (3 Reviews)</td>
                                <td>Active</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa-regular fa-star"></i></a>
                                    <a href="edit-book.html" class="btn btn-primary btn-sm"><i
                                            class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Atomic Habits</td>
                                <td>James Clear</td>
                                <td>3.0 (3 Reviews)</td>
                                <td>Active</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa-regular fa-star"></i></a>
                                    <a href="edit-book.html" class="btn btn-primary btn-sm"><i
                                            class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Atomic Habits</td>
                                <td>James Clear</td>
                                <td>3.0 (3 Reviews)</td>
                                <td>Active</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa-regular fa-star"></i></a>
                                    <a href="edit-book.html" class="btn btn-primary btn-sm"><i
                                            class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Atomic Habits</td>
                                <td>James Clear</td>
                                <td>3.0 (3 Reviews)</td>
                                <td>Active</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa-regular fa-star"></i></a>
                                    <a href="edit-book.html" class="btn btn-primary btn-sm"><i
                                            class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Atomic Habits</td>
                                <td>James Clear</td>
                                <td>3.0 (3 Reviews)</td>
                                <td>Active</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa-regular fa-star"></i></a>
                                    <a href="edit-book.html" class="btn btn-primary btn-sm"><i
                                            class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Atomic Habits</td>
                                <td>James Clear</td>
                                <td>3.0 (3 Reviews)</td>
                                <td>Active</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa-regular fa-star"></i></a>
                                    <a href="edit-book.html" class="btn btn-primary btn-sm"><i
                                            class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        </thead>
                    </table>
                    <nav aria-label="Page navigation ">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
