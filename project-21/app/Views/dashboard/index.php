<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboardStyle.css">
    <link rel="icon" href="assets/icon/icon-dark.png" sizes="20x20">
    <link rel="stylesheet" href="semantic/semantic.min.css">
    <link rel="stylesheet" href="semantic/all.min.css">
    <link rel="stylesheet" href="fontawesome5/all.min.css">
    <script src="semantic/semantic.js"></script>
    <script src="semantic/semantic.min.js"></script>
    <script src="fontawesome5/831f5dc82f.js"></script>
    <title>dashboard</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="assets/icon/icon-name.png" alt="" style="width: 150px;">
            <div class="panel">
                <button class="ui primary button">Dashboard</button>
                <button class="ui button">Ticket</button>
                <button class="ui button">Statistic</button>
                <button class="ui button">My Logs</button>
            </div>
        </div>
        <div class="ui container">
            <div class="content-header">
                <div class="content-header-title">
                    <h2 class="ui header"># Fresh Dashboard</h2>
                </div>
                <div class="content-header-menu">
                    <button class="ui labeled icon green button">
                        <i class="fa-solid fa-plus icon"></i>
                        New ticket
                    </button>
                    <div class="ui action input">
                        <input type="text" placeholder="Search...">
                        <button class="ui button">Search</button>
                        <a class="ui label">
                            <img class="ui right spaced avatar image" src="assets/users/guest-default-man.png">
                            Guest
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="panel-info grid-header">
                    <div class="info-box">
                        <h3 class="ui white inverted header">
                            <div class="box-icon">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            Proceed List
                            <h1 class="ui white inverted header">
                                <i class="fa-solid fa-arrow-right"></i> 23
                            </h1>
                        </h3>
                    </div>
                    <div class="info-box">
                        <h3 class="ui white inverted header">
                            <div class="box-icon">
                                <i class="fa-solid fa-ticket"></i>
                            </div>
                            New Requests
                            <h1 class="ui white inverted header">
                                <i class="fa-solid fa-arrow-right"></i> 14
                            </h1>
                        </h3>
                    </div>
                    <div class="info-box">
                        <h3 class="ui white inverted header">
                            <div class="box-icon">
                                <i class="fa-solid fa-bars-progress"></i>
                            </div>
                            Total Ticket
                            <h1 class="ui white inverted header">
                                <i class="fa-solid fa-arrow-right"></i> 290
                            </h1>
                        </h3>
                    </div>
                </div>
                <div class="panel-user grid-user">
                    <h2><i class="fa-solid fa-list"></i> Activity logs</h2>
                    <div class="ui relaxed list">
                        <div class="item">
                            <img class="ui avatar image" src="assets/users/guest-default-man.png">
                            <div class="content">
                                <a class="header">Nathanael Candika</a>
                                <div class="description">add new installation ticket <a><b>Sri Hayati</b></a> just now.</div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="ui avatar image" src="assets/users/guest-default-man.png">
                            <div class="content">
                                <a class="header">Nathanael Candika</a>
                                <div class="description">close installation ticket <a><b>Bob's Burgers</b></a> 10 hours ago.</div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="ui avatar image" src="assets/users/guest-default-lady.png">
                            <div class="content">
                                <a class="header">Kikisan Mala</a>
                                <div class="description">add new installation ticket <a><b>Jefry Al Buchori</b></a> yesterday.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-logs grid-logs">
                    <h2><i class="fa-regular fa-chart-bar"></i> On progress</h2>
                    <div class="ui cards">
                        <div class="card">
                            <div class="content">
                                <div class="header">Elliot Fu</div>
                                <div class="description">
                                    Elliot Fu is a film-maker from New York.
                                </div>
                            </div>
                            <div class="ui bottom primary attached button">
                                <i class="fa-regular fa-square-check"></i> Close ticket
                            </div>
                        </div>
                        <div class="card">
                            <div class="content">
                                <div class="header">Jenny Hess</div>
                                <div class="description">
                                    Jenny is a student studying Media Management at the New School
                                </div>
                            </div>
                            <div class="ui bottom primary attached button">
                                <i class="fa-regular fa-square-check"></i> Close ticket
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui center aligned container">
                <span class="ui header center">&copy;2023 build with Semantic.ui and <i class="fa-solid fa-heart"></i></span>
            </div>
        </div>
    </div>
</body>

</html>