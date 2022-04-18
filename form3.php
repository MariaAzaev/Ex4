<!DOCTYPE html>
    <html>
        <head>
            <title>forms</title>
        </head>
        <body>
            <h1> Hi <?php echo $_GET["fullname"];?> ,welcome to the best fan club in the world!</h1><br>


            
            <h2>Your password : <?php echo $_GET["pass"];?></h2>
            <h3>
            <?php $pw = $_GET["pass"];
            if($pw == "yonitrusho")
            echo "<h2>You were born to be a part of this club! </h2>";
            else
            echo "<h2>Sorry you are not suitable for this fan club </h2>"
            ?> </h3>
            <br>


            <h2>The website of the best department in Shenkar : <?php echo $_GET["website"];?></h2>
            <h3>
            <?php $we = $_GET["website"];
            if($we == "https://www.shenkar.ac.il/he/departments/engineering-software-department")
                echo "<h2>Glad to see you know who is the best department at Shenkar! </h2>";
            else
                echo "<h2>Sorry you are not suitable for this fan club </h2>"
                ?></h3>
                <br>


            <h2>The number of times you write code in javascript per day : <?php echo $_GET["js"];?></h2>
            <h3>
            <?php $js = $_GET["js"];
            if($js > 3)
                echo "<h2>Without a doubt you are among the elite people! </h2>";
            else 
                echo "<h2>Sorry you are not suitable for this fan club </h2>"
                ?><h3>
                    <br>


            <h2>Your level of enthusiasm for a clean and tidy code : <?php echo $_GET["temper"];?></h2>
            <h3>
            <?php $tem = $_GET["temper"];
            if($tem > 30)
                echo "<h2>There is nothing like enthusiasm for a clean and tidy code, right? </h2>";
            else 
                echo "<h2>Sorry you are not suitable for this fan club </h2>"
            ?></h3>
            <br>


            <h2>If you missed the submission, would you request an extension by email? <?php echo $_GET["gender"];?></h2>
            <h3>
            <?php $gen = $_GET["gender"];
             if($gen == "No")
             echo "<h2>You are absolutely right </h2>";
         else 
             echo "<h2>Sorry you are not suitable for this fan club </h2>"
         ?></h3>
         <br>
 
   
        </body>
    </html>






 