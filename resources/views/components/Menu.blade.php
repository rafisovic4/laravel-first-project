<!-- Menu -->
<section id="menu">
    @guest
        <!-- Actions -->
        <section>
            <ul class="actions vertical">
                @if($errors->any())
                    <li class="errors">
                        @foreach($errors->all() as $error)
                            <p>
                                {{$error}}
                            </p>
                        @endforeach
                    </li>
                @endif
                <li><h3>Login</h3></li>
                <li>
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <input value="{{old('username')}}" type="text" name="username" placeholder="Username"><br>
                        <input type="password" name="password" placeholder="Password"><br>
                        <input type="submit" class="button big fit" value="Log In">
                    </form>
                </li>

                <li><h3>Registration</h3></li>

                @if($errors->any())
                    <li class="errors">
                        @foreach($errors->all() as $error)
                            <p>
                                {{$error}}
                            </p>
                        @endforeach
                    </li>
                @endif

                <li>
                    <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input value="{{old('username')}}" type="text" name="username" placeholder="Username"><br>
                        <input type="password" name="password" placeholder="Password"><br>
                        <input type="password" name="re_password" placeholder="Repeat Password"><br>
                        <input style="opacity:1; appearance: auto; width: 15px; height: 15px;" type="checkbox"
                               name="policy" placeholder="Accept Policy"><br>
                        <input type="file" name="file"><br><br>
                        <input type="submit" class="button big fit" value="Sign up">
                    </form>
                </li>
            </ul>
        </section>
    @endguest

    @auth()
        <!-- Links -->
        <section>
            <ul class="links">
                <li>
                    <a href="{{route('article.create')}}">
                        <h3>Add Post</h3>
                    </a>
                </li>
                <li>
                    <a href="#"><h3>Profile</h3></a>
                </li>
                @if(Auth::user()->role === 'admin')
                <li>
                    <a href="#"><h3>Admin Panel</h3></a>
                </li>
                @endif
                <li>
                    <a href="{{route('logout')}}"><h3>Log out</h3></a>
                </li>
            </ul>
        </section>
    @endauth
</section>
