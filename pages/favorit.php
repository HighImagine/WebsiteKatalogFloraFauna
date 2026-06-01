<!DOCTYPE html>
<html lang="en">

<head>
<?php
$css = "css/favorit.css";
$title = "Favorit";
include '../template/head.php'
?>
</head>

<body>
    <div class="header">
        <div class="header-kanan">
            <img class="profile-admin" src="assets/image/profile-dummy2.svg" style="width: 50px;">
            <div class="admin-info">
                <h4 class="admin-name">Saddam Husein</h4>
                <p class="admin-email">saddamhusein@example.com</p>
            </div>
        </div>
    </div>

    <div class="sidebar">
        <img class="logo" src="assets/image/logo-hitam.svg">
        <div class="sidebar-menu">
            <div class="menu-atas">
                <ul>
                    <li class="menu1"><img src="assets/image/icon-home.svg"><a
                            href="dashboard-utama.html">Dashboard</a></li>
                    <li class="menu2"><img src="assets/image/icon-mylist.svg"><a href="mylist.html">My
                            List</a></li>
                    <li class="menu3"><img src="assets/image/icon-comment.svg"><a
                            href="activity-comment.html">Activity</a></li>
                </ul>
            </div>

            <div class="menu-bawah" style="margin: 290px 0px 0px 0px;">
                <ul>
                    <li class="menu5"><img src="assets/image/icon-logout.svg"><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content">
        <main>
            <div class="mylist-text">
                <div class="mylist-title">
                    <img src="assets/image/icon-mylist.svg">
                    <h2>My List</h2>
                </div>
                <div class="mylist-desc">
                    <p style="font-weight: 500">My List</p>
                    <p>Edit Semua List Flora Fauna yang pernah anda tambahkan!</p>
                </div>
            </div>
            <div class="card-container">
                <div class="card1-container">
                    <div class="image1-container">
                        <div class="edit-container">
                            <div class="edit-button">
                                <button><img src="assets/image/icon-edit.svg"></button>
                            </div>
                        </div>
                        <img class="card1-img" src="assets/image/wishlist-komodo.svg">
                    </div>
                    <div class="card1-text">
                        <p>VARANUS KOMODOENSIS
                        (Komodo)
                        </p>
                    </div>    
                </div>
                <div class="card2-container">
                    <div class="image2-container">
                        <div class="edit-container">
                            <div class="edit-button">
                                <button><img src="assets/image/icon-edit.svg"></button>
                            </div>
                        </div>
                        <img class="card2-img" src="assets/image/wishlist-burung.png">
                    </div>
                    <div class="card2-text">
                        <p>ACEROS CASSIDIX
                        (Rangkok Sulawesi)
                        </p>
                    </div>    
                </div>
                <div class="card3-container">
                    <div class="image3-container">
                        <div class="edit-container">
                            <div class="edit-button">
                                <button><img src="assets/image/icon-edit.svg"></button>
                            </div>
                        </div>
                        <img class="card3-img" src="assets/image/wishlist-bunga.png">
                    </div>
                    <div class="card3-text">
                        <p>PTEROCARPUS INDICUS
                        (Angsana)
                        </p>
                    </div>    
                </div>
                <div class="card4-container">
                    <div class="image4-container">
                        <div class="edit-container">
                            <div class="edit-button">
                                <button><img src="assets/image/icon-edit.svg"></button>
                            </div>
                        </div>
                        <img class="card4-img" src="assets/image/wishlist-anoa.png">
                    </div>
                    <div class="card4-text">
                        <p>ANOA DEPRESSICORNIS
                        (Anoa Dataran Rendah)
                        </p>
                    </div>    
                </div>
            </div>
            
        </main>
    </div>