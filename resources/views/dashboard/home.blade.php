<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=1200, initial-scale=1.0"> -->
    <title>Materials Characterization</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
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

        .main-content {
            display: grid;
            grid-template-columns: 250px 1fr 300px;
            gap: 10px;
            padding: 20px;
            height: calc(100vh - 110px);
            overflow-y: auto;

        }

        .sidebar {
            background-color: white;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .main-section {
            background-color: white;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            color: #333;
            margin-bottom: 15px;
            font-size: 1.2em;
        }

        .submission-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .submission-link {
            color: #0066cc;
            text-decoration: none;
        }

        .count {
            background-color: #f0f0f0;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 0.9em;
        }

        .help-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background-color: #003366;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
        }

        .right-sidebar {
            max-height: 400px;
            display: flex;
            flex-direction: column;
            background-color: white;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            overflow: auto;
        }

        .right-sidebar::-webkit-scrollbar {
            width: 8px;
        }

        .right-sidebar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .right-sidebar::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        .right-sidebar::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .author-main {
            height: 300px;
        }

        .author-webinars hr {
            height: 3px;
            margin: 5px 0;
            background-color: #000;
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

        .contact-toggle {
            display: none;
            cursor: pointer;
            font-size: 24px;
            color: white;
            background: #003366;
            border: none;
            padding: 10px;
            width: 50px;
            text-align: center;
        }

        .contact-menu {
            display: none;
            position: absolute;
            top: 110px;
            right: 0;
            background-color: #003366;
            padding: 10px;
            border-radius: 0 0 0 4px;
            z-index: 1000;
        }

        .contact-menu p {
            color: white;
            margin-bottom: 10px;
        }

        .contact-menu.active {
            display: block;
        }

        .toggle-bar {
            display: none;
            background-color: #f0f0f0;
            padding: 8px 15px;
            justify-content: space-between;
            align-items: center;
        }

        .menu-toggle,
        .contact-toggle {
            display: none;
            cursor: pointer;
            font-size: 24px;
            background: none;
            border: none;
            padding: 5px;
            color: #333;
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

            .main-section {
                height: calc(100vh - 200px);
                width: 300px;
                overflow-y: auto;
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

            .menu-toggle,
            .contact-toggle {
                display: block;
            }

            .toggle-bar {
                display: flex;
            }

            .user-section {
                display: none;
            }

            .contact-menu {
                top: 150px;
                /* Adjust this value to match the nav-menu */
            }
        }

        @media screen and (min-width: 600px) and (max-width: 1024px) {
            .container {
                font-size: 15px;
            }
        }
    </style>
    <script src="https://kit.fontawesome.com/2b537d8d05.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="top-bar">
        <div class="logo-section">
            <div class="logo"><img src="{{asset('logo1.png')}}" width="35" height="35" alt="logo"></div>
            <div class="site-title">Materials Characterization</div>
        </div>
        <div class="user-section">
            <span>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a href="#" style="color: white; text-decoration: none;"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>

        </div>
    </div>

    <div class="toggle-bar">
        <button class="menu-toggle">☰</button>
        <button class="contact-toggle"><i class="fa-regular fa-user"></i></button>
    </div>

    <nav class="nav-menu">
        <a href="#">Home</a>
        <a href="#">Main Menu</a>
        <a href="#">Submit a Manuscript</a>
        <a href="#">About</a>
        <a href="#">Help</a>
    </nav>

    <div class="main-content">
        <div class="sidebar author-main">
            <h2 class="section-title">Author Main Menu</h2>
            <div class="menu-item">
                <a href="#" class="submission-link">How can I find out more about the status of my manuscript?</a>
            </div>
        </div>

        <div class="main-section">
            <section>
                <h2 class="section-title">New Submissions</h2>
                <div class="submission-item">
                    <a href="#" class="submission-link">Submit New Manuscript</a>
                </div>
                <div class="submission-item">
                    <span>Submissions Sent Back to Author</span>
                    <span class="count">(0)</span>
                </div>
                <div class="submission-item">
                    <span>Incomplete Submissions</span>
                    <span class="count">(0)</span>
                </div>
                <div class="submission-item">
                    <span>Submissions Waiting for Author's Approval</span>
                    <span class="count">(0)</span>
                </div>
                <div class="submission-item">
                    <span>Submissions Being Processed</span>
                    <span class="count">(0)</span>
                </div>
            </section>

            <section style="margin-top: 30px;">
                <h2 class="section-title">Revisions</h2>
                <div class="submission-item">
                    <span>Submissions Needing Revision</span>
                    <span class="count">(0)</span>
                </div>
                <div class="submission-item">
                    <span>Revisions Sent Back to Author</span>
                    <span class="count">(0)</span>
                </div>
                <div class="submission-item">
                    <span>Incomplete Submissions Being Revised</span>
                    <span class="count">(0)</span>
                </div>
                <div class="submission-item">
                    <span>Revisions Waiting for Author's Approval</span>
                    <span class="count">(0)</span>
                </div>
                <div class="submission-item">
                    <span>Revisions Being Processed</span>
                    <span class="count">(0)</span>
                </div>
                <div class="submission-item">
                    <span>Declined Revisions</span>
                    <span class="count">(0)</span>
                </div>
            </section>

            <section style="margin-top: 30px;">
                <h2 class="section-title">Completed</h2>
                <div class="submission-item">
                    <span>Submissions with a Decision</span>
                    <span class="count">(1)</span>
                </div>
            </section>
        </div>

        <div class="sidebar right-sidebar">
            <section class="author-webinars">
                <h2 class="section-title">Author webinars</h2>
                <ul>
                    <li>
                        <p>View our latest <a href="#" class="submission-link">Author webinar recordings</a>.</p>
                    </li>
                </ul>
                <hr>
            </section>

            <section>
                <h2 class="section-title">Author Resources</h2>
                <p><a href="#" class="submission-link">Author guide</a> to Editorial Manager</p>
                <p>Information on <a href="#" class="submission-link">Open Access</a></p>
            </section>

            <section>
                <h2 class="section-title">Language Editing Services</h2>
                <p>Ensure your work is written in correct English.
                    <a href="#" class="submission-link">Learn more & get started</a>.
                </p>
            </section>

            <section>
                <h2 class="section-title">New video guides</h2>
                <p><a href="#" class="submission-link">Five essential submission tips for authors</a> (5.37 min)</p>
                <p><a href="#" class="submission-link">How to download and complete the LaTeX template?</a> (5.40 mins)
                </p>
                <p><a href="#" class="submission-link">How can I check the status of my submission?</a> (1 min)</p>
            </section>
        </div>
    </div>

    <div class="help-widget">?</div>

    <div class="contact-menu">
        <p>Christopher Benson</p>
        <a href="#" style="color: white; text-decoration: none;">Logout</a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const navMenu = document.querySelector('.nav-menu');
            const contactToggle = document.querySelector('.contact-toggle');
            const contactMenu = document.querySelector('.contact-menu');

            menuToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
            });

            contactToggle.addEventListener('click', function() {
                contactMenu.classList.toggle('active');
            });
        });
    </script>
</body>

</html>