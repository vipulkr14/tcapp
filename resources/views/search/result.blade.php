@extends('layouts.app')

@section('content')

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->

 <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->


<div class="bg-contact2" style="background-image: url('img/bg-02.jpg');">
	<style type="text/css">
		
.container-contact2 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background: rgba(212,228,239,1);
background: -moz-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,0.38) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(212,228,239,1)), color-stop(100%, rgba(134,174,204,0.38)));
background: -webkit-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,0.38) 100%);
background: -o-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,0.38) 100%);
background: -ms-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,0.38) 100%);
background: linear-gradient(to right, rgba(212,228,239,1) 0%, rgba(134,174,204,0.38) 100%);

	</style>
	 <div class="container-contact2">
<div class="container">
	<div class="row"><br><br></div>

<style type="text/css">

/*!-----	Color Swap A PEN BY Mai El-Awini from codepen.io -----!*/

		.title {
  position: relative;
  color: #262626;
  padding: 20px 50px;
  font-size: 50px;
}
 
.title:before {
  background: #262626;
  color: white;
  content: 'Where Should You Visit:';
  overflow: hidden;
  position: absolute;  
  top: 0;  
  left: 0;
  padding: 20px 50px;
    -webkit-clip-path: polygon(0% 0% , 30% 0%, 30% 100%, 0% 100%);  
  clip-path: polygon(0% 0% , 30% 0%, 30% 100%, 0% 100%);
  animation: slide 4s 1s linear infinite; 
} 
           
@keyframes slide {      
  50% {     
    -webkit-clip-path: polygon(70% 0%, 100% 0%, 100% 100%, 70% 100%); 
  } 

}  
	</style>
 <div class="title">Where Should You Visit:</div>
 <div class="row"><br><br></div>
 	<div class="row">
	<div class="container col-sm-4">
		<table class="table table-striped">
			<thead style="    background: #ea6153; color: #ffffff">
				<tr>
					<th scope="col">City</th>
					<th scope="col">Days</th>
				</tr>
			</thead>
		
<tbody>
@foreach ($cities as $element => $value)
	<tr><td>{{$element}}</td><td>{{$value}}</td></tr>
@endforeach
</tbody>	
		</table>
		<br>
		<h3>Total Budget: USD {{$cost}}</h3>
	</div>
	<div class="col-sm-6">
		<blockquote>
		The suggested places are according to places available in our current database. We update our database regurlarly. We will soon come up with city based calculation in addition to country based calculations where you would be able to choose the cities you are going to visit.
	</blockquote>
	<br>
	<blockquote>
		The budget doesn't includes intercity transportation. </br> The ticket cost for monuments will be added soon.
	</blockquote>
	</div>
</div>

<div class="row>">
<div class="container col-sm-4"> 

</div>
<div class="col-sm-6">
	
</div>
</div>
</div>
</div>
</div>


	

@endsection