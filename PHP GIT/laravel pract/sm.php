<!DOCTYPE html>
<head>
    <style>
        .menu{
            float:right;
            padding-top: 1%;
        }
        .menu li{
            display:inline-block;
        }
        .menu li:first-child{
            margin-left:0;
        }
        .menu li a {
            display: block;
            font-size: 18px;
            padding: 10px 10px;
            color: #FFF;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
            font-weight: 300;
        }
        .menu li a:hover ,.menu li.active a{
            background:#000000;
            color:#4BCAFF;
        }
        #nav .current a {
            color:red;
        }
        .toggleMenu {
            display:  none;
            padding: 2px 0px 0px 0px;
        }
        .nav:before,
        .nav:after {
            content: " ";
            display: table;
        }
        .nav:after {
            clear: both;
        }
        .nav ul {
            list-style: none;
        }
    </style>
</head>
<body>
    
    <div class="menu">
        <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /></a>
          <ul class="nav" id="nav">
          <li><a href="/pages/about" class="scroll">About Us</a></li>
          @foreach($sections as $section)
          <li class="section">
              <a href="#" class="cat-toggle dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $section->name }}</a>
              <ul class="categories dropdown-menu">
                  @foreach($section->categories as $category)
                      <li><a href="{{ url('/category/'.$category->id.'/show') }}">{{ $category->name }}</a></li>
                  @endforeach
              </ul>
          </li>
          @endforeach
              <li><a href="/pages/engineering-services" class="scroll">Engineering Services</a></li>
             <li><a href="#contact" class="scroll">Contact Us</a></li>
             <div class="clear"></div>
          </ul>
      </div>

</body>
</html>