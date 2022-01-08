<?php
  include('../Template/header.php');
  
?>
<link rel="stylesheet" href="../assets/css/login.css">
</head>

<body style=" background-image: url(img/slide-banner.jpg);height:100%;">
    <nav id="header" class=" navbar navbar-light p-0">
        <div class="container-fluid px-5 head">
            <a href="index.php" class="navbar-brand"> <svg viewBox="0 0 111 30" class="header_navbar--logo"
                    focusable="false">
                    <g id="netflix-logo">
                        <path
                            d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z"
                            id="Fill-14" fill="#e50914"></path>
                    </g>
                </svg></a>
        </div>
    </nav>
    <div class="signup_form container">
        <form class="mx-1 mx-md-4 " method="POST" action="./process_login.php" name="Signup">
            <h2 class="text-center" style="color: #fff;">Add admin</h2>
            <div class="row">
                <div class="col-6">
                    <div class="d-flex flex-row align-items-center mb-3">

                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="firstName">User Name</label>
                            <input type="text" id="userName" name="userName" class="form-control"
                                placeholder="User name" required>

                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">

                        <div class="form-outline flex-fill mb-0">

                            <label class="form-label" for="firstName">Email</label>
                            <input type="email" id="inputEmail" name="txtEmail" class="form-control"
                                placeholder="Email address" required>
                            <small id="emailHelp"></small>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center">

                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="firstName">Password</label>
                            <input type="password" id="inputPassword1" name="txtPass1" class="form-control"
                                placeholder="Password" required>

                        </div>

                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4 mt-4">
                        <button type="submit" class="btn btn-primary mb-3" name="btn_submit1" style="width:400px">ADD</button>
                    </div>
                </div>

                <div class="col-6">
                    <div class="d-flex flex-row align-items-center mb-3">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="firstName">Full Name</label>
                            <input type="text" id="firstName" name="FullName" class="form-control"
                                placeholder="Full name" required>

                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">

                        <div class="form-outline flex-fill mb-0">

                            <label class="form-label" for="firstName">Phone number</label>
                            <input type="text" id="inputPhone" name="txtphone" class="form-control"
                                placeholder="Phone number" required>
                            <!-- <small id="emailHelp"></small> -->
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-2">

                        <div class="form-outline flex-fill ">
                            <label class="form-label" for="firstName">Status</label>
                            <input type="password" id="inputPassword2" name="txtPass2" class="form-control"
                                placeholder="Confrim Password" required>
                        </div>
                    </div>
                    <p id="sr_pass1"></p>

                    <div class=" container form-group " style="font-size: 20px;">
                        <label class="control-label">Gender</label>
                        <div class="select_sex">
                            <label class="checkbox-inline">
                                <input type="radio" name="gender" id="update-gender-male" value="male"> Male</label>
                            <label class="checkbox-inline">
                                <input type="radio" name="gender" id="update-gender-female" value="female">
                                Female</label>

                        </div>
                    </div>
                </div>
            </div>
</body>

</html>