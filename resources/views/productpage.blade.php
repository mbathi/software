<html>

  <head>

    <link href="{{ asset('css/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/css/ken-burns.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/css/animate.min.css') }}" type="text/css" media="all" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="ONLINE SHOPPING">
    <script type="application/x-javascript">
      addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
      }, false);

      function hideURLbar() {
        window.scrollTo(0, 1);
      }

    </script>
    <script src="{{ asset('js/js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/starrr.js') }}"></script>
    

    <link href="//fonts.googleapis.com/css?family=Cagliostro" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
    <style type="text/css">
      body {
        background-color: #303030;
        /* fallback for old browsers */
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

    </style>

  </head>

  <body bgcolor="#d6ebd9">
    <div class="header">
      <div class="container">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <div class="navbar-brand">
                <h1><a href="{{ url('/') }}">Online Shopping</a></h1>
              </div>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <nav class="link-effect-4" id="link-effect-4">
                <ul class="nav navbar-nav">
                  <!--<li><a href="home.html"><span data-hover="Home">Home</span></a></li>-->
                  <!--<li><a href="sign-up.php"><span data-hover="Register">Register</span></a></li>-->
                  <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ isset(Auth::user()->name) ? Auth::user()->name : '' }} <span class="caret"></span>
                                </a>

                                <div>
                                    <a class="dropdown-item" style='display: block;' href="{{ url('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                </ul>
              </nav>
            </div>
          </div>
        </nav>
      </div>
    </div>







    <title>Men's Wear</title>
    <style type="text/css">
      table,
      tr,
      td {
        border-style: solid;
        border-color: grey;
        border-collapse: collapse;
        padding: 10px;
        max-width: 1000px;
        background-color: #b3f3ef;
        font-family: Helvetica;
        font-weight: bold;
      }

      th {
        padding: 30px;
      }

      td input {
        margin-right: 5px;
        margin-left: auto;
      }

      td p {
        font-family: verdana;
        font-weight: normal;
        color: blue;
      }

      div.box {
        width: 350px;
        height: 350px;
        border-style: solid;
        border-radius: 15px;
        border-color: grey;
        padding: 25px;
        margin: 5px;
        text-align: center;
        background-color: #d6ebd9;
      }

      div.box img {
        width: 100%;
        height: 100%;
        -webkit-transition-duration: 0.4s;
        /* Safari */
        transition-duration: 0.5s;
      }

      div.box img:hover {
        transform: scale(1.5);
      }

      div.box input {
        text-align: center;
        align-content: center;
        float: center;
        background-color: #4CAF50;
        -webkit-transition-duration: 0.4s;
        /* Safari */
        transition-duration: 0.4s;
      }

      div.box input:hover {
        background-color: #367477;
        color: black;
      }

      div.re {
        font-family: verdana;
        font-weight: normal;
        color: black;
      }

    </style>


    <br><br>
    <!--<div class='page'>-->
    <!--<div class='content'>-->
    
      <input type="hidden" name="pid" value=" ">
      <input type="hidden" name="username" value="{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}">
      @foreach($product as $p)
      <table align="center">
        <tbody>
          <tr>
            <th rowspan="100">
              <div class="box"><img src="{{ asset('images/'.$men.'/'.$p->image.'') }}" alt="11 "></div>
              <h5 align="center">(hover over image to zoom in)</h5>
            </th>
          </tr>
          <tr>
            <td><b>Name</b></td>
            <td>{{$p->pname}}</td>
          </tr>
          <tr>
            <td><b>Price</b></td>
            <td><b>{{$p->price}}</b></td>
          </tr>
          <tr>
            <td><b>Details</b></td>
            <td>{{$p->info}}</td>
          </tr>
          <tr>
            <td>Rating</td>
            <td>
              <span class="glyphicon glyphicon-star-empty"></span>
             {{--  <input type="hidden" name="rating" id="ratings">
              <div class="stars starrr" data-rating="{{Input::old('rating',0)}}"></div>
                    <a href="#" class="btn btn-danger btn-sm" id="close-review-box" style="display:none; margin-right:10px;"> <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                    <button class="btn btn-success btn-lg" type="submit">Save</button>
                  </div> --}}
            </td>
          </tr>
          {{-- $('.starrr').on('starrr:change', function(e, value){
        ratingsField.val(value);
      }); 
      .stars {
        margin: 20px 0;
        font-size: 24px;
        color: #d17581;
      }
      --}}
          <tr>
            <td>Quantity</td>
            <td>
              <form id="Quantity" action="{{ url('/order') }}" method="post">
                {{-- {{ csrf_token() }} --}}
              <input type="text" name="order">
              <input type="hidden" name="pid" value="{{ $p->pid }}">
              <input type="hidden" name="username" value="{{isset(Auth::user()->name) ? Auth::user()->name : ''}}">
              {{-- <input type="" name=""> --}}
              <input type="hidden" name="pname" value="{{ $p->pname }}">
              <input type="hidden" name="price" value="{{ $p->price }}">
              <input form='Quantity' type="submit" class="btn btn-primary" name="submit" value="Place Order">
              </div>
              </form>

            </td>
          </tr>
        </tbody>
      </table>
      @endforeach
      
      <table align="center" style="min-width: 1000;">
        <tbody>
          <tr>
            <td style="text-align: center;">
                REVIEWS
              </td>
            </tr>
            @if(isset($review))
            @foreach($review as $review)
            <tr>
              <td>
            {{ $review->username }} : {{ $review->review }}
          </td>
        </tr>
        @endforeach
        @endif
      </tbody>
    </table>
    
    <br><br><br>
    {{-- <div class="well" id="reviews-anchor">
              <div class="row">
                <div class="col-md-12">
                  @if(Session::get('errors'))
                    <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <h5>There were errors while submitting this review:</h5>
                       @foreach($errors->all('<li>:message</li>') as $message)
                          {{$message}}
                       @endforeach
                    </div>
                  @endif
                  @if(Session::has('review_posted'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5>Your review has been posted!</h5>
                    </div>
                  @endif
                  @if(Session::has('review_removed'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5>Your review has been removed!</h5>
                    </div>
                  @endif
                </div>
              </div>
              <div class="text-right">
                <a href="#reviews-anchor" id="open-review-box" class="btn btn-success btn-green">Leave a Review</a>
              </div>
              <div class="row" id="post-review-box" style="display:none;">
                <div class="col-md-12">
                  {{Form::open()}}
                  {{Form::hidden('rating', null, array('id'=>'ratings-hidden'))}}
                  {{Form::textarea('comment', null, array('rows'=>'5','id'=>'new-review','class'=>'form-control animated','placeholder'=>'Enter your review here...'))}}
                  <div class="text-right">
                    <div class="stars starrr" data-rating="{{Input::old('rating',0)}}"></div>
                    <a href="#" class="btn btn-danger btn-sm" id="close-review-box" style="display:none; margin-right:10px;"> <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                    <button class="btn btn-success btn-lg" type="submit">Save</button>
                  </div>
                {{Form::close()}}
                </div>
              </div>

              @foreach($reviews as $review)
              <hr>
                <div class="row">
                  <div class="col-md-12">
                    @for ($i=1; $i <= 5 ; $i++)
                      <span class="glyphicon glyphicon-star{{ ($i <= $review->rating) ? '' : '-empty'}}"></span>
                    @endfor

                    {{ $review->user ? $review->user->name : 'Anonymous'}} <span class="pull-right">{{$review->timeago}}</span> 
                    
                    <p>{{{$review->comment}}}</p>
                  </div>
                </div>
              @endforeach
              {{ $reviews->links(); }}
            </div>
        </div>
 --}}
    <!--</div>-->
    <!--</div>-->


    <br>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style type="text/css">
      div.social {
        margin-bottom: 0px;
      }

      div.social a {
        width: 32px;
        height: 32px;
        background: #F58703;
        display: inline-block;
        margin: 0 0.2em;
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -o-transition: 0.5s all;
        -ms-transition: 0.5s all;
        border-radius: 20px;
      }

      div.social i {
        padding-top: 20%;
      }

    </style>



    <div class="copy-section">
      <div class="container">
        <div class="social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </div>

  </body>

</html>
