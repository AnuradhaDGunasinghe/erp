<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap.min.css">
</head>


<style>
.background-radial-gradient {
    background-color: hsl(218, 41%, 15%);
    background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
            hsl(218, 41%, 45%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%);
}

#radius-shape-1 {
    height: 220px;
    width: 220px;
    top: -20px;
    left: -130px;
    background: radial-gradient(#44006b, #ad1fff);
    overflow: hidden;
}

#radius-shape-2 {
    border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
    bottom: -60px;
    right: -110px;
    width: 300px;
    height: 300px;
    background: radial-gradient(#44006b, #ad1fff);
    overflow: hidden;
}

.bg-glass {
    background-color: hsla(0, 0%, 100%, 0.9) !important;
    backdrop-filter: saturate(200%) blur(25px);
}

.loginBody {
    height: 100vh;
}

.LoginSec {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
}
</style>



<body>
    <!-- Section: Design Block -->
    <section class="loginBody background-radial-gradient overflow-hidden">


        <div class="container px-4 py-5 px-md-5 text-center text-lg-start LoginSec">
            <div class="row gx-lg-5 align-items-center mb-5" style="width: 90%;">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Welcome to <br />
                        <span style="color: hsl(218, 81%, 75%)">Alsakb ERP System</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        <!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus, expedita iusto veniam atque, magni tempora mollitia
                        dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                        ab ipsum nisi dolorem modi. Quos? -->
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form>

                                <!-- Login input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Login ID</label>
                                    <input type="text" id="form3Example3" class="form-control" placeholder="Username" />
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Password</label>
                                    <input type="password" id="form3Example4" class="form-control"
                                        placeholder="Password" />
                                </div>

                                <!-- Submit button -->
                                <a href="./presentation/includes/main.php" type="submit"
                                    class="btn btn-primary btn-block">
                                    Log In
                                </a>

                                <!-- Register buttons -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</body>

</html>