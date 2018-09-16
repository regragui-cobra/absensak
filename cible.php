<html>

    
    <?php
    
    function checkEmail($email) {
   if ( strpos($email, '@') !== false ) {
      $split = explode('@', $email);
      return (strpos($split['1'], '.') !== false ? true : false);
   }
   else {
      return false;
   }
}
    
    if (checkEmail($_POST["email"])) {
        
        $message="Abscence du ".getdate()["mday"]."/".getdate()["month"]."/".getdate()["year"]."<br>les etudiant abscent sont: <br><br>";
        
        echo "l'email est :"; 
        echo htmlspecialchars($_POST["email"]);
        $i=0;
        echo "<br>les etudiant abscent sont: ";
        
        while ($i < sizeof($_POST["check_list"])){
        echo "<br>";
        echo $_POST["check_list"][$i];
        $message = $message."-".$_POST["check_list"][$i]."<br>";
        $i++;
        }
        
        mail("mouadmahfw@gmail.com","Abscence ENSAK",$message);
    }
    if (!checkEmail($_POST["email"])) {
        echo "pas d'email detécté" ;
        }
    
    
    
     ?>
    




</html>