
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

  
  <title>Dashboard</title>

  <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

  <link rel="stylesheet" href="{{ asset('css/style-dashboard.css') }}">



  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <header>

</header>

<sidebar>
    <div class="brand">
        <a href="{{ route('dashboard') }}">α</a>
    </div>

    <nav>
        <button class="menu-collapse" type="button" data-toggle="collapse" data-target="#myContent" aria-expanded="false" aria-controls="collapseExample">
            <span class="caret"></span> Account Management
        </button>
        <div class="collapse in" id="myContent">
            <ul class="nav">
                <li>
                    <a href="#">
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        Views Account
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <svg class="lnr lnr-eye"><use xlink:href="#lnr-eye"></use></svg>
                        Create Account
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg class="lnr lnr-tag"><use xlink:href="#lnr-tag"></use></svg>
                        Update and Delete Account
                    </a>
                </li>
            </ul>
        </div>
        
        <button class="menu-collapse" type="button" data-toggle="collapse" data-target="#mainContent" aria-expanded="false" aria-controls="collapseExample">
            <span class="caret"></span> Main
        </button>
        <div class="collapse in" id="mainContent">
            <ul class="nav">
                <li>
                    <a href="#">
                        <svg class="lnr lnr-heart-pulse"><use xlink:href="#lnr-heart-pulse"></use></svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg class="lnr lnr-inbox"><use xlink:href="#lnr-inbox"></use></svg>
                        Daily Report
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg class="lnr lnr-download"><use xlink:href="#lnr-download"></use></svg>
                        Reports
                    </a>
                </li>
            </ul>
        </div>
            
        <button class="menu-collapse" type="button" data-toggle="collapse" data-target="#fundNavigation" aria-expanded="false" aria-controls="collapseExample">
            <span class="caret"></span> Fund
        </button>
        <div class="collapse in" id="fundNavigation">
            <ul class="nav">
                <li>
                    <a href="#">
                        <svg class="lnr lnr-heart-pulse"><use xlink:href="#lnr-heart-pulse"></use></svg>
                        Overview
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg class="lnr lnr-chart-bars"><use xlink:href="#lnr-chart-bars"></use></svg>
                        Performance
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>$</span>
                        Unit Prices
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg class="lnr lnr-pie-chart"><use xlink:href="#lnr-pie-chart"></use></svg>
                        Allocations
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span style="text-transform: lowercase">%</span>
                        Attribution
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span style="text-transform: lowercase">&sigma;</span>
                        Risk
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg class="lnr lnr-list"><use xlink:href="#lnr-list"></use></svg>
                        Holdings
                    </a>
                </li>           
            </ul>           
            
        </div>      
    </nav>
</sidebar>


  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script> 
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
     

</body>

</html>