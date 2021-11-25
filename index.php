<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://fr.allfont.net/allfont.css?fonts=droid-serif-bold" rel="stylesheet" type="text/css" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Form</title>
</head>

<body>
    <main>
        <div class="left-screen">
            <h1>Get in touch</h1>
            <div class="form">
                <form method="post" action="formPHP.php">
                    <div class="form-group">
                        <label for="companyInfo">Company</label>
                        <div class="col-sm-10">
                            <input type="text" name="company" class="form-control" id="UserCompany" placeholder="Techno raws" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validationUser01">First name</label>
                        <div class="col-sm-10">
                            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Sarah" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validationCustom02">Last name</label>
                        <div class="col-sm-10">
                            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Dade" required>
                        </div>
                    </div>
                    <div class="form-group row" id="checkBox">
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" name="gender" value="female" type="checkbox" id="gridCheck1">
                                <label class="form-check-label"  for="gridCheck1">Female</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="gender" value="male" type="checkbox" id="gridCheck2">
                                <label class="form-check-label" for="gridCheck2">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input"  name="gender" value="X" type="checkbox" id="gridCheck3">
                                <label class="form-check-label" for="gridCheck3">X</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Subject</label>
                        <div id="subject" class="col-sm-10">
                            <select name="subject" id="inputState" class="form-control" required>
                                <option selected>Choose...</option>
                                <option value="job">job</option>
                                <option value="internship">internship</option>
                                <option value="more...">more...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <div id="message" class="col-sm-10">
                            <textarea type="text" name= "message" class="form-control" id="userMessage" placeholder="280 characters max"
                                rows="3" maxlength="280" required>
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div id="send" class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary" id="submit">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
            <footer>
                <div class="infos">
                    <p>(+32)486026020</p>
                    <p>sarahdade18@gmail.com</p>
                </div>
                <div class="icons">
                    <a href="https://github.com/SarahDade">
                        <img class="github" src="./assets/Github_logo.png" alt="github_logo">
                    </a>
                    <a href="https://www.linkedin.com/in/sarah-dade-b7747821a/">
                        <img class="linkedin" src="./assets/linkedin_logo.png" alt="linkedin_logo">
                    </a>
                </div>
                <div class="copyright">
                Copyright 2021 Sarah Dade
                </div>
            </footer>
        </div>
        <div class="right-screen">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li><a href="#" style="color: #C4BFBF">ABOUT ME</a></li>
                    <li><a href="#" style="color: #C4BFBF">PROJECTS</a></li>
                    <li><a href="#" style="color: white">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>


<!-------------------------------------------------- PHP retrieve input ---------------------------------------------------------->

