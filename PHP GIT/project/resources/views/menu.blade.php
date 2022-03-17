<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  width: 360px;
  border-right:1px solid rgb(85, 85, 85);
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: rgb(0, 0, 0);
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="{{ route('text') }}">ჩვენს შესახებ</a></li>
  <li><a href="{{ route('category') }}">კატეგორიები</a></li>
  <li><a href="#contact">სტატიები</a></li>
  <li><a href="#about">კონტაქტი</a></li>
</ul>

</body>
</html>
