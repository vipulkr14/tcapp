@extends('layouts.app')

@section('content')

<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->




<div class="bg-contact2" style="background-image: url('img/bg-01.jpg');">
    <div class="container-contact2">
      <div class="wrap-contact2">
        <form class="contact2-form" method='POST' action="submit">
          <span class="contact2-form-title">
            Enter Details
          </span>

          <style type="text/css">

        /*  !----- Simple CSS text animation A PEN BY Nooray Yemon from codepen.io -----!*/
  @import url('https://fonts.googleapis.com/css?family=Roboto:700');

body
div.indexani {
  margin:0px;
  font-family:'Roboto';
  text-align:center;
}

#container1 {
  color:#7f00cf;
  text-transform: uppercase;
  font-size:36px;
  font-weight:bold;
/*  padding-top:10px;
*/  padding-bottom: 50px;  
/*  padding-right: 100px;
*//*  position:fixed;
*/  width:100%;
/*  bottom:45%;
*/  display:block;
}

#flip {
  height:50px;
  overflow:hidden;
}

#flip > div > div {
  color:#fff;
  padding:4px 12px;
  height:45px;
  margin-bottom:45px;
  display:inline-block;
}

#flip div:first-child {
  animation: show 5s linear infinite;
}

#flip div div {
  background:#42c58a;
}
#flip div:first-child div {
  background:#4ec7f3;
}
#flip div:last-child div {
  background:#DC143C;
}

@keyframes show {
  0% {margin-top:-270px;}
  5% {margin-top:-180px;}
  33% {margin-top:-180px;}
  38% {margin-top:-90px;}
  66% {margin-top:-90px;}
  71% {margin-top:0px;}
  99.99% {margin-top:0px;}
  100% {margin-top:-270px;}
}


</style>

    <div id=container1 class="indexani ">
  Know
    <div id=flip>
    <div><div>Travel</div></div>
    <div><div>Food</div></div>
    <div><div>Stay</div></div>
  </div>
  Expenditure!
</div>
 
		{{csrf_field()}}

  <div class="form-group">
    <label class="control-label " for="name">Country</label>
    
{{--       <input type="text" class="form-control" name="Country" id="Country" placeholder="Enter Country"> --}}
      <select name="Country" id="Country" style="background: transparent;  border: none;  font-size: 14px;  height: 29px;  padding: 5px; -webkit-border-radius: 20px;  -moz-border-radius: 20px; border-radius: 20px; background-color: #F0FFF0; color:#000; -webkit-appearance: button; ">
        <option disabled selected value> -- select an option -- </option>
        @foreach($country as $c)
        <option value={{$c}}>{{$c}}</option>
        @endforeach
      </select>
  </div>
   <div class="form-group">
    <label class="control-label ">Days</label>
   
      <input type="number" class="form-control" name="Days" id="Days" placeholder="Enter Number of Days" style="background-color: #FFFAFA;">
  
  </div>

  <div class="form-group">
    <label class="control-label ">Priority Food: &nbsp; <em>1: Local eateries &nbsp; 2: Normal Resturants &nbsp; 3: Luxurious Resturants</em>
</label>
  
      <input type="number" class="form-control" name="Food_Priority" id="Foodp" placeholder="Enter priority" style="background-color: #F0FFF0;">
    
  </div>
  <div class="form-group">
    <label class="control-label ">Priority Stay: &nbsp; <em>1: Hostels &nbsp; 2: Budget Hotels &nbsp; 3: Luxurious Hotels</em></label>
  
      <input type="number" class="form-control" name="Stay_Priority" id="Stayp" placeholder="Enter priority" style="background-color: #FFFAFA;">
 
  </div>
  <div class="form-group">
    <label class="control-label ">Priority Travel: &nbsp; <em>1: Public Transport &nbsp; 2: Cab services &nbsp; 3: Private car</em></label>
  
      <input type="number" class="form-control" name="Travel_Priority" id="Travelp" placeholder="Enter priority" style="background-color: #F0FFF0;">
   
  </div>
{{--   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div> --}}
  <div class="form-group"> 
    <div class="container-contact2-form-btn">
            <div class="wrap-contact2-form-btn">
              <div class="contact2-form-bgbtn"></div>
              <button class="contact2-form-btn">
                Calculate
              </button>
            </div>
          </div>

  </div>
</form>

</div>
</div>
</div>


@endsection