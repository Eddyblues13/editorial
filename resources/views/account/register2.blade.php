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
        }

        @media screen and (min-width: 600px) and (max-width: 1024px) {
            .container {
                font-size: 15px;
            }
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
            border-left: 1px solid grey;
            padding-left: 10px;
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
            margin-bottom: 30px;
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

        .form-note {
            background-color: #f0f0f0;
            padding-left: 10px;
            padding-right: 10px;
            margin-left: 70px;
            margin-bottom: 10px;
        }

        .color-black {
            color: #003366;
        }

        label {
            margin-right: 10px;
        }

        .some-text {
            margin: 6px 40px;
            font-size: 12px;
        }

        .text-red {
            color: #CC0000;
        }

        .special {
            margin-left: 10px;
        }

        .btn-display {
            display: flex;
            justify-content: center;
            padding: 10px 0px;
        }

        .btn-display button {
            /* padding: px; */
            width: 200px;
            background: rgb(220, 220, 220);
            border: 1px solid #ccc;
            border-radius: 3px;
            cursor: pointer;
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

            <form action="{{ route('registration.step2.submit') }}" method="POST">
                @csrf
                <div class="registration-box">
                    <div class="registration-box-title">Login Details</div>
                    <div class="registration-box-content">
                        <div class="form-note">
                            <p>
                                The username you choose must be unique within the system.
                                If the one you choose is already in use, you will be asked for another.
                            </p>
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Enter Preferred Username *</span>
                            </label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Password *</span>
                            </label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Re-type Password *</span>
                            </label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="registration-box">
                    <div class="registration-box-title">Personal Information</div>
                    <div class="registration-box-content">
                        <div class="form-group">
                            <label>
                                <span>Title *</span>
                            </label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Given/First Name *</span>
                            </label>
                            <input type="text" name="first_name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Middle Name</span>
                            </label>
                            <input type="text" name="middle_name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Family/Last Name *</span>
                            </label>
                            <input type="text" name="last_name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Degree</span>
                            </label>
                            <input type="text" name="degree" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Telephone Number</span>
                            </label>
                            <input type="text" name="telephone" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>
                                <span>E-mail Address *</span>
                            </label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-note">
                            If entering more than one e-mail address, use a semi-colon between each address (e.g.,
                            joe@thejournal.com; joe@yahoo.com). A second e-mail address from a different provider
                            decreases
                            the chance of SPAM filters trapping e-mails sent to you.
                            <br><br>
                            You are encouraged to link your ORCID iD for better recognition and error reduction.
                        </div>
                    </div>
                </div>

                <div class="registration-box">
                    <div class="registration-box-title">Institution Related Information</div>
                    <div class="registration-box-content">
                        <div class="form-group">
                            <label>
                                <span>Position</span>
                            </label>
                            <input type="text" name="position" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Institution</span>
                            </label>
                            <input type="text" name="institution" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Department</span>
                            </label>
                            <input type="text" name="department" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Street Address</span>
                            </label>
                            <input type="text" name="street_address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>
                                <span>City</span>
                            </label>
                            <input type="text" name="city" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>
                                <span>State or Province</span>
                            </label>
                            <input type="text" name="state" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Zip or Postal Code</span>
                            </label>
                            <input type="text" name="postal_code" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Country or Region *</span>
                            </label>
                            <select name="country" class="form-control" required>
                                <option value="" disabled selected>Please select from the list below</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, the Democratic Republic of the</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Côte d'Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curaçao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">North Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestine</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="QA">Qatar</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russia</option>
                                <option value="RW">Rwanda</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label>
                                <span>Available as a Reviewer?</span>
                            </label>
                            <select name="reviewer" class="form-control">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="registration-box">
                    <div class="registration-box-title">Areas of Interest or Expertise</div>
                    <div class="registration-box-content">
                        <div class="form-note">
                            <p>
                                Indicate your areas of expertise by selecting from a predefined list or adding your own
                                keywords.
                            </p>
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Personal Keywords</span>
                            </label>
                            <input type="text" name="keywords" class="form-control"
                                placeholder="Enter keywords separated by commas">
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Continue >></button>
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