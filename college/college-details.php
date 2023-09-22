<?php 
    if (!isset($_COOKIE['cid'])) {
        header('Location: ../pages/home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCl | Details form</title>
    <link rel="icon" href="../images/note.png">
</head>


<style>
    body {
        font-family: SFProDisplay-Bold, Helvetica, Arial, sans-serif;
        font-weight: bold;

    }
</style>


<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!-- font awesome style -->
<link href="../css/font-awesome.min.css" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="../css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="../css/responsive.css" rel="stylesheet" />

<body>

    <header class="bg-light">

        <div class="d-flex justify-content-center pt-3 p-1">
            <a href="home.html">
                <h4 style="font-size: x-large; cursor: pointer; color: black;">my<span
                        style="font-size: xxx-large ;">c</span>l</h4>

            </a>


        </div>

    </header>



    <section>

        <div class="container">

            <div class="d-flex justify-content-center">

                <div class="card" style="width: 60em; height: 106em;">
                    <div class="card-body">


                        <div class="d-flex justify-content-center mt-1">
                            <h3
                                style="font-family: SFProDisplay-Bold, Helvetica, Arial, sans-serif; font-weight: bold;">
                                Fill your details</h3>

                        </div>


                        <div>

                            <form action="../backend-php/college-details-process.php" method="post" enctype="multipart/form-data"> 

                                <div>

                                    <div class="form-group mt-4">

                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Name of University" name="university">

                                    </div>
                                </div>

                                <div>

                                    <div class="form-group mt-4">

                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Name of Institution or College" name="institution">

                                    </div>
                                </div>

                                <div>

                                    <label class="ml-1 " style=" font-size: 1.1em;" for="">Info</label>
                                </div>

                                <div class="d-flex justify-content-center">

                                    <div>
                                        <?php include('../backend-php/form-details.php'); ?>
                                        
                                        <select class="form-control" style="width: 17.6em;" name="state">
                                            <option>State</option>
                                               <option><?php echo $optionsHtml ?></option>
                                        </select>
                                    </div>

                                    <div>

                                        <select class="form-control" style="width: 17.6em;margin-left: 2em;" name="district">
                                            <option>District</option>
                                            <option><?php echo $optionsHtmls ?></option>
                                        </select>
                                    </div>

                                    <div>
                                        <select class="form-control" style="width: 17.6em; margin-left: 2em;" name="city">
                                            <option>City</option>
                                            <option value="Anantapur">Anantapur, Andhra Pradesh</option>
                                            <option value="Hindupur">Hindupur, Andhra Pradesh</option>
                                            <option value="Kadiri">Kadiri, Andhra Pradesh</option>
                                            <option value="Guwahati">Guwahati, Assam</option>
                                            <option value="NorthGuwahati">North Guwahati, Assam</option>
                                            <option value="Dispur">Dispur, Assam</option>
                                            <option value="Tawang">Tawang, Arunachal Pradesh</option>
                                            <option value="Bomdila">Bomdila, Arunachal Pradesh</option>
                                            <option value="Dirang">Dirang, Arunachal Pradesh</option>
                                        </select>
                                    </div>


                                </div>

                                <div>

                                    <label class="ml-1 mt-3 " style=" font-size: 1.1em;" for="">Address</label>
                                </div>


                                <div>

                                    <div class="form-group">

                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Address" name="address"></textarea>
                                    </div>
                                </div>

                                <div>

                                    <label class="ml-1 mt-2 " style=" font-size: 1.1em;" for="">Location</label>


                                </div>

                                <div>

                                    <!--Google map-->
                                    <div id="map-container-google-1" class="z-depth-1-half map-container">
                                        <iframe
                                            src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" style="border:0; width: 57.2em;" allowfullscreen></iframe>
                                    </div>

                                    <!--Google Maps-->
                                </div>

                                <div>

                                    <label class="ml-1 mt-2 " style=" font-size: 1.1em;" for="">Programmes</label>


                                </div>

                                <div>

                                    <div style="float: left;">

                                        <button type="button" class="btn " style="border-color: rgb(223, 221, 221);">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="ug" name="programs[]">
                                                <label class="form-check-label" for="inlineCheckbox1">UG</label>
                                            </div>


                                        </button>
                                    </div>


                                    <div style="float: left;margin-left: 2em;">

                                        <button type="button" class="btn " style="border-color: rgb(223, 221, 221);">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="pg" name="programs[]">
                                                <label class="form-check-label" for="inlineCheckbox1">PG</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 2em;">

                                        <button type="button" class="btn " style="border-color: rgb(223, 221, 221);">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="diploma" name="programs[]">
                                                <label class="form-check-label" for="inlineCheckbox1">Diploma</label>
                                            </div>


                                        </button>
                                    </div>


                                    <div style="float: left;margin-left: 2em;">

                                        <button type="button" class="btn " style="border-color: rgb(223, 221, 221);">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="engineering" name="programs[]">
                                                <label class="form-check-label"
                                                    for="inlineCheckbox1">Engineering</label>
                                            </div>


                                        </button>


                                    </div>

                                    <div style="float: left; margin-left: 2em;">

                                        <button type="button" class="btn " style="border-color: rgb(223, 221, 221);">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="phd" name="programs[]">
                                                <label class="form-check-label" for="inlineCheckbox1">PHD</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 2em;" >

                                        <button type="button" class="btn " style="border-color: rgb(223, 221, 221);">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="nursing" name="programs[]">
                                                <label class="form-check-label" for="inlineCheckbox1">Nursing</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 2em;" ">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="doctorate" name="programs[]">
                                                <label class="form-check-label" for="inlineCheckbox1">Doctorate</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div class="d-flex justify-content-center" style="float: left;  margin-top: 1.8em;">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: fit-content">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="ds" name="programs[]">
                                                <label class="form-check-label" for="inlineCheckbox1">Data
                                                    Science</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 2em;">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;width: fit-content;margin-top: 1.8em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="moa" name="programs[]">
                                                <label class="form-check-label" for="inlineCheckbox1">Master of
                                                    arts</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 2em;">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;width: fit-content;margin-top: 1.8em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="doe" name="programs[]">
                                                <label class="form-check-label" for="inlineCheckbox1">Doctor of
                                                    Education</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 2em;">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;width: max-content;margin-top: 1.8em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="ba-1" name="programs[]">
                                                <label class="form-check-label" for="inlineCheckbox1">Buisiness
                                                    administration</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 1em ;margin-top: 1.8em;">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 4em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="bfa" name="programs[]">
                                                <label class="form-check-label" for="inlineCheckbox1">BFA</label>
                                            </div>


                                        </button>
                                    </div>




                                </div>




                                <div>

                                    <label class="ml-1 mt-2 " style=" font-size: 1.1em;" for="">Courses</label>


                                </div>

                                <div>

                                    <div style="float: left;">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="CS" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">CS</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="ME" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">ME</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="BE" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">BE</label>
                                            </div>


                                        </button>
                                    </div>


                                    <div style="float: left; margin-left: 3em;">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="BBA" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">BBA</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="BT" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">BT</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;">

                                        <button type="button" class="btn"
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="BL" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">BL</label>
                                            </div>


                                        </button>
                                    </div>


                                    <div style="float: left;" class="coursemargiin">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input " type="checkbox" id="inlineCheckbox1"
                                                    value="BCA" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">BCA</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;" class="coursemargiin">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="PS" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">PS</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;" class="coursemargiin">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="CE" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">CE</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;" class="coursemargiin">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="BTECH" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">B.Tech</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;" class="coursemargiin">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="B.Arch" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">B.Arch</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;" class="coursemargiin">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="B.Com"  name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">Bcom</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left;" class="coursemargiin">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="BA" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">BA</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;" class="coursemargiin">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="BSC" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">BSC</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;" class="coursemargiin">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="MA" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">MA</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;" class="coursemargiin">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="MSC" name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">MSC</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;" class="coursemargiin">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="MCOM"  name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">Mcom</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left; margin-left: 3em;" class="coursemargiin" >

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="M.Com"  name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">MCA</label>
                                            </div>


                                        </button>
                                    </div>

                                    <div style="float: left;" class="coursemargiin">

                                        <button type="button" class="btn "
                                            style="border-color: rgb(223, 221, 221);width: 7em;">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="MBA"  name="course[]">
                                                <label class="form-check-label" for="inlineCheckbox1">MBA</label>
                                            </div>


                                        </button>
                                    </div>
                                </div>



                                <div style="text-align: left; margin-right: 900px;">

                                    <label class=" ml-2 mt-5" style=" font-size: 1.1em;"
                                        for="">Seats</label>
                                </div>


                                <div class="d-flex justify-content-center">

                                    <input type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Total" style="width: 17.6em;" name="totalseats">

                                    <input type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Reserved" style="width: 17.6em;margin-left: 2em;" name="reserved">


                                    <input type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Management" style="width: 17.6em; margin-left: 2em;" name="management">


                                </div>






                                <div>

                                    <label class=" ml-2 mt-5 text-center " style=" font-size: 1.1em;" for="">Contact
                                        info</label>
                                </div>



                                <div class="justify-content-center d-flex">

                                    <div class="form-group d-flex justify-content-center" style="width: 30em;">

                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Email address" name="email">


                                    </div>



                                    <div class="form-group ml-4" style="width: 30em;">

                                        <input type="tel" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Mobile number" name="phone-number">
                                    </div>


                                </div>

                                <div>

                                    <div class="form-group">

                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"
                                            placeholder="Description" style="margin-top: 2.8em;" name="about"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">

                                        <input type="file" name="uploadfile">
                                </div>



                                <div class="d-flex justify-content-center mt-5">
                                    <button type="submit" class="btn btn-success" style="width: 15em;">Submit</button>
                                </div>

                            </form>


                        </div>


                        <div class="text-center p-4 mt-4">
                            © 2023 Copyright:
                            <a class="text-reset fw-bold" href="home.php">my<span
                                    style="font-size: larger;">C</span>l</a>
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </section>





    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>




    <script src="https://kit.fontawesome.com/3cb1958bfd.js" crossorigin="anonymous"></script>

</body>

</html>