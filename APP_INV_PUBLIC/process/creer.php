<?php

if (isset($_GET["ecrit"])) {
    $yet = $_GET["ecrit"];
}

function category()
{
    global $select;
    switch ($select) {
        case 0:
            echo "MOB";
            break;
        case 1:
            echo "INF";
            break;
        case 2:
            echo "ENS";
            break;
        case 3:
            echo "SC";
            break;
        case 4:
            echo "SP";
            break;
        case 5:
            echo "D";
            break;
        case 6:
            echo "PR";
            break;
    }
}


function category_print()
{
    global $select;
    switch ($select) {
        case 0:
            return "MOB";
            break;
        case 1:
            return "INF";
            break;
        case 2:
            return "ENS";
            break;
        case 3:
            return "SC";
            break;
        case 4:
            return "SP";
            break;
        case 5:
            return "D";
            break;
        case 6:
            return "PR";
            break;
    }
}


$select = "";


//verify if second input box is used  
if (isset($_GET["ecrit"]) && $_GET["ecrit"] != "") {
    //use input typed in second box
    $ecrit = strtoupper($_GET["ecrit"]);
    $print_cat = strtoupper($_GET["ecrit"]);
} else {
    //else get the selected item only
    $select = $_GET["selection"];
    $print_cat = category_print();
}
require('code39.php');


if (isset($_GET["confirmer"]) && isset($print_cat)) { // verify if button is pressed
    global $ecrit;
    echo $ecrit;
    ob_start();
    $pdf = new PDF_Code39('L', 'mm', array(55, 35)); //Here you can change the size of paper
    $pdf->SetFont('Arial', 'B', 4); //here you can change the font and font size
    $pdf->SetAutoPageBreak(false);
    for ($i = $_GET["depart"]; $i <= ($_GET["quantity"]); $i++) {
        $pdf->AddPage();
        $pdf->Image('logo.png', 1, 2, 7, 7);
        $pdf->SetY(1);
        $pdf->SetX(40);
        $pdf->Code39(1, 12, $print_cat . " " . $i, 0.9, 10);
        $pdf->SetFontSize(22);
        $pdf->SetX(7);
        $pdf->Cell(48, 10, $print_cat . " " . $i, 0, 0, 'C');
        $pdf->SetFontSize(6);
        $pdf->SetY(24);
        $pdf->SetX(0);
    }
    $pdf->Output();
    ob_end_flush();
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../images/favicon.png" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Generer Etiquette</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/second.js"></script>

</head>

<body onload="disable_button()">
    <div class="main-panel page2-panel ">
        <div class="panel_header">
            <h3 class="h3-header"><?php if (isset($ecrit)) {
                                        echo $ecrit;
                                    } else {
                                        category();
                                    } ?></h3>
            <p id="quantity"> </p>
        </div>
        <form class="create_form" method="GET" action="">
            <input name="selection" type="text" hidden value="<?php echo $select ?>" />
            <input name="ecrit" type="text" hidden value="<?php if (isset($ecrit)) {
                                                                echo $ecrit;
                                                            }  ?>" />
            <div class="mb-3">
                <label for="num_inv" class="form-label">N° Inventaire départ</label>
                <input name="depart" type="number" min="0" class="form-control" id="num_inv" required oninput="calci()">

            </div>
            <div class="mb-3">
                <label for="qtite" class="form-label">N° Inventaire final</label>
                <input name="quantity" type="number" min="0" class="form-control" id="qtite" required oninput="calci()">
            </div>

            <button type="submit" name="confirmer" id="confirm_button" class="btn btn-primary">Confirmer</button>
        </form>
    </div>
</body>

</html>