<div class="header">
    <div class="baris-atas">
        <div class="logowallacea"></div>
        <div class="search-container">
            <div class="logosearch"></div>
            <input type="text" placeholder="Cari Disini...">
        </div>
        <div class="profil-container">
            <img class="profile" src="assets/image/profile-dummy1.svg" alt="Profile">
        </div>
    </div>

    <div class="menu">
        <a href="index.php">Home</a>
        <a href="category.php">Kategori</a>
        <a href="information.php">Informasi</a>
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
        max-height: 100px;
        background-color: #3E7B27;
        padding: 10px 50px;
        display: flex;
        flex-direction: column;
        position: fixed;
        top: 0;
        z-index: 2;
    }

    .header.shrink {
        padding: 5px 50px;
    }

    .header.shrink .menu a {
        font-size: 14px;
    }

    .baris-atas {
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
        background-size: contain;
    }


    .search-container {
        position: relative;
        flex: 1;
        max-width: 750px;
    }

    .search-container.shrink {
        height: 24px;
    }

    .search-container.shrink .logosearch {
        top: 50%;
        transform: translateY(-50%);
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
        height: 32px;
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

    .header.shrink input {
        height: 32px;
        font-size: 12px;
    }

    .header.shrink .logosearch {
        top: 50%;
        transform: translateY(-50%);
    }

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
        color: #d0ff95;
        text-decoration: none;
    }

    .header.shrink .profile {
        width: 38px;
        height: 38px;
    }

    /* Responsive */
    @media (max-width: 800px) {
        .header {
            padding: 15px 30px;
        }

        .baris-atas {
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
<script>
    window.addEventListener('scroll', function () {
        const header = document.querySelector('.header');
        const logowallacea = document.querySelector('.logowallacea');
        // const searchContainer = document.querySelector('.search-container');
        const menuLinks = document.querySelectorAll('.menu a');
        const profile = document.querySelector('.profile');

        if (window.scrollY > 50) {
            header.classList.add('shrink');
            logowallacea.classList.add('shrink');
            // searchContainer.classList.add('shrink');
            menuLinks.forEach(link => link.classList.add('shrink'));
            profile.classList.add('shrink');
        } else {
            header.classList.remove('shrink');
            logowallacea.classList.remove('shrink');
            // searchContainer.classList.remove('shrink');
            menuLinks.forEach(link => link.classList.remove('shrink'));
            profile.classList.remove('shrink');
        }
    });
</script>