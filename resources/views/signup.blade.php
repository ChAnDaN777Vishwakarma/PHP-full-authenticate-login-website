<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <title>Sign-up</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            width:100vw;
            height: 100vh;
            /* border:3px solid black; */
            background-color: rgb(150, 202, 202);
        }
        .container1{
            display: flex;
            justify-content: center;
            align-content: center;
            border:3px solid red;
            padding: 34px;
            background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));  /* flex-direction: space-between; */
        }
        .container2{
            display: flex;
            justify-content: center;
            align-content: center;
            padding: 50px;
            margin-right: 23px;
           
            /* flex-direction: space-between; */
        }
        .image{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 300px;
        }
        form input{
          width:150%;
          padding: 5px;
          border-radius: 6px;
        }
        #signin{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 50px;
            background-color: #d5d56b;
        }
        #signin:hover{
            color: white;
            background: #6bc3d5;
            border-radius: 5px;
        }
        span{
            font-size: 15px;
            color: rgb(168 16 13);
        }
    </style>
</head>
<body>
    {{-- <div class="containeer">
        <div class="containeer1">
            
           </div>
        <div class="">
            <ul>
                
                <li><a href="{{url('/login')}}">sign-in</a></li>
              </ul>
           </div>

    </div> --}}
    <div class="container">
        <div id="signin">
            <ul>            
                <li><a href="{{url('/login')}}">sign-in</a></li>
              </ul>
           </div>
        <div class="container1">
            <h2>Sign-up</h2>
            <div class="container2">
                <form class='form' method="POST">
                    @csrf
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname">
                    <Span>
                        @error('fname')
                       {{$message}}
                    @enderror
                    </Span>
                    <br><br>
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname">
                    <span>
                        @error('lname')
                        {{$message}}
                    @enderror
                    </span>
                  <br><br>
                    <label for="fname">Email</label><br>
                    <input type="email" id="fname" name="email">
                    <span>
                        @error('email')
                        {{$message}}
                     @enderror
                    </span>
                  
                    <br><br>
                    <label for="lname">Password</label><br><br>
                    <input type="password" id="lname" name="password">
                    <span>
                        @error('password')
                        {{$message}}
                     @enderror<br><br>
                    </span>
                  
                    <label for="fname">Confirm Password</label><br>
                    <input type="password" id="fname" name="confirm_password">
                    <span>
                        @error('confirm_password')
                        {{$message}}
                     @enderror
                    </span>
                   <br><br><br><br>
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
