
<link rel="stylesheet" href="style.css">
<style>
    
footer {
    background: linear-gradient(var(--sand),var(--sandDark));
    padding: 20px;
}

.footer-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.footer-logo img {
    height: 50px;
    width: 50px;
}

.footer-bottom {
    margin-top: 10px;
    text-align: center;
}

.footer-bottom p {
    font-size: 12px;
    font-weight:800;
    color: black;
    margin: 0;
}


}

</style>
<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <img src="media/logo.svg" alt="logo">
        </div>
        
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Your Website. All rights reserved.</p>
    </div>
    
</footer>
