

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="style.css" >
    <style>
body {
    background-image: url("exchange.jpeg");

  background-color: lightblue;
}
h1{
    color:black;
    font-weight:900px;
}

</style>

</head>

<body>

    <center><h1 class="heading text-center display-2">

        Currency Converter

    </h1></center>

    <hr>

    <center><form method ="post">

    <div class="container">

        <div class="main">

            <div class="form-group">

                <label for="amount" >

                    Amount to Convert :

                </label>

                <input type="text" class="form-control searchBox" placeholder="0.00" id="oamount" name="a" value="<?php echo isset($_POST['a']) ? htmlspecialchars($_POST['a']) : ''; ?>">

            </div>

            <div class="row">

                <div class="col-sm-6">

                    <div class="input-group mb-3">

                        <div class="input-group-prepend">

                            <span class="input-group-text" >From</span>

                        </div>

                        <select class="form-control from" id="sel1" name="b" value="<?php echo isset($_POST['b']) ? htmlspecialchars($_POST['b']) : ''; ?>">

                            <option value="USD">USD</option>

                            <option value="AED"<?php echo isset($_POST['b']) && $_POST['b'] === 'AED' ? 'selected' : ''; ?>>AED</option>

                            <option value="ARS"><?php echo isset($_POST['b']) && $_POST['b'] === 'ARS' ? 'selected' : ''; ?>ARS</option>

                            <option value="AUD">AUD</option>

                            <option value="BGN">BGN</option>

                            <option value="BRL">BRL</option>

                            <option value="BSD">BSD</option>

                            <option value="CAD">CAD</option>

                            <option value="CHF">CHF</option>

                            <option value="CLP">CLP</option>

                            <option value="CNY">CNY</option>

                            <option value="COP">COP</option>

                            <option value="CZK">CZK</option>

                            <option value="DKK">DKK</option>

                            <option value="DOP">DOP</option>

                            <option value="EGP">EGP</option>

                            <option value="EUR">EUR</option>

                            <option value="FJD">FJD</option>

                            <option value="GBP">GBP</option>

                            <option value="GTQ">GTQ</option>

                            <option value="HKD">HKD</option>

                            <option value="HRK">HRK</option>

                            <option value="HUF">HUF</option>

                            <option value="IDR">IDR</option>

                            <option value="ILS">ILS</option>

                            <option value="INR">INR</option>

                            <option value="ISK">ISK</option>

                            <option value="JPY">JPY</option>

                            <option value="KRW">KRW</option>

                            <option value="KZT">KZT</option>

                            <option value="MVR">MVR</option>

                            <option value="MXN">MXN</option>

                            <option value="MYR">MYR</option>

                            <option value="NOK">NOK</option>

                            <option value="NZD">NZD</option>

                            <option value="PAB">PAB</option>

                            <option value="PEN">PEN</option>

                            <option value="PHP">PHP</option>

                            <option value="PKR">PKR</option>

                            <option value="PLN">PLN</option>

                            <option value="PYG">PYG</option>

                            <option value="RON">RON</option>

                            <option value="RUB">RUB</option>

                            <option value="SAR">SAR</option>

                            <option value="SEK">SEK</option>

                            <option value="SGD">SGD</option>

                            <option value="THB">THB</option>

                            <option value="TRY">TRY</option>

                            <option value="TWD">TWD</option>

                            <option value="UAH">UAH</option>

                            <option value="UYU">UYU</option>

                            <option value="ZAR">ZAR</option>

                       

                        </select>

                    </div>

                </div>

                <div class="col-sm-6">

                    <div class="input-group mb-3">

                        <div class="input-group-prepend">

                            <span class="input-group-text">To</span>

                        </div>

                        <select class="form-control to" id="sel2" name="t" value="<?php echo isset($_POST['t']) ? htmlspecialchars($_POST['t']) : ''; ?>">

                            <option value="USD">USD</option>

                            <option value="AED">AED</option>

                            <option value="ARS">ARS</option>

                            <option value="AUD">AUD</option>

                            <option value="BGN">BGN</option>

                            <option value="BRL">BRL</option>

                            <option value="BSD">BSD</option>

                            <option value="CAD">CAD</option>

                            <option value="CHF">CHF</option>

                            <option value="CLP">CLP</option>

                            <option value="CNY">CNY</option>

                            <option value="COP">COP</option>

                            <option value="CZK">CZK</option>

                            <option value="DKK">DKK</option>

                            <option value="DOP">DOP</option>

                            <option value="EGP">EGP</option>

                            <option value="EUR">EUR</option>

                            <option value="FJD">FJD</option>

                            <option value="GBP">GBP</option>

                            <option value="GTQ">GTQ</option>

                            <option value="HKD">HKD</option>

                            <option value="HRK">HRK</option>

                            <option value="HUF">HUF</option>

                            <option value="IDR">IDR</option>

                            <option value="ILS">ILS</option>

                            <option value="INR">INR</option>

                            <option value="ISK">ISK</option>

                            <option value="JPY">JPY</option>

                            <option value="KRW">KRW</option>

                            <option value="KZT">KZT</option>

                            <option value="MVR">MVR</option>

                            <option value="MXN">MXN</option>

                            <option value="MYR">MYR</option>

                            <option value="NOK">NOK</option>

                            <option value="NZD">NZD</option>

                            <option value="PAB">PAB</option>

                            <option value="PEN">PEN</option>

                            <option value="PHP">PHP</option>

                            <option value="PKR">PKR</option>

                            <option value="PLN">PLN</option>

                            <option value="PYG">PYG</option>

                            <option value="RON">RON</option>

                            <option value="RUB">RUB</option>

                            <option value="SAR">SAR</option>

                            <option value="SEK">SEK</option>

                            <option value="SGD">SGD</option>

                            <option value="THB">THB</option>

                            <option value="TRY">TRY</option>

                            <option value="TWD">TWD</option>

                            <option value="UAH">UAH</option>

                            <option value="UYU">UYU</option>

                            <option value="ZAR">ZAR</option>

                        

                        </select>

                    </div>

                </div>        

                <div class="text-center">

 

                    <!-- convert button -->

                    <button class="btn btn-primary convert m-2" type="submit">

                        Convert

                    </button>

                    <!-- reset button -->

                    <button class="btn btn-primary m-2" onclick="clearVal()">

                        Reset

                    </button>

                </div>

     

            </div>

     

            <div id="finalAmount" class="text-center">

 

     

                <!-- Display the converted amount -->

                <h2>Converted Amount :

                    <span class="finalValue" style="color:green;">

                           </span>

                </h2>

            </div>

        </div>   

        </form></center>

        <?php
        $conn =  mysqli_connect("localhost", "root", 'Bhanu', "currency converter");

 

        // Check the connection
        
        if ($conn->connect_error) {
        
            die("Connection failed: " . $conn->connect_error);
        
        }
        else{

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

 

            $b = $_POST["b"];

 

 

            $t = $_POST["t"];

 

            $a = $_POST["a"];

            $req_url = 'https://v6.exchangerate-api.com/v6/7a92c89901159f95028cef7e/latest/'.$b;

            $response_json = file_get_contents($req_url);
            
 

            if(false !== $response_json) {

 

            try {

 

        

            $dat = json_decode($response_json);
            


 

            if('success' === $dat->result) {

 

            // YOUR APPLICATION CODE HERE, e.g.

            $EUR_price = ($a* $dat->conversion_rates->$t);

            echo "amount is ".$EUR_price;


            $sql = "INSERT INTO conversions (from_currency, to_currency, amount, result) VALUES ('$b', '$t', $a, $EUR_price)";

if ($conn->query($sql) === TRUE) {
    echo "<br>";

    echo "Conversion successful!<br>";


} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}

        }

    }

 

    catch(Exception $e) {

        // Handle JSON parse error...

    }

}

        }

    }

        ?>   

                            

    

</body>

</html>