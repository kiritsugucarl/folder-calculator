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
    <title>Triangle Calculator</title>
</head>

<body class="whole-tri">
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
    <div class="body-tri">
        <!--
        =========================BOOKMARKS=======================
        -->
        <div class="tabs">
            <ul>
                <li class="bookmark_0"></li>
                <a href="index.php">
                    <li class="bookmark_1_circle">Circle</li>
                </a>
                <a href="rectangle.php">
                    <li class="bookmark_2_rectangle">Rectangle</li>
                </a>
                <a href="temperature.php">
                    <li class="bookmark_3_temperature">Temperature</li>
                </a>
            </ul>
        </div>

        <!--
        =========================CALCULATOR=======================
        -->
        <div class="triangle" id="triangle">
            <h1 class="title-h1">Triangle Calculator</h1>
            <form action="" method="post">
                <input type="number" placeholder="Base" name="base">
                <input type="number" placeholder="Height" name="height">
                <br>
                <input class="button-triangle" type="reset" value="Reset">
                <input class="button-triangle" type="submit" value="Calculate" name="submit">
            </form>
            <div class="input-section">
                <?php
                error_reporting(0);
                ini_set('display_errors', 0);
                if (isset($_POST['submit'])) {
                    $val1 = $_POST['base'];
                    $val2 = $_POST['height'];
                    if ($val1 == null) {
                        $val1 = 0;
                    }
                    if ($val2 == null) {
                        $val2 = 0;
                    }
                    $answer = ($val1 * $val2) / 2;
                    echo "
                    <div class='answer-section'>
                        <p class='answer'> The area of the triangle with base of $val1 units and height of $val2 units is : " . number_format($answer, 3, '.', ',') . " units </p>
                    </div>
                    ";
                }
                ?>
            </div>
        </div>

        <!--
        =================================FORMULA===================================
        -->
        <div class="formula-tria">
            <div class="elements">
                <i class="fa fa-solid fa-circle"></i>
                <i class="fa fa-solid fa-circle"></i>
                <i class="fa fa-solid fa-circle"></i>
            </div>
            <h1 class="title-tria">Formulas Related to Triangle</h1>
            <p>The Triangle formulas are expressed as,</p>

            <table class="table-formula">
                <tr>
                    <td>Area of a Triangle</td>
                    <td>A = base * height / 2</td>
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