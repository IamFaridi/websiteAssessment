<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website</title>
    <link rel="stylesheet" href="Styling/index.css">
    <link rel="stylesheet" href="Styling/searchBar.css">
    <link rel="stylesheet" href="Styling/navbar.css">
    <link rel="stylesheet" href="Styling/modal.css">
</head>

<body>
    <?php  include 'components/searchBar.php'?>
    <?php  include 'components/navbar.php'?>
    <?php  include 'components/modal.php'?>
    <div class="indexImg">
        <img src="images/ferti.png" alt="">
    </div>

    <div class="offerBody">
        <div class="trendOffer">
            <h2 class="offerHeadings">Trending Offers</h2>
            <div class="viewAll">
                <a href="#" class="viewAllbtn">View All</a>
            </div>
        </div>
        <div class="productDisplay">
            <div class="card"> <!-- can be add more dynamically through php with database -->
                <img src="images/blue.jpeg" alt="Denim Jeans" style="width:100%">
                <h5 class="productName">Akr 1.2 litre Garden</h5>
                <h6 class="productDis">44% Off</h6>
                <h6 class="currentPrice">Only at 499/-</h6>
            </div>
        </div>
    </div>







    <script>
    let loginBtn = document.getElementById('loginbtn');
    loginBtn.addEventListener('click', () => {
        document.body.classList.add("showLoginForm");
    });

    function closeLoginForm() {
        document.body.classList.remove("showLoginForm");
    }
    </script>
</body>

</html>