@extends('layouts.admin')

@section('content')
<style>
    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px 30px;
        border: 1px solid #888;
        width: 400px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .modal-header h2 {
        font-size: 18px;
        margin: 0;
    }

    .close {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: 500;
        font-size: 14px;
    }

    .form-group input {
        width: 100%;
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    .btn-save {
        background-color: #1a73e8;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        font-weight: 600;
        font-size: 14px;
    }

    .btn-save:hover {
        background-color: #1557b0;
    }
</style>

<div class="page-title">
    <h1>DATA ADMIN</h1>
</div>

<div class="action-bar">
    <input type="text" id="searchInput" class="search-input" placeholder="Cari">
    <button onclick="openAddModal()" class="btn-add">Tambah</button>
</div>

<div class="data-table-container">
    <table class="data-table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Admin</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            <!-- Data will be populated here via JavaScript -->
        </tbody>
    </table>
</div>

<div class="pagination">
    <a href="#" class="page-item active">1</a>
    <a href="#" class="page-item">2</a>
    <a href="#" class="page-item">3</a>
    <a href="#" class="page-item">4</a>
</div>

<!-- Modal Form -->
<div id="adminModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2 id="modalTitle">Tambah Admin</h2>
            <span class="close" onclick="closeModal()">&times;</span>
        </div>
        <form id="adminForm">
            <input type="hidden" id="adminId">
            <div class="form-group">
                <label for="nama">Nama Admin</label>
                <input type="text" id="nama" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" required>
            </div>
            <button type="submit" class="btn-save">Simpan</button>
        </form>
    </div>
</div>

<script>
    // Initialize LocalStorage Data
    function initData() {
        if (!localStorage.getItem('admin')) {
            const initialData = [
                { id: 1, nama: 'Alex', username: 'alex12', password: 'admin123' }
            ];
            localStorage.setItem('admin', JSON.stringify(initialData));
        }
        renderTable();
    }

    // Read Data
    function getAdmins() {
        return JSON.parse(localStorage.getItem('admin')) || [];
    }

    // Render Table
    function renderTable(searchTerm = '') {
        const admins = getAdmins();
        const tbody = document.getElementById('tableBody');
        tbody.innerHTML = '';

        const filtered = admins.filter(admin => {
            return admin.nama.toLowerCase().includes(searchTerm.toLowerCase()) || 
                   admin.username.toLowerCase().includes(searchTerm.toLowerCase());
        });

        if (filtered.length === 0) {
            tbody.innerHTML = '<tr><td colspan="5" style="text-align: center;">Tidak ada data</td></tr>';
            return;
        }

        filtered.forEach((admin, index) => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${index + 1}</td>
                <td>${admin.nama}</td>
                <td>${admin.username}</td>
                <td>${admin.password}</td>
                <td>
                    <button onclick="openEditModal(${admin.id})" class="btn-action btn-edit">edit</button>
                    <button onclick="deleteData(${admin.id})" class="btn-action btn-delete">delete</button>
                </td>
            `;
            tbody.appendChild(tr);
        });
    }

    // Modal Handling
    const modal = document.getElementById('adminModal');

    function openAddModal() {
        document.getElementById('modalTitle').innerText = 'Tambah Admin';
        document.getElementById('adminId').value = '';
        document.getElementById('adminForm').reset();
        modal.style.display = 'block';
    }

    function openEditModal(id) {
        const admins = getAdmins();
        const admin = admins.find(a => a.id === id);
        if (admin) {
            document.getElementById('modalTitle').innerText = 'Edit Admin';
            document.getElementById('adminId').value = admin.id;
            document.getElementById('nama').value = admin.nama;
            document.getElementById('username').value = admin.username;
            document.getElementById('password').value = admin.password;
            modal.style.display = 'block';
        }
    }

    function closeModal() {
        modal.style.display = 'none';
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target == modal) {
            closeModal();
        }
    }

    // Form Submit (Save / Update)
    document.getElementById('adminForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const id = document.getElementById('adminId').value;
        const nama = document.getElementById('nama').value;
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        let admins = getAdmins();

        if (id) {
            // Update
            const index = admins.findIndex(a => a.id == id);
            if (index !== -1) {
                admins[index] = { id: parseInt(id), nama, username, password };
            }
        } else {
            // Create
            const newId = admins.length > 0 ? Math.max(...admins.map(a => a.id)) + 1 : 1;
            admins.push({ id: newId, nama, username, password });
        }

        localStorage.setItem('admin', JSON.stringify(admins));
        closeModal();
        renderTable(document.getElementById('searchInput').value);
    });

    // Delete Data
    function deleteData(id) {
        if (confirm('Yakin ingin menghapus data ini?')) {
            let admins = getAdmins();
            admins = admins.filter(a => a.id !== id);
            localStorage.setItem('admin', JSON.stringify(admins));
            renderTable(document.getElementById('searchInput').value);
        }
    }

    // Search functionality
    document.getElementById('searchInput').addEventListener('input', function(e) {
        renderTable(e.target.value);
    });

    // Initialize on load
    document.addEventListener('DOMContentLoaded', initData);

</script>
@endsection
