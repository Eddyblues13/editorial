<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=1200, initial-scale=1.0">
    <title>Materials Characterization</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: white;
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
            border-radius: 50%;
            color: #003366;
            font-weight: bold;
        }

        .site-title {
            font-size: 1.5em;
        }

        .auth-links {
            display: flex;
            gap: 15px;
        }

        .auth-links a {
            color: white;
            text-decoration: none;
        }

        .nav-menu {
            background-color: #e6e6e6;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
            padding: 5px 15px;
            margin-right: 10px;
        }

        .container {
            display: flex;
            padding: 20px;
            gap: 50px;
            max-width: 800px;
            margin: 0 40px;
        }

        .left-column {
            width: 200px;
            flex-shrink: 0;
        }

        .main-content {
            width: 75%;
            height: 100vh;
            flex-shrink: 0;
        }

        .page-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .pre-registration-text {
            font-size: 12px;
            line-height: 1.5;
        }

        .pre-registration-text a {
            color: #0066cc;
            text-decoration: none;
        }

        .registration-box {
            border: 1px solid #ccc;
            background: #f0f0f0;
        }

        .registration-box-title {
            background-color: white;
            padding: 8px;
            border-bottom: 1px solid #ccc;
            font-weight: bold;
            font-size: 12px;
        }

        .registration-box-content {
            padding: 15px;
            font-size: 12px;
        }

        .orcid-section {
            margin-bottom: 20px;
            /* padding-bottom: 10px; */
        }

        .orcid-button {
            display: flex;
            margin: auto;
            /* align-items: center; */
            justify-content: center;
            gap: 10px;
            background: rgb(220, 220, 220);
            border: 1px solid #ccc;
            padding: 5px 10px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 3px;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
        }

        .form-group label {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
            color: rgb(204, 0, 0);

        }

        .required {
            color: rgb(204, 0, 0);
        }

        .form-group input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
        }

        .email-group {
            display: flex;
            gap: 10px;
            align-items: start;
        }

        .continue-btn {
            /* padding: px; */
            width: 200px;
            background: rgb(220, 220, 220);
            border: 1px solid #ccc;
            border-radius: 3px;
            cursor: pointer;
        }

        .warning-box {
            border: 1px solid rgb(204, 0, 0);
            border-left: none;
            border-right: none;
            padding: 15px;
            margin: 20px 0;
            font-size: 12px;
            line-height: 1.5;
        }

        .button-group {
            display: flex;
            gap: 10px;
        }

        .button-group button {
            padding: 3px 10px;
            background: rgb(220, 220, 220);
            border: 1px solid #ccc;
            border-radius: 3px;
            cursor: pointer;
        }

        .info-icon {
            display: inline-block;
            width: 16px;
            height: 16px;
            background: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 50%;
            text-align: center;
            line-height: 16px;
            font-size: 12px;
            margin-left: 5px;
            cursor: help;
        }

        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left-column,
            .main-content {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="top-bar">
        <div class="logo-section">
            <div class="logo"><img src="{{asset('logo1.png')}}" width="35" height="35" alt="Logo"></div>
            <div class="site-title">Materials Characterization</div>
        </div>
        <div class="auth-links">
            <a href="{{route('login')}}">Login</a>
            <span>|</span>
            <a href="{{route('register')}}">Register</a>
        </div>
    </div>

    <nav class="nav-menu">
        <a href="#">Home</a>
        <a href="#">Submit a Manuscript</a>
        <a href="#">About</a>
        <a href="#">Help</a>
    </nav>

    <div class="container">
        <div class="left-column">
            <h1 class="page-title">Pre-registration Page</h1>
            <div class="pre-registration-text">
                To register to use the Editorial Manager system, please enter the requested information or use your
                ORCID record if this option is available. Upon successful registration, you will be sent an e-mail with
                instructions to verify your registration.<br><br>
                For more details see <a href="#">Registration Help</a>.
            </div>
        </div>

        <div class="main-content">
            <div class="registration-box">
                <div class="registration-box-title">Choose a Registration Method</div>
                <div class="registration-box-content">
                    <div class="orcid-section">
                        <div style="font-weight: bold;">Retrieve your details from the ORCID registry:</div>
                        <button class="orcid-button">
                            <img src="orcid-icon.png" alt="ORCID" width="20">
                            Use My ORCID Record
                        </button>

                    </div>

                    <div style="font-weight: bold; padding-bottom: 10px;">Or type in your details and continue to
                        register without using ORCID:</div>

                    <div class="registration-step-one">
                        <h2>Step 1: Personal Information</h2>
                        <form action="{{ route('registration.step1.submit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="first_name">
                                    <span>Given/First Name</span>
                                    <span class="required">*</span>
                                </label>
                                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                                    class="form-control @error('first_name') is-invalid @enderror"
                                    placeholder="Enter your first name" required>
                                @error('first_name')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="last_name">
                                    <span>Family/Last Name</span>
                                    <span class="required">*</span>
                                </label>
                                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                                    class="form-control @error('last_name') is-invalid @enderror"
                                    placeholder="Enter your last name" required>
                                @error('last_name')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    <span>E-mail Address</span>
                                    <span class="required">*</span>
                                </label>
                                <div class="email-group">
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Enter your email address" required>
                                    <button type="submit" class="continue-btn">Continue >></button>
                                    @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="warning-box">
                        WARNING - If you think you already have an existing registration of any type (Author, Reviewer,
                        or Editor) in this system, please DO NOT register again. This will cause delays or prevent the
                        processing of any review or manuscript you submit. If you are unsure if you are already
                        registered, click the 'Forgot Your Login Details?' button. If you are registering again because
                        you want to change your current information, changes must be made to your existing information
                        by clicking the 'Update My Information' link on the menu bar. If you are unsure how to perform
                        these functions, please contact the editorial office.
                    </div>

                    <div class="button-group">
                        <button>Cancel</button>
                        <button>Forgot Your Login Details?</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>