
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style>
       label{
          display:inline-bloclk;
          width:200px;
       }
    </style>

  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
    
      @include('admin.sidebar')
      <!-- partial -->

      @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
       
    <div  class="container" align="center" style="padding:100px;">           
      @if(session()->has('message'))
<div class ="alert alert-success">
   <button type="button" class="close" data-dismiss ="
   alert">
      X
  </button>
  {{session()->get('message')}}
</div>
@endif
           <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">

                      @csrf
                      <div style="padding:15px;">
                          <label>Doctor Name</label>
                          <input type="text" style="color:black;" value="{{$data->name}}" name="name">
                       </div>

                      <div style="padding:15px;">
                          <label>Phone</label>
                          <input type="number" style="color:black" value="{{$data->phone}}"
                           name="phone" >
                      </div>

                      <div  style="padding:15px;">
                          <label>Specility</label>
                          <input type="text" style="color:black;" value="{{$data->specialty}}" 
                          name="specialty">
                      </div>

                      <div  style="padding:15px;">
                          <label>Room</label>
                          <input type="text" style="color:black;" value="{{$data->room}}"
                           name="room">
                      </div>

                        <div  style="padding:15px;">
                            <label>Old Image</label>
                            <img height="150"  width="150" src="doctorimage/{{$data->image}}">
                        </div>
                    <div style="padding:15px;">
                        <label>Change Image</label>
                        <input type="file"  name="file">
                    </div>
                    
                      <div style="padding:15px;">
                        <input type="submit" class="btn btn-primary">
                     </div>
                  </form>   
           </div>
        </div>
       <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
