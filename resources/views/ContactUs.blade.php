@extends('basicLayout')



@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{route('message')}}" class="login">
        @csrf
        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" placeholder="name@example.com">
        </p>

        <p>
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" placeholder="">
        </p>
        <p>
            <label for="message">Сообщение:</label> <br>
            <textarea placeholder="..." name="message" id="message"></textarea>
        </p>
        <p class="login-submit">
            <button type="submit" class="login-button">Войти</button>
        </p>

    </form>
@endsection

@section('footer')
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
        </div>
        <!-- /.container -->
    </footer>
@endsection
