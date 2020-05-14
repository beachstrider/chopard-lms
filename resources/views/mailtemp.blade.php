<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chopardparfumtraining</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Roboto&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: 'Roboto', sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        a{
            color: #fff;
            font-size: 24px;
        }
        .main{
            background-image: url('/assets/img/mail/Image_004.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .wrapper{
            padding: 0 200px; 
        }
        .pass-text{
            color: #cc9966;
            display: block;
        }
        .header{
            position: relative;
            height: 200px;
            text-align: center;
        }
        .browser-link{
            display: block;
            color: #9BA6BC;
            padding-top: 20px;
            text-align: right;
        }
        .browser-link:hover{
            color: #fff;
        }
        #logo-img{
            
            width: 400px;
            height: 140px;
        }
        .content{
            background: #fff;
            border-radius: 5px;
            text-align: center;
            padding-top: 80px;
        }
        .banner{
            width: 100%;
            margin-top: 80px;
        }
        .title{
            font-size: 50px;
            font-family: 'Cormorant Garamond', serif;
        }
        .content p{
            font-size: 24px;
            margin: 0;
        }
        .golden{
            color: #cc9966;
        }
        .line-golden{
            margin: 20px 240px 40px;
            height: 1px;
            background-color: #cc9966;
        }
        .text-team{
            font-family: 'Cormorant Garamond', serif;
            font-style: italic;
        }
        .footer{
            text-align: center;
            padding: 80px;
        }
        .footer > a{
            margin-right: 40px;
        }
        .footer span{
            color: #fff;
            font-size: 20px;
        }

        @media(max-width: 768px){
            .wrapper{
                padding: 0 20px;
            }
            .title{
                font-size: 32px;
            }
            .header{
                height: 140px;
            }
            #logo-img{
                width: 230px;
                height: 80px;
            }
            .content{
                margin-top: -20px;
                padding-top: 30px;
            }
            .line-golden {
                margin: 10px 40px 20px;
            }
            .banner {
                margin-top: 40px;
            }
            .footer {
                padding: 20px 0;
            }
            .footer > a{
                display: block;
                margin-right: 0;
            }
            a{
                font-size: 20px;
            }
            .content p{
                font-size: 20px;
            }
            a.click-here{
                display: inline-block;
            }
        }

    </style>
</head>

<body>
<div class="main">
    <div class="wrapper">
        <a class="browser-link" href="#">View in browser</a>
        <div class="header">
            <img id="logo-img" src="/assets/img/mail/golden_logo.png">
        </div>
        <div class="content">
            <div>
                <div class="title">Welcome to the Chopard Parfums Training</div>
                <div class="title golden">Catherine Sonolet!</div>
                <div class="line-golden"></div>
                <p>Your registered email is:</p>
                <p class="golden">Catherinesonolet@gmail.com</p>
                <br>
                <p>Please click on the below link to verify your email account and<br>
                login with this default password.<span class="pass-text">abcdef</span>Once you log in, you will be able to change your password.</p>
                <br>
                <a href="#" class="golden" style="text-decoration: underline;">Verify Email</a>
                <br><br>
                <p>Enjoy your journey,</p>
                <p class="text-team">Chopard Parfums Training Team</p>
            </div>
            <img class="banner" src="assets/img/mail/Image_001.jpg">
        </div>
        <div class="footer">
            <a href="#">Chopard Training Site</a><a href="#">Chopard Site</a><br><br>
            <span>If you can't see correctly this e-mail, please </span><a class="click-here" href="#">click here</a>
        </div>
    </div>
</div>

</body>

</html>

