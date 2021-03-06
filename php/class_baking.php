<!DOCTYPE html>
<html>
<head>
    <title>CLOUD WEB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google WEB Font URL : https://fonts.google.com/?subset=korean&selection.family=Nanum+Gothic -->
    <!-- Nanum 고딕체중 마음에 드는거 선택 후 해당 링크를 HTML 코드에 삽입 -->
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <style>
    .navbar {
        font-size: 15px;
        margin-bottom: 0;
        border-radius: 0;
    }
    .carousel-inner > .item > img {
        width:1200px;
        height:300px;
    }
    .modal-content {
        font-size: 15px; 
        margin: 0;
        padding: 0;
    }
    .collapse>.nav>li>a {
            color: black;
        }

    .collapse>.nav>li>a:hover {
        color: white;
        background-color: black;
    }
    .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
    }
    a:link {
        color : black;
        text-decoration: none;
    }
    a:visited {
         color : black;
         text-decoration: none;
    }
    a:hover {
        color : black;
        text-decoration: none;
    }
    a:active {
        color : black;
        text-decoration: none;
    }
    .a { 
        text-decoration:none 
    } 
    .rounded{border-radius:.80rem!important}
    </style>

</head>

<body style="font-family: 'Nanum Gothic', sans-serif;">
    <!-- Navigation Bar Container -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">   
            <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #ffff">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="./index_auth.html">
                            <img style="max-width:80px; margin-top: -15px;" src="../images/logo2.png">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse " id="MyNav" style="color:black">
                    <ul class="nav navbar-nav">
                        <li><a href="../class.html">클래스</a></li>
                        <li><a href="../store.html">스토어</a></li>
                        <li><a href="#">이벤트</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">고객센터</a>
                            <ul class="dropdown-menu">
                                <li><a href="./php/board.php">공지사항</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">1:1 문의</a></li>
                            </ul>
                        </li>
        
                        <form class="navbar-form navbar-left" action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="./php/logout.php"><span class="glyphicon glyphicon-log-out"></span> 로그아웃</a></li>
                </ul>
            </div>
        </nav>
        </div>
    </div>
    </div>
<br><br><br><br>    
<!-- Carousel Container --> 
    <div class="container">
        <a href="../class.html"><h1 class="text-center">클래스</h1></a><br><br>
        <div class="button" class="text-center">
                <a class="col-md-4 text-center"  class="btn btn-default" href="#"> <h2>베이킹</h2></a>
                <a class="col-md-4 text-center"  class="btn btn-default" href="#"> <h2>공예</h2></a>  
                <a class="col-md-4 text-center"  class="btn btn-default" href="#"> <h2>기타<h2></a>
                <br><br>
            </div>
            <hr class="one">
        <br><br>
        <br>
    </div>
    <!-- Main Content (Collapse) -->
    <div id="STORE" class="container-fluid text-center" >
        <h3>Best Class TOP8</h3>
        <br>

        <div class="row">

    
            <div class="col-sm-4">
                <a href="#STORE3" data-toggle="collapse">
                    <img src="../images/macaron1.PNG" alt="STORE_3" width="300" height="250" class="rounded">
                </a>
                <br>
                <div id="STORE3" class="collapse collapse in">
                    <h5 class="text-center"><strong>다원이가 먹다 뱉은 마카롱</strong></h5>
                    <p>Ranking : 3</p>
                    <p>Price : ￦20,000</p>
                </div>
            </div>
    
            <div class="col-sm-4">
                <a href="#STORE4" data-toggle="collapse">
                    <img src="../images/coffee1.PNG" alt="STORE_4" width="300" height="250" class="rounded">
                </a>
                <br>
                <div id="STORE4" class="collapse collapse in">
                    <h5 class="text-center"><strong>승민이와 함께하는 커피교실</strong></h5>
                    <p>Ranking : 4</p>
                    <p>Price : ￦25,000</p>
                </div>
            </div>
    
            <div class="col-sm-4">
                <a href="../yy.html" >
                    <img src="../images/macaron1.PNG" alt="STORE_6" width="300" height="250" class="rounded">
                </a>
                <br>
                <div id="STORE6" class="collapse collapse in">
                    <h5 class="text-center"><strong>한울이의 베이킹 교실♥</strong></h5>
                    <p>Ranking : 6</p>
                    <p>Price : ￦30,000</p>
                </div>
            </div>
    


        </div>
        <br><br>

    </div>
</div>

    <!-- 고객센터 Container -->
    <div id="contact" class="container">
    <h3>QUESTION</h3><br>
    <div class="row">
  
    <div class="col-md-4">
        <p><span class="glyphicon glyphicon-map-marker"></span> Seoul, KR</p>
        <p><span class="glyphicon glyphicon-phone"></span> Phone: +82 1544-0000</p>
        <p><span class="glyphicon glyphicon-envelope"></span> Email: cloud@cloud.com</p>
    </div>

    <div class="col-md-8">
        <div class="row">
        <form action="#" method="POST" name="service-form"> 
        <div class="col-sm-6 form-group">
            <input class="form-control" id="name" maxlength="10" placeholder="Name" type="text" required autocomplete="off">
        </div>
        <div class="col-sm-6 form-group">
            <input class="form-control" id="email" maxlength="40" placeholder="Email" type="email" required autocomplete="off">
        </div>
        </div>

        <textarea class="form-control" id="comments" maxlength="100" placeholder="Comment" rows="5" required autocomplete="off"></textarea>
        <br>
        <div class="row">
        <div class="col-md-12 form-group">
            <button class="btn pull-right btn-default" type="submit">SEND</button>
        </div>
        </div>
        </form>
    </div>
    </div>

    <!-- footer Container -->
    <footer class="container text-center">
        <p><span>Cloud System Test Site<br>Copyright &copy; BlaBla</span></p>
    </footer>

</body>
</html>

