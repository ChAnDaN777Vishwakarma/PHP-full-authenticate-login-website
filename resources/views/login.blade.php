<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>sign-in</title>
   
</head>
<body>
    {{-- <div class="containeer">
        <div class="containeer1">
        </div>
        
        <div class="">
            <ul>
                
                <li><a href="{{url('/signup')}}">sign-up</a></li>
              </ul>
           </div>

    </div> --}}
    <div class="contaiiner">
        <div class="signup">
            <ul>        
                <li><a href="{{url('/signup')}}">sign-up</a></li>
              </ul>
           </div>
        <div class="contaiiner1">
            <h1>Sign-in</h1>
            <div class="contaiiner2">
                <form class='form' method="POST">
                    @csrf
                    <label for="fname">user name:</label><br>
                    <input type="text" id="fname" name="fname">
                    <Span>
                        @error('fname')
                       {{$message}}
                    @enderror
                    </Span><br>
                    <label for="fname">Email</label><br>
                    <input type="email" id="fname" name="email">
                    <Span>
                        @error('email')
                       {{$message}}
                    @enderror
                    </Span><br>
                    <label for="lname">Password</label><br>
                    <input type="password" id="fname" name="password">
                    <Span>
                        @error('password')
                       {{$message}}
                    @enderror
                    </Span><br><br>
                    <button type="submit">submit</button><br>
                  </form>
            </div>
            <div class="image">
                <form>
                 <h2>image</h2>
                  </form>
            </div>
           
        </div>
       
    </div>

</body>
</html>

</body>
</html>
