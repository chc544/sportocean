<?php include 'includes/top.php'; ?>
    <div class="container">
        <h2>
            Welcome to our Shop!
        </h2>
        <h4>Everything is made with 100% recycled plastic.</h4>
        <br>
        <div class="shopping-bag">
            <a href="./cart.php">
                <div class="total-items-in-cart d-none">
                    0
                </div>
            </a>
        </div>
        <div class="card" style="width: 100%;">

            <div class="card-body cart-shop">
                <div class="cart">
                    <div class="cart-items row">

                    </div>
                    <div class="cart-footer ms-2">
                        <div class="subtotal">

                            <p>Subtotal (0 items): $0</p>
                        </div>
                        <a href="cart.php" class="btn btn-secondary mt-3 mb-2" style="color: white !important;">Checkout</a>
                    </div>
                </div>
            </div>
            <div class="card-body cart-shop d-none">
                <div class="cart">
                    <div class="cart-items-check row">

                    </div>
                    <div class="cart-footer ms-2">
                        <div class="subtotal">

                            <p>Subtotal (0 items): $0</p>
                        </div>
                        <a href="cart.php" class="btn btn-secondary mt-3 mb-2" style="color: white !important;">Checkout</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="products-list">

            <div class="products row">

            </div>
        </div>
    </div>

<?php include 'includes/bottom.php'; ?>