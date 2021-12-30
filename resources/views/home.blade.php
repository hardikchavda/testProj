@extends('layouts.skeleton')
@section('title')
    Home
@endsection
@section('bodyclass')
    homepage
@endsection
@section('mainbody')
    <!-- Banner -->
    <section id="banner">
        {{-- xss ATTACKS --}}
        <h2 style="background: {{ $data1 }}">Hi. You're looking at <strong> {{ $data['name'] }}</strong>.
            and Lives in {{ isset($data['address']) ? $data['address'] : 'address' }}

            {!! $script !!}
            {{-- Blade Conditions --}}
            @if (!$script)
                <p>Yes it is available</p>
            @else
                <p>It is not available</p>
            @endif

            @unless(!$script)
                <h3>Hello it is unlsess</h3>
            @endunless
            {{-- Blade Loops --}}
            @for ($i = 0; $i < 10; $i++)
                The current value is {{ $i }} <br>
            @endfor
            @foreach ($users as $user)
                <p>This is user {{ $user['id'] }}</p>
            @endforeach

            <table>
                <tr>
                    <td>
                        Address
                    </td>
                    <td>
                        Age
                    </td>
                    <td>
                        Contact
                    </td>
                </tr>
                @forelse ($dataTable as $data )
                    <tr>
                        <td>
                            {{ $data->address }}
                        </td>
                        <td>
                            {{ $data->age }}
                        </td>
                        <td>
                            {{ $data->contact }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>
                            Arrays is Empty
                        </td>
                    </tr>
                @endforelse
            </table>
        </h2>
        <header>
            <p>
                A (free) responsive site template by <a href="http://html5up.net">HTML5 UP</a>.
                Built with HTML5/CSS3 and released under the <a href="http://html5up.net/license">CCA</a> license.
            </p>
        </header>
    </section>

    <!-- Carousel -->
    <section class="carousel">
        <div class="reel">

            <article>
                <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                <header>
                    <h3><a href="#">Pulvinar sagittis congue</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                <header>
                    <h3><a href="#">Fermentum sagittis proin</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                <header>
                    <h3><a href="#">Sed quis rhoncus placerat</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                <header>
                    <h3><a href="#">Ultrices urna sit lobortis</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
                <header>
                    <h3><a href="#">Varius magnis sollicitudin</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                <header>
                    <h3><a href="#">Pulvinar sagittis congue</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                <header>
                    <h3><a href="#">Fermentum sagittis proin</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                <header>
                    <h3><a href="#">Sed quis rhoncus placerat</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                <header>
                    <h3><a href="#">Ultrices urna sit lobortis</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
                <header>
                    <h3><a href="#">Varius magnis sollicitudin</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

        </div>
    </section>

    <!-- Main -->
    <div class="wrapper style2">

        <article id="main" class="container special">
            <a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
            <header>
                <h2><a href="#">Sed massa imperdiet magnis</a></h2>
                <p>
                    Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
                    pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
                </p>
            </header>
            <p>
                Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
                posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
                sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
                mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
                lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
                consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
                interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
                natoque aenean scelerisque.
            </p>
            <footer>
                <a href="#" class="button">Continue Reading</a>
            </footer>
        </article>

    </div>

    <!-- Features -->
    <div class="wrapper style1">

        <section id="features" class="container special">
            <header>
                <h2>Morbi ullamcorper et varius leo lacus</h2>
                <p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
            </header>
            <div class="row">
                <article class="col-4 col-12-mobile special">
                    <a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Gravida aliquam penatibus</a></h3>
                    </header>
                    <p>
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer
                        interdum.
                    </p>
                </article>
                <article class="col-4 col-12-mobile special">
                    <a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Sed quis rhoncus placerat</a></h3>
                    </header>
                    <p>
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer
                        interdum.
                    </p>
                </article>
                <article class="col-4 col-12-mobile special">
                    <a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Magna laoreet et aliquam</a></h3>
                    </header>
                    <p>
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer
                        interdum.
                    </p>
                </article>
            </div>
        </section>

    </div>
@endsection
