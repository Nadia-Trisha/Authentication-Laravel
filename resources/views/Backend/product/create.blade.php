@extends('backend.layouts.app')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Category Entry</h5>

              <!-- General Form Elements -->
              <form method="post" action="{{route('category.store')}}">
                @csrf

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name='name' class="form-control">
                    </div>
                  </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                     <textarea name="description" class=""></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" name='price' class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                    <select name="category" id="form-select" >
                   
                     @foreach($cats as $cat)

                     <option value="{{$cat['id']}}">{{$cat['name']}}</option>

                     @endforeach
                    </select>
                      
                    </div>
                  </div>

               {{-- radio --}}
               <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="available" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                   Available
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="not available" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                   Not Available
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled>
                    <label class="form-check-label" for="gridRadios3">
                      Third disabled radio
                    </label>
                  </div>
                </div>
              </fieldset>

              {{-- checkbox --}}
              <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Tags</legend>
                <div class="col-sm-10">

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                     Easy
                    </label>
                  </div>

                 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                    <label class="form-check-label" for="gridCheck2">
                      Richman
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                    <label class="form-check-label" for="gridCheck2">
                     O_D_C
                    </label>
                  </div>

                </div>
              </div>
                
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main>
    
@endsection