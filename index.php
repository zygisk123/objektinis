<?php
include "./Coin.php";
include "./Phone.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <?php
    $coin = new Coin();
    $coin->setName("sidabrinis JAV doleris");
    $coin->setCountry("JAV");
    $coin->setValue("4.9 mln. JAV doleriu");
    $coin->setYear("1794 m.");
    $coin->setMaterial("silver");

    $coin1 = new Coin();
    $coin1->setName("dvigubas erelis");
    $coin1->setCountry("JAV");
    $coin1->setValue("7.5 mln. JAV doleriu");
    $coin1->setYear("1933 m.");
    $coin1->setMaterial("gold");

    $coin2 = new Coin();
    $coin2->setName("Brašerio dublonas");
    $coin2->setCountry("JAV");
    $coin2->setValue("7.4 mln. JAV doleriu");
    $coin2->setYear("1787 m.");
    $coin2->setMaterial("gold");

    $coin3 = new Coin();
    $coin3->setName("Umajadų auksinis dinaras");
    $coin3->setCountry("Saudo Arabija");
    $coin3->setValue("4.9 mln. JAV doleriu");
    $coin3->setYear("723 m.");
    $coin3->setMaterial("gold");

    $coin4 = new Coin();
    $coin4->setName("biusto doleris");
    $coin4->setCountry("JAV");
    $coin4->setValue("4.1 mln. JAV doleriu");
    $coin4->setYear("1804 m.");
    $coin4->setMaterial("silver");

    $coins = [$coin, $coin1, $coin2, $coin3, $coin4]
    ?>

<table class="table">
    <thead>
        <tr>
            <th> Name </th>
            <th> Country </th>
            <th> Value </th>
            <th> Year </th>
            <th> Material </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($coins as $coin) {
                echo "<tr>";
                    echo "<td>".$coin->getName()."</td>";
                    echo "<td>".$coin->getCountry() ."</td>";
                    echo "<td>".$coin->getValue()."</td>";
                    echo "<td>".$coin->getYear()."</td>";
                    echo "<td>". $coin->getMaterial()."</td>";
                echo "</tr>";
            }

        ?>
    </tbody>
</table>
<!-- PHONE -->
<?php
$phone1 = New Phone("Nokia 3310", "Nokia", 2000, false);
$phone2 = New Phone("Siemens c65", "Siemens", 2004, false);
$phone3 = New Phone("Iphone 1", "Apple", 2007, false);
$phone4 = New Phone("Iphone 14", "Apple", 2022, true);

$phones = [$phone1,$phone2,$phone3,$phone4]
?>

<table class="table">
    <thead>
        <tr>
            <?php
                foreach ($phones[0] as $key => $value) {
                    echo "<th>".$key."</th>";
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($phones as $phone) {
                echo "<tr>";
                    echo "<td>".$phone->name."</td>";
                    echo "<td>".$phone->produced."</td>";
                    echo "<td>".$phone->year."</td>";
                    echo "<td>". ( ($phone->condition) ? "New" : "used" )."</td>";
                echo "</tr>";
            }

        ?>
    </tbody>
</table>
</body>
</html>