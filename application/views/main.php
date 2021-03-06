<html>

<head>
    <title>Pomdoro Timer</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="<?= site_url('assets/img/clock.ico'); ?>" type="image/x-icon">
    <style>
        body {

            background:
                /* top, transparent black, faked with gradient */
                linear-gradient(rgba(0, 0, 0, 0.3),
                    rgba(0, 0, 0, 0.3)),
                /* bottom, image */
                url("<?= site_url('assets/img/bg.jpg'); ?>");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container-fluid {
            padding-left: 50px;
            padding-right: 50px;
        }

        .usernameText:hover {
            color: black;
            letter-spacing: 1px;
            transition: .5s;
        }

        .usernameText {
            color: white;
            transition: .5s;
        }
    </style>
</head>

<?php echo $this->session->flashdata('gene_login_val'); ?>
<?php echo $this->session->flashdata('fail_login'); ?>
<?php echo $this->session->flashdata('reg_suc'); ?>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Dropdown -->
            <div class="dropdown col-md-6">
                <?php if (($this->session->userdata('id')) === null) { ?>
                    <button style="margin-top:10px" type="button" class="btn btn-light" data-bs-toggle="modal" href="#loginModal">
                        Login
                    </button>
                <?php } ?>
                <?php if (($this->session->userdata('id'))) { ?>
                    <button class="btn" type="button" id="menuDropdown" data-bs-toggle="dropdown" style="margin-left:-10px" aria-expanded="false">
                        <h3 style="padding-top:5px" class="usernameText"><img src="<?= site_url('assets/img/profile.jpeg'); ?>" width="30px" height="30px" style="border-radius:50%;object-fit: cover;" alt="profile picture">
                            <h3>Hi <?= $this->session->userdata('username'); ?></h3>
                    </button>
                    <ul class="dropdown-menu text-center" aria-labelledby="menuDropdown">
                        <li>
                            <p><strong>Have a great day</strong></p>
                        </li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#profileModal">Profile</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#activityModal">Activity</a></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                <?php } ?>
            </div>
            <div class="col-md-6 text-end">
                <div class="dropdown">
                    <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Select Your Music
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><button style="background-color: #ffffff;border: none;" class="btn btn-light btn-lg btn-block" id='howler-play1'><a class="dropdown-item music-now" id="lima">Sound 01</button></a></li>
                        <li><button style="background-color: #ffffff;border: none;" class="btn btn-light btn-lg btn-block" id='howler-play2'><a class="dropdown-item music-now" id="lima">Sound 02</button></a></li>
                        <li><button style="background-color: #ffffff;border: none;" class="btn btn-light btn-lg btn-block" id='howler-play3'><a class="dropdown-item music-now" id="lima">Sound 03</button></a></li>
                        <li><button style="background-color: #ffffff;border: none;" class="btn btn-light btn-lg btn-block" id='howler-play4'><a class="dropdown-item music-now" id="lima">Sound 04</button></a></li>
                        <li><button style="background-color: #ffffff;border: none;" class="btn btn-light btn-lg btn-block" id='howler-play5'><a class="dropdown-item music-now" id="lima">Sound 05</button></a></li>
                    </ul>
                    <a href="#"><i style="font-size: 2rem;color:white;padding-left:10px;margin-top:10px" id='howler-stop' class="fas fa-music"></i></a>
                </div>

            </div>
        </div>
        <div class="row" style="min-height:85%;">
            <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                <h1 style="font-size:13em;letter-spacing: -10px;font-weight:800" class="text-light" id="time">1</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#leaderboardModal"><i class="fas fa-award" style="font-size: 2rem;color:white"></i></a>
            </div>
            <div class="col-md-4 text-center">
                <a href="#" id="mulai"><i class="fas fa-play" style="font-size: 2rem;color:white;padding-left:20px;padding-right:20px;"></i></a>
                <a href="#" id="berhenti"><i class="fas fa-pause" style="font-size: 2rem;color:white;padding-left:20px;padding-right:20px;"></i></a>
                <a href="#" id="lanjut"><i class="fas fa-play" style="font-size: 2rem;color:white;padding-left:20px;padding-right:20px;"></i></a>
                <a href="#" id="segar"><i class="fas fa-redo-alt" style="font-size: 2rem;color:white;padding-left:20px;padding-right:20px;"></i></a>
            </div>
            <div class="col-md-4 text-end">
                <a href="#"> <i class="fas fa-plus" data-bs-toggle="modal" data-bs-target="#todolistModal" style="font-size: 2rem;color:white"></i></a>
            </div>
        </div>
    </div>
</body>

</html>