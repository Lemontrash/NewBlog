@extends('basicLayout')

@section('content')
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">H E L P <br>
                    <small></small>
                </h1>
                @foreach($posts as $post)
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{$post->pic}}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{$post->title}}</h2>
                            <p class="card-text">{{$post->content}}</p>
                            <a href="{{ route('single') }}" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on {{$post->created_at}}, 2017 by
                            <a href="#">{{$post->user['username']}}</a>
                        </div>
                    </div>
                @endforeach
                <!-- Blog Post -->

                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">&larr; Older</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Side Widget -->

                <div class="card my-4">
                    <h5 class="card-header">Мини ЛК</h5>
                    <div class="card-body">
                        Юзернейм и
                        <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Топ новостей</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">рейтинг</a>
                                    </li>
                                    <li>
                                        <a href="#">рейтинг</a>
                                    </li>
                                    <li>
                                        <a href="#">рейтинг</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
        <!-- /.row -->
    </div>
@endsection

@section('footer')
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
        </div>
        <!-- /.container -->
    </footer>
@endsection
