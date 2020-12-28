@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Update Student Details</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('students.update', $students->id) }}">
            @method('PATCH') 
            @csrf
            <table>
        <tr>
         <td>Name</td>
         <td>:</td>
         <td><input type="text" name="name" size="30" value="{{ $students->name }}"></td>
        </tr>
        <tr>
         <td>Matric.no</td>
         <td>:</td>
         <td><input type="text" name="matricNo" size="10" value="{{ $students->matric_no }}"></td><br>
        </tr>
        <tr>
         <td>Gender</td>
         <td>:</td>
         <td><input type="text" name="gender" value="{{ $students->gender }}" readonly><br>
             <input type="radio" id="male" name="gender" value="male">
             <label for="male">Male</label><br>
             <input type="radio" id="female" name="gender" value="female">
             <label for="female">Female</label><br></td>
        </tr>
        <tr>
         <td>Date of Birth</td>
         <td>:</td>
         <td><input type="text" name="dob" size="30" value="{{ $students->date_of_birth }}"></td>
        </tr>
        <tr>
         <td>Citizenship</td>
         <td>:</td>
         <td><input type="text" name="city" size="40" value="{{ $students->citizenship }}"></td>
        </tr>
        <tr>
         <td>Marital Status</td>
         <td>:</td>
         <td><input type="text" name="maritalstat" value="{{ $students->marital_status }}" readonly><br>
             <input type="radio" id="single" name="maritalstat" value="single">
             <label for="single">Single</label><br>
             <input type="radio" id="married" name="maritalstat" value="married">
             <label for="married">Married</label><br></td>
        </tr>
        <tr>
         <td>Religion</td>
         <td>:</td>
         <td><input type="text" name="religion" size="40" value="{{ $students->religion }}"></td>
        </tr>
        <tr>
         <td>Active</td>
         <td>:</td>
         <td><input type="text" name="active" size="40" value="{{ $students->active_status }}" readonly><br>
             <input type="radio" id="yes" name="active" value="yes">
             <label for="yes">Yes</label><br>
             <input type="radio" id="no" name="active" value="no">
             <label for="no">No</label><br></td>
        </tr>
        <tr>
         <td>Current year</td>
         <td>:</td>
         <td><input type="text" name="year" size="10" value="{{ $students->year_of_study }}"></td>
        </tr>
        <tr>
         <td>Id.no</td>
         <td>:</td>
         <td><input type="text" name="idno" size="15" value="{{ $students->id_no }}"></td>
        </tr>
        <tr>
         <td>E-mail</td>
         <td>:</td>
         <td><input type="text" name="email" size="40" value="{{ $students->email }}"></td>
        </tr>
        <tr>
         <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;  
         <td><button type="submit" value="Submit">Update</button></td>
        </tr>
    </table>
        </form>
    </div>
</div>
@endsection