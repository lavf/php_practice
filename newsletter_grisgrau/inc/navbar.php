<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

	@import url('https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro:200,400');


    body {
      margin:0;
      padding:0;
      display:grid;

    }

      html {
        scroll-behavior: smooth;
      }

      a {

        text-decoration: none;
        color: black;
        border-radius: .25rem;
        text-align: center;
        display: inline-block;
        transition: all .3s;
      }

      a:hover {
        opacity: .6;
      }

			nav {
				grid-column-start:1;
				grid-column-end: -1;
				grid-row-start:2;
			  grid-row-end:2;
			  background-color: #bbb6b6;
				opacity: 0.8;
			}

			nav ul {
				list-style:none;
				margin:0;
				padding:0;
			  display: flex;
			}

			nav ul li {
				width:100px;
				display:inline-block;
			  padding:10px;
			  text-align: center;
			}

			.opener{
				position: relative;
			}

			.dropdown {
				background: #bbb6b6;
				position:absolute;
				left:0;
				padding:11px;
			  display:none;
			  z-index: 5000;
				font-family: 'Playfair Display', serif;
			}

			.dropdown a {
				text-align:left;
				margin-bottom:7px;
				display:block;
				color: white;
			}

			.opener:hover .dropdown {
				display:block;
			}

			.fa {
			  padding: 0px;
			  font-size: 30px;
			  width: 50px;
			  text-align: center;
			  text-decoration: none;
			  margin: 5px 2px;
			}

			.fa-instagram {
			  background: transparent;
			  color: white;
			}

			.fa-wordpress {
			  background: transparent;
			  color: white;
			}

			.fa-tumblr {
			  background: transparent;
			  color: white;
			}
		</style>
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="#" class="fa fa-instagram"></a></li>
				<li class="opener"><a href="https://grisgrau.files.wordpress.com" class="fa fa-wordpress"></a>
					<div class="dropdown">
						<a href="https://grisgrau.wordpress.com/2020/10/26/rincon-del-sur-puerto-montt-chile-auf-deutsch/" target="_blank">Rincón del Sur</a>
						<a href="https://grisgrau.wordpress.com/2020/10/23/goldies-kreuzberg-berlin-auf-deutsch/" target="_blank">Goldies</a>
						<a href="https://grisgrau.wordpress.com/2020/10/20/shuri-horikawa-okinawa-japan-auf-deutsch/" target="_blank">Shuri Horikawa</a>
					</div>
				</li>
				<li><a href="#" class="fa fa-tumblr"></a></li>
			</ul>
		</nav>
