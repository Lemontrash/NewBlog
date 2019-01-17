@extends('basicLayout')



@section('content')
    <form method="post" action="" class="login">
        <p>
            <label for="login">Email:</label>
            <input type="text" name="login" id="login" placeholder="name@example.com">
        </p>

        <p>
            <label for="password">Имя:</label>
            <input type="password" name="password" id="password" placeholder="">
        </p>
        <p>
            <label for="password">Сообщение:</label> <br>
            <textarea placeholder="..."></textarea>
        </p>
        <p class="login-submit">
            <button type="submit" class="login-button">Войти</button>
        </p>


        КАПЧА
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
