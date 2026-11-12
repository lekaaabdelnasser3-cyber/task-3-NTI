<?php
$message = "";
$error   = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $price = trim($_POST["price"] ?? "");
    $qty   = trim($_POST["qty"] ?? "");

    if ($price === "" || $qty === "") {
        $error = "Please fill in both fields.";
    } elseif (!is_numeric($price) || !is_numeric($qty)) {
        $error = "You must enter numbers only, not letters.";
    } elseif ($price < 0 || $qty < 0) {
        $error = "Negative numbers are not allowed.";
    } elseif ($price == 0 || $qty == 0) {
        $error = "Price and quantity must be greater than zero.";
    } else {
        $total = $price * $qty;

        if ($total < 1000) {
            $discountPercent = 10;
        } else {
            $discountPercent = 15;
        }

        $discount = $total * $discountPercent / 100;
        $final    = $total - $discount;

        $message = "Total before discount: $total EGP<br>"
                 . "Discount ($discountPercent%): $discount EGP<br>"
                 . "Total after discount: $final EGP";
    }
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Invoice</title></head>
<body>
    <form method="post">
        <label>Product price:</label>
        <input type="text" name="price" value="<?= htmlspecialchars($_POST['price'] ?? '') ?>"><br><br>

        <label>Quantity:</label>
        <input type="text" name="qty" value="<?= htmlspecialchars($_POST['qty'] ?? '') ?>"><br><br>

        <button type="submit">Calculate</button>
    </form>

    <?php if ($error): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php elseif ($message): ?>
        <p style="color:green;"><?= $message ?></p>
    <?php endif; ?>
</body>
</html>