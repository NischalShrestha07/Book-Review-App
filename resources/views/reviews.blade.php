<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Review App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid shadow-lg header">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h1 class="text-center"><a href="index.html" class="h3 text-white text-decoration-none">Book Review
                        App</a></h1>
                <div class="d-flex align-items-center navigation">
                    <a href="login.html" class="text-white">Account</a>
                </div>
            </div>
        </div>
    </div>

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
                        Reviews
                    </div>
                    <div class="card-body pb-0">
                        <table class="table  table-striped mt-3">
                            <thead class="table-dark">
                                <tr>
                                    <th>Book</th>
                                    <th>Review</th>
                                    <th>Rating</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th width="100">Action</th>
                                </tr>
                            <tbody>
                                <tr>
                                    <td>Atomic Habits</td>
                                    <td>This seems an excellent book to read.</td>
                                    <td><i class="fa-regular fa-star"></i> 3.0</td>
                                    <td>John Doe</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="edit-review.html" class="btn btn-primary btn-sm"><i
                                                class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Atomic Habits</td>
                                    <td>This seems an excellent book to read.</td>
                                    <td><i class="fa-regular fa-star"></i> 3.0</td>
                                    <td>John Doe</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="edit-review.html" class="btn btn-primary btn-sm"><i
                                                class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Atomic Habits</td>
                                    <td>This seems an excellent book to read.</td>
                                    <td><i class="fa-regular fa-star"></i> 3.0</td>
                                    <td>John Doe</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="edit-review.html" class="btn btn-primary btn-sm"><i
                                                class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Atomic Habits </td>
                                    <td>This seems an excellent book to read.</td>
                                    <td><i class="fa-regular fa-star"></i> 3.0</td>
                                    <td>John Doe</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="edit-review.html" class="btn btn-primary btn-sm"><i
                                                class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
