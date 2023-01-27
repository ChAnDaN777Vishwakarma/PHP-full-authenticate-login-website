<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <title>Sign-in</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            width:100vw;
            height: 100vh;
            border:3px solid black;
        }
        .container1{
            display: flex;
            justify-content: center;
            align-content: center;
            border:3px solid red;
            padding: 34px;
            /* flex-direction: space-between; */
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
          width:170%;
          padding: 5px;
        }
    </style>
</head>
<body>
    <div class="containeer">
        <div class="containeer1">
            
           </div>
        <div class="">
            <ul>
                
                <li><a href="{{url('/signup')}}">sign-up</a></li>
              </ul>
           </div>

    </div>
    <div class="container">
        <div class="container1">
            <h2>Sign-in</h2>
            <div class="container2">
                <form class='form'>
                    <label for="fname">user name:</label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label for="fname">Email</label><br>
                    <input type="email" id="fname" name="fname"><br>
                    <label for="lname">Password</label><br>
                    <input type="password" id="fname" name="fname"><br><br>
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
