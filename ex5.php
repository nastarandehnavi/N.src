<?php 
   $title = "Exercise 5";
  
   
   include 'header.php' ?>
 
    <h2>4.2:  Check Eligibility for Voting :</h2>
    <form method="post" action="README.me">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>
        <input type="submit" value="Check Eligibility">
    </form>

   
 

<?php include 'footer.php' ?>