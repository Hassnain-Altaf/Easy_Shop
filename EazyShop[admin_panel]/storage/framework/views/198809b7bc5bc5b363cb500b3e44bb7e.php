<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JuttBrand Product-Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Use a newer jQuery version -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Bootstrap JS -->
  </head>

<style>
  .preview {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column; }
    @media screen and (max-width: 996px) {
      .preview {
        margin-bottom: 20px; } }

  .preview-pic {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1; }

  .preview-thumbnail.nav-tabs {
    border: none;
    margin-top: 15px; }
    .preview-thumbnail.nav-tabs li {
      width: 15%;
      margin-right: 2.5%; }
      .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block; }
      .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0; }
      .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0; }

  .tab-content {
    overflow: hidden; }
    .tab-content img {
      width: 100%;
      height: 600px;
      object-fit: contain;
      -webkit-animation-name: opacity;
              animation-name: opacity;
      -webkit-animation-duration: .3s;
              animation-duration: .3s; }

  .preview-thumbnail img{
    width: 100px;
    height: 90px;
    object-fit: cover;
  }

  .card {
    margin-top: 50px;
    padding: 3em;
    line-height: 1.5em; }

  @media screen and (min-width: 997px) {
    .wrapper {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex; } }

  .details {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column; }

  .colors {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1; }

  .product-title, .price, .sizes, .colors {
    text-transform: UPPERCASE;
    font-weight: bold; }

  .checked, .price span {
    color: #fa561b; }

  .product-title, .rating, .product-description, .price, .vote, .sizes {
    margin-bottom: 15px; }

  .product-title {
    margin-top: 0; }

    .quantity input{
      width: 50px;
      height: 35px;
    }

    .size {
      margin-right: 10px; 
    }
    .size:first-of-type {
      margin-left: 10px; 
    }

  .color {
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
    height: 2em;
    width: 2em;
    border-radius: 2px; }
    .color:first-of-type {
      margin-left: 20px; }

  .add-to-cart, .like {
    background: #fa561b;
    padding: 10px;
    border: none;
    text-transform: UPPERCASE;
    font-weight: bold;
    color: #fff;
  }

  .cart-btn{
    background: #fa561b;
    padding: 10px;
    border: none;
    outline: none;
    text-transform: UPPERCASE;
    font-weight: bold;
    color: #fff;
  }

  .like-btn{
    background: #fa561b;
    padding: 10px;
    border: none;
    outline: none;
    text-transform: UPPERCASE;
    font-weight: bold;
    color: #f8f8f8;
  }

  .cart-btn:hover{
    background: #fa561b;
    color: white;
    border: none;
  }

  .not-available {
    text-align: center;
    line-height: 2em; }
    .not-available:before {
      font-family: fontawesome;
      content: "\f00d";
      color: #fff; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */

    /* Custom styles for the quantity buttons */

    /* Hide number input arrows in most browsers */
  input[type="number"]::-webkit-outer-spin-button,
  input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  .quantity-input {
    display: flex;
    align-items: center;
    width: 87px;
    border: 1px solid darkgray; 
  }

  .quantity-btn {
    background-color: white;
    padding: 6px;
    font-size: 18px;
    cursor: pointer;
    border: 1px solid white; 
    transition: background-color 0.3s ease;
  }

  .quantity-btn:hover {
    background-color: white;
  }

  .quantity-input input {
    width: 40px;
    height: 33px;
    text-align: center;
    font-size: 18px;
    outline: none;
    border: 0;
  }

  .quantity-input button:disabled {
    cursor: not-allowed;
    opacity: 0.5;
  }

  button.size.active {
    background-color:rgb(49, 49, 49);
    color: white;
}

  .size-btn{
    height: 30px;
    width: 30px;
  }


</style>

  <body>

    <div>
      <?php echo $__env->make('Pages.ShopDetail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

  <div class="container">
      <div class="card">
        <div class="container-fliud">
          <div class="wrapper row">
          <div class="preview col-md-6">
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="img/product/product-11.jpeg" alt="Product 1" /></div>
              <div class="tab-pane" id="pic-2"><img src="img/product/product-2.jpg" alt="Product 2" /></div>
              <div class="tab-pane" id="pic-3"><img src="img/product/product-3.jpg" alt="Product 3" /></div>
            </div>
            <ul class="preview-thumbnail nav nav-tabs">
              <li class="active"><a href="#pic-1" data-toggle="tab"><img src="img/product/product-11.jpeg" alt="Thumb 1" /></a></li>
              <li><a href="#pic-2" data-toggle="tab"><img src="img/product/product-2.jpg" alt="Thumb 2" /></a></li>
              <li><a href="#pic-3" data-toggle="tab"><img src="img/product/product-3.jpg" alt="Thumb 3" /></a></li>
            </ul>
          </div>

            <div class="details col-md-6">
              <h3 class="product-title">men's shoes fashion</h3>
              <div class="rating">
                <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                <span class="review-no">41 reviews</span>
              </div>
              <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
              <h4 class="price">current price: <span>$180</span></h4>
              <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>

              <h5 class="sizes">Sizes:
                <button class="size btn-outline-light size-btn shadow-none" data-toggle="tooltip" title="small" onclick="selectSize('small(S)')">S</button>
                <button class="size btn-outline-light size-btn shadow-none" data-toggle="tooltip" title="medium" onclick="selectSize('medium(M)')">M</button>
                <button class="size btn-outline-light size-btn shadow-none" data-toggle="tooltip" title="large" onclick="selectSize('large(L)')">L</button>
                <button class="size btn-outline-light size-btn shadow-none" data-toggle="tooltip" title="xtra large" onclick="selectSize('Extra-large(xl)')">XL</button>
              </h5>

              <!-- Hidden input field to store the selected size -->
              <input type="hidden" id="selectedSize" name="size">

              <!-- Quantity Input -->
              <h5 class="quantity d-flex flex-row">
                <div class="quantity-input">
                  <button class="quantity-btn border-0" id="decrementBtn" onclick="qntyDecreaser()">-</button>
                  <input type="number" id="quantity" name="quantity" readonly value="1" min="1" step="1">
                  <button class="quantity-btn border-0" id="incrementBtn" onclick="qntyIncreaser()">+</button>
                </div>
              </h5>

              <div class="action">
                <button class="cart-btn btn" type="button">add to cart</button>
                <button class="like-btn btn" type="button"><span class="fa fa-heart"></span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  
  <script>
    function selectSize(size) {
      // Store the selected size in the hidden input field
      document.getElementById("selectedSize").value = size;

      // Optionally, you can also visually highlight the selected size
      // Remove any active class from other buttons
      var buttons = document.querySelectorAll('.size');
      buttons.forEach(function(button) {
          button.classList.remove('active');
      });

      // Add the active class to the clicked button to show the selection visually
      var selectedButton = document.querySelector(`button[onclick="selectSize('${size}')"]`);
      selectedButton.classList.add('active');
    }

    function qntyIncreaser(){
      let qnty_value = parseInt(document.getElementById('quantity').value);
      if(qnty_value == 5)
      {
        qnty_value = 5;
      }
      else{
        qnty_value = qnty_value + 1;
      }
      document.getElementById('quantity').value = qnty_value;
    }

    function qntyDecreaser(){
      let qnty_value = parseInt(document.getElementById('quantity').value);
      if(qnty_value == 1)
      {
        qnty_value = 1;
      }
      else{
        qnty_value = qnty_value - 1;
      }
      document.getElementById('quantity').value = qnty_value;
    }

  </script>

</html>
<?php /**PATH D:\Development[web]\Laravel\JuttBrand [Ecommerce]\resources\views/Pages/ShopDetail.blade.php ENDPATH**/ ?>