

<!DOCTYPE html>
<html lang="en">
<head>
    <div class="form-container">

        <form action="" method="post">
            <h3>Formularz dostawy</h3>
            <input type="email" name="email" required placeholder="Podaj email" class="box">
            <input type="password" name="miasto" required placeholder="Podaj miasto" class="box">
            <input type="text" name="adres" required placeholder="Podaj adres zamieszkania" class="box">
            <input type="password" name="imienazwisko" required placeholder="Podaj swoje imie i nazwisko" class="box">

            <h5 class="font-rale font-size-20">Razem:  <span class="text-danger"> <span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> zł</span> </h5>

                <br><br><br>
            <input type="submit" name="submit" class="btn" value="Kupuje!">
            <p>Wróc do Strony Głównej <a href="index.php">Tutaj</a></p>
        </form>

    </div>
</head>
<body>
