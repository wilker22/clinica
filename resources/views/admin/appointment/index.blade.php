@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
           

            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Médicos</h5>
                    <span>Horários agendados</span>
                    
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
                <li class="breadcrumb-item active" aria-current="page">Agendamentos</li>
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
        @if(Session::has('errmessage'))
            <div class="alert bg-danger alert-success text-white" role="alert">
                {{Session::get('errmessage')}}
            </div>
        @endif
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
                
            </div>
                
        @endforeach
    
        
    <form action="{{route('appointment.check')}}" method="post">@csrf
 
    <div class="card">
        <div class="card-header">
            Selecione a data
            <br>
            
            @if(isset($date))
                Seus horários para: 
                {{$date}}
            @endif
           
        </div>
        <div class="card-body">
         <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date" >
         <br>
         <button type="submit" class="btn btn-primary">Marcar</button>
        </div>
    </div>
  </form>
@if(Route::is('appointment.check'))
   <form action="{{route('update')}}" method="post">@csrf
    <div class="card">
        <div class="card-header">
            Escolher horário
           <span style="margin-left: 700px">Marcar/Desmarcar
               <input type="checkbox" onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked" >
           </span>
        </div>

        <div class="card-body">
            
            <table class="table table-striped">
               
              <tbody>
                <input type="hidden" name="appointmentId" value="{{$appointmentId}}">
                <tr>
                  <th scope="row">1</th>
                  <td><input type="checkbox" name="time[]"  value="7h"@if(isset($times)){{$times->contains('time','7h')?'checked':''}}@endif>7h</td>
                  <td><input type="checkbox" name="time[]"  value="7.20h"@if(isset($times)){{$times->contains('time','7.20h')?'checked':''}}@endif>7.20h</td>
                  <td><input type="checkbox" name="time[]"  value="7.40h"@if(isset($times)){{$times->contains('time','7.40h')?'checked':''}}@endif>7.40h</td>
                </tr>
                 <tr>
                  <th scope="row">2</th>
                  <td><input type="checkbox" name="time[]"  value="8h"@if(isset($times)){{$times->contains('time','8h')?'checked':''}}@endif>8h</td>
                  <td><input type="checkbox" name="time[]"  value="8.20h"@if(isset($times)){{$times->contains('time','8.20h')?'checked':''}}@endif>8.20h</td>
                  <td><input type="checkbox" name="time[]"  value="8.40h"@if(isset($times)){{$times->contains('time','8.40h')?'checked':''}}@endif>8.40h</td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td><input type="checkbox" name="time[]"  value="9h"@if(isset($times)){{$times->contains('time','9h')?'checked':''}}@endif>9h</td>
                  <td><input type="checkbox" name="time[]"  value="9.20h"@if(isset($times)){{$times->contains('time','9.20h')?'checked':''}}@endif>9.20h</td>
                  <td><input type="checkbox" name="time[]"  value="9.40h"@if(isset($times)){{$times->contains('time','9.40h')?'checked':''}}@endif>9.40h</td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td><input type="checkbox" name="time[]"  value="10h"@if(isset($times)){{$times->contains('time','10h')?'checked':''}}@endif>10h</td>
                  <td><input type="checkbox" name="time[]"  value="10.20h"@if(isset($times)){{$times->contains('time','10.20h')?'checked':''}}@endif>10.20h</td>
                  <td><input type="checkbox" name="time[]"  value="10.40h"@if(isset($times)){{$times->contains('time','10.40h')?'checked':''}}@endif>10.40h</td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td><input type="checkbox" name="time[]"  value="11h"@if(isset($times)){{$times->contains('time','11h')?'checked':''}}@endif>11h</td>
                  <td><input type="checkbox" name="time[]"  value="11.20h"@if(isset($times)){{$times->contains('time','11.20h')?'checked':''}}@endif>11.20h</td>
                  <td><input type="checkbox" name="time[]"  value="11.40h"@if(isset($times)){{$times->contains('time','11.40h')?'checked':''}}@endif>11.40h</td>
                </tr>
            
            
              </tbody>
            </table>
        </div>
    </div>

        <div class="card">
        <div class="card-header">
            Horários: Tarde
        </div>
        <div class="card-body">
            
            <table class="table table-striped">
             
               
              <tbody>
                <tr>
                  <th scope="row">6</th>
                  <td><input type="checkbox" name="time[]"  value="12h"@if(isset($times)){{$times->contains('time','12h')?'checked':''}}@endif>12h</td>
                  <td><input type="checkbox" name="time[]"  value="12.20h"@if(isset($times)){{$times->contains('time','12.20h')?'checked':''}}@endif>12.20h</td>
                  <td><input type="checkbox" name="time[]"  value="12.40h"@if(isset($times)){{$times->contains('time','12.40h')?'checked':''}}@endif>12.40h</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td><input type="checkbox" name="time[]"  value="13h"@if(isset($times)){{$times->contains('time','13h')?'checked':''}}@endif>13h</td>
                  <td><input type="checkbox" name="time[]"  value="13.20h"@if(isset($times)){{$times->contains('time','13.20h')?'checked':''}}@endif>13.20h</td>
                  <td><input type="checkbox" name="time[]"  value="13.40h"@if(isset($times)){{$times->contains('time','13.40h')?'checked':''}}@endif>13.40h</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td><input type="checkbox" name="time[]"  value="14h"@if(isset($times)){{$times->contains('time','14h')?'checked':''}}@endif>14h</td>
                  <td><input type="checkbox" name="time[]"  value="14.20h"@if(isset($times)){{$times->contains('time','14.20h')?'checked':''}}@endif>14.20h</td>
                  <td><input type="checkbox" name="time[]"  value="14.40h"@if(isset($times)){{$times->contains('time','14.40h')?'checked':''}}@endif>14.40h</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td><input type="checkbox" name="time[]"  value="15h"@if(isset($times)){{$times->contains('time','15h')?'checked':''}}@endif>15h</td>
                  <td><input type="checkbox" name="time[]"  value="15.20h"@if(isset($times)){{$times->contains('time','15.20h')?'checked':''}}@endif>15.20h</td>
                  <td><input type="checkbox" name="time[]"  value="15.40h"@if(isset($times)){{$times->contains('time','15.40h')?'checked':''}}@endif>15.40h</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td><input type="checkbox" name="time[]"  value="16h"@if(isset($times)){{$times->contains('time','16h')?'checked':''}}@endif>16h</td>
                  <td><input type="checkbox" name="time[]"  value="16.20h"@if(isset($times)){{$times->contains('time','16.20h')?'checked':''}}@endif>16.20h</td>
                  <td><input type="checkbox" name="time[]"  value="16.40h"@if(isset($times)){{$times->contains('time','16.40h')?'checked':''}}@endif>16.40h</td>
                </tr>
                <tr>
                  <th scope="row">11</th>
                  <td><input type="checkbox" name="time[]"  value="17h"@if(isset($times)){{$times->contains('time','17h')?'checked':''}}@endif>17h</td>
                  <td><input type="checkbox" name="time[]"  value="17.20h"@if(isset($times)){{$times->contains('time','17.20h')?'checked':''}}@endif>17.20h</td>
                  <td><input type="checkbox" name="time[]"  value="17.40h"@if(isset($times)){{$times->contains('time','17.40h')?'checked':''}}@endif>17.40h</td>
                </tr>
                <tr>
                  <th scope="row">12</th>
                  <td><input type="checkbox" name="time[]"  value="18h"@if(isset($times)){{$times->contains('time','18h')?'checked':''}}@endif>18h</td>
                  <td><input type="checkbox" name="time[]"  value="18.20h"@if(isset($times)){{$times->contains('time','18.20h')?'checked':''}}@endif>18.20h</td>
                  <td><input type="checkbox" name="time[]"  value="18.40h"@if(isset($times)){{$times->contains('time','18.40h')?'checked':''}}@endif>18.40h</td>
                </tr>
                
            
            
              </tbody>
            </table>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <button type="submit" class="btn btn-primary">Gravar</button>
        </div>
    </div>

</div>
</form>

@else 
<h3>Horários agendados: {{$myappointments->count()}}</h3>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Médico</th>
              <th scope="col">Data</th>
              <th scope="col">Ver/Editar</th>
            </tr>
          </thead>
          <tbody>

            @foreach($myappointments as $appoinment)
            <tr>
            
              <th scope="row"></th>
              <td>{{$appoinment->doctor->name}}</td>
              <td>{{$appoinment->date}}</td>
              <td>
                    <form action="{{route('appointment.check')}}" method="post">@csrf
                        <input type="hidden" name="date" value="{{$appoinment->date}}">
                    <button type="submit" class="btn btn-primary">Ver/Editar</button>


                    </form>


              </td>
            </tr>
            @endforeach
          </tbody>
        </table>



@endif



<style type="text/css">
    input[type="checkbox"]{
        zoom:1.1;

    }
    body{
        font-size: 17px;
    }
</style>



@endsection