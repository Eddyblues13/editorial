<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=1024"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materials Characterization - Confirm Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: verdana, geneva, arial, helvetica, sans-serif;
        }

        body {
            background-color: white;
            font-size: 13px;
        }

        .top-bar {
            background-color: #003366;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .site-title {
            font-size: 1.5em;
        }

        .user-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .nav-menu {
            background-color: #f0f0f0;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
            padding: 5px 15px;
            margin-right: 10px;
        }

        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 24px;
            background-color: #003366;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            text-align: left;
        }

        .toggle-bar {
            display: none;
            background-color: #f0f0f0;
            padding: 8px 15px;
            justify-content: space-between;
            align-items: center;
        }

        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 24px;
            background: none;
            border: none;
            padding: 5px;
            color: #333;
        }

        .main-container {
            display: flex;
            justify-content: start;
            padding: 10px;
            overflow-x: auto;
        }

        .container-title h3 {
            display: block;
            font-size: 1rem;
            margin: 10px 20px;
            font-weight: bold;
            color: #000033;
        }

        .container {
            width: 600px;
            margin: 0px 20px;
            background-color: #f4f4f4;
            padding: 20px;
            border: #cccccc 1px solid;
        }

        .title {
            font-weight: bold;
            margin-bottom: 20px;
            color: #000033;
        }

        .info-box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        .info-box h3 {
            font-size: 1em;
            margin-bottom: 15px;
            font-weight: normal;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 180px 1fr;
            gap: 5px;
        }

        .label {
            text-align: right;
            color: #666;
        }

        .privacy-section {
            border-top: 1px solid #FF0000;
            border-bottom: 1px solid #FF0000;
            padding-top: 20px;
            margin-bottom: 20px;
        }

        .privacy-section h3 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .privacy-text {
            font-size: 1em;
            margin-bottom: 15px;
        }

        .checkbox-group {
            margin-bottom: 15px;
        }

        .checkbox-label {
            display: flex;
            gap: 5px;
            font-size: 1em;
            margin-bottom: 10px;
            align-items: flex-start;
        }

        .checkbox-label input[type="checkbox"] {
            margin-top: 2px;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .button {
            padding: 5px 10px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
            cursor: pointer;
            font-size: 0.9em;
        }

        .button:hover {
            background-color: #e5e5e5;
        }

        a {
            color: #0066cc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        @media screen and (max-width: 991px) {

            .nav-menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 150px;
                /* Adjust this value to account for the new button row */
                left: 0;
                right: 0;
                background-color: #f0f0f0;
                z-index: 1000;
            }

            body {
                font-size: small;
            }

            .nav-menu.active {
                display: flex;
            }

            .nav-menu a {
                padding: 10px 20px;
                margin: 0;
                border-bottom: 1px solid #ddd;
            }

            .menu-toggle {
                display: block;
            }

            .toggle-bar {
                display: flex;
            }

            .container-title h3 {
                display: block;
                font-size: 0.5rem;
                margin: 5px 5px;
                font-weight: bold;
                color: #000033;
            }

            .container {
                margin: 5px 5px;

            }
        }

        @media screen and (max-width: 600px) {
            .container-title {
                margin-right: 20px;
                font-size: 3px;
            }

            .container {
                margin-left: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="top-bar">
        <div class="logo-section">
            <div class="logo"><img src="{{asset('logo1.png')}}" width="35" height="35" alt="logo"></div>
            <div class="site-title">Materials Characterization</div>
        </div>
        <div class="user-section">
            <a href="{{route('login')}}" style="color: white; text-decoration: none;">Login</a>
            <span>|</span>
            <a href="{{route('register')}}" style="color: white; text-decoration: none;">Login</a>
        </div>
    </div>

    <div class="toggle-bar">
        <button class="menu-toggle">☰</button>
    </div>

    <nav class="nav-menu">
        <a href="#">Home</a>
        <a href="#">Main Menu</a>
        <a href="#">Submit a Manuscript</a>
        <a href="#">About</a>
        <a href="#">Help</a>
    </nav>
    <div class="main-container">
        <div class="container-title">
            <h3>Confirm Registration</h3>
        </div>
        <div class="container">
            <div class="info-box">
                <div class="title">Please confirm the following very important information</div>
                <div class="info-grid">
                    <div class="label">Given/First Name:</div>
                    <div>{{ $user->first_name }}</div>

                    <div class="label">Family/Last Name:</div>
                    <div>{{ $user->last_name }}</div>

                    <div class="label">Username:</div>
                    <div>{{ $user->username }}</div>

                    <div class="label">E-mail Address:</div>
                    <div>{{ $user->email }}</div>

                    <div class="label">Country or Region:</div>
                    <div>{{ $user->country }}</div>
                </div>
            </div>

            <div class="privacy-section">
                <h3>Privacy Policy</h3>
                <p class="privacy-text">
                    Our staff at Elsevier B.V. and its affiliated companies worldwide as well as societies
                    whose journals we publish, if applicable, will be contacting you concerning the
                    publishing of your article and occasionally for marketing purposes.
                </p>

                <form action="{{ route('registration.step3.submit') }}" method="POST">
                    @csrf
                    <div class="checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="marketing_opt_out">
                            <span>We respect your privacy. Please tick the box if you do not wish to receive news,
                                promotions and special offers about our products and services.</span>
                        </label>

                        <label class="checkbox-label">
                            <input type="checkbox" name="accept_terms" required>
                            <span>I accept the Publisher's <a href="#">Terms and Conditions</a> and
                                <a href="#">Privacy Policy</a> and the <a href="#">Aries Privacy Policy</a>.</span>
                        </label>
                    </div>

                    <p class="privacy-text">
                        If the information is correct and you wish to complete this registration, click the
                        'Continue' button below.
                    </p>

                    <div class="button-group">
                        <a href="" class="button">&lt;&lt; Previous Page</a>
                        <button type="submit" class="button">Continue &gt;&gt;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.nav-menu');

        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
      });
    </script>
</body>

</html>