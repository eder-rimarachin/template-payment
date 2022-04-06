<?php
$url = url('/') . '/';
if ($url == 'http://localhost:8000/' || $url == 'http://127.0.0.1:8000/') {
    $url = '';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment | Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .payment-form {
            font-family: 'Montserrat', sans-serif;
        }

        .payment-form.dark {
            background-color: #f6f6f6;
        }

        .payment-form .content {
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
            background-color: white;
        }

        .payment-form .block-heading {
            padding-top: 50px;
            margin-bottom: 40px;
            text-align: center;
        }

        .payment-form .block-heading p {
            text-align: center;
            max-width: 720px;
            margin: auto;
            opacity: 0.7;
        }

        .payment-form.dark .block-heading p {
            opacity: 0.8;
        }

        .payment-form .block-heading h1,
        .payment-form .block-heading h2,
        .payment-form .block-heading h3 {
            margin-bottom: 1.2rem;
            color: #00ba5a;
        }

        .payment-form form {
            border-top: 2px solid #00ba5a;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
            background-color: #ffffff;
            padding: 0;
            min-width: 200px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .payment-form .title {
            font-size: 1em;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            margin-bottom: 0.8em;
            font-weight: 600;
            padding-bottom: 8px;
        }

        .payment-form .products {
            background-color: #f7fbff;
            padding: 25px;
        }

        .payment-form .products .item {
            margin-bottom: 1em;
        }

        .payment-form .products .item-name {
            font-weight: 600;
            font-size: 0.9em;
        }

        .payment-form .products .item-description {
            font-size: 0.8em;
            opacity: 0.6;
        }

        .payment-form .products .item p {
            margin-bottom: 0.2em;
        }

        .payment-form .products .price {
            float: right;
            font-weight: 600;
            font-size: 0.9em;
        }

        .payment-form .products .total {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            margin-top: 10px;
            padding-top: 19px;
            font-weight: 600;
            line-height: 1;
        }

        .payment-form .card-details {

            padding: 25px 25px 15px;
            /* box-shadow: 0px 0px 3px 1px #79818a; */
        }

        .payment-form .card-details label {
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #79818a;
            text-transform: uppercase;
        }

        /* .payment-form .card-details button {
            margin-top: 0.6em;
            padding: 12px 0;
            font-weight: 600;
        } */

        .payment-form .date-separator {
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 5px;
        }

        .u-learn {
            font-size: 36px;
            margin: 0 auto;
            padding: 0 auto;
            font-weight: bold;
            color: #3b99e0;
        }

        @media only screen and (min-width: 1200px) {
            .container {
                width: 100vw;
                margin: 0 auto;
                padding: 0;
            }

            .tarjet-form {
                width: 100%;
                margin: 10px;
                padding: 0;
                display: flex;
                justify-content: space-around;
            }

            .p-right {
                order: 2;
                vertical-align: bottom;
                max-width: 800px;
                min-width: 350px;
                float: right;

            }

            .p-left {
                order: 1;
                min-width: 350px;
                width: 600px;
                float: left;
            }
        }

        @media only screen and (max-width: 1199px) {
            .p-right {
                vertical-align: bottom;
                width: 300px;
                min-width: 350px;
                float: right;
                shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
            }

            .p-left {
                min-width: 350px;
                width: 450px;
                float: left;
                shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
            }
        }

        @media only screen and (max-width: 992px) {
            .tarjet-form {
                width: 500px;
                display: flex;
                flex-direction: column-reverse;
            }

            .p-right {
                width: 400px;
                margin: 0 auto;
            }

            .p-left {
                width: 400px;
                margin: 10px auto;
                padding: 10px auto;
            }

        }

        @media only screen and (max-width: 768px) {

            .p-right {
                margin: 0 auto;
                padding: 0 auto;
                min-width: 250px;
                width: 350px;

            }

            .p-left {
                min-width: 250px;
                width: 350px;
                margin: 10px auto;
                padding: 10px auto;
            }

            .tarjet-form {
                display: flex;
                flex-direction: column-reverse;
            }

        }

        @media only screen and (max-width: 480px) {
            .container {
                width: 100vw;
                height: 110vh;
                margin: 0 auto;
                padding: 0;
            }

            .tarjet-form {
                margin: 0;
                padding: 0;
                width: 80vw;
            }

            .p-right {
                width: 80vw;
            }

            .p-left {
                width: 80vw;
                margin: 10px auto;
                padding: 10px auto;
            }

            .btn-pay {
                width: 100vw;
                height: 80px;
                position: fixed;
                bottom: 0;
                z-index: 1030;
                left: 0;
                background-color: #f7fbff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.452);
            }

            .btn-btp {
                width: 200px;
                margin-left: 45%;
                margin-bottom: 20px;
                position: fixed;
                bottom: 0;
                z-index: 1030;
                left: 0;
            }

            .total {
                font-size: 1.5em;
                display: flex;
                position: fixed;
                bottom: 0;
                z-index: 1050;
                flex-direction: column;
                border-top: none !important;
                background-color: none !important;
                margin-bottom: 3%;
            }

            .total-to {
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                font-size: 1em;
                font-weight: normal !important;
            }

            .price {
                font-size: 1.2em;
                font-weight: 600;
            }
        }

        @media only screen and (max-width: 375px) {
            .container {
                width: 100vw;
                height: 110vh;
                margin: 0 auto;
                padding: 0;
            }

            .btn-btp {
                width: 50%;
            }

            .tarjet-form {
                margin: 0;
                padding: 0;
                width: 90vw;


            }

            .p-right {
                width: 80vw;
            }

            .p-left {
                width: 80vw;
                margin: 10px auto;
                padding: 10px auto;
            }
        }

        @media only screen and (max-width: 280px) {
            .container {
                width: 100vw;
                height: 125vh;
                margin: 0 auto;
                padding: 0;
            }

            .btn-btp {
                width: 50%;
            }

            .tarjet-form {
                margin: 0;
                padding: 0;
                width: 90vw;

            }

            .p-right {
                width: 80vw;
            }

            .p-left {
                width: 80vw;
                margin: 10px auto;
                padding: 10px auto;
            }

            .btn-pay {
                height: 70px;
            }

            .btn-btp {
                margin-bottom: 15px;
            }

            .total {
                font-size: 1.2em;
                margin-bottom: 15px;
            }
        }

    </style>
</head>

<body>
    <main class="page payment-page">
        <section class="payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="u-learn">U-Learning</h2>
                </div>
                <form class="tarjet-form">
                    <div class="products p-right">
                        <h3 class="title">Detalles del Pedido</h3>
                        <div class="item">
                            <span class="price">$200</span>
                            <p class="item-name">Product 1</p>
                            <p class="item-description">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="item">
                            <span class="price">$120</span>
                            <p class="item-name">Product 2</p>
                            <p class="item-description">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="total"><span class="total-to">Total</span><span
                                class="price">$320</span></div>
                    </div>
                    <div class="card-details p-left">
                        <h3 class="title">Pagar</h3>
                        <div class="row">
                            <div class="form-group col-sm-7">
                                <label for="card-holder">Card Holder</label>
                                <input id="card-holder" type="text" class="form-control" placeholder="Card Holder"
                                    aria-label="Card Holder" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-sm-5">
                                <label for="">Expiration Date</label>
                                <div class="input-group expiration-date">
                                    <input type="text" class="form-control" placeholder="MM" aria-label="MM"
                                        aria-describedby="basic-addon1">
                                    <span class="date-separator">/</span>
                                    <input type="text" class="form-control" placeholder="YY" aria-label="YY"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="card-number">Card Number</label>
                                <input id="card-number" type="text" class="form-control" placeholder="Card Number"
                                    aria-label="Card Holder" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="cvc">CVC</label>
                                <input id="cvc" type="text" class="form-control" placeholder="CVC"
                                    aria-label="Card Holder" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-sm-12">
                                <div class="btn-pay">
                                    <button type="button" class="btn btn-primary btn-block btn-btp">Realizar
                                        Pago</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
