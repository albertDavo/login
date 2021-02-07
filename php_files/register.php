<?php

// require "registration_to_mysql.php";
?>

<!DOCTYPE html>
<html lang="en">
<!-- Html head  -->
<?php include "head.php"?>

<body>

    <!-- Registration block -->
    <div class="container-fluid">
        <div class="registration-container pt-5 ">
            <form action="registration_to_mysql.php" method="post">
                <div class='row register-form centering'>
                    <div class="col-md-2">
                        <!-- First name -->
                        <div class="form-group"> <input type="text" placeholder='First name' class="form-control"
                                required name="first_name"></div>

                        <!-- Email -->
                        <div class='form-group'><input type="email" placeholder="Email" class="form-control" required
                                name="email">
                        </div>
                        <!-- Password -->
                        <div class="d-flex flex-row">
                            <input type="password" placeholder='Password' class="form-control" id="password" required
                                name="password">


                            <div class="d-flex justify-content-center align-items-center"> <i class="far fa-eye"
                                    id="togglePassword" style="margin-left: -35px;
                                    z-index: 1;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    -ms-flex-item-align: center;
                                    align-self: center;
                                    cursor: pointer;
                                    "></i>
                            </div>
                        </div>
                        <!-- Registration button -->
                        <div class="mt-3">
                            <button type="submit" class="btn btn-danger" disabled id="register"
                                name="registration">Register</button>
                        </div>
                    </div>

                    <div class="col-md-2 p-0 mr-auto" style="box-sizing: content-box;">
                        <!-- Last name -->
                        <div class="form-group"> <input type="text" placeholder='Last name' class="form-control"
                                required name="last_name"></div>

                        <!-- Date -->
                        <div class="form-group" id="group">
                            <!-- INput date  picker -->
                            <input type="text" class='form-control' id='picker' placeholder="Select your Birthday"
                                required name="date">

                        </div>
                        <!-- Confirm password -->
                        <div class="d-flex flex-row">
                            <input type="password" placeholder='Confirm password' class="form-control"
                                id="confirmPassword" required>


                            <div class="d-flex justify-content-center align-items-center"> <i class="far fa-eye"
                                    id="toggleConfirmPassword" style="margin-left: -35px;
                                    z-index: 1;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    -ms-flex-item-align: center;
                                    align-self: center;
                                    cursor: pointer;
                                    "></i>
                            </div>
                        </div>
                    </div>
                    <!-- Validation block -->
                    <div class="validation-block">
                        <div class="container pr-5">
                            <div class="d-flex flex-row align-items-center m-0">

                                <i class="fas fa-angry text-danger mr-2" id="length-icon"></i>
                                <p class="text-danger m-0" id='length'>Password must contain At least 8 characters</p>
                            </div>
                            <div class="d-flex flex-row align-items-center my-2">
                                <i class="fas fa-angry text-danger mr-2" id="authorize-icon"></i>
                                <p class="text-danger m-0" id='authorize-characters'>Password must contain [A-Z] [a-z]
                                    [0-9] and _ </p>
                            </div>
                            <div class="d-flex flex-row align-items-center my-2">
                                <i class="fas fa-angry text-danger mr-2" id='upper-icon'></i>
                                <p class="text-danger m-0" id='upper'>Password must contain at least 1 UpperCase</p>
                            </div>
                            <div class="d-flex flex-row align-items-center my-2">
                                <i class="fas fa-angry text-danger mr-2" id="number-icon"></i>
                                <p class="text-danger m-0" id='number'>Password must contain at least 1 number</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-none container pr-5 bg-success align-items-center justify-content-center" style="border-radius: 20px; width: 30%; width: 30%;
                        height: max-content;" id="passwordMatch">
                        <p class="text-success text-light text-center m-0 py-3">Passwords match</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Page footer -->
    <?php include "footer.php"?>
    </div>
    <!-- Jquery slim -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js"
        integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA=="
        crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/cjs/popper.min.js"
        integrity="sha512-Wolz9yzdoTL6avwJTzh/0yUSqZ458EVnKgsAnOCs1H+A3VEtGDvPvD0klPKU5TkZ3BfnFPcxmr74S/YiPiTNBA=="
        crossorigin="anonymous"></script> -->
    <!-- Bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"
        async>
    </script>
    <!-- Moment js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/es-us.min.js"
        integrity="sha512-QfUPyAMVgJBoL2yYVx8xkXmPFL7IKoF+eP5hq5xF4O/Mz1eqvxdy/vBEWDiJNPwGw7K8FCcCllrppqLpSWK/ng=="
        crossorigin="anonymous"></script>
    <script src="../date_picker/bootstrap-datepicker.js"></script>
    <!-- Gsap pocket -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <!-- Register js -->
    <script src="../register.js"></script>
    <!-- <script src="backEnd.js" async></script> -->

</body>

</html>