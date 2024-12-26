<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1200">
    <title>Materials Characterization</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <div class="logo-circle">em</div>
                <h1>Materials Characterization</h1>
            </div>
            <div class="auth-links">
                <a href="#">Login</a>
                <a href="#">Register</a>
            </div>
            <nav>
                <a href="#">Home</a>
                <a href="#">Submit a Manuscript</a>
                <div class="dropdown">
                    <span>About ▼</span>
                    <div class="dropdown-content">
                        <a href="#">Journal Info</a>
                        <a href="#">Editorial Board</a>
                    </div>
                </div>
                <div class="dropdown">
                    <span>Help ▼</span>
                    <div class="dropdown-content">
                        <a href="#">User Guide</a>
                        <a href="#">Support</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="welcome-banner">
            <h2>Welcome to Editorial Manager® for<br>Materials Characterization</h2>
        </div>

        <div class="login-section">
            <div class="image-section">
                <img src="material.jpg" alt="Materials Characterization Logo">
            </div>
            <div class="login-form">
                <div class="special-char-link">
                    <a href="#" class="text-blue-600">Insert Special Character</a>
                </div>

                <div class="form-container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-header">Please Enter the Following</div>
                
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" value="{{ old('username') }}">
                            @error('username')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password">
                            @error('password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                
                        <div class="login-buttons">
                            <button type="submit" name="role" value="author" class="login-btn">Author Login</button>
                            <button type="submit" name="role" value="reviewer" class="login-btn">Reviewer Login</button>
                            <button type="submit" name="role" value="editor" class="login-btn">Editor Login</button>
                            <button type="submit" name="role" value="publisher" class="login-btn">Publisher Login</button>
                        </div>
                
                        @if(session('error'))
                            <div class="text-red-500">
                                {{ session('error') }}
                            </div>
                        @endif
                    </form>
                
                    <div class="orcid-section">
                        <p>Or Login via:
                            <img src="https://orcid.org/sites/default/files/images/orcid_16x16.png" alt="ORCID icon" class="orcid-icon">
                            <a href="#" class="text-blue-600">What is ORCID?</a>
                        </p>
                        <div class="login-links">
                            <a href="#" class="text-blue-600">Send Login Details</a>
                            <a href="#" class="text-blue-600">Register Now</a>
                            <a href="#" class="text-blue-600">Login Help</a>
                        </div>
                    </div>
                
                    <div class="orcid-notice">
                        <p><strong>NEW: Login via ORCID</strong></p>
                        <p>Please note that in addition to logging in via your EM username and password,
                            you can now also log into this journal using your ORCID username and password.
                            Visit our <a href="#" class="text-blue-600">Support Hub page</a> for further support.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="instructions-grid">
            <div class="instructions-box">
                <h3>Instructions for Authors</h3>
            </div>
            <div class="instructions-box">
                <h3>Instructions for Reviewers</h3>
            </div>
            <div class="instructions-box">
                <h3>About the Journal</h3>
            </div>
            <div class="instructions-box">
                <h3>Contact Author and<br> Reviewer Support</h3>
            </div>
        </div>
        <div class="docs">
            <p><b>First-time users:</b> Please click on the word "Register" in the navigation bar at the top of the page
                and enter the requested information. Upon successful registration, you will be sent an e-mail with
                instructions to verify your registration. NOTE: If you received an e-mail from us with an assigned user
                ID and password, DO NOT REGISTER AGAIN. Simply use that information to login. Usernames and passwords
                may be changed after registration (see instructions below).</p>

            <p><b>users:</b> Please click the "Login" button from the menu above and proceed as appropriate.</p>

            <p><b>Authors:</b> Please click the "Login" button from the menu above and login to the system as "Author."
                You may then submit your manuscript and track its progress through the system.</p>


            <p><b>Reviewers:</b> Please click the "Login" button from the menu above and login to the system as
                "Reviewer." You may then view and/or download manuscripts assigned to you for review or submit your
                comments to the editor and the authors.</p>

            <p><b>change your username and/or password:</b> Once you are registered, you may change your contact
                information, username and/or password at any time. Simply log in to the system and click on "Update My
                Information" in the navigation bar at the top of the page.</p>

        </div>
    </main>

    <script>
        document.querySelectorAll('.dropdown > span').forEach(function(element) {
            element.addEventListener('click', function() {
                this.parentElement.querySelector('.dropdown-content').style.display = 
                    this.parentElement.querySelector('.dropdown-content').style.display === 'block' ? 'none' : 'block';
            });
        });


    </script>
</body>

</html>