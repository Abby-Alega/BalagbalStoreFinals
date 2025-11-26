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
