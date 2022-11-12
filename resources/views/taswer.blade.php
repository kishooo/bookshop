<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Popular Products Section Using HTML , CSS , Bootstrap</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./app.css">

</head>
<body>
<!-- partial:index.partial.html -->
<section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h3>Featured Product</h3>
										<h2>Popular Products</h2>
								</div>
						</div>
				</div>
        <form  action="/test" method="post">
								@csrf
				<div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">

										<div class="part-2">
												<li><h4 class="product-old-price">number of copies</h4><input type="text" id="copy" name="copy"></li>
										</div>

						</div>
						<!-- Single Product -->
				</div>
        <div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">

										<div class="part-2">
												<li><h4 class="product-old-price">number of print</h4><input type="text" id="print" name="print"></li>
										</div>

					  </div>
						<!-- Single Product -->
				</div>
        <div class="row">
          <td><button type="submit" class="col-md-6 col-lg-4 col-xl-3" >submit</button></td>
        </div>
        </form>
						</div>
				</div>
		</div>
</section>
<!-- partial -->

</body>
</html>
