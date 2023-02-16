<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <title>Medium - Heaven for bloggers</title>
</head>
<body>
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="/">
                <span><img src="img/logo.png" width="171px" alt=""></span>
            </a>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <form action="/search.php" method="get">
                <input class="form-input" type="text" name="query" placeholder="Article Search">
                <button class="btn">Search</button>
            </form>

        </div>

    </nav>
 

    <div class="max-width-1 m-auto"><hr></div>
    <div class="home-articles max-width-1 m-auto font2">
        
        <h2>Search Results </h2>
        <div class="year-box adjust-year">
            <div>
                <h3>Year </h3>
            </div>
            <div>
                <input type="radio" name="year" id=""> 2020
            </div>
            <div>
                <input type="radio" name="year" id=""> 2021
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/11.svg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Web Development</h3>
                </a>

                <div>Minati Mam</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/1.png" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Learn more about Machine Learning techniques </h3>
                </a>

                <div>Vijay Sir</div>
                <span>11 January | 7 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/2.png" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>The art of Socializing</h3>
                </a>

                <div>Advik Sharma</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/block.png" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Learn more about Blockchain,Cryptocurrency,Defi,Gamefi.</h3>
                </a>

                <div>Farhan Shaikh</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/4.png" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Safety measures of Covid.</h3>
                </a>

                <div>Kevin Mehta</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/3.png" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Diwali "The Festival Of Lights".</h3>
                </a>

                <div>Nityan Shetty</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/13.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Blogging</h3>
                </a>

                <div>Karan Jhaveri</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/12.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Read More</h3>
                </a>

                <div>Babu Rastogi</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>

    </div>

    <div class="footer">
        <p>Copyright &copy; medium.com </p>
        
    </div>
</body>

</html>