# Aplikasi Laravel RESTful API 
Aplikasi ini adalah RESTful API yang dibangun dengan Laravel yang menyediakan fitur autentikasi pengguna dan CRUD untuk produk. Aplikasi ini dapat digunakan sebagai backend untuk aplikasi e-commerce, inventaris, atau aplikasi lain yang memerlukan autentikasi pengguna dan pengelolaan produk.

## Fitur Utama
1. Autentikasi Pengguna
    -> Register: Endpoint untuk mendaftarkan pengguna baru dengan validasi data input seperti nama, email, dan password.
    -> Login: Endpoint untuk masuk dengan email dan password, menghasilkan token otentikasi jika login berhasil.
    -> Logout: Endpoint untuk keluar dan menghapus token otentikasi yang sedang aktif.

3. Pengelolaan Produk
    -> List Products: Menampilkan daftar produk dengan opsi filter berdasarkan product_name dan category.
    -> Create Product: Menambahkan produk baru dengan atribut product_name, description, dan price, disertai validasi input.
    -> Show Product: Menampilkan detail produk tertentu berdasarkan id.
    -> Update Product: Memperbarui informasi produk yang sudah ada.
    -> Delete Product: Menghapus produk berdasarkan id.
