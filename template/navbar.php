<!-- template/navbar.php - Layout 2 baris sesuai Figma -->

<div class="header">
    <!-- Baris 1: Logo + Search -->
    <div class="top-row">
        <div class="logowallacea"></div>
        <div class="search-container">
            <div class="logosearch"></div>
            <input type="text" placeholder="Cari Disini...">
        </div>
        <div class="profil-container">
            <img class="profile" src="assets/image/profile-dummy1.svg" alt="Profile">
        </div>
    </div>

    <!-- Baris 2: Menu -->
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="category.php">Category</a>
        <a href="information.php">Information</a>
        <a href="community.php">Community</a>
    </div>
</div>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .header {
        width: 100%;
        background-color: #3E7B27;
        padding: 15px 80px;
        display: flex;
        flex-direction: column;
    }

    /* Baris 1: Logo + Search */
    .top-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .logowallacea {
        background-image: url(assets/image/logo-putih.svg);
        width: 70px;
        height: 60px;
        background-position: center;
        background-size: cover;
    }

    .search-container {
        position: relative;
        flex: 1;
        max-width: 500px;
    }

    .logosearch {
        position: absolute;
        left: 18px;
        top: 50%;
        transform: translateY(-50%);
        background-image: url(assets/image/search.svg);
        width: 18px;
        height: 18px;
        background-position: center;
        background-size: cover;
        z-index: 1;
    }

    input {
        width: 100%;
        height: 42px;
        background-color: white;
        border-radius: 30px;
        border: none;
        padding-left: 48px;
        font-size: 14px;
        outline: none;
        font-family: 'Poppins', sans-serif;
    }

    input::placeholder {
        color: #aaa;
        font-weight: 300;
    }

    /* Baris 2: Menu */
    .menu {
        display: flex;
        justify-content: center;
        gap: 50px;
        font-family: 'Poppins', sans-serif;
    }

    .menu a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
        transition: 0.3s;
    }

    .menu a:hover {
        color: #ffd700;
        text-decoration: none;
    }

    /* Responsive */
    @media (max-width: 800px) {
        .header {
            padding: 15px 30px;
        }
        
        .top-row {
            flex-direction: column;
            gap: 15px;
        }
        
        .search-container {
            max-width: 100%;
            width: 100%;
        }
        
        .menu {
            flex-wrap: wrap;
            gap: 25px;
            margin-top: 15px;
        }
    }
</style>