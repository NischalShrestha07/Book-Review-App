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
                    <a href="{{ route('account.login') }}" class="text-white">Login</a>
                    <a href="{{ route('account.register') }}" class="text-white ps-2">Register</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 pb-5">
        <div class="row justify-content-center d-flex mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h2 class="mb-3">Books</h2>
                    <div class="mt-2">
                        <a href="#" class="text-dark">Clear</a>
                    </div>
                </div>
                <div class="card shadow-lg border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-11 col-md-11">
                                <input type="text" class="form-control form-control-lg" placeholder="Search by title">
                            </div>
                            <div class="col-lg-1 col-md-1">
                                <button class="btn btn-primary btn-lg w-100"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card border-0 shadow-lg">
                            <a href="detail.html"><img src="images/book06.jpg" alt="" class="card-img-top"></a>
                            <div class="card-body">
                                <h3 class="h4 heading"><a href="#">Atomic Habits</a></h3>
                                <p>by James Clear</p>
                                <div class="star-rating d-inline-flex ml-2" title="">
                                    <span class="rating-text theme-font theme-yellow">5.0</span>
                                    <div class="star-rating d-inline-flex mx-2" title="">
                                        <div class="back-stars ">
                                            <i class="fa fa-star " aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <div class="front-stars" style="width: 100%">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="theme-font text-muted">(2 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card border-0 shadow-lg">
                            <a href="detail.html"><img src="images/book02.jpg" alt="" class="card-img-top"></a>
                            <div class="card-body">
                                <h3 class="h4 heading">Think & Grow Rich</h3>
                                <p>by Napoleon Hill</p>
                                <div class="star-rating d-inline-flex ml-2" title="">
                                    <span class="rating-text theme-font theme-yellow">0.0</span>
                                    <div class="star-rating d-inline-flex mx-2" title="">
                                        <div class="back-stars ">
                                            <i class="fa fa-star " aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <div class="front-stars" style="width: 0%">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="theme-font text-muted">(0 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card border-0 shadow-lg">
                            <a href="detail.html"><img src="images/book08.jpg" alt="" class="card-img-top"></a>
                            <div class="card-body">
                                <h3 class="h4 heading">Autobiography of a Yogi
                                </h3>
                                <p>by Paramahansa Yogananda</p>
                                <div class="star-rating d-inline-flex ml-2" title="">
                                    <span class="rating-text theme-font theme-yellow">0.0</span>
                                    <div class="star-rating d-inline-flex mx-2" title="">
                                        <div class="back-stars ">
                                            <i class="fa fa-star " aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <div class="front-stars" style="width: 0%">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="theme-font text-muted">(0 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card border-0 shadow-lg">
                            <img src="images/book14.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="h4 heading">The Psychology of Money</h3>
                                <p>by Morgan Housel </p>
                                <div class="star-rating d-inline-flex ml-2" title="">
                                    <span class="rating-text theme-font theme-yellow">0.0</span>
                                    <div class="star-rating d-inline-flex mx-2" title="">
                                        <div class="back-stars ">
                                            <i class="fa fa-star " aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <div class="front-stars" style="width: 0%">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="theme-font text-muted">(0 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card border-0 shadow-lg">
                            <a href="detail.html"><img src="images/book06.jpg" alt="" class="card-img-top"></a>
                            <div class="card-body">
                                <h3 class="h4 heading"><a href="#">Atomic Habits</a></h3>
                                <p>by James Clear</p>
                                <div class="star-rating d-inline-flex ml-2" title="">
                                    <span class="rating-text theme-font theme-yellow">0.0</span>
                                    <div class="star-rating d-inline-flex mx-2" title="">
                                        <div class="back-stars ">
                                            <i class="fa fa-star " aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <div class="front-stars" style="width: 0%">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="theme-font text-muted">(0 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card border-0 shadow-lg">
                            <a href="detail.html"><img src="images/book02.jpg" alt="" class="card-img-top"></a>
                            <div class="card-body">
                                <h3 class="h4 heading">Think & Grow Rich</h3>
                                <p>by Napoleon Hill</p>
                                <div class="star-rating d-inline-flex ml-2" title="">
                                    <span class="rating-text theme-font theme-yellow">0.0</span>
                                    <div class="star-rating d-inline-flex mx-2" title="">
                                        <div class="back-stars ">
                                            <i class="fa fa-star " aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <div class="front-stars" style="width: 0%">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="theme-font text-muted">(0 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card border-0 shadow-lg">
                            <a href="detail.html"><img src="images/book08.jpg" alt="" class="card-img-top"></a>
                            <div class="card-body">
                                <h3 class="h4 heading">Autobiography of a Yogi
                                </h3>
                                <p>by Paramahansa Yogananda</p>
                                <div class="star-rating d-inline-flex ml-2" title="">
                                    <span class="rating-text theme-font theme-yellow">0.0</span>
                                    <div class="star-rating d-inline-flex mx-2" title="">
                                        <div class="back-stars ">
                                            <i class="fa fa-star " aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <div class="front-stars" style="width: 0%">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="theme-font text-muted">(0 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card border-0 shadow-lg">
                            <img src="images/book14.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="h4 heading">The Psychology of Money</h3>
                                <p>by Morgan Housel </p>
                                <div class="star-rating d-inline-flex ml-2" title="">
                                    <span class="rating-text theme-font theme-yellow">0.0</span>
                                    <div class="star-rating d-inline-flex mx-2" title="">
                                        <div class="back-stars ">
                                            <i class="fa fa-star " aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <div class="front-stars" style="width: 0%">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="theme-font text-muted">(0 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
</body>

</html>
