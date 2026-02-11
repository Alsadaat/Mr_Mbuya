<?php include 'head.php'; ?>
<link rel="stylesheet" href="css/footer.css">
<style>
   .menu-container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.08);
   }
   .menu-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      justify-items: center;
      align-items: start;
   }
   .menu-item {
      background: #FBF7F4;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(192, 80, 0, 0.10);
      padding: 18px;
      text-align: center;
      width: 100%;
      max-width: 320px;
      transition: box-shadow 0.3s;
   }
   .menu-item img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 12px;
   }
   .menu-item h4 {
      color: #C05000;
      margin-bottom: 8px;
      font-size: 20px;
   }
   .menu-item .price {
      color: #3E2723;
      font-weight: bold;
      margin-bottom: 10px;
      display: block;
   }
   .menu-item button {
      background: #C05000;
      color: #fff;
      border: none;
      padding: 10px 22px;
      border-radius: 20px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
   }
   .menu-item button:hover {
      background: #FFB84D;
      color: #3E2723;
   }
   .cart {
      margin: 30px auto 0 auto;
      max-width: 600px;
      background: #fffbe7;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 8px rgba(192, 80, 0, 0.10);
   }
   .cart h3 { color: #C05000; margin-bottom: 15px; }
   .cart-list { list-style: none; padding: 0; }
   .cart-list li { margin-bottom: 10px; }
   .cart-total { font-weight: bold; margin-top: 10px; }
</style>
<div class="menu-container">
   <h2 style="text-align:center;color:#C05000;">CHAGUA CHAKULA CHAKO..bei sawa na bure</h2>
   <div class="menu-grid" id="menuGrid">
      <!-- Menu items will be injected here by JS -->
   </div>
</div>
<div class="cart" id="cartSection" style="display:none;">
   <h3>Your Cart</h3>
   <ul class="cart-list" id="cartList"></ul>
   <div class="cart-total" id="cartTotal"></div>
   <button onclick="checkout()" style="margin-top:15px;">Order Now</button>
</div>
<script>
// Example menu data (should match foods.php images)
const menuItems = [
  { name: 'Zege', img: 'OIP.jfif', price: 2500 },
  { name: 'Chapati za maji', img: '1.jpg', price: 3000 },
  { name: 'Ugali Nyama', img: '2.jpg', price: 3500 },
  { name: 'Pilau Kuku', img: '3.jpg', price: 4000 },
  { name: 'Kuku Rosti', img: '4.jpg', price: 2000 },
  { name: 'Wali Mix', img: '5.jpg', price: 2500 },
  { name: 'Hapati Nyama', img: '6.jpg', price: 2000 },
  { name: 'Ugali Mboga', img: '7.jpg', price: 3500 }
];

const cart = [];

function renderMenu() {
  const grid = document.getElementById('menuGrid');
  menuItems.forEach((item, idx) => {
    const div = document.createElement('div');
    div.className = 'menu-item';
    div.innerHTML = `
      <img src="${item.img}" alt="${item.name}">
      <h4>${item.name}</h4>
      <span class="price">Tsh ${item.price}</span>
      <button onclick="addToCart(${idx})">Add to Cart</button>
    `;
    grid.appendChild(div);
  });
}

function addToCart(idx) {
  const item = menuItems[idx];
  const found = cart.find(i => i.name === item.name);
  if (found) {
    found.qty += 1;
  } else {
    cart.push({ ...item, qty: 1 });
  }
  renderCart();
}

function renderCart() {
  const cartSection = document.getElementById('cartSection');
  const cartList = document.getElementById('cartList');
  const cartTotal = document.getElementById('cartTotal');
  cartList.innerHTML = '';
  let total = 0;
  cart.forEach(item => {
    total += item.price * item.qty;
    const li = document.createElement('li');
    li.textContent = `${item.name} x${item.qty} - Tsh ${item.price * item.qty}`;
    cartList.appendChild(li);
  });
  cartTotal.textContent = 'Total: Tsh ' + total;
  cartSection.style.display = cart.length ? 'block' : 'none';
}

function checkout() {
  alert('Order placed! (Demo only)');
  cart.length = 0;
  renderCart();
}

renderMenu();
</script>
<?php include 'footer.php'; ?>
