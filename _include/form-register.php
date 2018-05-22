<link rel="stylesheet" type="text/css" href="_include/form-register.css">
<div class="login-option">
    <h2><a href="#fb-login" class="custom-button2">Registrera dig genom Facebook <img src="_assets/_img/fb.png"/></a></h2>
</div>
<div class="login-option">
    <h2><a href="#gmail-login" class="custom-button2">Registrera dig genom Gmail  <img src="_assets/_img/gmail.png"/></a></h2>
</div>
<hr>
<div class="login-option">
    <h2 class="text-center">Eller</h2>
    <form name="register" class="form-layout text-justify"> 
        <table class="table-layout">
            <tbody>
                <tr>
                    <td><label for="uname">Förnamn:</label></td>
                    <td><input type="text" name="uname" /></td>
                    <td><label for="uname">Efternamn:</label></td>
                    <td><input type="text" name="uname" /></td>
                </tr>
                <tr>
                    <td><label for="email">E-post:</label></td>
                    <td><input type="text" name="email" /></td>
                    <td><label for="pwd">Kön:</label></td>
                    <td>
                        <select id="gender">
                            <option value="none">Välj</option>
                            <option value="m">Kille</option>
                            <option value="f">Tjej</option>
                            <option value="o">Annat</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td><label for="pwd">Lösenord:</label></td>
                    <td><input type="password" name="pwd" /></td>
                    <td><label for="re-pwd">Lösenord:</label></td>
                    <td><input type="password" name="re-pwd" /></td>
                </tr>
                <tr>
                    <td><label for="pwd">Födelsedatum:</label></td>
                    <td>
                        <select id="year">
                            <?php   
                                $x = 2018;
                                while($x > 1950){
                                    echo "<option value=$x>$x</option>";
                                    $x--;
                                }
                            ?>
                        </select> 
                        <select id="month">
                            <?php   
                                $x = 1;
                                while($x <= 12){
                                    echo "<option value=$x>$x</option>";
                                    $x++;
                                }
                            ?>
                        </select> 
                        <select id="day">
                            <?php   
                                $x = 1;
                                while($x <= 31){
                                    echo "<option value=$x>$x</option>";
                                    $x++;
                                }
                            ?>
                        </select> 
                    </td>
                
                </tr>
                <tr>
                    <td><a href="index.php" class="custom-button1">Tillbaka till login</a></td>
                    <td class="text-align-r"><input class="custom-button1" type="button" value="Skappa konto" id="create-account" /></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>