<style>
    body,
    html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    .background {
        background-image: url("pic/2.jpg");
    }
    .background{
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    .welcome {
        text-shadow: 0 0 3px rgb(255, 255, 255), 0 0 5px rgb(146, 108, 108), 0 0 8px rgb(83, 65, 65), 0 0 20px #777779, 0 0 10px #fc9898, 0 0 5px #9e9e9e, 0 0 1px #818283, 0 0 60px #7e7e7e;
        padding: 10px;
        position: absolute;
        font-size: 3.5em;
        color: rgb(219, 239, 255);
        left: 1%;
        box-shadow: 0 0 .2rem white, 0 0 2rem rgba(255, 255, 255, 0.74), 0 0 1.5rem #79787856, 0 0 0.5rem #7c7a7a70, 0 0 0.4rem #58585867, inset 0 0 0.4rem #706d6d5e;
        top: 13%;
        background-color: rgba(255, 255, 255, 0.068);
        font-family: Arial, Helvetica, sans-serif;
    }
    .welcome:hover {
        box-shadow: 0 0 .2rem #fff, 0 0 1rem #fff, 0 0 1rem #d6d6d6, 0 0 0.5rem #cababa, 0 0 0.1rem #85858567, inset 0 0 0.3rem #707070b7;
        background: rgba(162, 191, 255, 0);
        cursor: pointer;
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
    .profile:hover {
        box-shadow: 0 0 .2rem #fff, 0 0 1rem #fff, 0 0 1.2rem #5a8ef0, 0 0 0.5rem #a4b2ff, 0 0 0.1rem #0919f367, inset 0 0 0.3rem #1365feb7;
        background: rgba(96, 160, 255, 0.212);
    }
    hr {
        border: transparent 0.5px solid;
        background: rgba(245, 245, 245, 0.233);
        margin-top: 25px;
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
        width: 334px;
    }
    a {
        text-decoration: transparent;
        color: black;
    }

    p {
        color: rgb(216, 1, 1);
        font-weight: bold;
        text-shadow: 0 0 1px rgba(255, 255, 255, 0.726), 0 0 1px rgba(247, 141, 141, 0.685), 0 0 80px #fff, 0 0 42px #a2b3ff, 0 0 10px #5272ff52, 0 0 40px #5271ff, 0 0 20px #5272ff57, 0 0 16px #5272ff56;
    }
    .profile {
        position: absolute;
        top: 12px;
        right: 20px;
        width: 150px;
    }
    .profile:hover {
        box-shadow: 0 0 .2rem #fff, 0 0 1rem #fff, 0 0 1.2rem #5a8ef0, 0 0 0.5rem #a4b2ff, 0 0 0.1rem #0919f367, inset 0 0 0.3rem #1365feb7;
        background: rgba(96, 160, 255, 0.212);
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
    td {
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        border: solid 0px black;
        text-align: center;
        width: 1.5%;
        height: 55px;
        color: rgb(0, 0, 0);
    }
    td:hover {
        text-decoration: underline;
        background-color: rgba(175, 175, 175, 0.541);
    }
    .cont {
        max-width: 50%;
        margin: 5;
        font-size: 24px;
        padding: 25px;
    }
    .parallax {
        background-image: url("pic/4.jpg");
        background-size: cover;
        background-attachment: fixed;
        height: 900px;
    }
    .none:hover {
        background-color: rgba(170, 170, 170, 0);
    }
    i {
        font-size: 20px;
    }
    .img{
        height:700px;
        width:460px;
        position: absolute;
    }

</style>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<body>
    <header>
        <a href="{{ url('/') }}" ><div class="title">AXIS</div> </a>
    
        <table>
            <tr>
                <td class="none" style="width:1%"><a href="{{ url('sign') }}"><i class="fas fa-bars"></i></a></td>
                <td style="width:7.4%" class="none"></td>
                <td class="none"><input type="text" placeholder="search"><i class="fas fa-search" style="position: absolute; left:64.4%;top:31%"></i></td>
                <td style="width:1%" class="none"></td>
                <td><a href="{{ url('signin') }}"><i class="fas fa-user"></i>  Sign in </a></td>
                <td><a href="{{ url('sign') }}"><i class="fas fa-heart"></i>  Wishlist </a></td>
                <td><a href="{{ url('sign') }}"><i class="fas fa-shopping-cart"></i>  Shopping cart</a></td>
            </tr>
        </table>
    </header>

    <section>
        <h1 style="position:absolute;top:70px;left:26px;">Dresses</h1>
        <div style="background-image: url(pic/7.jpg);" ></div>
    </section>
    


</body>
</html>

