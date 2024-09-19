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
                <th>Donor_Name</th>
                <th>Donor_amount</th>
                <th>Phone_Number</th>
                <th>Select_Purpose</th>
              </tr>
            </thead>
           <tbody>
            @foreach($donation as $d)
            <tr>
            <td>{{$d->Donor_Name}}</td>
            <td>{{$d->Donor_amount}}</td>
            <td>{{$d->Phone_Number}}</td>
            <td>{{$d->Select_Purpose}}</td>
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