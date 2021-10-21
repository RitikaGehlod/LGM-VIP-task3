*{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
}
body{
    font-size: 30px;
    overflow-x: hidden;
    color: black;
    font-family: 'Flamenco', cursive;
}
header{
    background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url(../image/plane.jpg);
    height:800px;
    background-size: cover;
    background-repeat: no-repeat;
}
.clearfix:after{
    content: " ";
    visibility: ;
    display: block;
    height: 9px;
    clear: both;
}
.row{
    max-width: 1180px;
    margin:0 auto;
}
.main-nav{
    float: right;
    margin-top: 30px;
}
.main-nav li{
    display: inline-block;
    list-style: none;
    margin-left: 40px;
}
.main-nav li a{
    padding: 5px 2px;
    color:#000;
    text-shadow:  #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 90%;
    font-weight: 100;
}
.main-nav li a:hover{
    color: yellow;
    font-weight: 1000;
}
h3{
    margin-left: 600px;
    margin-top: 10px;
}
.main-content-header{
    border-top: 3px solid black;
}

h2{
    font-size: 3rem;
    color: #cc0099;
    font-weight: 900;
    padding-left: 5rem;
    padding-top: 1rem;
    text-shadow: 2px 2px black;
}
/*table Heading*/
table{
    margin-top:25px;
    margin-left: 50px;
    background-color: white;
   
}
.massage_h1{
    padding-left: 15px;
    font-size: 30px;
    color: black;
    border-top: 3px solid black;    
}
.id_h1{
    padding-left: 10px;
    padding-right: 10px;
    font-size: 30px;
    color: black;
    border-top: 3px solid black;
    border-left: 3px solid black;
}
.name_h1{
    padding-left: 15px;
    font-size: 30px;
    color: black;
    border-top: 3px solid black;
}
.email_h1{
    padding-left: 55px;
    font-size: 30px;
    color: black;
    border-top: 3px solid black;
    
}
.contact_h1{
    padding-left: 55px;
    padding-right: 20px;
    font-size: 30px;
    color: black;
    border-top: 3px solid black;
}

/*/////Inner Table Heading/////*/
th{
    padding-left: 100px;
    
    border-bottom: 3px solid black;
    
    border-right: 3px solid black;
}

.massage_h{
    padding-top: 8px;
    padding-bottom: 8px;
    border-right: 3px solid black;
    padding-right: 35px;
    
    padding-left: 35px;
    
}
.id_h{
    padding-left: 10px;
    border-right: 3px solid black;
    padding-right: 15px;
    border-left: 3px solid black;
}
.name_h{
    padding-left: 15px;
    border-right: 3px solid black;
    padding-right: 35px;
}
.email_h{
    padding-left: 55px;
    border-right: 3px solid black;
    padding-right: 35px;
}
.contact_h{
    padding-left: 55px;
    border-right: 3px solid black;
    padding-right: 35px;
    
}