<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/v4-shims.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <title>Rectangle Calculator</title>
</head>

<body class="whole-rec">
    <!--
    =====================================BACKGROUND======================================================
    -->
    <div class="animation">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>

    <!--
    =========================================BODY SECTION================================================
    -->
    <div class="body-rec">
        <!--
        =========================BOOKMARKS=======================
        -->
        <div class="tabs">
            <ul>
                <li class="bookmark_0"><a href="#"></a></li>
                <a href="index.php">
                    <li class="bookmark_1_circle">Circle</li>
                </a>
                <a href="temperature.php">
                    <li class="bookmark_2">Temperature</li>
                </a>
                <a href="triangle.php">
                    <li class="bookmark_3">Triangle</li>
                </a>
            </ul>
        </div>

        <!--
        =========================CALCULATOR=======================
        -->
        <div class="rectangle" id="rectangle">
            <h1 class="title-h1">Rectangle Calculator</h1>
            <form action="" method="post">
                <input type="number" placeholder="Length" name="length">
                <select name="options[]" id="rectangle" class="selection-2">
                    <option value="area">Area</option>
                    <option value="perimeter">Perimeter</option>
                </select>
                <br>
                <input type="number" placeholder="Width" name="width">
                <br>
                <input class="button-rectangle" type="reset" value="Reset">
                <input class="button-rectangle" type="submit" value="Calculate" name="submit">
                <div class="input-section">
            </form>
            <?php
            //error double check
            error_reporting(0);
            ini_set('display_errors', 0);
            if (isset($_POST['submit'])) {
                $answer = 0;
                $val1 = $_POST['length'];
                $val2 = $_POST['width'];
                foreach ($_POST['options'] as $selected) {
                    $selected = $selected;
                }
                if ($val1 == null) {
                    $val1 = 0;
                }
                if ($val2 == null) {
                    $val2 = 0;
                }
                if ($selected == "area") {
                    $answer = $val1 * $val2;
                    echo "
                        <div class='answer-section'>
                            <p class='answer'> The area of rectangle with length of $val1 units and width of $val2 units is : " . number_format($answer, 3, '.', ',') . " units </p>
                        </div>    
                        ";
                } elseif ($selected == "perimeter") {
                    $answer = 2 * ($val1  + $val2);
                    echo "
                        <div class='answer-section'>
                            <p class='answer'> The perimeter of rectangle with length of $val1 units and width of $val2 units is : " . number_format($answer, 3, '.', ',') . " units </p>
                        </div>
                        ";
                }
            }
            ?>
        </div>
    </div>

    <!--
    =================================FORMULA===================================
    -->
    <div class="formula-rec">
        <div class="elements">
            <i class="fa fa-solid fa-circle"></i>
            <i class="fa fa-solid fa-circle"></i>
            <i class="fa fa-solid fa-circle"></i>
        </div>
        <h1 class="title-rec">Formulas Related to Rectangle</h1>
        <p>The Rectangle formulas are expressed as,</p>

        <table class="table-formula">
            <tr>
                <td>Perimeter of a Rectangle</td>
                <td>P = 2 (l + w)</td>
            </tr>
            <tr>
                <td>Area of a Rectangle</td>
                <td>A = l x w</td>
            </tr>
        </table>
    </div>
    </div>

    <!--
    ===================================FOOTER==========================================
    -->
    <div class="bottom">
        <p>GREIL PROGRAMMERS | MIDTERM PROJECT 2022</p>
    </div>
    </div>
</body>

</html>