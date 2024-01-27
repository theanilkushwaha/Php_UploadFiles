

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <link rel="stylesheet" href="mycss.css">
</head>
<body>


    <div class="header">
        <h1> ❄️ DEV COMMUNITY</h1>
    </div>
    
    <h2>REGISTRATION PAGE</h2>
    <div class="form child ">
    <form action="db.php" method="POST" enctype="multipart/form-data">
    <div class="row ">
               <div class="col col-lg-6">
             <label for="fname"><b></b></label><br>
             <input type="text" placeholder="Enter name" name="fname" id="fname" required> <br><br>
             </div>

             <div class="col col-lg-6">
             <label for="lname"><b></b></label><br>
             <input type="text" placeholder="Enter Last name" name="lname" id="lname" required> <br><br>
             </div>
</div>
<div class="row ">
               <div class="col">
             <label for="username"><b></b></label><br>
             <input type="text" placeholder="username" name="username" id="username" required> <br><br>
             </div>

             <div class="col">
             <label for="gender"><b></b></label><br>
             <input type="text" placeholder="gender" name="gender" id="gender" required> <br><br>
             </div>
</div>
<div class="row ">
<div class="col">
             <label for="email"><b></b></label><br>
             <input type="email" placeholder="Enter email" name="email" id="email" required> <br><br>
             </div>

             <div class="col">
             <label for="nationality"><b></b></label><br>
             <input type="text" placeholder="nationality" name="nationality" id="nationality" required> <br><br>
             </div>
</div>

<div class="row ">
<div class="col">
             <label for="phone"><b></b></label><br>
             <input type="number" placeholder="phone" name="phone" id="phone" required> <br><br>
</div>

             <div class="col">
             <label for="dob"><b></b></label><br>
             <input type="date" placeholder="DOB" name="dob" id="dob" required> <br><br>
             </div>

</div>
<div class="row ">
<div class="col">
              <input type="file" name="profilepic" >
              <input type="submit" value="Submit" name="submit">

              </div>
</div>

          </form>
          
          </div>
       

</div>


</body>
</html>
