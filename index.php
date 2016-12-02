<?php 
    include("header.php");
    session_start(); 

    extract($_POST);
    
    $_SESSION["operand1"] = rand(0, 20);
    $_SESSION["operand2"] = rand(0, 20);
    $_SESSION["operator"] = rand(0, 1);
    $_SESSION["sign"];
    $_SESSION["computedAnswer"];
    $_SESSION["answer"];
    $_SESSION["right"];
    $_SESSION["wrong"];

    if($_SESSION["operator"] == 0) {
        $_SESSION["sign"] = "+";
        $_SESSION["computedAnswer"] = $_SESSION["operand1"] + $_SESSION["operand2"];
    } else {
        $_SESSION["sign"] = "-";
        $_SESSION["computedAnswer"] = $_SESSION["operand1"] - $_SESSION["operand2"];       
    }

    echo $_SESSION["operand1"] . " " . $_SESSION["sign"] . " " . $_SESSION["operand2"];

    if ($_SESSION["computedAnswer"] == $_SESSION["answer"]) {
        echo "<br/>";
        echo "you are right!";
    } else {
        echo "<br/>";
        echo "try again";
    }    
var_dump($_POST);
?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="Answer" class="col-sm-3">Answer:</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="answer">
                </div>                
            </div>
            <button type="submit" class="btn btn-danger col-sm-offset-6">Submit</button>
        </form>
<a href="logout.php" class="btn btn-danger col-sm-offset-6">Logout</a>
<?php include("footer.php"); ?>