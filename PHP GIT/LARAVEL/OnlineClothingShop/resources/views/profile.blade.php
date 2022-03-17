<style>
    body,
    html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    .background {
        background-image: url("pic/30.jpg");
    }
    .background{
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    .box {
        width: 1200px;
        padding: 26px 30px;
        border: solid 1px transparent;
        /* background: rgba(180, 198, 255, 0.404); */
        position: absolute;
        top: 100px;
        left: 110px;
        border-radius: 8px;
        /* box-shadow: 0 0 .2rem #fff, 0 0 1rem rgba(255, 255, 255, 0.74), 0 0 1.5rem #5a8ef056, 0 0 0.5rem #7494fd70, 0 0 0.5rem #0934f367, inset 0 0 0.6rem #1365fe5e; */
    }
    .title {
        z-index: 1;
        font-size: 40px;
        font-weight: bold;
        text-shadow: 0 0 2px rgb(175, 175, 175), 0 0 2px rgb(175, 175, 175), 0 0 8px #fff, 0 0 2px #c21a1a;
        color: rgb(0, 0, 0);
        font-family: Arial, Helvetica, sans-serif;
        position: absolute;
        top: 9px;
        left: 68px;
    }
    button {
        border: solid rgba(0, 0, 0, 0.459) 2px;
        background-color: black;
        height: 42px;
        width: 400px;
        color: white;
        cursor: pointer;
    }
    .profile:hover {
        box-shadow: 0 0 .2rem #fff, 0 0 1rem #fff, 0 0 1.2rem #5a8ef0, 0 0 0.5rem #a4b2ff, 0 0 0.1rem #0919f367, inset 0 0 0.3rem #1365feb7;
        background: rgba(96, 160, 255, 0.212);
    }
    button:hover {
        background: rgb(70, 70, 70);
    }
    hr {
        border: rgb(235, 235, 235) 0.5px solid;
        width: 99.8%;
        position: absolute;
        top: 18%;
    }
    input {
        border: rgb(0, 0, 0) solid 1px;
        background-color: rgb(212, 212, 212);
        height: 28px;
        width: 400px;
        border: transparent;
        padding: 5px;
        /* box-shadow: 0 0 .2rem #fff, 0 0 1rem #fff, 0 0 1.5rem #5a8ef056, 0 0 0.5rem #7489fd70, 0 0 0.5rem #0919f367, inset 0 0 0.6rem #1365fe5e; */
    }
    .inp {
        background-color: transparent;
    }
    a {
        text-decoration: transparent;
        color: black;
        cursor: pointer;
    }
    .profile {
        position: absolute;
        top: 12px;
        right: 20px;
        width: 150px;
    }
    table {
        text-align: center;
        height: 6%;
        width: 100%;
        background-color: rgba(94, 94, 94, 0.5);
        position: absolute;
        top: 0;
        border: transparent solid 1px;
        color: rgb(0, 0, 0);
    }
    .table2 {
        text-align: center;
        height: 6%;
        width: 100%;
        background-color: rgb(75, 75, 75);
        position: absolute;
        top: 215px;
        border: transparent solid 1px;
        color: rgb(255, 255, 255);
    }
    td {
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        border: solid 0px black;
        text-align: center;
        width: 1.5%;
        height: 55px;
        color: rgb(0, 0, 0);
    }
    .td2 {
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        border: solid 0px black;
        text-align: center;
        width: 1.5%;
        height: 55px;
        color: rgb(0, 0, 0);
    }
    td:hover {
        background-color: rgba(175, 175, 175, 0.541);
    }
    .cont {
        max-width: 100%;
        margin: 0 auto;
        font-size: 24px;
        padding: 25px;
    }
    .parallax {
        background-image: url("pic/30.jpg");
        background-size: cover;
        background-attachment: fixed;
        height: 500px;
    }
    .none:hover {
        background-color: rgba(170, 170, 170, 0);
    }
    i {
        font-size: 20px;
    }
    .hrdark{
        border: rgb(0, 0, 0) 1.2px solid;
        width:11%;
        position: absolute;
        top: 18%;
        left:40.3%;
    }
    span{
        position: absolute;
        top: 55px;
        font-size: 12px;
        color: rgb(219, 14, 14); 
    }
    /* ul{
        list-style-type: none;
    }
    li{
        border: rgb(0, 0, 0) 2px solid;
        width:20%;
        margin: auto;
        padding: 7px;
        color: white;
        z-index: 1;
        /* position: absolute;
        top: 18%;
        left:40.3%; */
    } */
    .lightCollor{
        color: rgb(146, 39, 39);

    }
</style>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<body>

    <form method="get" enctype="multipart/form-data">
        <header>
            <a href="{{ url('/') }}" ><div class="title">AXIS</div> </a>
            <table>
                <tr>
                    <td class="none" style="width:1%"><a href="{{ url('sign') }}"><i class="fas fa-bars"></i></a></td>
                    <td style="width:7.4%" class="none"></td>
                    <td class="none"><input type="text" placeholder="search"><i class="fas fa-search" style="position: absolute; left:64.4%;top:31%"></i></td>
                    <td style="width:1%" class="none"></td>
                    <td><a href="{{ url('profile') }}"><i class="fas fa-user"></i>  Profile </a></td>
                    <td><a href="{{ url('sign') }}"><i class="fas fa-heart"></i>  Wishlist </a></td>
                    <td><a href="{{ url('sign') }}"><i class="fas fa-shopping-cart"></i>  Shopping cart</a></td>
                </tr>
            </table>
        </header>
        
        <section>
            <div class="box">
                <h1 style="margin:auto; color:rgb(66, 66, 66);position: absolute;left:575px">My Account</h1>
                <div style="margin-top: 70px">Hello name</div>
                <br>
                <div>welcome to your axsis account.</div>
                <br>
                <div>Here you will be able to edit your details, view your order status and update your wishlist.</div>

                <table class="table2">
                    <tr>
                        <td><a style="color: white"  href="{{ url('#') }}">  My Details </a></td>
                        <td style="background-color: white;"><a style="color: black" href="{{ url('#') }}">  Subscriptions </a></td>
                        <td style="background-color: white"><a style="color: black" href="{{ url('#') }}">  Order History </a></td>
                        <td style="background-color: white"><a style="color: black" href="{{ url('#') }}">  My Wishlist </a></td>
                    </tr>
                </table>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h2>My Details</h2>
                <div>Name:</div>
                <div class="lightCollor">*Mari sikharulidze</div>
                <br>
                <div>Email Address:</div>
                <div>*mary.sikharulidze@gmail.com</div>
                <br>
                <button type="button" title="Edit" class="button button--alt button--wide button--fixed button--mid" onclick="window.location='#';">
                    Edit Your Details        </button>

                <h2>Address Book</h2>
                <div>Billing Address</div>
                <div>You have not set a default billing address.</div>
                <br>
                <div>Shipping Address</div>
                <div>You have not set a default billing address. </div>
                <br>
                <button type="button" title="Edit" class="button button--alt button--wide button--fixed button--mid" onclick="window.location = '#';">
                    Edit Addresses    </button>
                
        </section>

    </form>
</body>
</html>