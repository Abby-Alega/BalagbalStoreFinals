@extends('app')

@section('title', 'User Dashboard - Balagbal Store')

@section('css')
    @vite(['resources/css/user-dashboard.css'])
@endsection

@section('content')
    <div class="user-dashboard">
        <!-- User Stats Section -->
        <section class="stats-section">
            <div class="stats-header">
                <h1>Dashboard</h1>
                <button class="btn-profile" onclick="openProfileModal()">👤 Profile</button>
            </div>

            <div class="stats-grid">
                <div class="stat-card card-blue">
                    <div class="card-content">
                        <p class="card-label">Bought Items</p>
                        <p class="card-value">24</p>
                    </div>
                </div>

                <div class="stat-card card-green">
                    <div class="card-content">
                        <p class="card-label">Most Expensive Item</p>
                        <p class="card-value">$399.99</p>
                    </div>
                </div>

                <div class="stat-card card-orange">
                    <div class="card-content">
                        <p class="card-label">Total Expense</p>
                        <p class="card-value">$5,420.00</p>
                    </div>
                </div>

                <div class="stat-card card-purple">
                    <div class="card-content">
                        <p class="card-label">Money Amount</p>
                        <p class="card-value">$2,150.50</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Shop Section -->
        <section class="shop-section">
            <div class="shop-header">
                <h2>Shop Products</h2>
                <nav class="product-nav">
                    <button class="nav-btn active" onclick="filterProducts('all')">All Products</button>
                    <button class="nav-btn" onclick="filterProducts('electronics')">Electronics</button>
                    <button class="nav-btn" onclick="filterProducts('accessories')">Accessories</button>
                    <button class="nav-btn" onclick="filterProducts('office')">Office</button>
                </nav>
            </div>

            <div class="products-grid">
                <!-- Product Cards -->
                <div class="product-card">
                    <div class="product-image">📷 4K Monitor</div>
                    <div class="product-info">
                        <h3>4K Monitor</h3>
                        <p class="product-desc">27-inch, 4K resolution, 60Hz refresh rate</p>
                        <p class="product-price">$399.99</p>
                        <button class="btn-add-cart" onclick="addToCart('4K Monitor', 399.99)">🛒 Add to Cart</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">📷 Wireless Headphones</div>
                    <div class="product-info">
                        <h3>Wireless Headphones</h3>
                        <p class="product-desc">High-quality sound with noise cancellation</p>
                        <p class="product-price">$79.99</p>
                        <button class="btn-add-cart" onclick="addToCart('Wireless Headphones', 79.99)">🛒 Add to Cart</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">📷 Mechanical Keyboard</div>
                    <div class="product-info">
                        <h3>Mechanical Keyboard</h3>
                        <p class="product-desc">RGB backlit, mechanical switches, perfect for gaming</p>
                        <p class="product-price">$149.99</p>
                        <button class="btn-add-cart" onclick="addToCart('Mechanical Keyboard', 149.99)">🛒 Add to Cart</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">📷 Wireless Mouse</div>
                    <div class="product-info">
                        <h3>Wireless Mouse</h3>
                        <p class="product-desc">Ergonomic design, 2.4GHz wireless, long battery life</p>
                        <p class="product-price">$34.99</p>
                        <button class="btn-add-cart" onclick="addToCart('Wireless Mouse', 34.99)">🛒 Add to Cart</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">📷 USB-C Cable</div>
                    <div class="product-info">
                        <h3>USB-C Cable</h3>
                        <p class="product-desc">Durable charging cable, 6ft length</p>
                        <p class="product-price">$12.99</p>
                        <button class="btn-add-cart" onclick="addToCart('USB-C Cable', 12.99)">🛒 Add to Cart</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">📷 Laptop Stand</div>
                    <div class="product-info">
                        <h3>Laptop Stand</h3>
                        <p class="product-desc">Aluminum construction, adjustable height, portable</p>
                        <p class="product-price">$45.99</p>
                        <button class="btn-add-cart" onclick="addToCart('Laptop Stand', 45.99)">🛒 Add to Cart</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">📷 Webcam</div>
                    <div class="product-info">
                        <h3>Webcam</h3>
                        <p class="product-desc">1080p HD, built-in microphone, auto focus</p>
                        <p class="product-price">$59.99</p>
                        <button class="btn-add-cart" onclick="addToCart('Webcam', 59.99)">🛒 Add to Cart</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">📷 Screen Protector</div>
                    <div class="product-info">
                        <h3>Screen Protector</h3>
                        <p class="product-desc">Tempered glass, anti-glare, easy installation</p>
                        <p class="product-price">$19.99</p>
                        <button class="btn-add-cart" onclick="addToCart('Screen Protector', 19.99)">🛒 Add to Cart</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Buy Button (Fixed Bottom Right) -->
    <button class="btn-buy-fixed" onclick="openCartModal()">🛒 Buy</button>

    <!-- Profile Modal -->
    <div id="profileModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('profileModal')">&times;</span>
            <h2>User Profile</h2>
            <form class="profile-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" value="john_doe" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" value="john@example.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" value="John" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" value="Doe" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" value="••••••••" required>
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Birth Date</label>
                        <input type="date" id="birthdate" value="1990-05-15" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" value="555-0101" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" value="123 Main St, City" required>
                    </div>
                </div>

                <div class="modal-buttons">
                    <button type="submit" class="btn-save">Save Changes</button>
                    <button type="button" class="btn-close" onclick="closeModal('profileModal')">Close</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Cart Modal -->
    <div id="cartModal" class="modal">
        <div class="modal-content cart-modal">
            <span class="close" onclick="closeModal('cartModal')">&times;</span>
            <h2>Shopping Cart</h2>
            
            <div class="cart-content">
                <div class="cart-items">
                    <h3>Items</h3>
                    <ul id="cartItemsList" class="items-list">
                        <!-- Items will be added here dynamically -->
                    </ul>
                </div>

                <div class="cart-summary">
                    <div class="summary-item">
                        <span>Subtotal:</span>
                        <span id="subtotal">$0.00</span>
                    </div>
                    <div class="summary-item">
                        <span>Tax (10%):</span>
                        <span id="tax">$0.00</span>
                    </div>
                    <div class="summary-total">
                        <span>Total:</span>
                        <span id="total">$0.00</span>
                    </div>

                    <div class="modal-buttons">
                        <button type="button" class="btn-confirm" onclick="confirmBuy()">Confirm Buy</button>
                        <button type="button" class="btn-close" onclick="closeModal('cartModal')">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('js')
        <script>
            // User Dashboard JavaScript

            // Cart management
            let cartItems = [];

            // Open Profile Modal
            function openProfileModal() {
                document.getElementById("profileModal").style.display = "block";
            }

            // Open Cart Modal
            function openCartModal() {
                if (cartItems.length === 0) {
                    alert("Your cart is empty!");
                    return;
                }
                displayCartItems();
                document.getElementById("cartModal").style.display = "block";
            }

            // Close Modal
            function closeModal(modalId) {
                document.getElementById(modalId).style.display = "none";
            }

            // Add to cart
            function addToCart(productName, price) {
                const item = {
                    id: Date.now(),
                    name: productName,
                    price: price,
                };
                cartItems.push(item);
                alert(`${productName} added to cart!`);
                updateCartButton();
            }

            // Display cart items
            function displayCartItems() {
                const cartItemsList = document.getElementById("cartItemsList");
                cartItemsList.innerHTML = "";

                if (cartItems.length === 0) {
                    cartItemsList.innerHTML =
                        '<li style="padding: 20px; text-align: center; color: #7f8c8d;">No items in cart</li>';
                } else {
                    cartItems.forEach((item, index) => {
                        const li = document.createElement("li");
                        li.innerHTML = `
                            <span>
                                <span class="item-name">${item.name}</span><br/>
                                <span class="item-price">$${item.price.toFixed(2)}</span>
                            </span>
                            <button class="remove-item" onclick="removeFromCart(${index})">✕</button>
                        `;
                        cartItemsList.appendChild(li);
                    });
                }

                updateCartTotals();
            }

            // Remove from cart
            function removeFromCart(index) {
                cartItems.splice(index, 1);
                displayCartItems();
            }

            // Update cart totals
            function updateCartTotals() {
                const subtotal = cartItems.reduce((sum, item) => sum + item.price, 0);
                const tax = subtotal * 0.1;
                const total = subtotal + tax;

                document.getElementById("subtotal").textContent = `$${subtotal.toFixed(2)}`;
                document.getElementById("tax").textContent = `$${tax.toFixed(2)}`;
                document.getElementById("total").textContent = `$${total.toFixed(2)}`;
            }

            // Update cart button visibility/text
            function updateCartButton() {
                const cartBtn = document.querySelector(".btn-buy-fixed");
                if (cartItems.length > 0) {
                    cartBtn.textContent = `🛒 Buy (${cartItems.length})`;
                }
            }

            // Confirm purchase
            function confirmBuy() {
                const total = cartItems.reduce((sum, item) => sum + item.price, 0) * 1.1;
                alert(
                    `Purchase confirmed! Total: $${total.toFixed(
                        2
                    )}\n\nThank you for your order!`
                );
                cartItems = [];
                closeModal("cartModal");
                document.querySelector(".btn-buy-fixed").textContent = "🛒 Buy";
            }

            // Filter products
            function filterProducts(category) {
                // Update active button
                document.querySelectorAll(".nav-btn").forEach((btn) => {
                    btn.classList.remove("active");
                });
                event.target.classList.add("active");

                // Filter logic could be implemented here
                console.log("Filtering by:", category);
            }

            // Save profile changes
            document.addEventListener("DOMContentLoaded", function () {
                const profileForm = document.querySelector(".profile-form");
                if (profileForm) {
                    profileForm.addEventListener("submit", function (e) {
                        e.preventDefault();
                        alert("Profile updated successfully!");
                        closeModal("profileModal");
                    });
                }

                // Close modal when clicking outside
                window.onclick = function (event) {
                    if (event.target.classList.contains("modal")) {
                        event.target.style.display = "none";
                    }
                };
            });
        </script>
    @endsection
@endsection
