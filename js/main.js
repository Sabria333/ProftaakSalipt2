let cartItems = [];
let cartCount = 0;
const cartElement = document.getElementById('cart');
const cartToggleElement = document.querySelector('.cart-toggle');
const navCartCountElement = document.getElementById('nav-cart-count');

// Load cart from localStorage when the page loads
window.addEventListener('load', function() {
  const savedCartItems = localStorage.getItem('cartItems');
  if (savedCartItems) {
    cartItems = JSON.parse(savedCartItems);
    updateCart();
  }

  const savedCartCount = localStorage.getItem('cartCount');
  if (savedCartCount) {
    cartCount = parseInt(savedCartCount);
    updateCartCount();
  }
});



function addToCart(productTitle, productPrice) {
  const sizeElement = document.getElementById('size');
  const selectedSize = sizeElement.value;

  const cartItem = {
    name: productTitle,
    price: productPrice,
    size: selectedSize
  };

  cartItems.push(cartItem);
  updateCart();
  toggleCart();
  cartCount++;
  updateCartCount();

  // Save cart to localStorage
  localStorage.setItem('cartItems', JSON.stringify(cartItems));
  localStorage.setItem('cartCount', cartCount.toString());
}

function updateCart() {
  const cartItemsElement = document.getElementById('cart-items');
  cartItemsElement.innerHTML = '';

  let totalPrice = 0;

  cartItems.forEach(function(item) {
    const itemElement = document.createElement('div');
    itemElement.className = 'cart-item';
    itemElement.innerHTML = `<span>${item.name} - ${item.size} - $${item.price}</span><button onclick="removeFromCart('${item.name}')">Remove</button>`;
    cartItemsElement.appendChild(itemElement);

    totalPrice += item.price;
  });

  const cartTotalElement = document.getElementById('cart-total');
  cartTotalElement.textContent = `Total: $${totalPrice.toFixed(2)}`;

  // Save cart to localStorage
  localStorage.setItem('cartItems', JSON.stringify(cartItems));
}

function removeFromCart(productName) {
  cartItems = cartItems.filter(function(item) {
    return item.name !== productName;
  });

  updateCart();
  cartCount--;
  updateCartCount();

  // Save cart to localStorage
  localStorage.setItem('cartItems', JSON.stringify(cartItems));
  localStorage.setItem('cartCount', cartCount.toString());
}

function toggleCart() {
  cartElement.classList.toggle('open');
}

function updateCartCount() {
  navCartCountElement.textContent = cartCount.toString();
}

function resetCart() {
  cartItems = [];
  cartCount = 0;
  updateCart();
  updateCartCount();
  localStorage.removeItem('cartItems');
  localStorage.removeItem('cartCount');
}
