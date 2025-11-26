@extends('app')

@section('title', 'Admin Dashboard - Balagbal Store')

@section('css')
    @vite(['resources/css/admin-dashboard.css'])
    {{-- <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}"> --}}
@endsection

@section('content')
    <div class="admin-dashboard">
        <!-- Admin Sidebar Navigation -->
        <aside class="admin-sidebar">
            <div class="sidebar-header">
                <h2>Admin Panel</h2>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="#" class="nav-link active" data-section="users">👥 User Lists</a></li>
                    <li><a href="#" class="nav-link" data-section="products">📦 Product Lists</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <main class="admin-content">
            <!-- Users Section -->
            <section id="users" class="content-section active">
                <div class="section-header">
                    <h1>User Management</h1>
                    <p>Manage all registered users</p>
                </div>

                <div class="table-container">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>john_doe</td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                                <td>555-0101</td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="openEditModal(1, 'John', 'Doe', 'john_doe', 'john@example.com')">✏️ Edit</button>
                                    <button class="btn-action btn-history" onclick="openHistoryModal(1, 'John Doe', 5, 1500.50)">📊 History</button>
                                    <button class="btn-action btn-delete" onclick="deleteUser(1)">🗑️ Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>jane_smith</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>jane@example.com</td>
                                <td>555-0102</td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="openEditModal(2, 'Jane', 'Smith', 'jane_smith', 'jane@example.com')">✏️ Edit</button>
                                    <button class="btn-action btn-history" onclick="openHistoryModal(2, 'Jane Smith', 8, 3200.75)">📊 History</button>
                                    <button class="btn-action btn-delete" onclick="deleteUser(2)">🗑️ Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>alex_wilson</td>
                                <td>Alex</td>
                                <td>Wilson</td>
                                <td>alex@example.com</td>
                                <td>555-0103</td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="openEditModal(3, 'Alex', 'Wilson', 'alex_wilson', 'alex@example.com')">✏️ Edit</button>
                                    <button class="btn-action btn-history" onclick="openHistoryModal(3, 'Alex Wilson', 3, 850.25)">📊 History</button>
                                    <button class="btn-action btn-delete" onclick="deleteUser(3)">🗑️ Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>maria_garcia</td>
                                <td>Maria</td>
                                <td>Garcia</td>
                                <td>maria@example.com</td>
                                <td>555-0104</td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="openEditModal(4, 'Maria', 'Garcia', 'maria_garcia', 'maria@example.com')">✏️ Edit</button>
                                    <button class="btn-action btn-history" onclick="openHistoryModal(4, 'Maria Garcia', 12, 5420.00)">📊 History</button>
                                    <button class="btn-action btn-delete" onclick="deleteUser(4)">🗑️ Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>robert_brown</td>
                                <td>Robert</td>
                                <td>Brown</td>
                                <td>robert@example.com</td>
                                <td>555-0105</td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="openEditModal(5, 'Robert', 'Brown', 'robert_brown', 'robert@example.com')">✏️ Edit</button>
                                    <button class="btn-action btn-history" onclick="openHistoryModal(5, 'Robert Brown', 6, 2150.80)">📊 History</button>
                                    <button class="btn-action btn-delete" onclick="deleteUser(5)">🗑️ Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>sarah_martin</td>
                                <td>Sarah</td>
                                <td>Martin</td>
                                <td>sarah@example.com</td>
                                <td>555-0106</td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="openEditModal(6, 'Sarah', 'Martin', 'sarah_martin', 'sarah@example.com')">✏️ Edit</button>
                                    <button class="btn-action btn-history" onclick="openHistoryModal(6, 'Sarah Martin', 9, 4350.40)">📊 History</button>
                                    <button class="btn-action btn-delete" onclick="deleteUser(6)">🗑️ Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Products Section -->
            <section id="products" class="content-section">
                <div class="section-header">
                    <h1>Product Management</h1>
                    <button class="btn-primary" onclick="openAddProductModal()">➕ Add Product</button>
                </div>

                <div class="table-container">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Wireless Headphones</td>
                                <td>High-quality sound with noise cancellation</td>
                                <td>$79.99</td>
                                <td><span class="badge-image">📷</span></td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="openEditProductModal(1, 'Wireless Headphones', 'High-quality sound with noise cancellation', 79.99)">✏️ Edit</button>
                                    <button class="btn-action btn-delete" onclick="deleteProduct(1)">🗑️ Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>USB-C Cable</td>
                                <td>Durable charging cable, 6ft length</td>
                                <td>$12.99</td>
                                <td><span class="badge-image">📷</span></td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="openEditProductModal(2, 'USB-C Cable', 'Durable charging cable, 6ft length', 12.99)">✏️ Edit</button>
                                    <button class="btn-action btn-delete" onclick="deleteProduct(2)">🗑️ Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mechanical Keyboard</td>
                                <td>RGB backlit, mechanical switches, perfect for gaming</td>
                                <td>$149.99</td>
                                <td><span class="badge-image">📷</span></td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="openEditProductModal(3, 'Mechanical Keyboard', 'RGB backlit, mechanical switches, perfect for gaming', 149.99)">✏️ Edit</button>
                                    <button class="btn-action btn-delete" onclick="deleteProduct(3)">🗑️ Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Wireless Mouse</td>
                                <td>Ergonomic design, 2.4GHz wireless, long battery life</td>
                                <td>$34.99</td>
                                <td><span class="badge-image">📷</span></td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="openEditProductModal(4, 'Wireless Mouse', 'Ergonomic design, 2.4GHz wireless, long battery life', 34.99)">✏️ Edit</button>
                                    <button class="btn-action btn-delete" onclick="deleteProduct(4)">🗑️ Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>4K Monitor</td>
                                <td>27-inch, 4K resolution, 60Hz refresh rate</td>
                                <td>$399.99</td>
                                <td><span class="badge-image">📷</span></td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="openEditProductModal(5, '4K Monitor', '27-inch, 4K resolution, 60Hz refresh rate', 399.99)">✏️ Edit</button>
                                    <button class="btn-action btn-delete" onclick="deleteProduct(5)">🗑️ Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Laptop Stand</td>
                                <td>Aluminum construction, adjustable height, portable</td>
                                <td>$45.99</td>
                                <td><span class="badge-image">📷</span></td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="openEditProductModal(6, 'Laptop Stand', 'Aluminum construction, adjustable height, portable', 45.99)">✏️ Edit</button>
                                    <button class="btn-action btn-delete" onclick="deleteProduct(6)">🗑️ Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Webcam</td>
                                <td>1080p HD, built-in microphone, auto focus</td>
                                <td>$59.99</td>
                                <td><span class="badge-image">📷</span></td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="openEditProductModal(7, 'Webcam', '1080p HD, built-in microphone, auto focus', 59.99)">✏️ Edit</button>
                                    <button class="btn-action btn-delete" onclick="deleteProduct(7)">🗑️ Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <!-- Edit User Modal -->
    <div id="editUserModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('editUserModal')">&times;</span>
            <h2>Edit User</h2>
            <form>
                <div class="form-group">
                    <label for="editFirstName">First Name</label>
                    <input type="text" id="editFirstName" name="editFirstName" required>
                </div>
                <div class="form-group">
                    <label for="editLastName">Last Name</label>
                    <input type="text" id="editLastName" name="editLastName" required>
                </div>
                <div class="form-group">
                    <label for="editUsername">Username</label>
                    <input type="text" id="editUsername" name="editUsername" required>
                </div>
                <div class="form-group">
                    <label for="editEmail">Email</label>
                    <input type="email" id="editEmail" name="editEmail" required>
                </div>
                <div class="modal-buttons">
                    <button type="submit" class="btn-submit">Save Changes</button>
                    <button type="button" class="btn-cancel" onclick="closeModal('editUserModal')">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- History Modal -->
    <div id="historyModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('historyModal')">&times;</span>
            <h2>Purchase History</h2>
            <div class="history-info">
                <p><strong>Customer Name:</strong> <span id="historyName"></span></p>
                <p><strong>Total Purchases:</strong> <span id="historyPurchases"></span></p>
                <p><strong>Total Spent:</strong> $<span id="historyTotal"></span></p>
            </div>
            <h3>Bought Items</h3>
            <ul id="historyItems" class="history-items">
                <li>Wireless Headphones - $79.99</li>
                <li>USB-C Cable - $12.99</li>
                <li>Mechanical Keyboard - $149.99</li>
            </ul>
            <div class="modal-buttons">
                <button type="button" class="btn-cancel" onclick="closeModal('historyModal')">Close</button>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('deleteModal')">&times;</span>
            <h2>Confirm Delete</h2>
            <p>Are you sure you want to delete this <span id="deleteType"></span>? This action cannot be undone.</p>
            <div class="modal-buttons">
                <button type="button" class="btn-danger" id="confirmDeleteBtn">Delete</button>
                <button type="button" class="btn-cancel" onclick="closeModal('deleteModal')">Cancel</button>
            </div>
        </div>
    </div>

    <!-- Add/Edit Product Modal -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('productModal')">&times;</span>
            <h2 id="productModalTitle">Add Product</h2>
            <form>
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input type="text" id="productName" name="productName" placeholder="Enter product name" required>
                </div>
                <div class="form-group">
                    <label for="productDescription">Description</label>
                    <textarea id="productDescription" name="productDescription" rows="4" placeholder="Enter product description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="productPrice">Price ($)</label>
                    <input type="number" id="productPrice" name="productPrice" step="0.01" placeholder="Enter price" required>
                </div>
                <div class="form-group">
                    <label for="productImage">Choose Image</label>
                    <input type="file" id="productImage" name="productImage" accept="image/*">
                    <small>Supported formats: JPG, PNG, GIF</small>
                </div>
                <div class="modal-buttons">
                    <button type="submit" class="btn-submit" id="productSubmitBtn">Add Product</button>
                    <button type="button" class="btn-cancel" onclick="closeModal('productModal')">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    @section('js')
        <script>
            // Navigation switching
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const section = this.getAttribute('data-section');
                    
                    // Hide all sections
                    document.querySelectorAll('.content-section').forEach(s => {
                        s.classList.remove('active');
                    });
                    
                    // Remove active class from all links
                    document.querySelectorAll('.nav-link').forEach(l => {
                        l.classList.remove('active');
                    });
                    
                    // Show selected section
                    document.getElementById(section).classList.add('active');
                    this.classList.add('active');
                });
            });

            // Modal functions
            function openModal(modalId) {
                document.getElementById(modalId).style.display = 'block';
            }

            function closeModal(modalId) {
                document.getElementById(modalId).style.display = 'none';
            }

            function openEditModal(id, firstName, lastName, username, email) {
                document.getElementById('editFirstName').value = firstName;
                document.getElementById('editLastName').value = lastName;
                document.getElementById('editUsername').value = username;
                document.getElementById('editEmail').value = email;
                openModal('editUserModal');
            }

            function openHistoryModal(id, name, purchases, total) {
                document.getElementById('historyName').textContent = name;
                document.getElementById('historyPurchases').textContent = purchases;
                document.getElementById('historyTotal').textContent = total.toFixed(2);
                openModal('historyModal');
            }

            function openAddProductModal() {
                document.getElementById('productModalTitle').textContent = 'Add Product';
                document.getElementById('productSubmitBtn').textContent = 'Add Product';
                document.getElementById('productName').value = '';
                document.getElementById('productDescription').value = '';
                document.getElementById('productPrice').value = '';
                document.getElementById('productImage').value = '';
                openModal('productModal');
            }

            function openEditProductModal(id, name, description, price) {
                document.getElementById('productModalTitle').textContent = 'Edit Product';
                document.getElementById('productSubmitBtn').textContent = 'Update Product';
                document.getElementById('productName').value = name;
                document.getElementById('productDescription').value = description;
                document.getElementById('productPrice').value = price;
                openModal('productModal');
            }

            function deleteUser(id) {
                document.getElementById('deleteType').textContent = 'user';
                document.getElementById('confirmDeleteBtn').onclick = function() {
                    alert('User ' + id + ' deleted successfully!');
                    closeModal('deleteModal');
                };
                openModal('deleteModal');
            }

            function deleteProduct(id) {
                document.getElementById('deleteType').textContent = 'product';
                document.getElementById('confirmDeleteBtn').onclick = function() {
                    alert('Product ' + id + ' deleted successfully!');
                    closeModal('deleteModal');
                };
                openModal('deleteModal');
            }

            // Close modal when clicking outside
            window.onclick = function(event) {
                if (event.target.classList.contains('modal')) {
                    event.target.style.display = 'none';
                }
            };
        </script>
    @endsection
@endsection
