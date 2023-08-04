
     <section class="container">
        <div class="row ">
            <div class="col-lg-8 col-md-12 mx-auto bg-white shadow pl-3 pr-3 pt-5 pb-5 ">

                <p>{!! $assignment->content !!}</p>
                        <hr>

                        <h3 class="text-center bt-1 bb-1">  DOWNLOAD ASSIGNMENTS </h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Level</th>
      <th scope="col">Class</th>
      <th scope="col">Assignments</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Jss</td>
      <td>1</td>
	  @if($assignment->jss1)
      <td><a class="btn btn-sm btn-ehj" download="Jss1Assigments" href="/storage/{{ json_decode($assignment->jss1)[0]->download_link}}">Download</a></td>
	  @else
		  <td><p class="text-center text-muted">  NO Assignments </p> </td>
	  @endif
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jss</td>
      <td>2</td>
	  @if($assignment->jss2)
      <td><a class="btn btn-sm btn-ehj" download="Jss12Assigments" href="/storage/{{ json_decode($assignment->jss2)[0]->download_link}}">Download</a></td>
   @else
		  <td><p class="text-center text-muted">  NO Assignments </p> </td>
	  @endif
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>jss</td>
      <td>3</td>
	   @if($assignment->jss3)
      <td><a class="btn btn-sm btn-ehj" download="Jss13Assigments" href="/storage/{{ json_decode($assignment->jss3)[0]->download_link}}">Download</a></td>
	   @else
		  <td><p class="text-center text-muted">  NO Assignments </p> </td>
	  @endif
    </tr> 
  </tbody>
</table>

<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
       <th scope="col">#</th>
      <th scope="col">Level</th>
      <th scope="col">Class</th>
      <th scope="col">Assignments</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>SSS</td>
      <td>1</td>
	   @if($assignment->sss1)
      <td><a class="btn btn-sm btn-ehj" download="Sss1Assigments" href="/storage/{{ json_decode($assignment->sss1)[0]->download_link}}">Download</a></td>
		 @else
		  <td><p class="text-center text-muted">  NO Assignments </p> </td>
	  @endif
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>SSS</td>
      <td>2</td>
	   @if($assignment->sss2)
      <td><a class="btn btn-sm btn-ehj" download="Sss2Assigments" href="/storage/{{ json_decode($assignment->sss2)[0]->download_link}}">Download</a></td>
	 @else
		  <td><p class="text-center text-muted">  NO Assignments </p> </td>
	  @endif
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>SSS</td>
      <td>3</td>
	   @if($assignment->sss3)
      <td><a class="btn btn-sm btn-ehj" download="Sss3Assigments" href="/storage/{{ json_decode($assignment->sss3)[0]->download_link}}">Download</a></td>
		 @else
		  <td><p class="text-center text-muted">  NO Assignments </p> </td>
	  @endif
    </tr>
  </tbody>
</table>

            </div>

        </div>
    </section>