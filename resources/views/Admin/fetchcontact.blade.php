@extends('Admin.Header')


@section('content')

<main id="main" class="main">



<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>FirstName</th>
                <th>Email</th>
                <th>Number</th>
                <th>Message</th>
              </tr>
            </thead>
           <tbody>
            @foreach($fetchcontact as $f)
            <tr>
            <td>{{$f->FisrtName}}</td>
            <td>{{$f->Email}}</td>
            <td>{{$f->Number}}</td>
            <td>{{$f->Message}}</td>
            </tr>
            @endforeach
           </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
@endsecton