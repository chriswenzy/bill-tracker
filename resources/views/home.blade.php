@extends('layouts.app')

@section('content')
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
        <link href="css/ionicons.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
</head>
<body>
<header>
		<div class="container-fluid position-relative no-side-padding">

			<a href="#" class="logo"><strong> BillTracker</strong>  </a>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">Bills</a></li>
			</ul>

			<div class="src-area">
				<form>
					<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
					<input class="src-input" type="text" placeholder="Type of search">
				</form>
			</div>

		</div>
    </header>
    
    
</body>

@endsection
