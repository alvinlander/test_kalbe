<x-app-layout>
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-body">
          <h1 class="text-center">Detail Order</h1>
          <h3>Product Name : {{$data->product_name}}</h3>
          <h4>Product Code : {{$data->product_code}}</h4>
          <h3>Price : Rp {{number_format($data->price,2,',','.')}}/pcs</h3>
          <h1 class="text-center">Detail Customer</h1>
          <form action="{{route('sell.order')}}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$data->id}}">
            <div class="form-group row">
              <label for="customer_name" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="customer_name" name="cust_name">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-10">
                <textarea name="cust_address" id="" cols="30" rows="10"></textarea>
              </div>
            </div>
            <fieldset class="form-group row">
              <legend class="col-form-label col-sm-2 float-sm-left pt-0">Gender</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gender1" value="1" checked>
                  <label class="form-check-label" for="gender1">
                    Male
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gender2" value="0">
                  <label class="form-check-label" for="gender2">
                    Female
                  </label>
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <label for="born_date" class="col-sm-2 col-form-label">Born Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="born_date" name="born_date">
              </div>
            </div>
            <div class="form-group row">
              <label for="born_date" class="col-sm-2 col-form-label">Born Date</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="quantity" name="quantity">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>