
</main>

<?php include 'footer.php';?>

<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const porductsListEl = document.querySelector(".products-list");
    const seeMoreBtn = document.querySelector(".see-more-btn");

    seeMoreBtn.addEventListener('click', () => {
        porductsListEl.scrollIntoView({behavior: "smooth"})
    })
</script>

<script src="./js/products.js"></script>
<script src="./js/app.js"></script>
</body>
</html>