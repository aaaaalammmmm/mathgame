<?php 
    include("header.php");
    session_start(); 
    extract($_POST);

    $_SESSION["operand1"] = rand(0, 20);
    $_SESSION["operand2"] = rand(0, 20);
    $_SESSION["operator"] = rand(0, 1);
    $_SESSION["sign"]     = "+"; 
    
    if($_SESSION["operator"] == 0) {
        $_SESSION["sign"] = "+";
    } else {
        $_SESSION["sign"] = "-";     
    }

    echo $_SESSION["operand1"] . " " . $_SESSION["sign"] . " " . $_SESSION["operand2"];

    if(isset($_POST["submit"])) {
        if($_POST["operator"] == 0) {
            $_SESSION["sign"]           = "+";
            $_POST["computedAnswer"] = $_POST["operand1"] + $_POST["operand2"];
        } else {
            $_SESSION["sign"]           = "-";
            $_POST["computedAnswer"] = $_POST["operand1"] - $_POST["operand2"];       
        }
        
        if ($_POST["computedAnswer"] == $_POST["answer"]) {
            $_SESSION["total"]++;
            $_SESSION["score"]++;
            echo "<br/>";
            echo "you are right!";
        } else {
            $_SESSION["total"]++;
            echo "<br/>";
            echo "try again";
        }   
        
        echo "<br />Score: " . $_SESSION["score"] . "/" . $_SESSION["total"];  
    } else {
        $_SESSION["total"] = 0;
        $_SESSION["score"] = 0;
        echo "<br />Score: 0/0";
    }
?>
        <form action="index.php" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="Answer" class="col-sm-3">Answer:</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="answer" id="answer" value="0">
                </div>                
            </div>
            <button type="submit" name="submit" class="btn btn-danger col-sm-offset-6">Submit</button>
            
            <input type="hidden" name="operand1" value="<?php echo $_SESSION["operand1"]?>" />
            <input type="hidden" name="operator" value="<?php echo $_SESSION["operator"]?>" />
            <input type="hidden" name="operand2" value="<?php echo $_SESSION["operand2"]?>" />
            <input type="hidden" name="computedAnswer" value="<?php echo $_SESSION["computedAnswer"]?>" />
            <input type="hidden" name="total" value="0" />
            <input type="hidden" name="score" value="0" />
        </form>
<a href="logout.php" class="btn btn-danger col-sm-offset-6">Logout</a>
<?php include("footer.php"); ?>