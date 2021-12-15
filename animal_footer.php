<footer style="display:flex;justify-content:center">
    <h2> France Leoniel P. Rebollos & Iza Jean A. Abad </h2>
</footer>

<style>
body{
  margin: 0;
  padding: 0;
  font-family: "Roboto", sans-serif;
}
/* start */
#leftPanel{
    background-color:red;
    border-radius: 1em;
    color:#fff;
    text-align: center;
}
#rightPanel{
    min-height:415px;
}
.vl {
  border-left: 2px solid green;
  margin: 0 30px 0 30px;
  height: 20px;
}
.navbar{
  display: flex;
  flex-wrap: wrap-reverse;
}
#dash{
    display: flex;
    margin-left: 280px;
}
.parentCon{
    display: flex;
    flex-wrap: wrap-reverse;
    flex-direction: column;
}
main{
    padding-top: 80px;
    margin-left: 265px;
}
/* end */
.nav1, ul{
  margin: 0;
  padding: 0;
  position: relative;
  list-style-type: none;
}
.nav1 ul ul{
  position: absolute;
  text-align: left;
  left: 250px;
  width: 200px;
  top: 0;
  background: black;
  display: none;
  box-shadow: 2px 2px 10px grey;
}
.nav1 ul .dropdown{
  position: relative;
}
.nav1 ul .dropdown:hover ul{
  display: initial;
}
.nav2 ul{
  margin: 0;
  padding: 0;
  position: relative;
  list-style-type: none;
}
.nav2 ul ul{
  position: absolute;
  text-align: left;
  left: 250px;
  width: 280px;
  top: 0;
  background: black;
  display: none;
  box-shadow: 2px 2px 10px grey;
}
.nav2 ul .dropdown{
  position: relative;
}
.nav2 ul .dropdown:hover ul{
  display: initial;
}
#sidebar_btn{
    position: absolute;
    top: 32px;
}
header{
  position: fixed;
  background: #2f323a;
  padding: 10px;
  padding-bottom: 20px;
  width: 100%;
  z-index: 1;
  height: auto;
}
.left_area h3{
  color: #fff;
  margin: 0;
  margin-left: 10px;
  padding-bottom: 10px;
  text-transform: uppercase;
  font-size: 22px;
  font-weight: 900;
}
.left_area span{
  color: white;
}
.right_area h3{
  color: #fff;
  margin: 0;
  margin-left: 10px;
  padding-bottom: 10px;
  text-transform: uppercase;
  font-size: 22px;
  font-weight: 900;
}
.logout_btn{
  padding: 5px;
  background: white;
  text-decoration: none;
  float: right;
  margin-top: -40px;
  margin-right: 40px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: black;
  transition: 0.5s;
  transition-property: background;
}
.logout_btn:hover{
  background: white;
}
/* sidebar */
.sidebar {
  background: #2f323a;
  margin-top: 70px;
  padding-top: 30px;
  position: fixed;
  left: 0;
  width: 250px;
  height: 100%;
  transition: 0.5s;
  transition-property: left;
}
.sidebar .profile_image{
  width: 100px;
  height: 100px;
  border-radius: 100px;
  margin-bottom: 10px;
}
.prof{
  color: #fff;
  margin-top: 0;
  padding: 5px 0 5px 0;
  margin-right: 45px;
  margin-bottom: 20px;
}
.sidebar a{
  color: white;
  display: block;
  width: 100%;
  line-height: 60px;
  text-decoration: none;
  padding-left: 40px;
  box-sizing: border-box;
  transition: 0.5s;
  transition-property: background;
}
.sidebar a:hover{
   background: rgba(0, 255, 0, 0.5);
}
.sidebar i{
  padding-right: 10px;
}
label #sidebar_btn{
  z-index: 1;
  color: #fff;
  position: fixed;
  cursor: pointer;
  left: 230px;
  font-size: 20px;
  margin: 5px 0;
  transition: 0.5s;
  transition-property: color;
}
label #sidebar_btn:hover{
  color:  grey;
}
#check:checked ~ .sidebar{
  left: -190px;
}
#check:checked ~ .sidebar a span{
  display: none;
}
#check:checked ~ .sidebar a{
  font-size: 20px;
  margin-left: 170px;
  width: 80px;
}
.content{
  margin-left: 260px;
  margin-right: 5px;
  padding-top: 50px;
  transition: 0.5s;
}
#check:checked ~ .content{
  margin-left: 60px;
}
#check{
  display: none;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
