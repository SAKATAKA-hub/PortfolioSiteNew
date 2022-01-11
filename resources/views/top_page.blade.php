<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.0.1">
        <title>Sakai Takahiro's Portfolio Site</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link href="{{asset('css/album.css')}}" rel="stylesheet">

        <link href="{{asset('css/index.css')}}" rel="stylesheet">

        <!-- favicon -->
        <link rel="icon" href="{{asset('storage/img/topimg/7777.png')}}">


    </head>
    <body>
        <header>
            <div class="navbar navbar-dark bg-dark shadow-sm navbar-expand-lg">
                <div class="container d-flex justify-content-between">
                    <a href="#" class="navbar-brand">
                        <small>Sakai Takahiro's</small>
                        <strong>Portfolio Site</strong>
                    </a>


                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About this site</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#profile">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#works">Works</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <main role="main">


            <section class="jumbotron text-center" id="top"
             style="background: url({{asset('storage/img/topimg/topimg0.jpg')}}) no-repeat center center/50%;"
            >
                <h2>
                    <small>Sakai Takahiro's</small><br>
                    <strong>Portfolio Site</strong>
                </h2>
            </section>




            <section class="jumbotron text-center" id="about">
                <div class="mask_container">
                    <h2 class="text-center mb-5">About this site</h2>
                    <p class="lead text-muted ">
                        閲覧いただきありがとうございます。<br>
                        <br>
                        このサイトは未経験から<br>
                        Webエンジニアを目指して活動する、<br>
                        酒井貴弘のポートフォリオサイトです。<br>
                        <br>
                        制作物として、Laravelで作成した<br>
                        Webアプリケーションを展示しています。<br>
                        <br>
                        よろしければご覧くださいませ。
                    </p>
                </div>
            </section>



            <section class="jumbotron text-center bg-light" id="profile">
                <div class="container">
                    <h2 class="text-center mb-5">Profile</h2>
                    <p class="lead text-muted">

                        <div class="mb-5">
                            <img src="{{asset('storage/img/topimg/7777.png')}}" alt="プロフィール画像" width="100px" height="100px" class="rounded-circle"><br><br>
                            <strong>酒井　貴弘</strong><br><br>
                            大学卒業後、飲食業界に就職。<br>
                            30代業界未経験からWebエンジニアを目指し活動中。
                        </div>

                        <div class="mb-5">
                            <strong>使用言語</strong><br>
                            HTML,CSS,JavaScript,PHP,<br>
                            Sass,BootSorap,GitHub,<br>
                            MySQL,XAMPP,AWS(S3)
                        </div>

                        <div class="mb-5">
                            <strong>使用フレームワーク</strong><br>
                            Laravel
                        </div>

                    </p>
                </div>
            </section>




            <section class="album py-5" id="works">
                <h2 class="text-center mb-5">Works</h2>
                <div class="container">
                    <div class="row">

                        @foreach ($works as $work)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <div style="width:100%;height:225px;overflow:hidden;">
                                    <img src="{{asset($work['image'])}}" alt="作品サムネイル" class="img-rounded card-img-top" width="100%" height="225">
                                </div>
                                <div class="card-body">
                                <p class="card-text">
                                    <strong>{{$work['title']}}</strong>
                                    <p>{{$work['body']}}</p>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{$work['app_path']}}"  class="btn btn-sm btn-outline-secondary">アプリ表示</a>
                                        <a href="{{$work['introduction_path']}}"  class="btn btn-sm btn-outline-secondary">紹介文</a>
                                        <a href="{{$work['github_path']}}"  class="btn btn-sm btn-outline-secondary">GitHub</a>
                                    </div>
                                    <!-- <small class="text-muted">9 mins</small> -->
                                </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>


        </main>




        <footer class="text-center bg-light">
            <p>&copy2021 SAKAI TAKAHIRO</p>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
