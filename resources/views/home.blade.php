<x-app-layout>
  <div class="row">
    @foreach ($data as $item)
    <div class="col-sm-3 my-3">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title">{{$item->product_name}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$item->product_code}}</h6>
          <h5 class="card-subtitle mb-2 text-danger">Sisa {{$item->quantity}} pcs</h5>
          <h4 class="card-subtitle mb-2">Rp {{number_format($item->price,2,',','.')}}</h5>
            {{-- <div class="counter">
              <button id="minus" class="btn btn-sm btn-secondary">-</button>
              <mark id="text">1</mark>
              <button id="plus" class="btn btn-sm btn-danger">+</button>
            </div> --}}
            <a href="{{route('product.show',$item->id)}}" class="btn btn-primary my-2">Buy</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  {{-- @push('script')
  <script>
    var count = 1;
    var countEl = document.getElementById("text");
    function plus(){
        count+=1;
        countEl.innerHTML = count;
    }
    function minus(){
      if (count > 1) {
        count-=1;
        countEl.innerHTML = count;
      }  
    }
  
    document.getElementById("plus").onclick = function(){
      plus()
    };
      
    document.getElementById("minus").onclick = function(){
      minus()
    };
  </script>
  @endpush --}}
</x-app-layout>