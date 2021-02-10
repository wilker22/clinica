@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
           

            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Médicos</h5>
                    <span>Reserva de Horários</span>
                    
                </div>
            </div>
        </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Médico</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reservas</li>
            </ol>
        </nav>
    </div>
    </div>
</div>

<div class="container">
         @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
                
            </div>
                
        @endforeach
    
        
    <form action="{{route('appointment.store')}}" method="post">@csrf
 
    <div class="card">
        <div class="card-header">
            Selecionar Data

        </div>
        <div class="card-body">
         <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date">
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Horários: MANHÃ
           <span style="margin-left: 700px">Marcar/Desmarcar
               <input type="checkbox" onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked" >
           </span>
        </div>
        <div class="card-body">
            
            <table class="table table-striped">
             
               
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><input type="checkbox" name="time[]"  value="6h">6h</td>
                  <td><input type="checkbox" name="time[]"  value="6.20h">6.20h</td>
                  <td><input type="checkbox" name="time[]"  value="6.40h">6.40h</td>
                </tr>
                 <tr>
                  <th scope="row">2</th>
                  <td><input type="checkbox" name="time[]"  value="7h">7h</td>
                  <td><input type="checkbox" name="time[]"  value="7.20h">7.20h</td>
                  <td><input type="checkbox" name="time[]"  value="7.40h">7.40h</td>
                </tr>
                 <tr>
                  <th scope="row">3</th>
                  <td><input type="checkbox" name="time[]"  value="8h">8h</td>
                  <td><input type="checkbox" name="time[]"  value="8.20h">8.20h</td>
                  <td><input type="checkbox" name="time[]"  value="8.40h">8.40h</td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td><input type="checkbox" name="time[]"  value="9h">9h</td>
                  <td><input type="checkbox" name="time[]"  value="9.20h">9.20h</td>
                  <td><input type="checkbox" name="time[]"  value="9.40h">9.40h</td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td><input type="checkbox" name="time[]"  value="10h">10h</td>
                  <td><input type="checkbox" name="time[]"  value="10.20h">10.20h</td>
                  <td><input type="checkbox" name="time[]"  value="10.40h">10.40h</td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td><input type="checkbox" name="time[]"  value="11h">11h</td>
                  <td><input type="checkbox" name="time[]"  value="11.20h">11.20h</td>
                  <td><input type="checkbox" name="time[]"  value="11.40h">11.40h</td>
                </tr>
            
            
              </tbody>
            </table>
        </div>
    </div>

        <div class="card">
        <div class="card-header">
            Horários: TARDE
        </div>
        <div class="card-body">
            
            <table class="table table-striped">
             
               
              <tbody>
                <tr>
                  <th scope="row">7</th>
                  <td><input type="checkbox" name="time[]"  value="12h">12h</td>
                  <td><input type="checkbox" name="time[]"  value="12.20h">12.20h</td>
                  <td><input type="checkbox" name="time[]"  value="12.40h">12.40h</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td><input type="checkbox" name="time[]"  value="1h">13h</td>
                  <td><input type="checkbox" name="time[]"  value="1.20h">13.20h</td>
                  <td><input type="checkbox" name="time[]"  value="1.40h">13.40h</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td><input type="checkbox" name="time[]"  value="2h">14h</td>
                  <td><input type="checkbox" name="time[]"  value="2.20h">14.20h</td>
                  <td><input type="checkbox" name="time[]"  value="2.40h">14.40h</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td><input type="checkbox" name="time[]"  value="3h">15h</td>
                  <td><input type="checkbox" name="time[]"  value="3.20h">15.20h</td>
                  <td><input type="checkbox" name="time[]"  value="3.40h">15.40h</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td><input type="checkbox" name="time[]"  value="4h">16h</td>
                  <td><input type="checkbox" name="time[]"  value="4.20h">16.20h</td>
                  <td><input type="checkbox" name="time[]"  value="4.40h">16.40h</td>
                </tr>
                <tr>
                  <th scope="row">11</th>
                  <td><input type="checkbox" name="time[]"  value="5h">17h</td>
                  <td><input type="checkbox" name="time[]"  value="5.20h">17.20h</td>
                  <td><input type="checkbox" name="time[]"  value="5.40h">17.40h</td>
                </tr>
                <tr>
                  <th scope="row">12</th>
                  <td><input type="checkbox" name="time[]"  value="6h">18h</td>
                  <td><input type="checkbox" name="time[]"  value="6.20h">18.20h</td>
                  <td><input type="checkbox" name="time[]"  value="6.40h">18.40h</td>
                </tr>
                
            
            
              </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>

</div>

<style type="text/css">
    input[type="checkbox"]{
        zoom:1.1;
   
    }
    body{
        font-size: 18px;
    }
</style>



@endsection