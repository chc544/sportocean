// SELECT ELEMENTS
const productsEl = document.querySelector(".products");
const cartItemsEl = document.querySelector(".cart-items");
const subtotalEl = document.querySelector(".subtotal");
const totalItemsInCartEl = document.querySelector(".total-items-in-cart");

// RENDER PRODUCTS
function renderProducts() {

    products.forEach((product) => {
        productsEl.innerHTML += `
          <div class="col-lg-4 col-md-6 col-sm-12 gy-4">
              <div class="card" style="width: 100%;">
                <img src="${product.imgSrc}" class="card-img-top" alt="${product.name}">
                    <div class="card-body">
                        <h5 class="card-title">${product.name}</h5>
                        <p class="card-text">${product.description}</p>
                        
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item mt-3">Price: ${product.price} €<br><a href="#/" class="btn btn-outline-primary mt-3 mb-2" onclick="addToCart(${product.id})">Add to cart</a></li>
                    </ul>
              </div>
          </div>
        `;
    });
}

renderProducts();

// cart array
let cart = JSON.parse(localStorage.getItem("CART")) || [];
updateCart();

// ADD TO CART
function addToCart(id) {
    // check if product already exist in cart
    if (cart.some((item) => item.id === id)) {
        changeNumberOfUnits("plus", id);
    } else {
        const item = products.find((product) => product.id === id);

        cart.push({
            ...item,
            numberOfUnits: 1,
        });
    }

    updateCart();
}

// update cart
function updateCart() {
    renderCartItems();
    renderSubtotal();

    // save cart to local storage
    localStorage.setItem("CART", JSON.stringify(cart));
}

// calculate and render subtotal
function renderSubtotal() {
    let totalPrice = 0,
        totalItems = 0;

    cart.forEach((item) => {
        totalPrice += item.price * item.numberOfUnits;
        totalItems += item.numberOfUnits;
    });

    subtotalEl.innerHTML = `Subtotal (${totalItems} items): ${totalPrice.toFixed(2)} €`;
    totalItemsInCartEl.innerHTML = totalItems;
}


// render cart items
function renderCartItems() {

    cartItemsEl.innerHTML = ""; // clear cart element
    cart.forEach((item) => {
        cartItemsEl.innerHTML += `
        <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">${item.name}</h5>
                    <p class="card-text">${item.price} €</p>
                      <div class="btn minus d-inline" onclick="changeNumberOfUnits('minus', ${item.id})">-</div>
                      <div class="number d-inline">${item.numberOfUnits}</div>
                      <div class="btn plus d-inline" onclick="changeNumberOfUnits('plus', ${item.id})">+</div> 
                      <a href="#" class="btn btn-remove float-end" onclick="removeItemFromCart(${item.id})">Remove</a>
                </div>
            </div>
        </div>
      `;
    });
}

// remove item from cart
function removeItemFromCart(id) {
    cart = cart.filter((item) => item.id !== id);

    updateCart();
}

// change number of units for an item
function changeNumberOfUnits(action, id) {
    cart = cart.map((item) => {
        let numberOfUnits = item.numberOfUnits;

        if (item.id === id) {
            if (action === "minus" && numberOfUnits > 1) {
                numberOfUnits--;
            } else if (action === "plus" && numberOfUnits < item.instock) {
                numberOfUnits++;
            }
        }

        return {
            ...item,
            numberOfUnits,
        };
    });

    updateCart();
}