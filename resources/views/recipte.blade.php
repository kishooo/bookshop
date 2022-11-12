<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Popular Products Section Using HTML , CSS , Bootstrap</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./table.css">

</head>
<body>

  <div class="container">

	<div class="table">
		<div class="table-header">
			<div class="header__item"><a id="name" class="filter__link" href="#">Name</a></div>
			<div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">price</a></div>
			<div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">quantity</a></div>
			<div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">total price</a></div>

		</div>
		<div class="table-content">
      @foreach($reciptes as $receipt)
			<div class="table-row">

        <div class="table-data">{{$receipt->name}}</div>
        <div class="table-data">{{$receipt->price}}</div>
        <div class="table-data">{{$receipt->quantity}}</div>
        <div class="table-data">{{$receipt->Tprice}}</div>

			</div>
      @endforeach
			<div class="table-row">
				<div class="table-data">Dick</div>
				<div class="table-data">1</div>
				<div class="table-data">1</div>
				<div class="table-data">2</div>
				<div class="table-data">3</div>
			</div>

		</div>

	</div>
</div>
