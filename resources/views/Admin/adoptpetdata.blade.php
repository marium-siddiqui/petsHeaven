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
                <th>Pet_Type</th>
                <th>FirstName</th>
                <th>email</th>
                <th>number</th>
                <th>address</th>
                <th>reasonfor_adoption</th>
                <th>previous_experience</th>
                <th>payment_method</th>
              </tr>
            </thead>
           <tbody>
            @foreach($adoptpetdata as $a)
            <tr>
            <td>{{$a->Pet_Type}}</td>
            <td>{{$a->FirstName}}</td>
            <td>{{$a->email}}</td>
            <td>{{$a->number}}</td>
            <td>{{$a->address}}</td>
            <td>{{$a->reasonfor_adoption}}</td>
            <td>{{$a->previous_experience}}</td>
            <td>{{$a->payment_method}}</td>
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