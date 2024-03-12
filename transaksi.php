<?php
$items = array(
    "Mie Instan" => 3000,
    "Sabun mandi" => 3500,
    "Shampoo" => 1000,
    "Sandal jepit" => 11000,
    "Roti" => 12000,
    "Buku tulis" => 5500,
    "Susu kotak" => 6000,
    "Minyak goreng" => 13000,
    "Es krim" => 11000,
    "Baterai" => 16000
);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Transaksi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center mt-5">Input Transaksi</h1>
		<form method="post" action="save_transaction.php">
			<div class="form-group">
				<label for="transaction_code">Kode Transaksi:</label>
				<input type="text" class="form-control" id="transaction_code" name="transaction_code" required>
			</div>
			<div class="form-group">
				<label for="transaction_date">Tanggal Transaksi:</label>
				<input type="text" class="form-control" id="transaction_date" name="transaction_date" value="<?php echo date('d-m-Y'); ?>" readonly>
			</div>
			<div class="form-group">
				<label for="customer_id">Pilih Customer:</label>
				<select class="form-control" id="customer_id" name="customer_id">
					<option value="1">Customer 1</option>
					<option value="2">Customer 2</option>
					<option value="3">Customer 3</option>
					<option value="3">Customer 4</option>
                    <option value="3">Customer 5</option>
                    <option value="3">Customer 6</option>
				</select>
			</div>
			<div class="form-group">
				<label for="item_1">Barang 1:</label>
				<select class="form-control" id="customer_id" name="customer_id">
					<option value="1">Mie Instan Rp.3000</option>
					<option value="2">Sabun mandi Rp.3500</option>
					<option value="3">Shampoo Rp.1000</option>
					<option value="3">Sandal jepit Rp.11000</option>
                    <option value="3">Roti Rp.12000</option>
                    <option value="3">Buku tulis Rp.5500</option>
                    <option value="3">Susu kotak Rp.6000</option>
                    <option value="3">Minyak goreng Rp.13000</option>
                    <option value="3">Es krim Rp.11000</option>
                    <option value="3">Baterai Rp.16000</option>
				</select>
			<div class="form-group">
				<label for="item_2">Barang 2:</label>
				<select class="form-control" id="customer_id" name="customer_id">
					<option value="1">Mie Instan Rp.3000</option>
					<option value="2">Sabun mandi Rp.3500</option>
					<option value="3">Shampoo Rp.1000</option>
					<option value="3">Sandal jepit Rp.11000</option>
                    <option value="3">Roti Rp.12000</option>
                    <option value="3">Buku tulis Rp.5500</option>
                    <option value="3">Susu kotak Rp.6000</option>
                    <option value="3">Minyak goreng Rp.13000</option>
                    <option value="3">Es krim Rp.11000</option>
                    <option value="3">Baterai Rp.16000</option>
			</div>
			<div class="form-group">
				<label for="item_3">Barang 3:</label>
				<select class="form-control" id="customer_id" name="customer_id">
					<option value="1">Mie Instan Rp.3000</option>
					<option value="2">Sabun mandi Rp.3500</option>
					<option value="3">Shampoo Rp.1000</option>
					<option value="3">Sandal jepit Rp.11000</option>
                    <option value="3">Roti Rp.12000</option>
                    <option value="3">Buku tulis Rp.5500</option>
                    <option value="3">Susu kotak Rp.6000</option>
                    <option value="3">Minyak goreng Rp.13000</option>
                    <option value="3">Es krim Rp.11000</option>
                    <option value="3">Baterai Rp.16000</option>
			</div>
			<div class="form-group">
				<label for="member_card">Punya Kartu Member?</label>
				<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Ya
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Tidak
  </label>
</div>
			</div>
			<div class="form-group">
				<label for="payment_amount">Uang Pembayaran:</label>
				<input type="number" class="form-control" id="payment_amount" name="payment_amount">
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
			<button type="button" class="btn btn-secondary" onclick="window.location.href='index.php';">Batal</button>
		</form>
	</div>
</body>
</html>