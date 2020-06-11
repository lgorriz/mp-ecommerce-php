<?php

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

$base_url = 'https://lgorriz-mp-ecommerce-php.herokuapp.com/';

echo json_encode($_GET);

$collection_id = $_GET['collection_id'];
$collection_status = $_GET['collection_status'];
$external_reference = $_GET['external_reference'];
$payment_type = $_GET['payment_type'];
$preference_id = $_GET['preference_id'];
$site_id = $_GET['site_id'];
$processing_mode = $_GET['processing_mode'];
$merchant_account_id = $_GET['merchant_account_id'];
$data = MercadoPago\Payment::find_by_id($collection_id);
var_dump($data);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Pago exitoso</title>
</head>
<body>

<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Felicitaciones!! El pago ha sido exitoso</h4>
    <hr>
    <p>
        <b>payment_method_id:</b> <?php echo $data->payment_method_id ?>
    </p>
    <p>
        <b>payment_type_id:</b> <?php echo $data->payment_type_id ?>
    </p>
    <p>
        <b>payment_method_reference_id</b> <?php echo $data->transaction_details->payment_method_reference_id ?>
    </p>
    <p>
        <b>external_reference</b> <?php echo $external_reference ?>
    </p>
    <p>
        <b>payment_id o collection_id</b> <?php echo $collection_id ?>
    </p>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
