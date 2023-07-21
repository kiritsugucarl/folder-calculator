<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="icon.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/v4-shims.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <title>Circle Calculator</title>
</head>

<body>
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
    <div class="body">
        <!--
        =========================BOOKMARKS=======================
        -->
        <div class="tabs">
            <ul>
                <li class="bookmark_0"></li>
                <a href="rectangle.php">
                    <li class="bookmark_1">Rectangle</li>
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
        <div class="circle" id="circle">
            <h1 class="title-h1">Circle Calculator</h1>
            <form action="" method="post">
                <input type="number" placeholder="Radius" name="radius">
                <select name="options[]" id="circle" class="selection-1">
                    <option value="area">Area</option>
                    <option value="circumference">Circumference</option>
                    <option value="diameter">Diameter</option>
                </select>
                <br>
                <input class="button-circle" type="reset" value="Reset">
                <input class="button-circle" type="submit" value="Calculate" name="submit">
                <div class="input-section">
            </form>
            <?php

            if (isset($_POST['submit'])) {
                $val1 = $_POST['radius'];
                $result = 0;
                $answer = 0;
                foreach ($_POST['options'] as $selected) {
                    $selected = $selected;
                }
                if ($val1 == null) {
                    $val1 = 0;
                }
                if ($selected == "area") {
                    $answer = 3.1416 * ($val1 * $val1);
                    echo "
                    <div class='answer-section'>
                        <p class='answer'>The area of circle with radius given $val1 is : " . number_format($answer, 3, '.', ',') . " units</p>
                    </div>
                    ";
                } elseif ($selected == "circumference") {
                    $result = 2 * 3.1416;
                    $answer = $result * $val1;
                    echo "
                    <div class='answer-section'>
                        <p class='answer'>The circumference of circle with radius given $val1 is : " . number_format($answer, 3, '.', ',') . " units</p>
                    </div>
                    ";
                } elseif ($selected == "diameter") {
                    $answer = 2 * $val1;
                    echo "
                    <div class='answer-section'>
                        <p class='answer'>The diameter of circle with radius given $val1 is : " . number_format($answer, 3, '.', ',') . " units</p>
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
    <div class="formula">
        <div class="elements">
            <i class="fa fa-solid fa-circle"></i>
            <i class="fa fa-solid fa-circle"></i>
            <i class="fa fa-solid fa-circle"></i>
        </div>
        <h1>Formulas Related to Circle</h1>
        <p>The Circle formulas are expressed as,</p>
        <table class="table-formula">
            <tr>
                <td>Diameter of a Circle</td>
                <td>Diameter = 2 x r</td>
            </tr>
            <tr>
                <td>Circumference of a Circle</td>
                <td>Circumference = 2 x π x r</td>
            </tr>
            <tr>
                <td>Area of a Circle</td>
                <td>Area = π x r2</td>
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