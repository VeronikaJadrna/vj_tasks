<footer>
    <div class = "footer">
        <div class = "footerInsta"><i class="fa-brands fa-instagram"></i></div>
        <div class = "footerFB"><i class="fa-brands fa-facebook"></i></div>
        <div class = "footerTwitter"><i class="fa-brands fa-twitter"></i></div>

    </div>
    <div class="footer-copyright text-center py-3"><p>&copy; Veronika Jadrna 2023
    <br><?php
    echo $_SERVER['PHP_SELF'];
    $fname = basename($_SERVER['PHP_SELF']);
    $last_modified = filemtime($fname);
    echo "Last modified on: " . date('l js \o\f F Y, h:i:s A', $last_modified);
    ?>
   </footer>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>